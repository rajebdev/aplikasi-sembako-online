<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tscomplete[]|\Cake\Collection\CollectionInterface $tscompletes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tscomplete'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tscompletes index large-9 medium-8 columns content">
    <h3><?= __('Tscompletes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tscompletes as $tscomplete): ?>
            <tr>
                <td><?= $this->Number->format($tscomplete->id) ?></td>
                <td><?= $this->Number->format($tscomplete->date_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tscomplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tscomplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tscomplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tscomplete->id)]) ?>
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
