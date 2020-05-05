<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Buyerdetail Entity
 *
 * @property int $id
 * @property string $name
 * @property int $gender
 * @property string $address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Buyer[] $buyers
 */
class Buyerdetail extends Entity
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
        'gender' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'buyers' => true,
    ];
}
