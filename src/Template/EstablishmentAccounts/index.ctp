<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablishmentAccount[]|\Cake\Collection\CollectionInterface $establishmentAccounts
 */
?>
<div class="card">
      <div class="card-header">
		<h4><?= __('Establishment Accounts') ?> <span class="float-md-right"><a type="button" class="btn btn-info btn-md" data-toggle="modal" href="#myModal"><i class='fa fa-plus'></i> Add <?= __('Establishment Accounts') ?></a></span></h4>
      </div>
      <div class="card-body">	
	<div class="table-responsive">
			 <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_of_org') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establishment_detail_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_information_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('managing_company_information_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('general_manager_information_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capitalization_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authorized_representative_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entity_types_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entity_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entity_category_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auth_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mayor_permit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dti_permit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sec_permit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cda_permit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishmentAccounts as $establishmentAccount): ?>
            <tr>
                <td><?= $this->Number->format($establishmentAccount->id) ?></td>
                <td><?= h($establishmentAccount->email) ?></td>
                <td><?= h($establishmentAccount->tin) ?></td>
                <td><?= $this->Number->format($establishmentAccount->type_of_org) ?></td>
                <td><?= $establishmentAccount->has('establishment_detail') ? $this->Html->link($establishmentAccount->establishment_detail->id, ['controller' => 'EstablishmentDetails', 'action' => 'view', $establishmentAccount->establishment_detail->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('owner_information') ? $this->Html->link($establishmentAccount->owner_information->id, ['controller' => 'OwnerInformations', 'action' => 'view', $establishmentAccount->owner_information->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('managing_company_information') ? $this->Html->link($establishmentAccount->managing_company_information->id, ['controller' => 'ManagingCompanyInformations', 'action' => 'view', $establishmentAccount->managing_company_information->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('general_manager_information') ? $this->Html->link($establishmentAccount->general_manager_information->id, ['controller' => 'GeneralManagerInformations', 'action' => 'view', $establishmentAccount->general_manager_information->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('capitalization') ? $this->Html->link($establishmentAccount->capitalization->name, ['controller' => 'Capitalizations', 'action' => 'view', $establishmentAccount->capitalization->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('authorized_representative') ? $this->Html->link($establishmentAccount->authorized_representative->id, ['controller' => 'AuthorizedRepresentatives', 'action' => 'view', $establishmentAccount->authorized_representative->id]) : '' ?></td>
                <td><?= h($establishmentAccount->created) ?></td>
                <td><?= h($establishmentAccount->modified) ?></td>
                <td><?= $establishmentAccount->has('entity_type') ? $this->Html->link($establishmentAccount->entity_type->name, ['controller' => 'EntityTypes', 'action' => 'view', $establishmentAccount->entity_type->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('entity_category') ? $this->Html->link($establishmentAccount->entity_category->name, ['controller' => 'EntityCategories', 'action' => 'view', $establishmentAccount->entity_category->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('entity_category_type') ? $this->Html->link($establishmentAccount->entity_category_type->name, ['controller' => 'EntityCategoryTypes', 'action' => 'view', $establishmentAccount->entity_category_type->id]) : '' ?></td>
                <td><?= h($establishmentAccount->auth_key) ?></td>
                <td><?= $establishmentAccount->has('mayor_permit') ? $this->Html->link($establishmentAccount->mayor_permit->id, ['controller' => 'MayorPermits', 'action' => 'view', $establishmentAccount->mayor_permit->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('dti_permit') ? $this->Html->link($establishmentAccount->dti_permit->id, ['controller' => 'DtiPermits', 'action' => 'view', $establishmentAccount->dti_permit->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('sec_permit') ? $this->Html->link($establishmentAccount->sec_permit->id, ['controller' => 'SecPermits', 'action' => 'view', $establishmentAccount->sec_permit->id]) : '' ?></td>
                <td><?= $establishmentAccount->has('cda_permit') ? $this->Html->link($establishmentAccount->cda_permit->id, ['controller' => 'CdaPermits', 'action' => 'view', $establishmentAccount->cda_permit->id]) : '' ?></td>
                <td><?= h($establishmentAccount->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishmentAccount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishmentAccount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishmentAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentAccount->id)]) ?>
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
 </div>
</div>
