<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorizedRepresentativesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorizedRepresentativesTable Test Case
 */
class AuthorizedRepresentativesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorizedRepresentativesTable
     */
    public $AuthorizedRepresentatives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authorized_representatives',
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
        $config = TableRegistry::exists('AuthorizedRepresentatives') ? [] : ['className' => AuthorizedRepresentativesTable::class];
        $this->AuthorizedRepresentatives = TableRegistry::get('AuthorizedRepresentatives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorizedRepresentatives);

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