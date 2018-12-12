<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EntityCategories Model
 *
 * @property \App\Model\Table\EntityCategoryTypesTable|\Cake\ORM\Association\BelongsTo $EntityCategoryTypes
 * @property \App\Model\Table\EntityTypesTable|\Cake\ORM\Association\HasMany $EntityTypes
 *
 * @method \App\Model\Entity\EntityCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\EntityCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EntityCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EntityCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntityCategoriesTable extends Table
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

        $this->setTable('entity_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EntityCategoryTypes', [
            'foreignKey' => 'entity_category_type_id'
        ]);
        $this->hasMany('EntityTypes', [
            'foreignKey' => 'entity_category_id'
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
            ->maxLength('name', 255)
            ->allowEmpty('name');

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
        $rules->add($rules->existsIn(['entity_category_type_id'], 'EntityCategoryTypes'));

        return $rules;
    }
}
