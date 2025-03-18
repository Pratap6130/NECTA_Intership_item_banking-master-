<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserLogsFixture
 */
class UserLogsFixture extends TestFixture
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
                'user_id' => 1,
                'action_perfomed' => 'Lorem ipsum dolor sit amet',
                'item_id' => 1,
                'created_at' => 1721709462,
                'updated_at' => 1721709462,
            ],
        ];
        parent::init();
    }
}
