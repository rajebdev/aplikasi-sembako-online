<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TspaidsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TspaidsTable Test Case
 */
class TspaidsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TspaidsTable
     */
    public $Tspaids;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tspaids',
        'app.Transactionstatus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tspaids') ? [] : ['className' => TspaidsTable::class];
        $this->Tspaids = TableRegistry::getTableLocator()->get('Tspaids', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tspaids);

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
