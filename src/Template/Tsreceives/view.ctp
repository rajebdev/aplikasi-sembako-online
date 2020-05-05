<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tsreceife $tsreceife
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tsreceife'), ['action' => 'edit', $tsreceife->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tsreceife'), ['action' => 'delete', $tsreceife->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tsreceife->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tsreceives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tsreceife'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tsreceives view large-9 medium-8 columns content">
    <h3><?= h($tsreceife->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tsreceife->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Status') ?></th>
            <td><?= h($tsreceife->date_status) ?></td>
        </tr>
    </table>
</div>
