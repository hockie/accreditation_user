<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Capitalization $capitalization
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="capitalizations form large-9 medium-8 columns content">
    <?= $this->Form->create($capitalization) ?>
    <fieldset>
        <legend><?= __('Add Capitalization') ?></legend>
        <?php
            echo $this->Form->control('establishment_id');
            echo $this->Form->control('name');
            echo $this->Form->control('position');
            echo $this->Form->control('nationality_id');
            echo $this->Form->control('amount_subscribed');
            echo $this->Form->control('amount_paid_up');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
