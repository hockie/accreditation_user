<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZipCode $zipCode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['action' => 'index']) ?></li>
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
<div class="zipCodes form large-9 medium-8 columns content">
    <?= $this->Form->create($zipCode) ?>
    <fieldset>
        <legend><?= __('Add Zip Code') ?></legend>
        <?php
            echo $this->Form->control('municipality_city_id', ['options' => $municipalityCities, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('district_province_id', ['options' => $districtProvinces, 'empty' => true]);
            echo $this->Form->control('region_id', ['options' => $regions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
