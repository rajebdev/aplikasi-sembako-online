<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TsprocessesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TsprocessesTable Test Case
 */
class TsprocessesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TsprocessesTable
     */
    public $Tsprocesses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tsprocesses',
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
        $config = TableRegistry::getTableLocator()->exists('Tsprocesses') ? [] : ['className' => TsprocessesTable::class];
        $this->Tsprocesses = TableRegistry::getTableLocator()->get('Tsprocesses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tsprocesses);

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
