<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactiondetail $transactiondetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Transactiondetails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactiondetails form large-9 medium-8 columns content">
    <?= $this->Form->create($transactiondetail) ?>
    <fieldset>
        <legend><?= __('Add Transactiondetail') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('payment_amount');
            echo $this->Form->control('total_item');
            echo $this->Form->control('buyer_note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
