<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyerdetail $buyerdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Buyerdetail'), ['action' => 'edit', $buyerdetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Buyerdetail'), ['action' => 'delete', $buyerdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyerdetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buyerdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyerdetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buyers'), ['controller' => 'Buyers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyer'), ['controller' => 'Buyers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buyerdetails view large-9 medium-8 columns content">
    <h3><?= h($buyerdetail->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($buyerdetail->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($buyerdetail->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($buyerdetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $this->Number->format($buyerdetail->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($buyerdetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($buyerdetail->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Buyers') ?></h4>
        <?php if (!empty($buyerdetail->buyers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Buyerdetail Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($buyerdetail->buyers as $buyers): ?>
            <tr>
                <td><?= h($buyers->id) ?></td>
                <td><?= h($buyers->buyerdetail_id) ?></td>
                <td><?= h($buyers->user_id) ?></td>
                <td><?= h($buyers->created) ?></td>
                <td><?= h($buyers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Buyers', 'action' => 'view', $buyers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Buyers', 'action' => 'edit', $buyers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Buyers', 'action' => 'delete', $buyers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
