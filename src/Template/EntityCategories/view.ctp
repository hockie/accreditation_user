<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityCategory $entityCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entity Category'), ['action' => 'edit', $entityCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entity Category'), ['action' => 'delete', $entityCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['controller' => 'EntityCategoryTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['controller' => 'EntityCategoryTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Types'), ['controller' => 'EntityTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Type'), ['controller' => 'EntityTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entityCategories view large-9 medium-8 columns content">
    <h3><?= h($entityCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($entityCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Category Type') ?></th>
            <td><?= $entityCategory->has('entity_category_type') ? $this->Html->link($entityCategory->entity_category_type->name, ['controller' => 'EntityCategoryTypes', 'action' => 'view', $entityCategory->entity_category_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entityCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entityCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entityCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entity Types') ?></h4>
        <?php if (!empty($entityCategory->entity_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Entity Category Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entityCategory->entity_types as $entityTypes): ?>
            <tr>
                <td><?= h($entityTypes->id) ?></td>
                <td><?= h($entityTypes->entity_category_id) ?></td>
                <td><?= h($entityTypes->name) ?></td>
                <td><?= h($entityTypes->created) ?></td>
                <td><?= h($entityTypes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntityTypes', 'action' => 'view', $entityTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntityTypes', 'action' => 'edit', $entityTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntityTypes', 'action' => 'delete', $entityTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
