<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EstablishmentAccountsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EstablishmentAccountsController Test Case
 */
class EstablishmentAccountsControllerTest extends IntegrationTestCase
{

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
        'app.entity_category_types',
        'app.mayor_permits',
        'app.dti_permits',
        'app.sec_permits',
        'app.cda_permits'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
