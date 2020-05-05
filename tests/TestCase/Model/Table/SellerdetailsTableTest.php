<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SellerdetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SellerdetailsTable Test Case
 */
class SellerdetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SellerdetailsTable
     */
    public $Sellerdetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sellerdetails',
        'app.Sellers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sellerdetails') ? [] : ['className' => SellerdetailsTable::class];
        $this->Sellerdetails = TableRegistry::getTableLocator()->get('Sellerdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sellerdetails);

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
