<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MayorPermit[]|\Cake\Collection\CollectionInterface $mayorPermits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mayor Permit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mayorPermits index large-9 medium-8 columns content">
    <h3><?= __('Mayor Permits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permit_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valid_until') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_issued') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mayorPermits as $mayorPermit): ?>
            <tr>
                <td><?= $this->Number->format($mayorPermit->id) ?></td>
                <td><?= h($mayorPermit->permit_no) ?></td>
                <td><?= h($mayorPermit->valid_until) ?></td>
                <td><?= h($mayorPermit->place_issued) ?></td>
                <td><?= h($mayorPermit->created) ?></td>
                <td><?= h($mayorPermit->modified) ?></td>
                <td><?= $mayorPermit->has('user') ? $this->Html->link($mayorPermit->user->id, ['controller' => 'Users', 'action' => 'view', $mayorPermit->user->id]) : '' ?></td>
                <td><?= h($mayorPermit->file) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mayorPermit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mayorPermit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mayorPermit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mayorPermit->id)]) ?>
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
