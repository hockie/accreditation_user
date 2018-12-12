<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nationality[]|\Cake\Collection\CollectionInterface $nationalities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nationality'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['controller' => 'Capitalizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitalization'), ['controller' => 'Capitalizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['controller' => 'GeneralManagerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['controller' => 'GeneralManagerInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nationalities index large-9 medium-8 columns content">
    <h3><?= __('Nationalities') ?></h3>
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
            <?php foreach ($nationalities as $nationality): ?>
            <tr>
                <td><?= $this->Number->format($nationality->id) ?></td>
                <td><?= h($nationality->name) ?></td>
                <td><?= h($nationality->created) ?></td>
                <td><?= h($nationality->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nationality->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nationality->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nationality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nationality->id)]) ?>
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
