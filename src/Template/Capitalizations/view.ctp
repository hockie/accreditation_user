<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Capitalization $capitalization
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Capitalization'), ['action' => 'edit', $capitalization->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Capitalization'), ['action' => 'delete', $capitalization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitalization->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitalization'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="capitalizations view large-9 medium-8 columns content">
    <h3><?= h($capitalization->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($capitalization->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($capitalization->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $capitalization->has('user') ? $this->Html->link($capitalization->user->id, ['controller' => 'Users', 'action' => 'view', $capitalization->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($capitalization->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment Id') ?></th>
            <td><?= $this->Number->format($capitalization->establishment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality Id') ?></th>
            <td><?= $this->Number->format($capitalization->nationality_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Subscribed') ?></th>
            <td><?= $this->Number->format($capitalization->amount_subscribed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Paid Up') ?></th>
            <td><?= $this->Number->format($capitalization->amount_paid_up) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($capitalization->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($capitalization->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($capitalization->establishment_accounts)): ?>
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
                <th scope="col"><?= __('Authorized Rep Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Entity Types Id') ?></th>
                <th scope="col"><?= __('Entity Category Id') ?></th>
                <th scope="col"><?= __('Application Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($capitalization->establishment_accounts as $establishmentAccounts): ?>
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
                <td><?= h($establishmentAccounts->authorized_rep_id) ?></td>
                <td><?= h($establishmentAccounts->created) ?></td>
                <td><?= h($establishmentAccounts->modified) ?></td>
                <td><?= h($establishmentAccounts->entity_types_id) ?></td>
                <td><?= h($establishmentAccounts->entity_category_id) ?></td>
                <td><?= h($establishmentAccounts->application_type_id) ?></td>
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
