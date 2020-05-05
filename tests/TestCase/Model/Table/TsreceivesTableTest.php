<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TsreceivesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TsreceivesTable Test Case
 */
class TsreceivesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TsreceivesTable
     */
    public $Tsreceives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tsreceives',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tsreceives') ? [] : ['className' => TsreceivesTable::class];
        $this->Tsreceives = TableRegistry::getTableLocator()->get('Tsreceives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tsreceives);

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
