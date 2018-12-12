<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

	
	<div class="card">
      <div class="card-header">
		<h4>User Table <span class="float-md-right"><a type="button" class="btn btn-info btn-md" data-toggle="modal" href="#myModal"><i class='fa fa-plus'></i> Add User</a></span></h4>
      </div>
      <div class="card-body">		
		<div class="table-responsive">
			 <table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
					<th scope="col"><?= $this->Paginator->sort('email') ?></th>
					<th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('role') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
				<tr>
					<td><?= $this->Number->format($user->id) ?></td>
					<td><?= h($user->full_name) ?></td>
					<td><?= h($user->email) ?></td>
					<td><?= h($user->region_id) ?></td>
					<td><?= h($user->role) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
       <?= $this->Form->create($user) ?>
		<fieldset>
			<legend><?= __('Add User') ?></legend>
			<?php
				echo $this->Form->control('full_name');
				echo $this->Form->control('email');
				echo $this->Form->control('password');				
				echo $this->Form->control('division');
				echo $this->Form->control('region_id', ['options' => $regions, 'empty' => true,'class'=>'form-control','placeholder'=>'Region','required'=>true]);				
				echo $this->Form->control('role');
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit')) ?>
		<?= $this->Form->end() ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


		
