<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstablishmentAccounts Model
 *
 * @property \App\Model\Table\EstablishmentDetailsTable|\Cake\ORM\Association\BelongsTo $EstablishmentDetails
 * @property \App\Model\Table\OwnerInformationsTable|\Cake\ORM\Association\BelongsTo $OwnerInformations
 * @property \App\Model\Table\ManagingCompanyInformationsTable|\Cake\ORM\Association\BelongsTo $ManagingCompanyInformations
 * @property \App\Model\Table\GeneralManagerInformationsTable|\Cake\ORM\Association\BelongsTo $GeneralManagerInformations
 * @property \App\Model\Table\CapitalizationsTable|\Cake\ORM\Association\BelongsTo $Capitalizations
 * @property \App\Model\Table\AuthorizedRepresentativesTable|\Cake\ORM\Association\BelongsTo $AuthorizedRepresentatives
 * @property \App\Model\Table\EntityTypesTable|\Cake\ORM\Association\BelongsTo $EntityTypes
 * @property \App\Model\Table\EntityCategoriesTable|\Cake\ORM\Association\BelongsTo $EntityCategories
 * @property \App\Model\Table\EntityCategoryTypesTable|\Cake\ORM\Association\BelongsTo $EntityCategoryTypes
 * @property |\Cake\ORM\Association\BelongsTo $MayorPermits
 * @property |\Cake\ORM\Association\BelongsTo $DtiPermits
 * @property |\Cake\ORM\Association\BelongsTo $SecPermits
 * @property |\Cake\ORM\Association\BelongsTo $CdaPermits
 *
 * @method \App\Model\Entity\EstablishmentAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstablishmentAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstablishmentAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstablishmentAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstablishmentAccount findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstablishmentAccountsTable extends Table
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

        $this->setTable('establishment_accounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EstablishmentDetails', [
            'foreignKey' => 'establishment_detail_id'
        ]);
		
		
        $this->belongsTo('OwnerInformations', [
            'foreignKey' => 'owner_information_id'
        ]);
        $this->belongsTo('ManagingCompanyInformations', [
            'foreignKey' => 'managing_company_information_id'
        ]);
        $this->belongsTo('GeneralManagerInformations', [
            'foreignKey' => 'general_manager_information_id'
        ]);
        $this->belongsTo('Capitalizations', [
            'foreignKey' => 'capitalization_id'
        ]);
        $this->belongsTo('AuthorizedRepresentatives', [
            'foreignKey' => 'authorized_representative_id'
        ]);
        $this->belongsTo('EntityTypes', [
            'foreignKey' => 'entity_types_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EntityCategories', [
            'foreignKey' => 'entity_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EntityCategoryTypes', [
            'foreignKey' => 'entity_category_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MayorPermits', [
            'foreignKey' => 'mayor_permit_id'
        ]);
        $this->belongsTo('DtiPermits', [
            'foreignKey' => 'dti_permit_id'
        ]);
        $this->belongsTo('SecPermits', [
            'foreignKey' => 'sec_permit_id'
        ]);
        $this->belongsTo('CdaPermits', [
            'foreignKey' => 'cda_permit_id'
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
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('tin')
            ->maxLength('tin', 45)
            ->allowEmpty('tin');

        $validator
            ->integer('type_of_org')
            ->allowEmpty('type_of_org');

        $validator
            ->scalar('auth_key')
            ->maxLength('auth_key', 255)
            ->allowEmpty('auth_key');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['establishment_detail_id'], 'EstablishmentDetails'));
        $rules->add($rules->existsIn(['owner_information_id'], 'OwnerInformations'));
        $rules->add($rules->existsIn(['managing_company_information_id'], 'ManagingCompanyInformations'));
        $rules->add($rules->existsIn(['general_manager_information_id'], 'GeneralManagerInformations'));
        $rules->add($rules->existsIn(['capitalization_id'], 'Capitalizations'));
        $rules->add($rules->existsIn(['authorized_representative_id'], 'AuthorizedRepresentatives'));
        $rules->add($rules->existsIn(['entity_types_id'], 'EntityTypes'));
        $rules->add($rules->existsIn(['entity_category_id'], 'EntityCategories'));
        $rules->add($rules->existsIn(['entity_category_type_id'], 'EntityCategoryTypes'));
        $rules->add($rules->existsIn(['mayor_permit_id'], 'MayorPermits'));
        $rules->add($rules->existsIn(['dti_permit_id'], 'DtiPermits'));
        $rules->add($rules->existsIn(['sec_permit_id'], 'SecPermits'));
        $rules->add($rules->existsIn(['cda_permit_id'], 'CdaPermits'));

        return $rules;
    }
}
