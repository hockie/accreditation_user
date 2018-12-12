<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManagingCompanyInformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManagingCompanyInformationsTable Test Case
 */
class ManagingCompanyInformationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ManagingCompanyInformationsTable
     */
    public $ManagingCompanyInformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.managing_company_informations',
        'app.regions',
        'app.district_provinces',
        'app.municipality_cities',
        'app.zip_codes',
        'app.users',
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
        $config = TableRegistry::exists('ManagingCompanyInformations') ? [] : ['className' => ManagingCompanyInformationsTable::class];
        $this->ManagingCompanyInformations = TableRegistry::get('ManagingCompanyInformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ManagingCompanyInformations);

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
