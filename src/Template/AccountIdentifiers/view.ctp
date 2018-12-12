<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountIdentifier $accountIdentifier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account Identifier'), ['action' => 'edit', $accountIdentifier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account Identifier'), ['action' => 'delete', $accountIdentifier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountIdentifier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Account Identifiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account Identifier'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accountIdentifiers view large-9 medium-8 columns content">
    <h3><?= h($accountIdentifier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email Address') ?></th>
            <td><?= h($accountIdentifier->email_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tin No') ?></th>
            <td><?= h($accountIdentifier->tin_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($accountIdentifier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($accountIdentifier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($accountIdentifier->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($accountIdentifier->note)); ?>
    </div>
</div>
