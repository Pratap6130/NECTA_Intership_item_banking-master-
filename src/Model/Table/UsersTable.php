<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ApiLimitTable&\Cake\ORM\Association\HasMany $ApiLimit
 * @property \App\Model\Table\AssessorsTable&\Cake\ORM\Association\HasMany $Assessors
 * @property \App\Model\Table\ItemStatusesTable&\Cake\ORM\Association\HasMany $ItemStatuses
 * @property \App\Model\Table\ItemTosTable&\Cake\ORM\Association\HasMany $ItemTos
 * @property \App\Model\Table\UserLogsTable&\Cake\ORM\Association\HasMany $UserLogs
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
        ]);
        $this->hasMany('ApiLimit', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Assessors', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ItemStatuses', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('ItemTos', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserLogs', [
            'foreignKey' => 'user_id',
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
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('api_token')
            ->maxLength('api_token', 500)
            ->allowEmptyString('api_token');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('other_names')
            ->maxLength('other_names', 45)
            ->allowEmptyString('other_names');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 45)
            ->allowEmptyString('surname');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 45)
            ->allowEmptyString('phone_number');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->notEmptyString('is_disabled');

        $validator
            ->integer('role_id')
            ->allowEmptyString('role_id');

        $validator
            ->allowEmptyString('is_force_change_password');

        $validator
            ->dateTime('reset_code_expire_time')
            ->allowEmptyDateTime('reset_code_expire_time');

        $validator
            ->scalar('reset_code')
            ->allowEmptyString('reset_code');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['modified'], ['allowMultipleNulls' => true]), ['errorField' => 'modified']);
        $rules->add($rules->existsIn(['role_id'], 'Roles'), ['errorField' => 'role_id']);

        return $rules;
    }
}
