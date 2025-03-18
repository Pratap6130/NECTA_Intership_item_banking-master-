<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'api_token' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'other_names' => 'Lorem ipsum dolor sit amet',
                'surname' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-13 08:26:15',
                'is_disabled' => 1,
                'role_id' => 1,
                'is_force_change_password' => 1,
                'reset_code_expire_time' => '2024-07-13 08:26:15',
                'modified' => '2024-07-13 08:26:15',
                'reset_code' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}
