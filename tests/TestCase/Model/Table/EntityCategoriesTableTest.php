<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntityCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntityCategoriesTable Test Case
 */
class EntityCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntityCategoriesTable
     */
    public $EntityCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entity_categories',
        'app.entity_category_types',
        'app.entity_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EntityCategories') ? [] : ['className' => EntityCategoriesTable::class];
        $this->EntityCategories = TableRegistry::get('EntityCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntityCategories);

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
