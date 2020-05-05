<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactionstatus $transactionstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tswaits'), ['controller' => 'Tswaits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tswait'), ['controller' => 'Tswaits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tspaids'), ['controller' => 'Tspaids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tspaid'), ['controller' => 'Tspaids', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tsprocesses'), ['controller' => 'Tsprocesses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tsprocess'), ['controller' => 'Tsprocesses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tssends'), ['controller' => 'Tssends', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tssend'), ['controller' => 'Tssends', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tsreceives'), ['controller' => 'Tsreceives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tsreceife'), ['controller' => 'Tsreceives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tscompletes'), ['controller' => 'Tscompletes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tscomplete'), ['controller' => 'Tscompletes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tscancels'), ['controller' => 'Tscancels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tscancel'), ['controller' => 'Tscancels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactionstatus form large-9 medium-8 columns content">
    <?= $this->Form->create($transactionstatus) ?>
    <fieldset>
        <legend><?= __('Add Transactionstatus') ?></legend>
        <?php
            echo $this->Form->control('tswait_id', ['options' => $tswaits]);
            echo $this->Form->control('tspaid_id', ['options' => $tspaids]);
            echo $this->Form->control('tsprocess_id', ['options' => $tsprocesses]);
            echo $this->Form->control('tssend_id', ['options' => $tssends]);
            echo $this->Form->control('tsreceive_id', ['options' => $tsreceives]);
            echo $this->Form->control('tscomplete_id', ['options' => $tscompletes]);
            echo $this->Form->control('tscancel_id', ['options' => $tscancels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
