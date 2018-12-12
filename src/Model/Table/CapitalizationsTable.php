<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Capitalizations Model
 *
 * @property \App\Model\Table\EstablishmentsTable|\Cake\ORM\Association\BelongsTo $Establishments
 * @property \App\Model\Table\NationalitiesTable|\Cake\ORM\Association\BelongsTo $Nationalities
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\Capitalization get($primaryKey, $options = [])
 * @method \App\Model\Entity\Capitalization newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Capitalization[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Capitalization|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Capitalization patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Capitalization[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Capitalization findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CapitalizationsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('capitalizations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Nationalities', [
            'foreignKey' => 'nationality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'capitalization_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('position')
            ->maxLength('position', 45)
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->numeric('amount_subscribed')
            ->requirePresence('amount_subscribed', 'create')
            ->notEmpty('amount_subscribed');

        $validator
            ->numeric('amount_paid_up')
            ->requirePresence('amount_paid_up', 'create')
            ->notEmpty('amount_paid_up');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['establishment_id'], 'Establishments'));
        $rules->add($rules->existsIn(['nationality_id'], 'Nationalities'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
