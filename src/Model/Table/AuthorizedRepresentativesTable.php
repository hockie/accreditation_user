<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorizedRepresentatives Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\AuthorizedRepresentative get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorizedRepresentative findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuthorizedRepresentativesTable extends Table
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

        $this->setTable('authorized_representatives');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'authorized_representative_id'
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
            ->scalar('fullname')
            ->maxLength('fullname', 45)
            ->requirePresence('fullname', 'create')
            ->notEmpty('fullname');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 45)
            ->requirePresence('designation', 'create')
            ->notEmpty('designation');

        $validator
            ->scalar('telephone_no')
            ->maxLength('telephone_no', 45)
            ->requirePresence('telephone_no', 'create')
            ->notEmpty('telephone_no');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 45)
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('remarks')
            ->allowEmpty('remarks');

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
       // $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
