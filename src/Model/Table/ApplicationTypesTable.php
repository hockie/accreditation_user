<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ApplicationTypes Model
 *
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\ApplicationType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApplicationType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ApplicationType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApplicationTypesTable extends Table
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

        $this->setTable('application_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'application_type_id'
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
            ->allowEmpty('name');

        return $validator;
    }
}
