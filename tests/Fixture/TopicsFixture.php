<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TopicsFixture
 */
class TopicsFixture extends TestFixture
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
                'subject_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'number_of_items' => 1.5,
                'total_weight' => 1.5,
            ],
        ];
        parent::init();
    }
}
