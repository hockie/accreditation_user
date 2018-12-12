<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MunicipalityCitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MunicipalityCitiesTable Test Case
 */
class MunicipalityCitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MunicipalityCitiesTable
     */
    public $MunicipalityCities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.municipality_cities',
        'app.district_provinces',
        'app.establishment_details',
        'app.owner_informations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MunicipalityCities') ? [] : ['className' => MunicipalityCitiesTable::class];
        $this->MunicipalityCities = TableRegistry::get('MunicipalityCities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MunicipalityCities);

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
