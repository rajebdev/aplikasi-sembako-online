<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TscompletesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TscompletesTable Test Case
 */
class TscompletesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TscompletesTable
     */
    public $Tscompletes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tscompletes',
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
        $config = TableRegistry::getTableLocator()->exists('Tscompletes') ? [] : ['className' => TscompletesTable::class];
        $this->Tscompletes = TableRegistry::getTableLocator()->get('Tscompletes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tscompletes);

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
