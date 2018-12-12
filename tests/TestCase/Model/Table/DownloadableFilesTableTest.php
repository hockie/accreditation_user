<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DownloadableFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DownloadableFilesTable Test Case
 */
class DownloadableFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DownloadableFilesTable
     */
    public $DownloadableFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.downloadable_files',
        'app.document_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DownloadableFiles') ? [] : ['className' => DownloadableFilesTable::class];
        $this->DownloadableFiles = TableRegistry::get('DownloadableFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DownloadableFiles);

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
