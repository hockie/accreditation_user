<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MayorPermitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MayorPermitsTable Test Case
 */
class MayorPermitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MayorPermitsTable
     */
    public $MayorPermits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mayor_permits',
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
        $config = TableRegistry::exists('MayorPermits') ? [] : ['className' => MayorPermitsTable::class];
        $this->MayorPermits = TableRegistry::get('MayorPermits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MayorPermits);

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
