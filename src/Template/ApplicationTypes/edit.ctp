<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationType $applicationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Application Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applicationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($applicationType) ?>
    <fieldset>
        <legend><?= __('Edit Application Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>