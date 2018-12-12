<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MunicipalityCities Model
 *
 * @property \App\Model\Table\DistrictProvincesTable|\Cake\ORM\Association\BelongsTo $DistrictProvinces
 * @property \App\Model\Table\EstablishmentDetailsTable|\Cake\ORM\Association\HasMany $EstablishmentDetails
 * @property \App\Model\Table\OwnerInformationsTable|\Cake\ORM\Association\HasMany $OwnerInformations
 * @property |\Cake\ORM\Association\HasMany $ZipCodes
 *
 * @method \App\Model\Entity\MunicipalityCity get($primaryKey, $options = [])
 * @method \App\Model\Entity\MunicipalityCity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MunicipalityCity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MunicipalityCity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MunicipalityCity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MunicipalityCity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MunicipalityCity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MunicipalityCitiesTable extends Table
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

        $this->setTable('municipality_cities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DistrictProvinces', [
            'foreignKey' => 'district_province_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('EstablishmentDetails', [
            'foreignKey' => 'municipality_city_id'
        ]);
        $this->hasMany('OwnerInformations', [
            'foreignKey' => 'municipality_city_id'
        ]);
        $this->hasMany('ZipCodes', [
            'foreignKey' => 'municipality_city_id'
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
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['district_province_id'], 'DistrictProvinces'));

        return $rules;
    }
}
