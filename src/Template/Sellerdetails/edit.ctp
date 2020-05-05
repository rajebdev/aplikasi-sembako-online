<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellerdetail $sellerdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sellerdetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sellerdetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sellerdetails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellerdetails form large-9 medium-8 columns content">
    <?= $this->Form->create($sellerdetail) ?>
    <fieldset>
        <legend><?= __('Edit Sellerdetail') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('no_telp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
