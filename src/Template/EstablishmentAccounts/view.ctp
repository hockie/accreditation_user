<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentAccount $establishmentAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establishment Account'), ['action' => 'edit', $establishmentAccount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establishment Account'), ['action' => 'delete', $establishmentAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentAccount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managing Company Informations'), ['controller' => 'ManagingCompanyInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Managing Company Information'), ['controller' => 'ManagingCompanyInformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['controller' => 'GeneralManagerInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['controller' => 'GeneralManagerInformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['controller' => 'Capitalizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitalization'), ['controller' => 'Capitalizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authorized Representatives'), ['controller' => 'AuthorizedRepresentatives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authorized Representative'), ['controller' => 'AuthorizedRepresentatives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Types'), ['controller' => 'EntityTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Type'), ['controller' => 'EntityTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['controller' => 'EntityCategoryTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['controller' => 'EntityCategoryTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mayor Permits'), ['controller' => 'MayorPermits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mayor Permit'), ['controller' => 'MayorPermits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dti Permits'), ['controller' => 'DtiPermits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dti Permit'), ['controller' => 'DtiPermits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sec Permits'), ['controller' => 'SecPermits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sec Permit'), ['controller' => 'SecPermits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cda Permits'), ['controller' => 'CdaPermits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cda Permit'), ['controller' => 'CdaPermits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establishmentAccounts view large-9 medium-8 columns content">
    <h3><?= h($establishmentAccount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($establishmentAccount->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tin') ?></th>
            <td><?= h($establishmentAccount->tin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Establishment Detail') ?></th>
            <td><?= $establishmentAccount->has('establishment_detail') ? $this->Html->link($establishmentAccount->establishment_detail->id, ['controller' => 'EstablishmentDetails', 'action' => 'view', $establishmentAccount->establishment_detail->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Information') ?></th>
            <td><?= $establishmentAccount->has('owner_information') ? $this->Html->link($establishmentAccount->owner_information->id, ['controller' => 'OwnerInformations', 'action' => 'view', $establishmentAccount->owner_information->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Managing Company Information') ?></th>
            <td><?= $establishmentAccount->has('managing_company_information') ? $this->Html->link($establishmentAccount->managing_company_information->id, ['controller' => 'ManagingCompanyInformations', 'action' => 'view', $establishmentAccount->managing_company_information->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('General Manager Information') ?></th>
            <td><?= $establishmentAccount->has('general_manager_information') ? $this->Html->link($establishmentAccount->general_manager_information->id, ['controller' => 'GeneralManagerInformations', 'action' => 'view', $establishmentAccount->general_manager_information->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capitalization') ?></th>
            <td><?= $establishmentAccount->has('capitalization') ? $this->Html->link($establishmentAccount->capitalization->name, ['controller' => 'Capitalizations', 'action' => 'view', $establishmentAccount->capitalization->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Authorized Representative') ?></th>
            <td><?= $establishmentAccount->has('authorized_representative') ? $this->Html->link($establishmentAccount->authorized_representative->id, ['controller' => 'AuthorizedRepresentatives', 'action' => 'view', $establishmentAccount->authorized_representative->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Type') ?></th>
            <td><?= $establishmentAccount->has('entity_type') ? $this->Html->link($establishmentAccount->entity_type->name, ['controller' => 'EntityTypes', 'action' => 'view', $establishmentAccount->entity_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Category') ?></th>
            <td><?= $establishmentAccount->has('entity_category') ? $this->Html->link($establishmentAccount->entity_category->name, ['controller' => 'EntityCategories', 'action' => 'view', $establishmentAccount->entity_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Category Type') ?></th>
            <td><?= $establishmentAccount->has('entity_category_type') ? $this->Html->link($establishmentAccount->entity_category_type->name, ['controller' => 'EntityCategoryTypes', 'action' => 'view', $establishmentAccount->entity_category_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth Key') ?></th>
            <td><?= h($establishmentAccount->auth_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mayor Permit') ?></th>
            <td><?= $establishmentAccount->has('mayor_permit') ? $this->Html->link($establishmentAccount->mayor_permit->id, ['controller' => 'MayorPermits', 'action' => 'view', $establishmentAccount->mayor_permit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dti Permit') ?></th>
            <td><?= $establishmentAccount->has('dti_permit') ? $this->Html->link($establishmentAccount->dti_permit->id, ['controller' => 'DtiPermits', 'action' => 'view', $establishmentAccount->dti_permit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sec Permit') ?></th>
            <td><?= $establishmentAccount->has('sec_permit') ? $this->Html->link($establishmentAccount->sec_permit->id, ['controller' => 'SecPermits', 'action' => 'view', $establishmentAccount->sec_permit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cda Permit') ?></th>
            <td><?= $establishmentAccount->has('cda_permit') ? $this->Html->link($establishmentAccount->cda_permit->id, ['controller' => 'CdaPermits', 'action' => 'view', $establishmentAccount->cda_permit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establishmentAccount->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Of Org') ?></th>
            <td><?= $this->Number->format($establishmentAccount->type_of_org) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($establishmentAccount->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($establishmentAccount->modified) ?></td>
        </tr>
    </table>
</div>
