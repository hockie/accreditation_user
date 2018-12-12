<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EntityCategoryTypes Model
 *
 * @property \App\Model\Table\EntityCategoriesTable|\Cake\ORM\Association\HasMany $EntityCategories
 * @property |\Cake\ORM\Association\HasMany $EstablishmentAccounts
 *
 * @method \App\Model\Entity\EntityCategoryType get($primaryKey, $options = [])
 * @method \App\Model\Entity\EntityCategoryType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EntityCategoryType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategoryType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EntityCategoryType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategoryType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EntityCategoryType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntityCategoryTypesTable extends Table
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

        $this->setTable('entity_category_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EntityCategories', [
            'foreignKey' => 'entity_category_type_id'
        ]);
        $this->hasMany('EstablishmentAccounts', [
            'foreignKey' => 'entity_category_type_id'
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
