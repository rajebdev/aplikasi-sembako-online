<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionsFixture
 */
class TransactionsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'buyer_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'seller_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'transactiondetail_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'transactionstatus_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'buyer_id' => ['type' => 'index', 'columns' => ['buyer_id'], 'length' => []],
            'seller_id' => ['type' => 'index', 'columns' => ['seller_id'], 'length' => []],
            'transactiondetail_id' => ['type' => 'index', 'columns' => ['transactiondetail_id'], 'length' => []],
            'transactionstatus_id' => ['type' => 'index', 'columns' => ['transactionstatus_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'transactions_ibfk_1' => ['type' => 'foreign', 'columns' => ['buyer_id'], 'references' => ['buyers', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactions_ibfk_2' => ['type' => 'foreign', 'columns' => ['seller_id'], 'references' => ['sellers', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactions_ibfk_3' => ['type' => 'foreign', 'columns' => ['transactiondetail_id'], 'references' => ['transactiondetails', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactions_ibfk_4' => ['type' => 'foreign', 'columns' => ['transactionstatus_id'], 'references' => ['transactionstatus', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'buyer_id' => 1,
                'seller_id' => 1,
                'transactiondetail_id' => 1,
                'transactionstatus_id' => 1,
            ],
        ];
        parent::init();
    }
}
