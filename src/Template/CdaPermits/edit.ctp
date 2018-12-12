<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CdaPermit $cdaPermit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cdaPermit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cdaPermit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cda Permits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cdaPermits form large-9 medium-8 columns content">
    <?= $this->Form->create($cdaPermit) ?>
    <fieldset>
        <legend><?= __('Edit Cda Permit') ?></legend>
        <?php
            echo $this->Form->control('permit_no');
            echo $this->Form->control('valid_until', ['empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('file');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>