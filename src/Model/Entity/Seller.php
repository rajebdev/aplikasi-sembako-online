<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seller Entity
 *
 * @property int $id
 * @property int $sellerdetail_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sellerdetail $sellerdetail
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Seller extends Entity
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
        'sellerdetail_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'sellerdetail' => true,
        'user' => true,
        'items' => true,
        'transactions' => true,
    ];
}
