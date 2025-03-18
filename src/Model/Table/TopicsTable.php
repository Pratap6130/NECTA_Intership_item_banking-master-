<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Topics Model
 *
 * @property \App\Model\Table\SubjectsTable&\Cake\ORM\Association\BelongsTo $Subjects
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 *
 * @method \App\Model\Entity\Topic newEmptyEntity()
 * @method \App\Model\Entity\Topic newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Topic> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Topic get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Topic findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Topic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Topic> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Topic|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Topic saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Topic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Topic>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Topic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Topic> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Topic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Topic>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Topic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Topic> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TopicsTable extends Table
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

        $this->setTable('topics');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Subjects', [
            'foreignKey' => 'subject_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'topic_id',
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
            ->integer('subject_id')
            ->notEmptyString('subject_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 256)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->decimal('number_of_items')
            ->allowEmptyString('number_of_items');

        $validator
            ->decimal('total_weight')
            ->allowEmptyString('total_weight');

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
        $rules->add($rules->existsIn(['subject_id'], 'Subjects'), ['errorField' => 'subject_id']);

        return $rules;
    }
}
