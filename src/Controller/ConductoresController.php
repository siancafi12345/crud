<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Conductores Controller
 *
 * @property \App\Model\Table\ConductoresTable $Conductores
 *
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConductoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $conductores = $this->paginate($this->Conductores);

        $this->set(compact('conductores'));
    }

    /**
     * View method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conductore = $this->Conductores->get($id, [
            'contain' => []
        ]);

        $this->set('conductore', $conductore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conductore = $this->Conductores->newEntity();
        if ($this->request->is('post')) {
            $conductore = $this->Conductores->patchEntity($conductore, $this->request->getData());
            if ($this->Conductores->save($conductore)) {
                $this->Flash->success(__('The conductore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conductore could not be saved. Please, try again.'));
        }
        $this->set(compact('conductore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conductore = $this->Conductores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conductore = $this->Conductores->patchEntity($conductore, $this->request->getData());
            if ($this->Conductores->save($conductore)) {
                $this->Flash->success(__('The conductore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conductore could not be saved. Please, try again.'));
        }
        $this->set(compact('conductore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conductore = $this->Conductores->get($id);
        if ($this->Conductores->delete($conductore)) {
            $this->Flash->success(__('The conductore has been deleted.'));
        } else {
            $this->Flash->error(__('The conductore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
