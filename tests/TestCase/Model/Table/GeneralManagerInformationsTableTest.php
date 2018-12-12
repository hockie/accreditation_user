<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralManagerInformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralManagerInformationsTable Test Case
 */
class GeneralManagerInformationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralManagerInformationsTable
     */
    public $GeneralManagerInformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.general_manager_informations',
        'app.nationalities',
        'app.establishments',
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
        $config = TableRegistry::exists('GeneralManagerInformations') ? [] : ['className' => GeneralManagerInformationsTable::class];
        $this->GeneralManagerInformations = TableRegistry::get('GeneralManagerInformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeneralManagerInformations);

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
