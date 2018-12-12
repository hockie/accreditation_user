<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstablishmentDetails Model
 *
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\DistrictProvincesTable|\Cake\ORM\Association\BelongsTo $DistrictProvinces
 * @property \App\Model\Table\MunicipalityCitiesTable|\Cake\ORM\Association\BelongsTo $MunicipalityCities
 * @property \App\Model\Table\ZipCodesTable|\Cake\ORM\Association\BelongsTo $ZipCodes
 * @property \App\Model\Table\EstablishmentAccountsTable|\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\EstablishmentDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstablishmentDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstablishmentDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstablishmentDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstablishmentDetailsTable extends Table
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

        $this->setTable('establishment_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->belongsTo('DistrictProvinces', [
            'foreignKey' => 'district_province_id'
        ]);
        $this->belongsTo('MunicipalityCities', [
            'foreignKey' => 'municipality_city_id'
        ]);
        $this->belongsTo('ZipCodes', [
            'foreignKey' => 'zip_code_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'establishment_detail_id'
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
            ->scalar('establishment_name')
            ->maxLength('establishment_name', 150)
            ->allowEmpty('establishment_name');

        $validator
            ->scalar('address')
            ->maxLength('address', 150)
            ->allowEmpty('address');

        $validator
            ->scalar('telephone_no')
            ->maxLength('telephone_no', 45)
            ->allowEmpty('telephone_no');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 45)
            ->allowEmpty('mobile_no');

        $validator
            ->scalar('fax_no')
            ->maxLength('fax_no', 45)
            ->allowEmpty('fax_no');

        $validator
            ->scalar('website')
            ->maxLength('website', 45)
            ->allowEmpty('website');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('remarks')
            ->allowEmpty('remarks');

        $validator
            ->date('date_established')
            ->allowEmpty('date_established');

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
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['district_province_id'], 'DistrictProvinces'));
        $rules->add($rules->existsIn(['municipality_city_id'], 'MunicipalityCities'));
        $rules->add($rules->existsIn(['zip_code_id'], 'ZipCodes'));

        return $rules;
    }
}
