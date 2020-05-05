<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemtypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemtypesTable Test Case
 */
class ItemtypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemtypesTable
     */
    public $Itemtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Itemtypes',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Itemtypes') ? [] : ['className' => ItemtypesTable::class];
        $this->Itemtypes = TableRegistry::getTableLocator()->get('Itemtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Itemtypes);

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
