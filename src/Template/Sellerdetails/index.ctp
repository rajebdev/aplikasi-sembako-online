<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellerdetail[]|\Cake\Collection\CollectionInterface $sellerdetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sellerdetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellerdetails index large-9 medium-8 columns content">
    <h3><?= __('Sellerdetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_telp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellerdetails as $sellerdetail): ?>
            <tr>
                <td><?= $this->Number->format($sellerdetail->id) ?></td>
                <td><?= h($sellerdetail->name) ?></td>
                <td><?= h($sellerdetail->address) ?></td>
                <td><?= h($sellerdetail->no_telp) ?></td>
                <td><?= h($sellerdetail->created) ?></td>
                <td><?= h($sellerdetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sellerdetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sellerdetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sellerdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sellerdetail->id)]) ?>
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
