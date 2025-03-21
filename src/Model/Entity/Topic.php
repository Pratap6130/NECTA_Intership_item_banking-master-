<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Topic Entity
 *
 * @property int $id
 * @property int $subject_id
 * @property string $name
 * @property string|null $number_of_items
 * @property string|null $total_weight
 *
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Item[] $items
 */
class Topic extends Entity
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
        'subject_id' => true,
        'name' => true,
        'number_of_items' => true,
        'total_weight' => true,
        'subject' => true,
        'items' => true,
    ];
}
