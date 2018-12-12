<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtiPermit $dtiPermit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dtiPermit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dtiPermit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dti Permits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtiPermits form large-9 medium-8 columns content">
    <?= $this->Form->create($dtiPermit) ?>
    <fieldset>
        <legend><?= __('Edit Dti Permit') ?></legend>
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
