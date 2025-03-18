<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Papers Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 *
 * @method \App\Model\Entity\Paper newEmptyEntity()
 * @method \App\Model\Entity\Paper newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Paper> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paper get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Paper findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Paper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Paper> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paper|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Paper saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Paper>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Paper>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Paper>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Paper> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Paper>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Paper>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Paper>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Paper> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PapersTable extends Table
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

        $this->setTable('papers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Items', [
            'foreignKey' => 'paper_id',
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
            ->maxLength('name', 32)
            ->allowEmptyString('name');

        return $validator;
    }
}
