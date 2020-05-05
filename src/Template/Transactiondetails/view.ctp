<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactiondetail $transactiondetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transactiondetail'), ['action' => 'edit', $transactiondetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transactiondetail'), ['action' => 'delete', $transactiondetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactiondetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactiondetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactiondetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactiondetails view large-9 medium-8 columns content">
    <h3><?= h($transactiondetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transactiondetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= $this->Number->format($transactiondetail->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Amount') ?></th>
            <td><?= $this->Number->format($transactiondetail->payment_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Item') ?></th>
            <td><?= $this->Number->format($transactiondetail->total_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($transactiondetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($transactiondetail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Buyer Note') ?></h4>
        <?= $this->Text->autoParagraph(h($transactiondetail->buyer_note)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($transactiondetail->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Buyer Id') ?></th>
                <th scope="col"><?= __('Seller Id') ?></th>
                <th scope="col"><?= __('Transactiondetail Id') ?></th>
                <th scope="col"><?= __('Transactionstatus Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transactiondetail->transactions as $transactions): ?>
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
