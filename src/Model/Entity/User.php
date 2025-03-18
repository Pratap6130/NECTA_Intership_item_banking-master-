<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $api_token
 * @property string|null $first_name
 * @property string|null $other_names
 * @property string|null $surname
 * @property string|null $phone_number
 * @property string|null $email
 * @property \Cake\I18n\DateTime $created
 * @property int $is_disabled
 * @property int|null $role_id
 * @property int|null $is_force_change_password
 * @property \Cake\I18n\DateTime|null $reset_code_expire_time
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $reset_code
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\ApiLimit[] $api_limit
 * @property \App\Model\Entity\Assessor[] $assessors
 * @property \App\Model\Entity\ItemStatus[] $item_statuses
 * @property \App\Model\Entity\ItemTo[] $item_tos
 * @property \App\Model\Entity\UserLog[] $user_logs
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'username' => true,
        'password' => true,
        'api_token' => true,
        'first_name' => true,
        'other_names' => true,
        'surname' => true,
        'phone_number' => true,
        'email' => true,
        'created' => true,
        'is_disabled' => true,
        'role_id' => true,
        'is_force_change_password' => true,
        'reset_code_expire_time' => true,
        'modified' => true,
        'reset_code' => true,
        'role' => true,
        'api_limit' => true,
        'assessors' => true,
        'item_statuses' => true,
        'item_tos' => true,
        'user_logs' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
