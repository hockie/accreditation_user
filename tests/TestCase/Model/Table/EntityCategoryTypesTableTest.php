<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntityCategoryTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntityCategoryTypesTable Test Case
 */
class EntityCategoryTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntityCategoryTypesTable
     */
    public $EntityCategoryTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entity_category_types',
        'app.entity_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EntityCategoryTypes') ? [] : ['className' => EntityCategoryTypesTable::class];
        $this->EntityCategoryTypes = TableRegistry::get('EntityCategoryTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntityCategoryTypes);

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
