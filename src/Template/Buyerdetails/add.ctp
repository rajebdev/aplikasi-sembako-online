<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyerdetail $buyerdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Buyerdetails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buyers'), ['controller' => 'Buyers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyer'), ['controller' => 'Buyers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buyerdetails form large-9 medium-8 columns content">
    <?= $this->Form->create($buyerdetail) ?>
    <fieldset>
        <legend><?= __('Add Buyerdetail') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
