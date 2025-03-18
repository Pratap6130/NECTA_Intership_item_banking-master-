<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReversedItemsFixture
 */
class ReversedItemsFixture extends TestFixture
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
                'item_id' => 1,
                'item_user_id' => 1,
                'reversed_by_user_id' => 1,
                'created_at' => 1721710087,
                'updated_at' => 1721710087,
            ],
        ];
        parent::init();
    }
}
