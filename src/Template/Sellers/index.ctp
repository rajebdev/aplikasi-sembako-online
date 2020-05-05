<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seller[]|\Cake\Collection\CollectionInterface $sellers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seller'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sellerdetails'), ['controller' => 'Sellerdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellerdetail'), ['controller' => 'Sellerdetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellers index large-9 medium-8 columns content">
    <h3><?= __('Sellers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sellerdetail_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellers as $seller): ?>
            <tr>
                <td><?= $this->Number->format($seller->id) ?></td>
                <td><?= $seller->has('sellerdetail') ? $this->Html->link($seller->sellerdetail->name, ['controller' => 'Sellerdetails', 'action' => 'view', $seller->sellerdetail->id]) : '' ?></td>
                <td><?= $seller->has('user') ? $this->Html->link($seller->user->id, ['controller' => 'Users', 'action' => 'view', $seller->user->id]) : '' ?></td>
                <td><?= h($seller->created) ?></td>
                <td><?= h($seller->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seller->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seller->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seller->id)]) ?>
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
