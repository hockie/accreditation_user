<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EntityCategory Entity
 *
 * @property int $id
 * @property string $name
 * @property int $entity_category_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EntityCategoryType $entity_category_type
 * @property \App\Model\Entity\EntityType[] $entity_types
 */
class EntityCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'entity_category_type_id' => true,
        'created' => true,
        'modified' => true,
        'entity_category_type' => true,
        'entity_types' => true
    ];
}
