<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserLogs Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\UserLog newEmptyEntity()
 * @method \App\Model\Entity\UserLog newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\UserLog> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserLog get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\UserLog findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\UserLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\UserLog> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserLog|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\UserLog saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\UserLog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserLog>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserLog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserLog> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserLog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserLog>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserLog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserLog> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UserLogsTable extends Table
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

        $this->setTable('user_logs');
        $this->setDisplayField('action_perfomed');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('action_perfomed')
            ->maxLength('action_perfomed', 300)
            ->requirePresence('action_perfomed', 'create')
            ->notEmptyString('action_perfomed');

        $validator
            ->integer('item_id')
            ->notEmptyString('item_id');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['item_id'], 'Items'), ['errorField' => 'item_id']);

        return $rules;
    }
}
