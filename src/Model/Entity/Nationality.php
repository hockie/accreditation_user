<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nationality Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Capitalization[] $capitalizations
 * @property \App\Model\Entity\GeneralManagerInformation[] $general_manager_informations
 * @property \App\Model\Entity\OwnerInformation[] $owner_informations
 */
class Nationality extends Entity
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
        'created' => true,
        'modified' => true,
        'capitalizations' => true,
        'general_manager_informations' => true,
        'owner_informations' => true
    ];
}
