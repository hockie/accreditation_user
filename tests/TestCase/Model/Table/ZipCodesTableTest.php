<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZipCodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZipCodesTable Test Case
 */
class ZipCodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ZipCodesTable
     */
    public $ZipCodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.zip_codes',
        'app.municipality_cities',
        'app.district_provinces',
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
        $config = TableRegistry::exists('ZipCodes') ? [] : ['className' => ZipCodesTable::class];
        $this->ZipCodes = TableRegistry::get('ZipCodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ZipCodes);

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
