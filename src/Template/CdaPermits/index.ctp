<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CdaPermit[]|\Cake\Collection\CollectionInterface $cdaPermits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cda Permit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cdaPermits index large-9 medium-8 columns content">
    <h3><?= __('Cda Permits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permit_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valid_until') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cdaPermits as $cdaPermit): ?>
            <tr>
                <td><?= $this->Number->format($cdaPermit->id) ?></td>
                <td><?= h($cdaPermit->permit_no) ?></td>
                <td><?= h($cdaPermit->valid_until) ?></td>
                <td><?= h($cdaPermit->created) ?></td>
                <td><?= h($cdaPermit->modified) ?></td>
                <td><?= $cdaPermit->has('user') ? $this->Html->link($cdaPermit->user->id, ['controller' => 'Users', 'action' => 'view', $cdaPermit->user->id]) : '' ?></td>
                <td><?= h($cdaPermit->file) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cdaPermit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cdaPermit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cdaPermit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cdaPermit->id)]) ?>
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
