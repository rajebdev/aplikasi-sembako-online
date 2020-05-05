<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BuyerdetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BuyerdetailsTable Test Case
 */
class BuyerdetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BuyerdetailsTable
     */
    public $Buyerdetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Buyerdetails',
        'app.Buyers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Buyerdetails') ? [] : ['className' => BuyerdetailsTable::class];
        $this->Buyerdetails = TableRegistry::getTableLocator()->get('Buyerdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Buyerdetails);

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
