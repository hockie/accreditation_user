<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nationality $nationality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nationalities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['controller' => 'Capitalizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitalization'), ['controller' => 'Capitalizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['controller' => 'GeneralManagerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['controller' => 'GeneralManagerInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nationalities form large-9 medium-8 columns content">
    <?= $this->Form->create($nationality) ?>
    <fieldset>
        <legend><?= __('Add Nationality') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
