<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MunicipalityCity $municipalityCity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipality City'), ['action' => 'edit', $municipalityCity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipality City'), ['action' => 'delete', $municipalityCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipalityCity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipality Cities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipalityCities view large-9 medium-8 columns content">
    <h3><?= h($municipalityCity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('District Province') ?></th>
            <td><?= $municipalityCity->has('district_province') ? $this->Html->link($municipalityCity->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $municipalityCity->district_province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($municipalityCity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($municipalityCity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($municipalityCity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($municipalityCity->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Details') ?></h4>
        <?php if (!empty($municipalityCity->establishment_details)): ?>
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
            <?php foreach ($municipalityCity->establishment_details as $establishmentDetails): ?>
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
    <div class="related">
        <h4><?= __('Related Owner Informations') ?></h4>
        <?php if (!empty($municipalityCity->owner_informations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Prefix') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Name Suffix') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('District Province Id') ?></th>
                <th scope="col"><?= __('Municipality City Id') ?></th>
                <th scope="col"><?= __('Nationality Id') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($municipalityCity->owner_informations as $ownerInformations): ?>
            <tr>
                <td><?= h($ownerInformations->id) ?></td>
                <td><?= h($ownerInformations->name_prefix) ?></td>
                <td><?= h($ownerInformations->first_name) ?></td>
                <td><?= h($ownerInformations->middle_name) ?></td>
                <td><?= h($ownerInformations->last_name) ?></td>
                <td><?= h($ownerInformations->name_suffix) ?></td>
                <td><?= h($ownerInformations->address) ?></td>
                <td><?= h($ownerInformations->region_id) ?></td>
                <td><?= h($ownerInformations->district_province_id) ?></td>
                <td><?= h($ownerInformations->municipality_city_id) ?></td>
                <td><?= h($ownerInformations->nationality_id) ?></td>
                <td><?= h($ownerInformations->remarks) ?></td>
                <td><?= h($ownerInformations->created) ?></td>
                <td><?= h($ownerInformations->modified) ?></td>
                <td><?= h($ownerInformations->establishment_id) ?></td>
                <td><?= h($ownerInformations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OwnerInformations', 'action' => 'view', $ownerInformations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OwnerInformations', 'action' => 'edit', $ownerInformations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OwnerInformations', 'action' => 'delete', $ownerInformations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerInformations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Zip Codes') ?></h4>
        <?php if (!empty($municipalityCity->zip_codes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Municipality City Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('District Province Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($municipalityCity->zip_codes as $zipCodes): ?>
            <tr>
                <td><?= h($zipCodes->id) ?></td>
                <td><?= h($zipCodes->municipality_city_id) ?></td>
                <td><?= h($zipCodes->name) ?></td>
                <td><?= h($zipCodes->zip_code) ?></td>
                <td><?= h($zipCodes->created) ?></td>
                <td><?= h($zipCodes->modified) ?></td>
                <td><?= h($zipCodes->district_province_id) ?></td>
                <td><?= h($zipCodes->region_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ZipCodes', 'action' => 'view', $zipCodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ZipCodes', 'action' => 'edit', $zipCodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ZipCodes', 'action' => 'delete', $zipCodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zipCodes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
