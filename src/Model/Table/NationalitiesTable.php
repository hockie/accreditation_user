<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nationalities Model
 *
 * @property \App\Model\Table\CapitalizationsTable|\Cake\ORM\Association\HasMany $Capitalizations
 * @property \App\Model\Table\GeneralManagerInformationsTable|\Cake\ORM\Association\HasMany $GeneralManagerInformations
 * @property \App\Model\Table\OwnerInformationsTable|\Cake\ORM\Association\HasMany $OwnerInformations
 *
 * @method \App\Model\Entity\Nationality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nationality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nationality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nationality|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nationality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nationality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nationality findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NationalitiesTable extends Table
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

        $this->setTable('nationalities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Capitalizations', [
            'foreignKey' => 'nationality_id'
        ]);
        $this->hasMany('GeneralManagerInformations', [
            'foreignKey' => 'nationality_id'
        ]);
        $this->hasMany('OwnerInformations', [
            'foreignKey' => 'nationality_id'
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

        return $validator;
    }
}
