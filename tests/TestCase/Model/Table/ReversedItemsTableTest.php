<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReversedItemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReversedItemsTable Test Case
 */
class ReversedItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReversedItemsTable
     */
    protected $ReversedItems;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ReversedItems',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ReversedItems') ? [] : ['className' => ReversedItemsTable::class];
        $this->ReversedItems = $this->getTableLocator()->get('ReversedItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ReversedItems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReversedItemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ReversedItemsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
