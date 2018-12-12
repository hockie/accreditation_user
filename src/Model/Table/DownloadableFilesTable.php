<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DownloadableFiles Model
 *
 * @property \App\Model\Table\DocumentTypesTable|\Cake\ORM\Association\BelongsTo $DocumentTypes
 *
 * @method \App\Model\Entity\DownloadableFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\DownloadableFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DownloadableFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DownloadableFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DownloadableFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DownloadableFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DownloadableFile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DownloadableFilesTable extends Table
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

        $this->setTable('downloadable_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DocumentTypes', [
            'foreignKey' => 'document_type_id',
            'joinType' => 'INNER'
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
            ->scalar('filename')
            ->maxLength('filename', 45)
            ->allowEmpty('filename');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('file')
            ->maxLength('file', 45)
            ->allowEmpty('file');

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
        $rules->add($rules->existsIn(['document_type_id'], 'DocumentTypes'));

        return $rules;
    }
}
