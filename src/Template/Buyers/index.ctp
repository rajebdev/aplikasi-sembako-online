<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyer[]|\Cake\Collection\CollectionInterface $buyers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Buyer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buyerdetails'), ['controller' => 'Buyerdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyerdetail'), ['controller' => 'Buyerdetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buyers index large-9 medium-8 columns content">
    <h3><?= __('Buyers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buyerdetail_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buyers as $buyer): ?>
            <tr>
                <td><?= $this->Number->format($buyer->id) ?></td>
                <td><?= $buyer->has('buyerdetail') ? $this->Html->link($buyer->buyerdetail->name, ['controller' => 'Buyerdetails', 'action' => 'view', $buyer->buyerdetail->id]) : '' ?></td>
                <td><?= $buyer->has('user') ? $this->Html->link($buyer->user->id, ['controller' => 'Users', 'action' => 'view', $buyer->user->id]) : '' ?></td>
                <td><?= h($buyer->created) ?></td>
                <td><?= h($buyer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $buyer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $buyer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $buyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyer->id)]) ?>
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
