<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralManagerInformation $generalManagerInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nationalities'), ['controller' => 'Nationalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nationality'), ['controller' => 'Nationalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalManagerInformations form large-9 medium-8 columns content">
    <?= $this->Form->create($generalManagerInformation) ?>
    <fieldset>
        <legend><?= __('Add General Manager Information') ?></legend>
        <?php
            echo $this->Form->control('name_prefix');
            echo $this->Form->control('first_name');
            echo $this->Form->control('middle_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('nationality_id', ['options' => $nationalities]);
            echo $this->Form->control('remarks');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('mobile_no');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
