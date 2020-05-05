<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TscancelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TscancelsTable Test Case
 */
class TscancelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TscancelsTable
     */
    public $Tscancels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tscancels',
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
        $config = TableRegistry::getTableLocator()->exists('Tscancels') ? [] : ['className' => TscancelsTable::class];
        $this->Tscancels = TableRegistry::getTableLocator()->get('Tscancels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tscancels);

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
