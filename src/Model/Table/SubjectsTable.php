<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subjects Model
 *
 * @property \App\Model\Table\ExamTypesTable&\Cake\ORM\Association\BelongsTo $ExamTypes
 * @property \App\Model\Table\CompetenceTable&\Cake\ORM\Association\HasMany $Competence
 * @property \App\Model\Table\TopicsTable&\Cake\ORM\Association\HasMany $Topics
 *
 * @method \App\Model\Entity\Subject newEmptyEntity()
 * @method \App\Model\Entity\Subject newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Subject> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subject get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Subject findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Subject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Subject> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subject|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Subject saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SubjectsTable extends Table
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

        $this->setTable('subjects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ExamTypes', [
            'foreignKey' => 'exam_types_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Competence', [
            'foreignKey' => 'subject_id',
        ]);
        $this->hasMany('Topics', [
            'foreignKey' => 'subject_id',
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
            ->scalar('code')
            ->maxLength('code', 5)
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 64)
            ->allowEmptyString('name');

        $validator
            ->scalar('short_name')
            ->maxLength('short_name', 64)
            ->allowEmptyString('short_name');

        $validator
            ->scalar('description')
            ->maxLength('description', 150)
            ->allowEmptyString('description');

        $validator
            ->integer('exam_types_id')
            ->notEmptyString('exam_types_id');

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
        $rules->add($rules->existsIn(['exam_types_id'], 'ExamTypes'), ['errorField' => 'exam_types_id']);

        return $rules;
    }
}
