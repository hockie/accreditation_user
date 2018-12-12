<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerInformation $ownerInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Information'), ['action' => 'edit', $ownerInformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Information'), ['action' => 'delete', $ownerInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerInformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['controller' => 'MunicipalityCities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality City'), ['controller' => 'MunicipalityCities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nationalities'), ['controller' => 'Nationalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nationality'), ['controller' => 'Nationalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerInformations view large-9 medium-8 columns content">
    <h3><?= h($ownerInformation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Prefix') ?></th>
            <td><?= h($ownerInformation->name_prefix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($ownerInformation->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($ownerInformation->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($ownerInformation->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Suffix') ?></th>
            <td><?= h($ownerInformation->name_suffix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($ownerInformation->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $ownerInformation->has('region') ? $this->Html->link($ownerInformation->region->name, ['controller' => 'Regions', 'action' => 'view', $ownerInformation->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Province') ?></th>
            <td><?= $ownerInformation->has('district_province') ? $this->Html->link($ownerInformation->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $ownerInformation->district_province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipality City') ?></th>
            <td><?= $ownerInformation->has('municipality_city') ? $this->Html->link($ownerInformation->municipality_city->name, ['controller' => 'MunicipalityCities', 'action' => 'view', $ownerInformation->municipality_city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality') ?></th>
            <td><?= $ownerInformation->has('nationality') ? $this->Html->link($ownerInformation->nationality->name, ['controller' => 'Nationalities', 'action' => 'view', $ownerInformation->nationality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ownerInformation->has('user') ? $this->Html->link($ownerInformation->user->id, ['controller' => 'Users', 'action' => 'view', $ownerInformation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= $ownerInformation->has('zip_code') ? $this->Html->link($ownerInformation->zip_code->name, ['controller' => 'ZipCodes', 'action' => 'view', $ownerInformation->zip_code->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ownerInformation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ownerInformation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ownerInformation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($ownerInformation->remarks)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($ownerInformation->establishment_accounts)): ?>
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
                <th scope="col"><?= __('Mayor Permit Id') ?></th>
                <th scope="col"><?= __('Dti Permit Id') ?></th>
                <th scope="col"><?= __('Sec Permit Id') ?></th>
                <th scope="col"><?= __('Cda Permit Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ownerInformation->establishment_accounts as $establishmentAccounts): ?>
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
                <td><?= h($establishmentAccounts->mayor_permit_id) ?></td>
                <td><?= h($establishmentAccounts->dti_permit_id) ?></td>
                <td><?= h($establishmentAccounts->sec_permit_id) ?></td>
                <td><?= h($establishmentAccounts->cda_permit_id) ?></td>
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
