<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sellerdetail Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $no_telp
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Seller[] $sellers
 */
class Sellerdetail extends Entity
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
        'address' => true,
        'no_telp' => true,
        'created' => true,
        'modified' => true,
        'sellers' => true,
    ];
}
