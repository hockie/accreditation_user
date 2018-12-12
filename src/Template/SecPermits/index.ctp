<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecPermit[]|\Cake\Collection\CollectionInterface $secPermits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sec Permit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secPermits index large-9 medium-8 columns content">
    <h3><?= __('Sec Permits') ?></h3>
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
            <?php foreach ($secPermits as $secPermit): ?>
            <tr>
                <td><?= $this->Number->format($secPermit->id) ?></td>
                <td><?= h($secPermit->permit_no) ?></td>
                <td><?= h($secPermit->valid_until) ?></td>
                <td><?= h($secPermit->created) ?></td>
                <td><?= h($secPermit->modified) ?></td>
                <td><?= $secPermit->has('user') ? $this->Html->link($secPermit->user->id, ['controller' => 'Users', 'action' => 'view', $secPermit->user->id]) : '' ?></td>
                <td><?= h($secPermit->file) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $secPermit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secPermit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secPermit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secPermit->id)]) ?>
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
