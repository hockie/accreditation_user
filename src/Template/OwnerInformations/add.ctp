<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerInformation $ownerInformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['action' => 'index']) ?></li>
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
<div class="ownerInformations form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerInformation) ?>
    <fieldset>
        <legend><?= __('Add Owner Information') ?></legend>
        <?php
            echo $this->Form->control('name_prefix');
            echo $this->Form->control('first_name');
            echo $this->Form->control('middle_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('name_suffix');
            echo $this->Form->control('address');
            echo $this->Form->control('region_id', ['options' => $regions]);
            echo $this->Form->control('district_province_id', ['options' => $districtProvinces]);
            echo $this->Form->control('municipality_city_id', ['options' => $municipalityCities]);
            echo $this->Form->control('nationality_id', ['options' => $nationalities, 'empty' => true]);
            echo $this->Form->control('remarks');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('zip_code_id', ['options' => $zipCodes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
