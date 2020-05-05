<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionitem[]|\Cake\Collection\CollectionInterface $transactionitems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transactionitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactionitems index large-9 medium-8 columns content">
    <h3><?= __('Transactionitems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_items') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactionitems as $transactionitem): ?>
            <tr>
                <td><?= $this->Number->format($transactionitem->id) ?></td>
                <td><?= $transactionitem->has('item') ? $this->Html->link($transactionitem->item->name, ['controller' => 'Items', 'action' => 'view', $transactionitem->item->id]) : '' ?></td>
                <td><?= $this->Number->format($transactionitem->amount_items) ?></td>
                <td><?= $this->Number->format($transactionitem->total_price) ?></td>
                <td><?= $transactionitem->has('transaction') ? $this->Html->link($transactionitem->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionitem->transaction->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transactionitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionitem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
