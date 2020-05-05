<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemtype Entity
 *
 * @property int $id
 * @property string $information
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Item[] $items
 */
class Itemtype extends Entity
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
        'information' => true,
        'created' => true,
        'modified' => true,
        'items' => true,
    ];
}
