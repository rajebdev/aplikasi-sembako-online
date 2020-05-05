<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transactionitem Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $amount_items
 * @property int $total_price
 * @property int $transaction_id
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Transaction $transaction
 */
class Transactionitem extends Entity
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
        'item_id' => true,
        'amount_items' => true,
        'total_price' => true,
        'transaction_id' => true,
        'item' => true,
        'transaction' => true,
    ];
}
