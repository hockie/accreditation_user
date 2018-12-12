<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZipCode $zipCode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zip Code'), ['action' => 'edit', $zipCode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zip Code'), ['action' => 'delete', $zipCode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zipCode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zip Code'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zipCodes view large-9 medium-8 columns content">
    <h3><?= h($zipCode->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Municipality City') ?></th>
            <td><?= $zipCode->has('municipality_city') ? $this->Html->link($zipCode->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $zipCode->municipality_city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($zipCode->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($zipCode->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Province') ?></th>
            <td><?= $zipCode->has('district_province') ? $this->Html->link($zipCode->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $zipCode->district_province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $zipCode->has('region') ? $this->Html->link($zipCode->region->name, ['controller' => 'Regions', 'action' => 'view', $zipCode->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($zipCode->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($zipCode->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($zipCode->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Details') ?></h4>
        <?php if (!empty($zipCode->establishment_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Establishment Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('District Province Id') ?></th>
                <th scope="col"><?= __('Municipality City Id') ?></th>
                <th scope="col"><?= __('Zip Code Id') ?></th>
                <th scope="col"><?= __('Telephone No') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Fax No') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($zipCode->establishment_details as $establishmentDetails): ?>
            <tr>
                <td><?= h($establishmentDetails->id) ?></td>
                <td><?= h($establishmentDetails->establishment_name) ?></td>
                <td><?= h($establishmentDetails->address) ?></td>
                <td><?= h($establishmentDetails->region_id) ?></td>
                <td><?= h($establishmentDetails->district_province_id) ?></td>
                <td><?= h($establishmentDetails->municipality_city_id) ?></td>
                <td><?= h($establishmentDetails->zip_code_id) ?></td>
                <td><?= h($establishmentDetails->telephone_no) ?></td>
                <td><?= h($establishmentDetails->mobile_no) ?></td>
                <td><?= h($establishmentDetails->fax_no) ?></td>
                <td><?= h($establishmentDetails->website) ?></td>
                <td><?= h($establishmentDetails->email) ?></td>
                <td><?= h($establishmentDetails->remarks) ?></td>
                <td><?= h($establishmentDetails->created) ?></td>
                <td><?= h($establishmentDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstablishmentDetails', 'action' => 'view', $establishmentDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstablishmentDetails', 'action' => 'edit', $establishmentDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstablishmentDetails', 'action' => 'delete', $establishmentDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
