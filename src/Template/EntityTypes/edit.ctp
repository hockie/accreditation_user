<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityType $entityType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $entityType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entityType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entity Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entityTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($entityType) ?>
    <fieldset>
        <legend><?= __('Edit Entity Type') ?></legend>
        <?php
            echo $this->Form->control('entity_category_id', ['options' => $entityCategories, 'empty' => true]);
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
