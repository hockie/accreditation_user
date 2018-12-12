<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityCategoryType $entityCategoryType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entity Category Type'), ['action' => 'edit', $entityCategoryType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entity Category Type'), ['action' => 'delete', $entityCategoryType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityCategoryType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entityCategoryTypes view large-9 medium-8 columns content">
    <h3><?= h($entityCategoryType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($entityCategoryType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entityCategoryType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entityCategoryType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entityCategoryType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entity Categories') ?></h4>
        <?php if (!empty($entityCategoryType->entity_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Entity Category Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entityCategoryType->entity_categories as $entityCategories): ?>
            <tr>
                <td><?= h($entityCategories->id) ?></td>
                <td><?= h($entityCategories->name) ?></td>
                <td><?= h($entityCategories->entity_category_type_id) ?></td>
                <td><?= h($entityCategories->created) ?></td>
                <td><?= h($entityCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntityCategories', 'action' => 'view', $entityCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntityCategories', 'action' => 'edit', $entityCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntityCategories', 'action' => 'delete', $entityCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($entityCategoryType->establishment_accounts)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entityCategoryType->establishment_accounts as $establishmentAccounts): ?>
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
