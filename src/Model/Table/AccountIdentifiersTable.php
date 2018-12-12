<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountIdentifiers Model
 *
 * @method \App\Model\Entity\AccountIdentifier get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccountIdentifier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccountIdentifier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountIdentifier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountIdentifier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccountIdentifier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountIdentifier findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountIdentifiersTable extends Table
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

        $this->setTable('account_identifiers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('email_address')
            ->maxLength('email_address', 45)
            ->allowEmpty('email_address');

        $validator
            ->scalar('tin_no')
            ->maxLength('tin_no', 45)
            ->allowEmpty('tin_no');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

        return $validator;
    }
}
