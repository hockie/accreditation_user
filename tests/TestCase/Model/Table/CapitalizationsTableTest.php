<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CapitalizationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CapitalizationsTable Test Case
 */
class CapitalizationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CapitalizationsTable
     */
    public $Capitalizations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.capitalizations',
        'app.establishments',
        'app.nationalities',
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
        $config = TableRegistry::exists('Capitalizations') ? [] : ['className' => CapitalizationsTable::class];
        $this->Capitalizations = TableRegistry::get('Capitalizations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Capitalizations);

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
