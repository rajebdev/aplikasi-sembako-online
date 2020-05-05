<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyer $buyer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Buyer'), ['action' => 'edit', $buyer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Buyer'), ['action' => 'delete', $buyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buyers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buyerdetails'), ['controller' => 'Buyerdetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyerdetail'), ['controller' => 'Buyerdetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buyers view large-9 medium-8 columns content">
    <h3><?= h($buyer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Buyerdetail') ?></th>
            <td><?= $buyer->has('buyerdetail') ? $this->Html->link($buyer->buyerdetail->name, ['controller' => 'Buyerdetails', 'action' => 'view', $buyer->buyerdetail->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $buyer->has('user') ? $this->Html->link($buyer->user->id, ['controller' => 'Users', 'action' => 'view', $buyer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($buyer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($buyer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($buyer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($buyer->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Buyer Id') ?></th>
                <th scope="col"><?= __('Seller Id') ?></th>
                <th scope="col"><?= __('Transactiondetail Id') ?></th>
                <th scope="col"><?= __('Transactionstatus Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($buyer->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->buyer_id) ?></td>
                <td><?= h($transactions->seller_id) ?></td>
                <td><?= h($transactions->transactiondetail_id) ?></td>
                <td><?= h($transactions->transactionstatus_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
