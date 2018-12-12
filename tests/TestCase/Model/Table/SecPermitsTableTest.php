<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SecPermitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SecPermitsTable Test Case
 */
class SecPermitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SecPermitsTable
     */
    public $SecPermits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sec_permits',
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
        $config = TableRegistry::exists('SecPermits') ? [] : ['className' => SecPermitsTable::class];
        $this->SecPermits = TableRegistry::get('SecPermits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SecPermits);

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
