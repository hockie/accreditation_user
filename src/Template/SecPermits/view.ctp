<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecPermit $secPermit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sec Permit'), ['action' => 'edit', $secPermit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sec Permit'), ['action' => 'delete', $secPermit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secPermit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sec Permits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sec Permit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['controller' => 'EstablishmentAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['controller' => 'EstablishmentAccounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secPermits view large-9 medium-8 columns content">
    <h3><?= h($secPermit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Permit No') ?></th>
            <td><?= h($secPermit->permit_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $secPermit->has('user') ? $this->Html->link($secPermit->user->id, ['controller' => 'Users', 'action' => 'view', $secPermit->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($secPermit->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($secPermit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valid Until') ?></th>
            <td><?= h($secPermit->valid_until) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($secPermit->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($secPermit->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Establishment Accounts') ?></h4>
        <?php if (!empty($secPermit->establishment_accounts)): ?>
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
                <th scope="col"><?= __('Auth Key') ?></th>
                <th scope="col"><?= __('Mayor Permit Id') ?></th>
                <th scope="col"><?= __('Dti Permit Id') ?></th>
                <th scope="col"><?= __('Sec Permit Id') ?></th>
                <th scope="col"><?= __('Cda Permit Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($secPermit->establishment_accounts as $establishmentAccounts): ?>
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
                <td><?= h($establishmentAccounts->auth_key) ?></td>
                <td><?= h($establishmentAccounts->mayor_permit_id) ?></td>
                <td><?= h($establishmentAccounts->dti_permit_id) ?></td>
                <td><?= h($establishmentAccounts->sec_permit_id) ?></td>
                <td><?= h($establishmentAccounts->cda_permit_id) ?></td>
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
