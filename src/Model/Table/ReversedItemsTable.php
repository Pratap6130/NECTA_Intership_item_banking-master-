<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReversedItems Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\ReversedItem newEmptyEntity()
 * @method \App\Model\Entity\ReversedItem newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ReversedItem> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReversedItem get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ReversedItem findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ReversedItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ReversedItem> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReversedItem|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ReversedItem saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ReversedItem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ReversedItem>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ReversedItem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ReversedItem> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ReversedItem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ReversedItem>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ReversedItem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ReversedItem> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReversedItemsTable extends Table
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

        $this->setTable('reversed_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER',
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
            ->integer('item_id')
            ->notEmptyString('item_id');

        $validator
            ->integer('item_user_id')
            ->requirePresence('item_user_id', 'create')
            ->notEmptyString('item_user_id');

        $validator
            ->integer('reversed_by_user_id')
            ->requirePresence('reversed_by_user_id', 'create')
            ->notEmptyString('reversed_by_user_id');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->notEmptyDateTime('updated_at');

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
        $rules->add($rules->existsIn(['item_id'], 'Items'), ['errorField' => 'item_id']);

        return $rules;
    }
}
