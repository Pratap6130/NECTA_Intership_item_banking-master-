<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExamTypes Model
 *
 * @method \App\Model\Entity\ExamType newEmptyEntity()
 * @method \App\Model\Entity\ExamType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ExamType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExamType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ExamType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ExamType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ExamType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExamType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ExamType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ExamType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExamType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExamType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExamType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExamType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExamType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExamType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExamType> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ExamTypesTable extends Table
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

        $this->setTable('exam_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->notEmptyString('name');

        $validator
            ->scalar('short_name')
            ->maxLength('short_name', 10)
            ->allowEmptyString('short_name');

        $validator
            ->scalar('description')
            ->maxLength('description', 150)
            ->allowEmptyString('description');

        $validator
            ->scalar('code')
            ->maxLength('code', 3)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        return $validator;
    }
}
