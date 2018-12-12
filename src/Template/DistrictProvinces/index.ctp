<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DistrictProvince[]|\Cake\Collection\CollectionInterface $districtProvinces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districtProvinces index large-9 medium-8 columns content">
    <h3><?= __('District Provinces') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($districtProvinces as $districtProvince): ?>
            <tr>
                <td><?= $this->Number->format($districtProvince->id) ?></td>
                <td><?= $districtProvince->has('region') ? $this->Html->link($districtProvince->region->name, ['controller' => 'Regions', 'action' => 'view', $districtProvince->region->id]) : '' ?></td>
                <td><?= h($districtProvince->name) ?></td>
                <td><?= h($districtProvince->created) ?></td>
                <td><?= h($districtProvince->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $districtProvince->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $districtProvince->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $districtProvince->id], ['confirm' => __('Are you sure you want to delete # {0}?', $districtProvince->id)]) ?>
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
