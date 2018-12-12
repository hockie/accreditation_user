<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentType $documentType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document Type'), ['action' => 'edit', $documentType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document Type'), ['action' => 'delete', $documentType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Document Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Downloadable Files'), ['controller' => 'DownloadableFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Downloadable File'), ['controller' => 'DownloadableFiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documentTypes view large-9 medium-8 columns content">
    <h3><?= h($documentType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($documentType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($documentType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($documentType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($documentType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Downloadable Files') ?></h4>
        <?php if (!empty($documentType->downloadable_files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Filename') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('File') ?></th>
                <th scope="col"><?= __('Document Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($documentType->downloadable_files as $downloadableFiles): ?>
            <tr>
                <td><?= h($downloadableFiles->id) ?></td>
                <td><?= h($downloadableFiles->filename) ?></td>
                <td><?= h($downloadableFiles->description) ?></td>
                <td><?= h($downloadableFiles->file) ?></td>
                <td><?= h($downloadableFiles->document_type_id) ?></td>
                <td><?= h($downloadableFiles->created) ?></td>
                <td><?= h($downloadableFiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DownloadableFiles', 'action' => 'view', $downloadableFiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DownloadableFiles', 'action' => 'edit', $downloadableFiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DownloadableFiles', 'action' => 'delete', $downloadableFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $downloadableFiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
