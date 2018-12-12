<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneralManagerInformation Entity
 *
 * @property int $id
 * @property string $name_prefix
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property int $nationality_id
 * @property string $remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property string $mobile_no
 *
 * @property \App\Model\Entity\Nationality $nationality
 * @property \App\Model\Entity\Establishment $establishment
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class GeneralManagerInformation extends Entity
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
        'name_prefix' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'email' => true,
        'nationality_id' => true,
        'remarks' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'mobile_no' => true,
        'nationality' => true,
        'establishment' => true,
        'user' => true,
        'establishment_accounts' => true
    ];
}
