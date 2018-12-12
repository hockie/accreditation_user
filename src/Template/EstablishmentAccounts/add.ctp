<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentAccount $establishmentAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Establishment Accounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Details'), ['controller' => 'EstablishmentDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Detail'), ['controller' => 'EstablishmentDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Managing Company Informations'), ['controller' => 'ManagingCompanyInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Managing Company Information'), ['controller' => 'ManagingCompanyInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['controller' => 'GeneralManagerInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['controller' => 'GeneralManagerInformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['controller' => 'Capitalizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitalization'), ['controller' => 'Capitalizations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authorized Representatives'), ['controller' => 'AuthorizedRepresentatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Authorized Representative'), ['controller' => 'AuthorizedRepresentatives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Types'), ['controller' => 'EntityTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Type'), ['controller' => 'EntityTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Categories'), ['controller' => 'EntityCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category'), ['controller' => 'EntityCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entity Category Types'), ['controller' => 'EntityCategoryTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity Category Type'), ['controller' => 'EntityCategoryTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mayor Permits'), ['controller' => 'MayorPermits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mayor Permit'), ['controller' => 'MayorPermits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dti Permits'), ['controller' => 'DtiPermits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dti Permit'), ['controller' => 'DtiPermits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sec Permits'), ['controller' => 'SecPermits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sec Permit'), ['controller' => 'SecPermits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cda Permits'), ['controller' => 'CdaPermits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cda Permit'), ['controller' => 'CdaPermits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentAccounts form large-9 medium-8 columns content">
    <?= $this->Form->create($establishmentAccount) ?>
    <fieldset>
        <legend><?= __('Add Establishment Account') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('tin');
            echo $this->Form->control('type_of_org');
            echo $this->Form->control('establishment_detail_id', ['options' => $establishmentDetails]);
            echo $this->Form->control('owner_information_id', ['options' => $ownerInformations, 'empty' => true]);
            echo $this->Form->control('managing_company_information_id', ['options' => $managingCompanyInformations, 'empty' => true]);
            echo $this->Form->control('general_manager_information_id', ['options' => $generalManagerInformations, 'empty' => true]);
            echo $this->Form->control('capitalization_id', ['options' => $capitalizations, 'empty' => true]);
            echo $this->Form->control('authorized_representative_id', ['options' => $authorizedRepresentatives, 'empty' => true]);
            echo $this->Form->control('entity_types_id', ['options' => $entityTypes]);
            echo $this->Form->control('entity_category_id', ['options' => $entityCategories]);
            echo $this->Form->control('entity_category_type_id', ['options' => $entityCategoryTypes]);
            echo $this->Form->control('auth_key');
            echo $this->Form->control('mayor_permit_id', ['options' => $mayorPermits, 'empty' => true]);
            echo $this->Form->control('dti_permit_id', ['options' => $dtiPermits, 'empty' => true]);
            echo $this->Form->control('sec_permit_id', ['options' => $secPermits, 'empty' => true]);
            echo $this->Form->control('cda_permit_id', ['options' => $cdaPermits, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
