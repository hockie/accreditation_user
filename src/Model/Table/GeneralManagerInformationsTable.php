<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneralManagerInformations Model
 *
 * @property \App\Model\Table\NationalitiesTable|\Cake\ORM\Association\BelongsTo $Nationalities
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\GeneralManagerInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneralManagerInformation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeneralManagerInformationsTable extends Table
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

        $this->setTable('general_manager_informations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Nationalities', [
            'foreignKey' => 'nationality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'general_manager_information_id'
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
            ->scalar('name_prefix')
            ->maxLength('name_prefix', 45)
            ->allowEmpty('name_prefix');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 45)
            ->allowEmpty('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('remarks')
            ->allowEmpty('remarks');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 45)
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

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
        //$rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['nationality_id'], 'Nationalities'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
