<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountIdentifiersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountIdentifiersTable Test Case
 */
class AccountIdentifiersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountIdentifiersTable
     */
    public $AccountIdentifiers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.account_identifiers',
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
        $config = TableRegistry::exists('AccountIdentifiers') ? [] : ['className' => AccountIdentifiersTable::class];
        $this->AccountIdentifiers = TableRegistry::get('AccountIdentifiers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountIdentifiers);

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
}
