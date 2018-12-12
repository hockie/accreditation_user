<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EntityType $entityType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entity Type'), ['action' => 'edit', $entityType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entity Type'), ['action' => 'delete', $entityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entityType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entity Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entityTypes view large-9 medium-8 columns content">
    <h3><?= h($entityType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Entity Category') ?></th>
            <td><?= $entityType->has('entity_category') ? $this->Html->link($entityType->entity_category->name, ['controller' => 'EntityCategories', 'action' => 'view', $entityType->entity_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($entityType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entityType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entityType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entityType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($entityType->establishment_accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Entity Type Id') ?></th>
                <th scope="col"><?= __('Account Identifier Id') ?></th>
                <th scope="col"><?= __('Establishment Detail Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Application No') ?></th>
                <th scope="col"><?= __('Current Handler Id') ?></th>
                <th scope="col"><?= __('Assigned Evaluator Id') ?></th>
                <th scope="col"><?= __('Assigned Inspector Id') ?></th>
                <th scope="col"><?= __('Application Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entityType->establishment_accounts as $establishmentAccounts): ?>
            <tr>
                <td><?= h($establishmentAccounts->id) ?></td>
                <td><?= h($establishmentAccounts->entity_type_id) ?></td>
                <td><?= h($establishmentAccounts->account_identifier_id) ?></td>
                <td><?= h($establishmentAccounts->establishment_detail_id) ?></td>
                <td><?= h($establishmentAccounts->status) ?></td>
                <td><?= h($establishmentAccounts->application_no) ?></td>
                <td><?= h($establishmentAccounts->current_handler_id) ?></td>
                <td><?= h($establishmentAccounts->assigned_evaluator_id) ?></td>
                <td><?= h($establishmentAccounts->assigned_inspector_id) ?></td>
                <td><?= h($establishmentAccounts->application_type_id) ?></td>
                <td><?= h($establishmentAccounts->created) ?></td>
                <td><?= h($establishmentAccounts->modified) ?></td>
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
