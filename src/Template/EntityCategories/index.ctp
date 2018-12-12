<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityCategory[]|\Cake\Collection\CollectionInterface $entityCategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entity Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['controller' => 'EntityCategoryTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['controller' => 'EntityCategoryTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Types'), ['controller' => 'EntityTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Type'), ['controller' => 'EntityTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entityCategories index large-9 medium-8 columns content">
    <h3><?= __('Entity Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entity_category_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entityCategories as $entityCategory): ?>
            <tr>
                <td><?= $this->Number->format($entityCategory->id) ?></td>
                <td><?= h($entityCategory->name) ?></td>
                <td><?= $entityCategory->has('entity_category_type') ? $this->Html->link($entityCategory->entity_category_type->name, ['controller' => 'EntityCategoryTypes', 'action' => 'view', $entityCategory->entity_category_type->id]) : '' ?></td>
                <td><?= h($entityCategory->created) ?></td>
                <td><?= h($entityCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entityCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entityCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entityCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityCategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
