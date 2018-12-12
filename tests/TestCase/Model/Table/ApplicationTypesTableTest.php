<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationTypesTable Test Case
 */
class ApplicationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationTypesTable
     */
    public $ApplicationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.application_types',
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
        $config = TableRegistry::exists('ApplicationTypes') ? [] : ['className' => ApplicationTypesTable::class];
        $this->ApplicationTypes = TableRegistry::get('ApplicationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApplicationTypes);

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
