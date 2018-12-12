<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nationality $nationality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nationality'), ['action' => 'edit', $nationality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nationality'), ['action' => 'delete', $nationality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nationality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nationalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nationality'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capitalizations'), ['controller' => 'Capitalizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitalization'), ['controller' => 'Capitalizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List General Manager Informations'), ['controller' => 'GeneralManagerInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General Manager Information'), ['controller' => 'GeneralManagerInformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Informations'), ['controller' => 'OwnerInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Information'), ['controller' => 'OwnerInformations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nationalities view large-9 medium-8 columns content">
    <h3><?= h($nationality->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($nationality->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($nationality->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($nationality->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($nationality->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Capitalizations') ?></h4>
        <?php if (!empty($nationality->capitalizations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Nationality Id') ?></th>
                <th scope="col"><?= __('Amount Subscribed') ?></th>
                <th scope="col"><?= __('Amount Paid Up') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($nationality->capitalizations as $capitalizations): ?>
            <tr>
                <td><?= h($capitalizations->id) ?></td>
                <td><?= h($capitalizations->establishment_id) ?></td>
                <td><?= h($capitalizations->name) ?></td>
                <td><?= h($capitalizations->position) ?></td>
                <td><?= h($capitalizations->nationality_id) ?></td>
                <td><?= h($capitalizations->amount_subscribed) ?></td>
                <td><?= h($capitalizations->amount_paid_up) ?></td>
                <td><?= h($capitalizations->created) ?></td>
                <td><?= h($capitalizations->modified) ?></td>
                <td><?= h($capitalizations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Capitalizations', 'action' => 'view', $capitalizations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Capitalizations', 'action' => 'edit', $capitalizations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Capitalizations', 'action' => 'delete', $capitalizations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitalizations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related General Manager Informations') ?></h4>
        <?php if (!empty($nationality->general_manager_informations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Prefix') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Nationality Id') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($nationality->general_manager_informations as $generalManagerInformations): ?>
            <tr>
                <td><?= h($generalManagerInformations->id) ?></td>
                <td><?= h($generalManagerInformations->name_prefix) ?></td>
                <td><?= h($generalManagerInformations->first_name) ?></td>
                <td><?= h($generalManagerInformations->middle_name) ?></td>
                <td><?= h($generalManagerInformations->last_name) ?></td>
                <td><?= h($generalManagerInformations->email) ?></td>
                <td><?= h($generalManagerInformations->nationality_id) ?></td>
                <td><?= h($generalManagerInformations->remarks) ?></td>
                <td><?= h($generalManagerInformations->created) ?></td>
                <td><?= h($generalManagerInformations->modified) ?></td>
                <td><?= h($generalManagerInformations->establishment_id) ?></td>
                <td><?= h($generalManagerInformations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GeneralManagerInformations', 'action' => 'view', $generalManagerInformations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GeneralManagerInformations', 'action' => 'edit', $generalManagerInformations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GeneralManagerInformations', 'action' => 'delete', $generalManagerInformations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generalManagerInformations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Owner Informations') ?></h4>
        <?php if (!empty($nationality->owner_informations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name Prefix') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Name Suffix') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('District Province Id') ?></th>
                <th scope="col"><?= __('Municipality City Id') ?></th>
                <th scope="col"><?= __('Nationality Id') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Establishment Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($nationality->owner_informations as $ownerInformations): ?>
            <tr>
                <td><?= h($ownerInformations->id) ?></td>
                <td><?= h($ownerInformations->name_prefix) ?></td>
                <td><?= h($ownerInformations->first_name) ?></td>
                <td><?= h($ownerInformations->middle_name) ?></td>
                <td><?= h($ownerInformations->last_name) ?></td>
                <td><?= h($ownerInformations->name_suffix) ?></td>
                <td><?= h($ownerInformations->address) ?></td>
                <td><?= h($ownerInformations->region_id) ?></td>
                <td><?= h($ownerInformations->district_province_id) ?></td>
                <td><?= h($ownerInformations->municipality_city_id) ?></td>
                <td><?= h($ownerInformations->nationality_id) ?></td>
                <td><?= h($ownerInformations->remarks) ?></td>
                <td><?= h($ownerInformations->created) ?></td>
                <td><?= h($ownerInformations->modified) ?></td>
                <td><?= h($ownerInformations->establishment_id) ?></td>
                <td><?= h($ownerInformations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OwnerInformations', 'action' => 'view', $ownerInformations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OwnerInformations', 'action' => 'edit', $ownerInformations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OwnerInformations', 'action' => 'delete', $ownerInformations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerInformations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
