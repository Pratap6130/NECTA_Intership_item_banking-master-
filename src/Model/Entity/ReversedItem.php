<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReversedItem Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $item_user_id
 * @property int $reversed_by_user_id
 * @property \Cake\I18n\DateTime $created_at
 * @property \Cake\I18n\DateTime $updated_at
 *
 * @property \App\Model\Entity\Item $item
 */
class ReversedItem extends Entity
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
        'item_id' => true,
        'item_user_id' => true,
        'reversed_by_user_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'item' => true,
    ];
}
