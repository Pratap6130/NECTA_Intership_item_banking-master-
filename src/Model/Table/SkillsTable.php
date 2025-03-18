<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skills Model
 *
 * @property \App\Model\Table\SkillLevelsTable&\Cake\ORM\Association\BelongsTo $SkillLevels
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 *
 * @method \App\Model\Entity\Skill newEmptyEntity()
 * @method \App\Model\Entity\Skill newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Skill> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Skill get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Skill findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Skill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Skill> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Skill|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Skill saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Skill>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Skill>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Skill>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Skill> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Skill>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Skill>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Skill>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Skill> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SkillsTable extends Table
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

        $this->setTable('skills');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('SkillLevels', [
            'foreignKey' => 'skill_level_id',
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'skill_id',
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
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 50)
            ->allowEmptyString('description');

        $validator
            ->integer('skill_level_id')
            ->allowEmptyString('skill_level_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['skill_level_id'], 'SkillLevels'), ['errorField' => 'skill_level_id']);

        return $rules;
    }
}
