<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerInformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerInformationsTable Test Case
 */
class OwnerInformationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerInformationsTable
     */
    public $OwnerInformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_informations',
        'app.regions',
        'app.district_provinces',
        'app.municipality_cities',
        'app.nationalities',
        'app.users',
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
        $config = TableRegistry::exists('OwnerInformations') ? [] : ['className' => OwnerInformationsTable::class];
        $this->OwnerInformations = TableRegistry::get('OwnerInformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerInformations);

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
