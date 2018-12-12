<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerInformation[]|\Cake\Collection\CollectionInterface $ownerInformations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nationalities'), ['controller' => 'Nationalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nationality'), ['controller' => 'Nationalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerInformations index large-9 medium-8 columns content">
    <h3><?= __('Owner Informations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_prefix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_suffix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality_city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerInformations as $ownerInformation): ?>
            <tr>
                <td><?= $this->Number->format($ownerInformation->id) ?></td>
                <td><?= h($ownerInformation->name_prefix) ?></td>
                <td><?= h($ownerInformation->first_name) ?></td>
                <td><?= h($ownerInformation->middle_name) ?></td>
                <td><?= h($ownerInformation->last_name) ?></td>
                <td><?= h($ownerInformation->name_suffix) ?></td>
                <td><?= h($ownerInformation->address) ?></td>
                <td><?= $ownerInformation->has('region') ? $this->Html->link($ownerInformation->region->name, ['controller' => 'Regions', 'action' => 'view', $ownerInformation->region->id]) : '' ?></td>
                <td><?= $ownerInformation->has('district_province') ? $this->Html->link($ownerInformation->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $ownerInformation->district_province->id]) : '' ?></td>
                <td><?= $ownerInformation->has('municipality_city') ? $this->Html->link($ownerInformation->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $ownerInformation->municipality_city->id]) : '' ?></td>
                <td><?= $ownerInformation->has('nationality') ? $this->Html->link($ownerInformation->nationality->name, ['controller' => 'Nationalities', 'action' => 'view', $ownerInformation->nationality->id]) : '' ?></td>
                <td><?= h($ownerInformation->created) ?></td>
                <td><?= h($ownerInformation->modified) ?></td>
                <td><?= $ownerInformation->has('user') ? $this->Html->link($ownerInformation->user->id, ['controller' => 'Users', 'action' => 'view', $ownerInformation->user->id]) : '' ?></td>
                <td><?= $ownerInformation->has('zip_code') ? $this->Html->link($ownerInformation->zip_code->name, ['controller' => 'ZipCodes', 'action' => 'view', $ownerInformation->zip_code->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerInformation->id)]) ?>
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
