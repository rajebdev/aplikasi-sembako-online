<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tssend $tssend
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tssend'), ['action' => 'edit', $tssend->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tssend'), ['action' => 'delete', $tssend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tssend->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tssends'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tssend'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tssends view large-9 medium-8 columns content">
    <h3><?= h($tssend->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tssend->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Status') ?></th>
            <td><?= h($tssend->date_status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactionstatus') ?></h4>
        <?php if (!empty($tssend->transactionstatus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tswait Id') ?></th>
                <th scope="col"><?= __('Tspaid Id') ?></th>
                <th scope="col"><?= __('Tsprocess Id') ?></th>
                <th scope="col"><?= __('Tssend Id') ?></th>
                <th scope="col"><?= __('Tsreceive Id') ?></th>
                <th scope="col"><?= __('Tscomplete Id') ?></th>
                <th scope="col"><?= __('Tscancel Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tssend->transactionstatus as $transactionstatus): ?>
            <tr>
                <td><?= h($transactionstatus->id) ?></td>
                <td><?= h($transactionstatus->tswait_id) ?></td>
                <td><?= h($transactionstatus->tspaid_id) ?></td>
                <td><?= h($transactionstatus->tsprocess_id) ?></td>
                <td><?= h($transactionstatus->tssend_id) ?></td>
                <td><?= h($transactionstatus->tsreceive_id) ?></td>
                <td><?= h($transactionstatus->tscomplete_id) ?></td>
                <td><?= h($transactionstatus->tscancel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactionstatus', 'action' => 'view', $transactionstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactionstatus', 'action' => 'edit', $transactionstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactionstatus', 'action' => 'delete', $transactionstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionstatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
