<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeneralManagerInformation[]|\Cake\Collection\CollectionInterface $generalManagerInformations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nationalities'), ['controller' => 'Nationalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nationality'), ['controller' => 'Nationalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generalManagerInformations index large-9 medium-8 columns content">
    <h3><?= __('General Manager Informations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_prefix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generalManagerInformations as $generalManagerInformation): ?>
            <tr>
                <td><?= $this->Number->format($generalManagerInformation->id) ?></td>
                <td><?= h($generalManagerInformation->name_prefix) ?></td>
                <td><?= h($generalManagerInformation->first_name) ?></td>
                <td><?= h($generalManagerInformation->middle_name) ?></td>
                <td><?= h($generalManagerInformation->last_name) ?></td>
                <td><?= h($generalManagerInformation->email) ?></td>
                <td><?= $generalManagerInformation->has('nationality') ? $this->Html->link($generalManagerInformation->nationality->name, ['controller' => 'Nationalities', 'action' => 'view', $generalManagerInformation->nationality->id]) : '' ?></td>
                <td><?= h($generalManagerInformation->created) ?></td>
                <td><?= h($generalManagerInformation->modified) ?></td>
                <td><?= $generalManagerInformation->has('user') ? $this->Html->link($generalManagerInformation->user->id, ['controller' => 'Users', 'action' => 'view', $generalManagerInformation->user->id]) : '' ?></td>
                <td><?= h($generalManagerInformation->mobile_no) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generalManagerInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generalManagerInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generalManagerInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalManagerInformation->id)]) ?>
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
