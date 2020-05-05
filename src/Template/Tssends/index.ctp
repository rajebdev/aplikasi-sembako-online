<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tssend[]|\Cake\Collection\CollectionInterface $tssends
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tssend'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tssends index large-9 medium-8 columns content">
    <h3><?= __('Tssends') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tssends as $tssend): ?>
            <tr>
                <td><?= $this->Number->format($tssend->id) ?></td>
                <td><?= h($tssend->date_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tssend->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tssend->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tssend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tssend->id)]) ?>
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
