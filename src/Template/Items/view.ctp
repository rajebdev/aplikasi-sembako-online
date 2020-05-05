<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['controller' => 'Itemtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['controller' => 'Itemtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellers'), ['controller' => 'Sellers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seller'), ['controller' => 'Sellers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactionitems'), ['controller' => 'Transactionitems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transactionitem'), ['controller' => 'Transactionitems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Itemtype') ?></th>
            <td><?= $item->has('itemtype') ? $this->Html->link($item->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $item->itemtype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seller') ?></th>
            <td><?= $item->has('seller') ? $this->Html->link($item->seller->id, ['controller' => 'Sellers', 'action' => 'view', $item->seller->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= $this->Number->format($item->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($item->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Of Stock') ?></th>
            <td><?= $this->Number->format($item->amount_of_stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Sell') ?></th>
            <td><?= h($item->date_of_sell) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('On Sale') ?></th>
            <td><?= $item->on_sale ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($item->detail)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image Url') ?></h4>
        <?= $this->Text->autoParagraph(h($item->image_url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactionitems') ?></h4>
        <?php if (!empty($item->transactionitems)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Amount Items') ?></th>
                <th scope="col"><?= __('Total Price') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->transactionitems as $transactionitems): ?>
            <tr>
                <td><?= h($transactionitems->id) ?></td>
                <td><?= h($transactionitems->item_id) ?></td>
                <td><?= h($transactionitems->amount_items) ?></td>
                <td><?= h($transactionitems->total_price) ?></td>
                <td><?= h($transactionitems->transaction_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactionitems', 'action' => 'view', $transactionitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactionitems', 'action' => 'edit', $transactionitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactionitems', 'action' => 'delete', $transactionitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
