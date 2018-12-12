<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentDetail $establishmentDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['action' => 'index']) ?></li>
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
<div class="establishmentDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($establishmentDetail) ?>
    <fieldset>
        <legend><?= __('Add Establishment Detail') ?></legend>
        <?php
            echo $this->Form->control('establishment_name');
            echo $this->Form->control('address');
            echo $this->Form->control('region_id', ['options' => $regions, 'empty' => true]);
            echo $this->Form->control('district_province_id', ['options' => $districtProvinces, 'empty' => true]);
            echo $this->Form->control('municipality_city_id', ['options' => $municipalityCities, 'empty' => true]);
            echo $this->Form->control('zip_code_id', ['options' => $zipCodes, 'empty' => true]);
            echo $this->Form->control('telephone_no');
            echo $this->Form->control('mobile_no');
            echo $this->Form->control('fax_no');
            echo $this->Form->control('website');
            echo $this->Form->control('email');
            echo $this->Form->control('remarks');
            echo $this->Form->control('date_established', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
