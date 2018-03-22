<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conductore $conductore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Conductores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="conductores form large-9 medium-8 columns content">
    <?= $this->Form->create($conductore) ?>
    <fieldset>
        <legend><?= __('Add Conductore') ?></legend>
        <?php
            echo $this->Form->control('id_vehiculo');
            echo $this->Form->control('nombre');
            echo $this->Form->control('cedula');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
