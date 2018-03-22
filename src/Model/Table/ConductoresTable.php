<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conductores Model
 *
 * @method \App\Model\Entity\Conductore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conductore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conductore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conductore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conductore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conductore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conductore findOrCreate($search, callable $callback = null, $options = [])
 */
class ConductoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('conductores');
        $this->setDisplayField('placa');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_vehiculo')
            ->requirePresence('id_vehiculo', 'create')
            ->notEmpty('id_vehiculo');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 20)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        return $validator;
    }
}
