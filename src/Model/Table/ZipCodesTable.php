<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZipCodes Model
 *
 * @property \App\Model\Table\MunicipalityCitiesTable|\Cake\ORM\Association\BelongsTo $MunicipalityCities
 * @property \App\Model\Table\DistrictProvincesTable|\Cake\ORM\Association\BelongsTo $DistrictProvinces
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\EstablishmentDetailsTable|\Cake\ORM\Association\HasMany $EstablishmentDetails
 *
 * @method \App\Model\Entity\ZipCode get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZipCode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ZipCode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZipCode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZipCode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZipCode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZipCode findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ZipCodesTable extends Table
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

        $this->setTable('zip_codes');
        $this->setDisplayField('zip_code');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MunicipalityCities', [
            'foreignKey' => 'municipality_city_id'
        ]);
        $this->belongsTo('DistrictProvinces', [
            'foreignKey' => 'district_province_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->hasMany('EstablishmentDetails', [
            'foreignKey' => 'zip_code_id'
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

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 45)
            ->allowEmpty('zip_code');

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
        $rules->add($rules->existsIn(['municipality_city_id'], 'MunicipalityCities'));
        $rules->add($rules->existsIn(['district_province_id'], 'DistrictProvinces'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));

        return $rules;
    }
	
	 protected function _getNameDesc()
    {
        return
            $this->_properties['name'] .
            ' - ' .
            $this->_properties['zip_code'];
    }
}
