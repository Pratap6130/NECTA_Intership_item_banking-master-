<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubjectsFixture
 */
class SubjectsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'code' => 'Lor',
                'name' => 'Lorem ipsum dolor sit amet',
                'short_name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'exam_types_id' => 1,
            ],
        ];
        parent::init();
    }
}
