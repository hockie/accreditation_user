<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityCategoryType[]|\Cake\Collection\CollectionInterface $entityCategoryTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entityCategoryTypes index large-9 medium-8 columns content">
    <h3><?= __('Entity Category Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entityCategoryTypes as $entityCategoryType): ?>
            <tr>
                <td><?= $this->Number->format($entityCategoryType->id) ?></td>
                <td><?= h($entityCategoryType->name) ?></td>
                <td><?= h($entityCategoryType->created) ?></td>
                <td><?= h($entityCategoryType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entityCategoryType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entityCategoryType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entityCategoryType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityCategoryType->id)]) ?>
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
