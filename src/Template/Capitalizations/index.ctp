<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Capitalization[]|\Cake\Collection\CollectionInterface $capitalizations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Capitalization'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="capitalizations index large-9 medium-8 columns content">
    <h3><?= __('Capitalizations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_subscribed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_paid_up') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($capitalizations as $capitalization): ?>
            <tr>
                <td><?= $this->Number->format($capitalization->id) ?></td>
                <td><?= $this->Number->format($capitalization->establishment_id) ?></td>
                <td><?= h($capitalization->name) ?></td>
                <td><?= h($capitalization->position) ?></td>
                <td><?= $this->Number->format($capitalization->nationality_id) ?></td>
                <td><?= $this->Number->format($capitalization->amount_subscribed) ?></td>
                <td><?= $this->Number->format($capitalization->amount_paid_up) ?></td>
                <td><?= h($capitalization->created) ?></td>
                <td><?= h($capitalization->modified) ?></td>
                <td><?= $capitalization->has('user') ? $this->Html->link($capitalization->user->id, ['controller' => 'Users', 'action' => 'view', $capitalization->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $capitalization->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $capitalization->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $capitalization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitalization->id)]) ?>
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
