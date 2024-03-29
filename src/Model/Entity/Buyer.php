<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Buyer Entity
 *
 * @property int $id
 * @property int $buyerdetail_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Buyerdetail $buyerdetail
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Buyer extends Entity
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
        'buyerdetail_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'buyerdetail' => true,
        'user' => true,
        'transactions' => true,
    ];
}
