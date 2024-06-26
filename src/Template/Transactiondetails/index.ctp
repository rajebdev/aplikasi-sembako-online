<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactiondetail[]|\Cake\Collection\CollectionInterface $transactiondetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transactiondetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactiondetails index large-9 medium-8 columns content">
    <h3><?= __('Transactiondetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactiondetails as $transactiondetail): ?>
            <tr>
                <td><?= $this->Number->format($transactiondetail->id) ?></td>
                <td><?= $this->Number->format($transactiondetail->code) ?></td>
                <td><?= $this->Number->format($transactiondetail->payment_amount) ?></td>
                <td><?= $this->Number->format($transactiondetail->total_item) ?></td>
                <td><?= h($transactiondetail->created) ?></td>
                <td><?= h($transactiondetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transactiondetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactiondetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactiondetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactiondetail->id)]) ?>
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
