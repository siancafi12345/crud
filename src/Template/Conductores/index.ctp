<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conductore[]|\Cake\Collection\CollectionInterface $conductores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conductore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conductores index large-9 medium-8 columns content">
    <h3><?= __('Conductores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_vehiculo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conductores as $conductore): ?>
            <tr>
                <td><?= $this->Number->format($conductore->id) ?></td>
                <td><?= $this->Number->format($conductore->id_vehiculo) ?></td>
                <td><?= h($conductore->nombre) ?></td>
                <td><?= $this->Number->format($conductore->cedula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conductore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conductore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conductore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conductore->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
