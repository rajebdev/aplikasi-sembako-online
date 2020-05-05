<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionstatus $transactionstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transactionstatus'), ['action' => 'edit', $transactionstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transactionstatus'), ['action' => 'delete', $transactionstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tswaits'), ['controller' => 'Tswaits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tswait'), ['controller' => 'Tswaits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tspaids'), ['controller' => 'Tspaids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tspaid'), ['controller' => 'Tspaids', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tsprocesses'), ['controller' => 'Tsprocesses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tsprocess'), ['controller' => 'Tsprocesses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tssends'), ['controller' => 'Tssends', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tssend'), ['controller' => 'Tssends', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tsreceives'), ['controller' => 'Tsreceives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tsreceife'), ['controller' => 'Tsreceives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tscompletes'), ['controller' => 'Tscompletes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tscomplete'), ['controller' => 'Tscompletes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tscancels'), ['controller' => 'Tscancels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tscancel'), ['controller' => 'Tscancels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactionstatus view large-9 medium-8 columns content">
    <h3><?= h($transactionstatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tswait') ?></th>
            <td><?= $transactionstatus->has('tswait') ? $this->Html->link($transactionstatus->tswait->id, ['controller' => 'Tswaits', 'action' => 'view', $transactionstatus->tswait->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tspaid') ?></th>
            <td><?= $transactionstatus->has('tspaid') ? $this->Html->link($transactionstatus->tspaid->id, ['controller' => 'Tspaids', 'action' => 'view', $transactionstatus->tspaid->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tsprocess') ?></th>
            <td><?= $transactionstatus->has('tsprocess') ? $this->Html->link($transactionstatus->tsprocess->id, ['controller' => 'Tsprocesses', 'action' => 'view', $transactionstatus->tsprocess->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tssend') ?></th>
            <td><?= $transactionstatus->has('tssend') ? $this->Html->link($transactionstatus->tssend->id, ['controller' => 'Tssends', 'action' => 'view', $transactionstatus->tssend->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tsreceife') ?></th>
            <td><?= $transactionstatus->has('tsreceife') ? $this->Html->link($transactionstatus->tsreceife->id, ['controller' => 'Tsreceives', 'action' => 'view', $transactionstatus->tsreceife->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tscomplete') ?></th>
            <td><?= $transactionstatus->has('tscomplete') ? $this->Html->link($transactionstatus->tscomplete->id, ['controller' => 'Tscompletes', 'action' => 'view', $transactionstatus->tscomplete->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tscancel') ?></th>
            <td><?= $transactionstatus->has('tscancel') ? $this->Html->link($transactionstatus->tscancel->id, ['controller' => 'Tscancels', 'action' => 'view', $transactionstatus->tscancel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transactionstatus->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($transactionstatus->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Buyer Id') ?></th>
                <th scope="col"><?= __('Seller Id') ?></th>
                <th scope="col"><?= __('Transactiondetail Id') ?></th>
                <th scope="col"><?= __('Transactionstatus Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transactionstatus->transactions as $transactions): ?>
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
