<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntityTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntityTypesTable Test Case
 */
class EntityTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntityTypesTable
     */
    public $EntityTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entity_types',
        'app.entity_categories',
        'app.establishment_accounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EntityTypes') ? [] : ['className' => EntityTypesTable::class];
        $this->EntityTypes = TableRegistry::get('EntityTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntityTypes);

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
