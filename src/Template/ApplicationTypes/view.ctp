<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationType $applicationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application Type'), ['action' => 'edit', $applicationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application Type'), ['action' => 'delete', $applicationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Application Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicationTypes view large-9 medium-8 columns content">
    <h3><?= h($applicationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($applicationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($applicationType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($applicationType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($applicationType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($applicationType->establishment_accounts)): ?>
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
            <?php foreach ($applicationType->establishment_accounts as $establishmentAccounts): ?>
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
