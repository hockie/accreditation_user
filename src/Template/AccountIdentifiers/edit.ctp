<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountIdentifier $accountIdentifier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountIdentifier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountIdentifier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Account Identifiers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accountIdentifiers form large-9 medium-8 columns content">
    <?= $this->Form->create($accountIdentifier) ?>
    <fieldset>
        <legend><?= __('Edit Account Identifier') ?></legend>
        <?php
            echo $this->Form->control('email_address');
            echo $this->Form->control('tin_no');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
