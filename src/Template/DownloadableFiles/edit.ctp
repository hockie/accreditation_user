<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DownloadableFile $downloadableFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $downloadableFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $downloadableFile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Downloadable Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloadableFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($downloadableFile) ?>
    <fieldset>
        <legend><?= __('Edit Downloadable File') ?></legend>
        <?php
            echo $this->Form->control('filename');
            echo $this->Form->control('description');
            echo $this->Form->control('file');
            echo $this->Form->control('document_type_id', ['options' => $documentTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
