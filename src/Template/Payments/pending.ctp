<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

	
	<div class="card">
      <div class="card-header">
		<h4>Payments Table</h4>
      </div>
      <div class="card-body">		
		<div class="table-responsive">
			 <table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('establishment_account_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('description') ?></th>
					<th scope="col"><?= $this->Paginator->sort('amount') ?></th>
					<th scope="col"><?= $this->Paginator->sort('account_type_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('hash_key',['reference Number']) ?></th>
					<th scope="col"><?= $this->Paginator->sort('invoice_no') ?></th>
					<th scope="col"><?= $this->Paginator->sort('open_close') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($payments as $payment): ?>
				<tr>
					<td><?= $this->Number->format($payment->id) ?></td>
					<td><?= h($payment->establishment_account_id) ?></td>
					<td><?= h($payment->description) ?></td>
					<td><?= h($payment->amount) ?></td>
					<td><?= h($payment->account_type_id) ?></td>
					<td><?= h($payment->hash_key) ?></td>
					<td><?= h($payment->invoice_no) ?></td>
					<td><?= h($payment->open_close) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
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


		
