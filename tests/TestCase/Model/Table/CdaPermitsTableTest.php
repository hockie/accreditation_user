<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CdaPermitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CdaPermitsTable Test Case
 */
class CdaPermitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CdaPermitsTable
     */
    public $CdaPermits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cda_permits',
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
        $config = TableRegistry::exists('CdaPermits') ? [] : ['className' => CdaPermitsTable::class];
        $this->CdaPermits = TableRegistry::get('CdaPermits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CdaPermits);

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
