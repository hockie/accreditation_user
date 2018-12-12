<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstablishmentAccountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstablishmentAccountsTable Test Case
 */
class EstablishmentAccountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstablishmentAccountsTable
     */
    public $EstablishmentAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.establishment_accounts',
        'app.establishment_details',
        'app.owner_informations',
        'app.managing_company_informations',
        'app.general_manager_informations',
        'app.capitalizations',
        'app.authorized_representatives',
        'app.entity_types',
        'app.entity_categories',
        'app.entity_category_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstablishmentAccounts') ? [] : ['className' => EstablishmentAccountsTable::class];
        $this->EstablishmentAccounts = TableRegistry::get('EstablishmentAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablishmentAccounts);

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
