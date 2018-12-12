<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DownloadableFile $downloadableFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Downloadable File'), ['action' => 'edit', $downloadableFile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Downloadable File'), ['action' => 'delete', $downloadableFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $downloadableFile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Downloadable Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Downloadable File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="downloadableFiles view large-9 medium-8 columns content">
    <h3><?= h($downloadableFile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Filename') ?></th>
            <td><?= h($downloadableFile->filename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($downloadableFile->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document Type') ?></th>
            <td><?= $downloadableFile->has('document_type') ? $this->Html->link($downloadableFile->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $downloadableFile->document_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($downloadableFile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($downloadableFile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($downloadableFile->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($downloadableFile->description)); ?>
    </div>
</div>
