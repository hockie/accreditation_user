<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorizedRepresentative[]|\Cake\Collection\CollectionInterface $authorizedRepresentatives
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authorized Representative'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorizedRepresentatives index large-9 medium-8 columns content">
    <h3><?= __('Authorized Representatives') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorizedRepresentatives as $authorizedRepresentative): ?>
            <tr>
                <td><?= $this->Number->format($authorizedRepresentative->id) ?></td>
                <td><?= h($authorizedRepresentative->fullname) ?></td>
                <td><?= h($authorizedRepresentative->designation) ?></td>
                <td><?= h($authorizedRepresentative->telephone_no) ?></td>
                <td><?= h($authorizedRepresentative->mobile_no) ?></td>
                <td><?= h($authorizedRepresentative->email) ?></td>
                <td><?= h($authorizedRepresentative->created) ?></td>
                <td><?= h($authorizedRepresentative->modified) ?></td>
                <td><?= $authorizedRepresentative->has('user') ? $this->Html->link($authorizedRepresentative->user->id, ['controller' => 'Users', 'action' => 'view', $authorizedRepresentative->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authorizedRepresentative->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorizedRepresentative->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authorizedRepresentative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorizedRepresentative->id)]) ?>
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
