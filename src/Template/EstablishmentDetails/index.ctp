<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentDetail[]|\Cake\Collection\CollectionInterface $establishmentDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentDetails index large-9 medium-8 columns content">
    <h3><?= __('Establishment Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality_city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_established') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishmentDetails as $establishmentDetail): ?>
            <tr>
                <td><?= $this->Number->format($establishmentDetail->id) ?></td>
                <td><?= h($establishmentDetail->establishment_name) ?></td>
                <td><?= h($establishmentDetail->address) ?></td>
                <td><?= $establishmentDetail->has('region') ? $this->Html->link($establishmentDetail->region->name, ['controller' => 'Regions', 'action' => 'view', $establishmentDetail->region->id]) : '' ?></td>
                <td><?= $establishmentDetail->has('district_province') ? $this->Html->link($establishmentDetail->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $establishmentDetail->district_province->id]) : '' ?></td>
                <td><?= $establishmentDetail->has('municipality_city') ? $this->Html->link($establishmentDetail->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $establishmentDetail->municipality_city->id]) : '' ?></td>
                <td><?= $establishmentDetail->has('zip_code') ? $this->Html->link($establishmentDetail->zip_code->name, ['controller' => 'ZipCodes', 'action' => 'view', $establishmentDetail->zip_code->id]) : '' ?></td>
                <td><?= h($establishmentDetail->telephone_no) ?></td>
                <td><?= h($establishmentDetail->mobile_no) ?></td>
                <td><?= h($establishmentDetail->fax_no) ?></td>
                <td><?= h($establishmentDetail->website) ?></td>
                <td><?= h($establishmentDetail->email) ?></td>
                <td><?= h($establishmentDetail->created) ?></td>
                <td><?= h($establishmentDetail->modified) ?></td>
                <td><?= h($establishmentDetail->date_established) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishmentDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishmentDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishmentDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentDetail->id)]) ?>
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
