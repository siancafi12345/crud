<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConductoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConductoresTable Test Case
 */
class ConductoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConductoresTable
     */
    public $Conductores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conductores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Conductores') ? [] : ['className' => ConductoresTable::class];
        $this->Conductores = TableRegistry::get('Conductores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Conductores);

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
