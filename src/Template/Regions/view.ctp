<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regions view large-9 medium-8 columns content">
    <h3><?= h($region->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($region->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($region->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($region->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($region->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Details') ?></h4>
        <?php if (!empty($region->establishment_details)): ?>
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
            <?php foreach ($region->establishment_details as $establishmentDetails): ?>
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
