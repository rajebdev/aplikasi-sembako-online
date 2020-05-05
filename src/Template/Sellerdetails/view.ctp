<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellerdetail $sellerdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sellerdetail'), ['action' => 'edit', $sellerdetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sellerdetail'), ['action' => 'delete', $sellerdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sellerdetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sellerdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sellerdetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sellerdetails view large-9 medium-8 columns content">
    <h3><?= h($sellerdetail->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sellerdetail->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($sellerdetail->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Telp') ?></th>
            <td><?= h($sellerdetail->no_telp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sellerdetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sellerdetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sellerdetail->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sellers') ?></h4>
        <?php if (!empty($sellerdetail->sellers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sellerdetail Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sellerdetail->sellers as $sellers): ?>
            <tr>
                <td><?= h($sellers->id) ?></td>
                <td><?= h($sellers->sellerdetail_id) ?></td>
                <td><?= h($sellers->user_id) ?></td>
                <td><?= h($sellers->created) ?></td>
                <td><?= h($sellers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sellers', 'action' => 'view', $sellers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sellers', 'action' => 'edit', $sellers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sellers', 'action' => 'delete', $sellers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sellers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
