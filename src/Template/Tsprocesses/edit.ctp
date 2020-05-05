<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tsprocess $tsprocess
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tsprocess->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tsprocess->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tsprocesses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tsprocesses form large-9 medium-8 columns content">
    <?= $this->Form->create($tsprocess) ?>
    <fieldset>
        <legend><?= __('Edit Tsprocess') ?></legend>
        <?php
            echo $this->Form->control('date_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
