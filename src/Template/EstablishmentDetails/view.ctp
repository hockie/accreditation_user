<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentDetail $establishmentDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment Detail'), ['action' => 'edit', $establishmentDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment Detail'), ['action' => 'delete', $establishmentDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishmentDetails view large-9 medium-8 columns content">
    <h3><?= h($establishmentDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Establishment Name') ?></th>
            <td><?= h($establishmentDetail->establishment_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($establishmentDetail->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $establishmentDetail->has('region') ? $this->Html->link($establishmentDetail->region->name, ['controller' => 'Regions', 'action' => 'view', $establishmentDetail->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Province') ?></th>
            <td><?= $establishmentDetail->has('district_province') ? $this->Html->link($establishmentDetail->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $establishmentDetail->district_province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipality City') ?></th>
            <td><?= $establishmentDetail->has('municipality_city') ? $this->Html->link($establishmentDetail->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $establishmentDetail->municipality_city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= $establishmentDetail->has('zip_code') ? $this->Html->link($establishmentDetail->zip_code->name, ['controller' => 'ZipCodes', 'action' => 'view', $establishmentDetail->zip_code->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone No') ?></th>
            <td><?= h($establishmentDetail->telephone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($establishmentDetail->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax No') ?></th>
            <td><?= h($establishmentDetail->fax_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($establishmentDetail->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($establishmentDetail->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishmentDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($establishmentDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($establishmentDetail->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Established') ?></th>
            <td><?= h($establishmentDetail->date_established) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($establishmentDetail->remarks)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($establishmentDetail->establishment_accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Tin') ?></th>
                <th scope="col"><?= __('Type Of Org') ?></th>
                <th scope="col"><?= __('Establishment Detail Id') ?></th>
                <th scope="col"><?= __('Owner Information Id') ?></th>
                <th scope="col"><?= __('Managing Company Information Id') ?></th>
                <th scope="col"><?= __('General Manager Information Id') ?></th>
                <th scope="col"><?= __('Capitalization Id') ?></th>
                <th scope="col"><?= __('Authorized Representative Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Entity Types Id') ?></th>
                <th scope="col"><?= __('Entity Category Id') ?></th>
                <th scope="col"><?= __('Entity Category Type Id') ?></th>
                <th scope="col"><?= __('Auth Key') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establishmentDetail->establishment_accounts as $establishmentAccounts): ?>
            <tr>
                <td><?= h($establishmentAccounts->id) ?></td>
                <td><?= h($establishmentAccounts->email) ?></td>
                <td><?= h($establishmentAccounts->tin) ?></td>
                <td><?= h($establishmentAccounts->type_of_org) ?></td>
                <td><?= h($establishmentAccounts->establishment_detail_id) ?></td>
                <td><?= h($establishmentAccounts->owner_information_id) ?></td>
                <td><?= h($establishmentAccounts->managing_company_information_id) ?></td>
                <td><?= h($establishmentAccounts->general_manager_information_id) ?></td>
                <td><?= h($establishmentAccounts->capitalization_id) ?></td>
                <td><?= h($establishmentAccounts->authorized_representative_id) ?></td>
                <td><?= h($establishmentAccounts->created) ?></td>
                <td><?= h($establishmentAccounts->modified) ?></td>
                <td><?= h($establishmentAccounts->entity_types_id) ?></td>
                <td><?= h($establishmentAccounts->entity_category_id) ?></td>
                <td><?= h($establishmentAccounts->entity_category_type_id) ?></td>
                <td><?= h($establishmentAccounts->auth_key) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstablishmentAccounts', 'action' => 'view', $establishmentAccounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstablishmentAccounts', 'action' => 'edit', $establishmentAccounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstablishmentAccounts', 'action' => 'delete', $establishmentAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentAccounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
