<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentType $documentType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Document Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Downloadable Files'), ['controller' => 'DownloadableFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Downloadable File'), ['controller' => 'DownloadableFiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documentTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($documentType) ?>
    <fieldset>
        <legend><?= __('Add Document Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
