<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionstatusFixture
 */
class TransactionstatusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'transactionstatus';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tswait_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tspaid_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tsprocess_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tssend_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tsreceive_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tscomplete_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tscancel_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'tswait_id' => ['type' => 'index', 'columns' => ['tswait_id'], 'length' => []],
            'tspaid_id' => ['type' => 'index', 'columns' => ['tspaid_id'], 'length' => []],
            'tsprocess_id' => ['type' => 'index', 'columns' => ['tsprocess_id'], 'length' => []],
            'tssend_id' => ['type' => 'index', 'columns' => ['tssend_id'], 'length' => []],
            'tsreceive_id' => ['type' => 'index', 'columns' => ['tsreceive_id'], 'length' => []],
            'tscomplete_id' => ['type' => 'index', 'columns' => ['tscomplete_id'], 'length' => []],
            'tscancel_id' => ['type' => 'index', 'columns' => ['tscancel_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'transactionstatus_ibfk_1' => ['type' => 'foreign', 'columns' => ['tswait_id'], 'references' => ['tswaits', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_2' => ['type' => 'foreign', 'columns' => ['tspaid_id'], 'references' => ['tspaids', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_3' => ['type' => 'foreign', 'columns' => ['tsprocess_id'], 'references' => ['tsprocesses', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_4' => ['type' => 'foreign', 'columns' => ['tssend_id'], 'references' => ['tssends', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_5' => ['type' => 'foreign', 'columns' => ['tsreceive_id'], 'references' => ['tsreceives', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_6' => ['type' => 'foreign', 'columns' => ['tscomplete_id'], 'references' => ['tscompletes', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'transactionstatus_ibfk_7' => ['type' => 'foreign', 'columns' => ['tscancel_id'], 'references' => ['tscancels', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'tswait_id' => 1,
                'tspaid_id' => 1,
                'tsprocess_id' => 1,
                'tssend_id' => 1,
                'tsreceive_id' => 1,
                'tscomplete_id' => 1,
                'tscancel_id' => 1,
            ],
        ];
        parent::init();
    }
}
