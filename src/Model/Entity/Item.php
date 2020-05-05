<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $name
 * @property int $price
 * @property string $detail
 * @property int $amount_of_stock
 * @property bool $on_sale
 * @property \Cake\I18n\FrozenTime $date_of_sell
 * @property string $image_url
 * @property int $itemtype_id
 * @property int $seller_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Itemtype $itemtype
 * @property \App\Model\Entity\Seller $seller
 * @property \App\Model\Entity\Transactionitem[] $transactionitems
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'price' => true,
        'detail' => true,
        'amount_of_stock' => true,
        'on_sale' => true,
        'date_of_sell' => true,
        'image_url' => true,
        'itemtype_id' => true,
        'seller_id' => true,
        'created' => true,
        'modified' => true,
        'itemtype' => true,
        'seller' => true,
        'transactionitems' => true,
    ];
}
