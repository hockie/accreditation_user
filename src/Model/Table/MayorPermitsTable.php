<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MayorPermits Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\MayorPermit get($primaryKey, $options = [])
 * @method \App\Model\Entity\MayorPermit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MayorPermit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MayorPermit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MayorPermit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MayorPermit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MayorPermit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MayorPermitsTable extends Table
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

        $this->setTable('mayor_permits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'mayor_permit_id'
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
            ->scalar('permit_no')
            ->maxLength('permit_no', 45)
            ->allowEmpty('permit_no');

        $validator
            ->date('valid_until')
            ->allowEmpty('valid_until');

        $validator
            ->scalar('place_issued')
            ->maxLength('place_issued', 45)
            ->allowEmpty('place_issued');

        $validator
            ->scalar('file')
            ->maxLength('file', 45)
            ->allowEmpty('file');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
