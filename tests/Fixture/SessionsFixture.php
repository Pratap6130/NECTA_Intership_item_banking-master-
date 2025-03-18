<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsFixture
 */
class SessionsFixture extends TestFixture
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
                'id' => '',
                'created' => '2024-07-23 04:45:29',
                'modified' => '2024-07-23 04:45:29',
                'data' => 'Lorem ipsum dolor sit amet',
                'expires' => 1,
            ],
        ];
        parent::init();
    }
}
