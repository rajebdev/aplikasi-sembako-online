<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transactionstatus Entity
 *
 * @property int $id
 * @property int $tswait_id
 * @property int $tspaid_id
 * @property int $tsprocess_id
 * @property int $tssend_id
 * @property int $tsreceive_id
 * @property int $tscomplete_id
 * @property int $tscancel_id
 *
 * @property \App\Model\Entity\Tswait $tswait
 * @property \App\Model\Entity\Tspaid $tspaid
 * @property \App\Model\Entity\Tsprocess $tsprocess
 * @property \App\Model\Entity\Tssend $tssend
 * @property \App\Model\Entity\Tsreceife $tsreceife
 * @property \App\Model\Entity\Tscomplete $tscomplete
 * @property \App\Model\Entity\Tscancel $tscancel
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Transactionstatus extends Entity
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
        'tswait_id' => true,
        'tspaid_id' => true,
        'tsprocess_id' => true,
        'tssend_id' => true,
        'tsreceive_id' => true,
        'tscomplete_id' => true,
        'tscancel_id' => true,
        'tswait' => true,
        'tspaid' => true,
        'tsprocess' => true,
        'tssend' => true,
        'tsreceife' => true,
        'tscomplete' => true,
        'tscancel' => true,
        'transactions' => true,
    ];
}
