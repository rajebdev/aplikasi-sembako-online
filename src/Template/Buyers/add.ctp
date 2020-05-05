<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyer $buyer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Buyers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buyerdetails'), ['controller' => 'Buyerdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyerdetail'), ['controller' => 'Buyerdetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buyers form large-9 medium-8 columns content">
    <?= $this->Form->create($buyer) ?>
    <fieldset>
        <legend><?= __('Add Buyer') ?></legend>
        <?php
            echo $this->Form->control('buyerdetail_id', ['options' => $buyerdetails]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
