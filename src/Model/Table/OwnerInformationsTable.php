<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerInformations Model
 *
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\DistrictProvincesTable|\Cake\ORM\Association\BelongsTo $DistrictProvinces
 * @property \App\Model\Table\MunicipalityCitiesTable|\Cake\ORM\Association\BelongsTo $MunicipalityCities
 * @property \App\Model\Table\NationalitiesTable|\Cake\ORM\Association\BelongsTo $Nationalities
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ZipCodesTable|\Cake\ORM\Association\BelongsTo $ZipCodes
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\OwnerInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerInformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerInformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerInformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerInformation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OwnerInformationsTable extends Table
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

        $this->setTable('owner_informations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DistrictProvinces', [
            'foreignKey' => 'district_province_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MunicipalityCities', [
            'foreignKey' => 'municipality_city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Nationalities', [
            'foreignKey' => 'nationality_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('ZipCodes', [
            'foreignKey' => 'zip_code_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'owner_information_id'
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
            ->allowEmpty('last_name');

        $validator
            ->scalar('name_suffix')
            ->maxLength('name_suffix', 45)
            ->allowEmpty('name_suffix');

        $validator
            ->scalar('address')
            ->maxLength('address', 45)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

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
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['district_province_id'], 'DistrictProvinces'));
        $rules->add($rules->existsIn(['municipality_city_id'], 'MunicipalityCities'));
        $rules->add($rules->existsIn(['nationality_id'], 'Nationalities'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['zip_code_id'], 'ZipCodes'));

        return $rules;
    }
}
