<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExamTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExamTypesTable Test Case
 */
class ExamTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExamTypesTable
     */
    protected $ExamTypes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ExamTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ExamTypes') ? [] : ['className' => ExamTypesTable::class];
        $this->ExamTypes = $this->getTableLocator()->get('ExamTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ExamTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExamTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
