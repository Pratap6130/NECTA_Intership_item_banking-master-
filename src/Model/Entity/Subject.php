<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subject Entity
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $short_name
 * @property string|null $description
 * @property int $exam_types_id
 *
 * @property \App\Model\Entity\ExamType $exam_type
 * @property \App\Model\Entity\Competence[] $competence
 * @property \App\Model\Entity\Topic[] $topics
 */
class Subject extends Entity
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
        'code' => true,
        'name' => true,
        'short_name' => true,
        'description' => true,
        'exam_types_id' => true,
        'exam_type' => true,
        'competence' => true,
        'topics' => true,
    ];
}
