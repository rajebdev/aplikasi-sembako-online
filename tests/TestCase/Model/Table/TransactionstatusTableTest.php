<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionstatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionstatusTable Test Case
 */
class TransactionstatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactionstatusTable
     */
    public $Transactionstatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Transactionstatus',
        'app.Tswaits',
        'app.Tspaids',
        'app.Tsprocesses',
        'app.Tssends',
        'app.Tsreceives',
        'app.Tscompletes',
        'app.Tscancels',
        'app.Transactions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Transactionstatus') ? [] : ['className' => TransactionstatusTable::class];
        $this->Transactionstatus = TableRegistry::getTableLocator()->get('Transactionstatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transactionstatus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
