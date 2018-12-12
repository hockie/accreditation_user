<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstablishmentDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstablishmentDetailsTable Test Case
 */
class EstablishmentDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstablishmentDetailsTable
     */
    public $EstablishmentDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.establishment_details',
        'app.regions',
        'app.district_provinces',
        'app.municipality_cities',
        'app.zip_codes',
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
        $config = TableRegistry::exists('EstablishmentDetails') ? [] : ['className' => EstablishmentDetailsTable::class];
        $this->EstablishmentDetails = TableRegistry::get('EstablishmentDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablishmentDetails);

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
