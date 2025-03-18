<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SkillLevels Model
 *
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\HasMany $Skills
 *
 * @method \App\Model\Entity\SkillLevel newEmptyEntity()
 * @method \App\Model\Entity\SkillLevel newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SkillLevel> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SkillLevel findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SkillLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SkillLevel> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SkillLevel saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SkillLevel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SkillLevel>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SkillLevel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SkillLevel> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SkillLevel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SkillLevel>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SkillLevel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SkillLevel> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SkillLevelsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('skill_levels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Skills', [
            'foreignKey' => 'skill_level_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        return $validator;
    }
}
