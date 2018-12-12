<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZipCode[]|\Cake\Collection\CollectionInterface $zipCodes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Zip Code'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="zipCodes index large-9 medium-8 columns content">
    <h3><?= __('Zip Codes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipality_city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zipCodes as $zipCode): ?>
            <tr>
                <td><?= $this->Number->format($zipCode->id) ?></td>
                <td><?= $zipCode->has('municipality_city') ? $this->Html->link($zipCode->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $zipCode->municipality_city->id]) : '' ?></td>
                <td><?= h($zipCode->name) ?></td>
                <td><?= h($zipCode->zip_code) ?></td>
                <td><?= h($zipCode->created) ?></td>
                <td><?= h($zipCode->modified) ?></td>
                <td><?= $zipCode->has('district_province') ? $this->Html->link($zipCode->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $zipCode->district_province->id]) : '' ?></td>
                <td><?= $zipCode->has('region') ? $this->Html->link($zipCode->region->name, ['controller' => 'Regions', 'action' => 'view', $zipCode->region->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $zipCode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zipCode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zipCode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zipCode->id)]) ?>
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
