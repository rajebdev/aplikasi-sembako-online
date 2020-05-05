<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tscancel $tscancel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tscancel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tscancel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tscancels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tscancels form large-9 medium-8 columns content">
    <?= $this->Form->create($tscancel) ?>
    <fieldset>
        <legend><?= __('Edit Tscancel') ?></legend>
        <?php
            echo $this->Form->control('date_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
