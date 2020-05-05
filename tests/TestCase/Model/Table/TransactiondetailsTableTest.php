<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactiondetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactiondetailsTable Test Case
 */
class TransactiondetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactiondetailsTable
     */
    public $Transactiondetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Transactiondetails',
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
        $config = TableRegistry::getTableLocator()->exists('Transactiondetails') ? [] : ['className' => TransactiondetailsTable::class];
        $this->Transactiondetails = TableRegistry::getTableLocator()->get('Transactiondetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transactiondetails);

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
}
