<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyerdetail[]|\Cake\Collection\CollectionInterface $buyerdetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Buyerdetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buyers'), ['controller' => 'Buyers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyer'), ['controller' => 'Buyers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buyerdetails index large-9 medium-8 columns content">
    <h3><?= __('Buyerdetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buyerdetails as $buyerdetail): ?>
            <tr>
                <td><?= $this->Number->format($buyerdetail->id) ?></td>
                <td><?= h($buyerdetail->name) ?></td>
                <td><?= $this->Number->format($buyerdetail->gender) ?></td>
                <td><?= h($buyerdetail->address) ?></td>
                <td><?= h($buyerdetail->created) ?></td>
                <td><?= h($buyerdetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $buyerdetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $buyerdetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $buyerdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyerdetail->id)]) ?>
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
