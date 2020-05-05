<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $buyer_id
 * @property int $seller_id
 * @property int $transactiondetail_id
 * @property int $transactionstatus_id
 *
 * @property \App\Model\Entity\Buyer $buyer
 * @property \App\Model\Entity\Seller $seller
 * @property \App\Model\Entity\Transactiondetail $transactiondetail
 * @property \App\Model\Entity\Transactionstatus $transactionstatus
 * @property \App\Model\Entity\Transactionitem[] $transactionitems
 */
class Transaction extends Entity
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
        'buyer_id' => true,
        'seller_id' => true,
        'transactiondetail_id' => true,
        'transactionstatus_id' => true,
        'buyer' => true,
        'seller' => true,
        'transactiondetail' => true,
        'transactionstatus' => true,
        'transactionitems' => true,
    ];
}
