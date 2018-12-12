<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionsTable Test Case
 */
class RegionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionsTable
     */
    public $Regions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regions',
        'app.establishment_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Regions') ? [] : ['className' => RegionsTable::class];
        $this->Regions = TableRegistry::get('Regions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Regions);

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
