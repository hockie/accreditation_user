<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MunicipalityCity[]|\Cake\Collection\CollectionInterface $municipalityCities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Municipality City'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Provinces'), ['controller' => 'DistrictProvinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Province'), ['controller' => 'DistrictProvinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Zip Codes'), ['controller' => 'ZipCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Zip Code'), ['controller' => 'ZipCodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalityCities index large-9 medium-8 columns content">
    <h3><?= __('Municipality Cities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipalityCities as $municipalityCity): ?>
            <tr>
                <td><?= $this->Number->format($municipalityCity->id) ?></td>
                <td><?= $municipalityCity->has('district_province') ? $this->Html->link($municipalityCity->district_province->name, ['controller' => 'DistrictProvinces', 'action' => 'view', $municipalityCity->district_province->id]) : '' ?></td>
                <td><?= h($municipalityCity->name) ?></td>
                <td><?= h($municipalityCity->created) ?></td>
                <td><?= h($municipalityCity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $municipalityCity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipalityCity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipalityCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipalityCity->id)]) ?>
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
