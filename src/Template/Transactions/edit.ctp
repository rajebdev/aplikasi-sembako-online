<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buyers'), ['controller' => 'Buyers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyer'), ['controller' => 'Buyers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactiondetails'), ['controller' => 'Transactiondetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactiondetail'), ['controller' => 'Transactiondetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactionitems'), ['controller' => 'Transactionitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionitem'), ['controller' => 'Transactionitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions form large-9 medium-8 columns content">
    <?= $this->Form->create($transaction) ?>
    <fieldset>
        <legend><?= __('Edit Transaction') ?></legend>
        <?php
            echo $this->Form->control('buyer_id', ['options' => $buyers]);
            echo $this->Form->control('seller_id', ['options' => $sellers]);
            echo $this->Form->control('transactiondetail_id', ['options' => $transactiondetails]);
            echo $this->Form->control('transactionstatus_id', ['options' => $transactionstatus]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
