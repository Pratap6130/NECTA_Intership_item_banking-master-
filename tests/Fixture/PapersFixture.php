<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PapersFixture
 */
class PapersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-23 04:48:13',
                'modified' => '2024-07-23 04:48:13',
            ],
        ];
        parent::init();
    }
}
