<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tsreceife $tsreceife
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tsreceife->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tsreceife->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tsreceives'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tsreceives form large-9 medium-8 columns content">
    <?= $this->Form->create($tsreceife) ?>
    <fieldset>
        <legend><?= __('Edit Tsreceife') ?></legend>
        <?php
            echo $this->Form->control('date_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
