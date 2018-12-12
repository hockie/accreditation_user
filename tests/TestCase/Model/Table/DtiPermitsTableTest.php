<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtiPermitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtiPermitsTable Test Case
 */
class DtiPermitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtiPermitsTable
     */
    public $DtiPermits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dti_permits',
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
        $config = TableRegistry::exists('DtiPermits') ? [] : ['className' => DtiPermitsTable::class];
        $this->DtiPermits = TableRegistry::get('DtiPermits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtiPermits);

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
