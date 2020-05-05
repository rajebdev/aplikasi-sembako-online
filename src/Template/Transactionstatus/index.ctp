<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionstatus[]|\Cake\Collection\CollectionInterface $transactionstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tswaits'), ['controller' => 'Tswaits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tswait'), ['controller' => 'Tswaits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tspaids'), ['controller' => 'Tspaids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tspaid'), ['controller' => 'Tspaids', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tsprocesses'), ['controller' => 'Tsprocesses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tsprocess'), ['controller' => 'Tsprocesses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tssends'), ['controller' => 'Tssends', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tssend'), ['controller' => 'Tssends', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tsreceives'), ['controller' => 'Tsreceives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tsreceife'), ['controller' => 'Tsreceives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tscompletes'), ['controller' => 'Tscompletes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tscomplete'), ['controller' => 'Tscompletes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tscancels'), ['controller' => 'Tscancels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tscancel'), ['controller' => 'Tscancels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactionstatus index large-9 medium-8 columns content">
    <h3><?= __('Transactionstatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tswait_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tspaid_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tsprocess_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tssend_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tsreceive_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tscomplete_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tscancel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactionstatus as $transactionstatus): ?>
            <tr>
                <td><?= $this->Number->format($transactionstatus->id) ?></td>
                <td><?= $transactionstatus->has('tswait') ? $this->Html->link($transactionstatus->tswait->id, ['controller' => 'Tswaits', 'action' => 'view', $transactionstatus->tswait->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tspaid') ? $this->Html->link($transactionstatus->tspaid->id, ['controller' => 'Tspaids', 'action' => 'view', $transactionstatus->tspaid->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tsprocess') ? $this->Html->link($transactionstatus->tsprocess->id, ['controller' => 'Tsprocesses', 'action' => 'view', $transactionstatus->tsprocess->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tssend') ? $this->Html->link($transactionstatus->tssend->id, ['controller' => 'Tssends', 'action' => 'view', $transactionstatus->tssend->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tsreceife') ? $this->Html->link($transactionstatus->tsreceife->id, ['controller' => 'Tsreceives', 'action' => 'view', $transactionstatus->tsreceife->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tscomplete') ? $this->Html->link($transactionstatus->tscomplete->id, ['controller' => 'Tscompletes', 'action' => 'view', $transactionstatus->tscomplete->id]) : '' ?></td>
                <td><?= $transactionstatus->has('tscancel') ? $this->Html->link($transactionstatus->tscancel->id, ['controller' => 'Tscancels', 'action' => 'view', $transactionstatus->tscancel->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transactionstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionstatus->id)]) ?>
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
