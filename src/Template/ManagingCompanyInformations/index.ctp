<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ManagingCompanyInformation[]|\Cake\Collection\CollectionInterface $managingCompanyInformations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Managing Company Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="managingCompanyInformations index large-9 medium-8 columns content">
    <h3><?= __('Managing Company Informations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality_city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($managingCompanyInformations as $managingCompanyInformation): ?>
            <tr>
                <td><?= $this->Number->format($managingCompanyInformation->id) ?></td>
                <td><?= h($managingCompanyInformation->company_name) ?></td>
                <td><?= h($managingCompanyInformation->address) ?></td>
                <td><?= $managingCompanyInformation->has('region') ? $this->Html->link($managingCompanyInformation->region->name, ['controller' => 'Regions', 'action' => 'view', $managingCompanyInformation->region->id]) : '' ?></td>
                <td><?= $managingCompanyInformation->has('district_province') ? $this->Html->link($managingCompanyInformation->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $managingCompanyInformation->district_province->id]) : '' ?></td>
                <td><?= $managingCompanyInformation->has('municipality_city') ? $this->Html->link($managingCompanyInformation->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $managingCompanyInformation->municipality_city->id]) : '' ?></td>
                <td><?= $managingCompanyInformation->has('zip_code') ? $this->Html->link($managingCompanyInformation->zip_code->name, ['controller' => 'ZipCodes', 'action' => 'view', $managingCompanyInformation->zip_code->id]) : '' ?></td>
                <td><?= h($managingCompanyInformation->created) ?></td>
                <td><?= h($managingCompanyInformation->modified) ?></td>
                <td><?= $managingCompanyInformation->has('user') ? $this->Html->link($managingCompanyInformation->user->id, ['controller' => 'Users', 'action' => 'view', $managingCompanyInformation->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $managingCompanyInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $managingCompanyInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $managingCompanyInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $managingCompanyInformation->id)]) ?>
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
