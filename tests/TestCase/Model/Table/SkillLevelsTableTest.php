<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SkillLevelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SkillLevelsTable Test Case
 */
class SkillLevelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SkillLevelsTable
     */
    protected $SkillLevels;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SkillLevels',
        'app.Skills',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SkillLevels') ? [] : ['className' => SkillLevelsTable::class];
        $this->SkillLevels = $this->getTableLocator()->get('SkillLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SkillLevels);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SkillLevelsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
