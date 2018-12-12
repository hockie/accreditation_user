<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityCategory $entityCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['controller' => 'EntityCategoryTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['controller' => 'EntityCategoryTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Types'), ['controller' => 'EntityTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Type'), ['controller' => 'EntityTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entityCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($entityCategory) ?>
    <fieldset>
        <legend><?= __('Add Entity Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('entity_category_type_id', ['options' => $entityCategoryTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
