<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DownloadableFile[]|\Cake\Collection\CollectionInterface $downloadableFiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Downloadable File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloadableFiles index large-9 medium-8 columns content">
    <h3><?= __('Downloadable Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col"><?= $this->Paginator->sort('document_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($downloadableFiles as $downloadableFile): ?>
            <tr>
                <td><?= $this->Number->format($downloadableFile->id) ?></td>
                <td><?= h($downloadableFile->filename) ?></td>
                <td><?= h($downloadableFile->file) ?></td>
                <td><?= $downloadableFile->has('document_type') ? $this->Html->link($downloadableFile->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $downloadableFile->document_type->id]) : '' ?></td>
                <td><?= h($downloadableFile->created) ?></td>
                <td><?= h($downloadableFile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $downloadableFile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $downloadableFile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $downloadableFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $downloadableFile->id)]) ?>
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
