<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conductore $conductore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conductore'), ['action' => 'edit', $conductore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conductore'), ['action' => 'delete', $conductore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conductore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conductores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conductore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conductores view large-9 medium-8 columns content">
    <h3><?= h($conductore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($conductore->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($conductore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vehiculo') ?></th>
            <td><?= $this->Number->format($conductore->id_vehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($conductore->cedula) ?></td>
        </tr>
    </table>
</div>
