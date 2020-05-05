<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TssendsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TssendsTable Test Case
 */
class TssendsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TssendsTable
     */
    public $Tssends;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tssends',
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
        $config = TableRegistry::getTableLocator()->exists('Tssends') ? [] : ['className' => TssendsTable::class];
        $this->Tssends = TableRegistry::getTableLocator()->get('Tssends', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tssends);

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
