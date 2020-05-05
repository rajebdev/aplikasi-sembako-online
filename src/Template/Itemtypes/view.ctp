<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itemtype $itemtype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Itemtype'), ['action' => 'edit', $itemtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itemtype'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemtypes view large-9 medium-8 columns content">
    <h3><?= h($itemtype->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemtype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($itemtype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($itemtype->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Information') ?></h4>
        <?= $this->Text->autoParagraph(h($itemtype->information)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($itemtype->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Amount Of Stock') ?></th>
                <th scope="col"><?= __('On Sale') ?></th>
                <th scope="col"><?= __('Date Of Sell') ?></th>
                <th scope="col"><?= __('Image Url') ?></th>
                <th scope="col"><?= __('Itemtype Id') ?></th>
                <th scope="col"><?= __('Seller Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($itemtype->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->price) ?></td>
                <td><?= h($items->detail) ?></td>
                <td><?= h($items->amount_of_stock) ?></td>
                <td><?= h($items->on_sale) ?></td>
                <td><?= h($items->date_of_sell) ?></td>
                <td><?= h($items->image_url) ?></td>
                <td><?= h($items->itemtype_id) ?></td>
                <td><?= h($items->seller_id) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
