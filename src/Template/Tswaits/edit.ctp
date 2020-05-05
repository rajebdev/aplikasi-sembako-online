<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tswait $tswait
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tswait->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tswait->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tswaits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transactionstatus'), ['controller' => 'Transactionstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tswaits form large-9 medium-8 columns content">
    <?= $this->Form->create($tswait) ?>
    <fieldset>
        <legend><?= __('Edit Tswait') ?></legend>
        <?php
            echo $this->Form->control('date_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
