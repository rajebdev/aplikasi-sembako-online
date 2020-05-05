<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buyers'), ['controller' => 'Buyers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyer'), ['controller' => 'Buyers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactiondetails'), ['controller' => 'Transactiondetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactiondetail'), ['controller' => 'Transactiondetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactionitems'), ['controller' => 'Transactionitems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactionitem'), ['controller' => 'Transactionitems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactions view large-9 medium-8 columns content">
    <h3><?= h($transaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Buyer') ?></th>
            <td><?= $transaction->has('buyer') ? $this->Html->link($transaction->buyer->id, ['controller' => 'Buyers', 'action' => 'view', $transaction->buyer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seller') ?></th>
            <td><?= $transaction->has('seller') ? $this->Html->link($transaction->seller->id, ['controller' => 'Sellers', 'action' => 'view', $transaction->seller->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transactiondetail') ?></th>
            <td><?= $transaction->has('transactiondetail') ? $this->Html->link($transaction->transactiondetail->id, ['controller' => 'Transactiondetails', 'action' => 'view', $transaction->transactiondetail->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transactionstatus') ?></th>
            <td><?= $transaction->has('transactionstatus') ? $this->Html->link($transaction->transactionstatus->id, ['controller' => 'Transactionstatus', 'action' => 'view', $transaction->transactionstatus->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transaction->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactionitems') ?></h4>
        <?php if (!empty($transaction->transactionitems)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Amount Items') ?></th>
                <th scope="col"><?= __('Total Price') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transaction->transactionitems as $transactionitems): ?>
            <tr>
                <td><?= h($transactionitems->id) ?></td>
                <td><?= h($transactionitems->item_id) ?></td>
                <td><?= h($transactionitems->amount_items) ?></td>
                <td><?= h($transactionitems->total_price) ?></td>
                <td><?= h($transactionitems->transaction_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactionitems', 'action' => 'view', $transactionitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactionitems', 'action' => 'edit', $transactionitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactionitems', 'action' => 'delete', $transactionitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
