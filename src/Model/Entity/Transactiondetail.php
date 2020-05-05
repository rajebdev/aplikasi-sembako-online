<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transactiondetail Entity
 *
 * @property int $id
 * @property int $code
 * @property int $payment_amount
 * @property int $total_item
 * @property string $buyer_note
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Transactiondetail extends Entity
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
        'code' => true,
        'payment_amount' => true,
        'total_item' => true,
        'buyer_note' => true,
        'created' => true,
        'modified' => true,
        'transactions' => true,
    ];
}
