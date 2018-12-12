<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuthorizedRepresentative Entity
 *
 * @property int $id
 * @property string $fullname
 * @property string $designation
 * @property string $telephone_no
 * @property string $mobile_no
 * @property string $email
 * @property string $remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Establishment $establishment
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class AuthorizedRepresentative extends Entity
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
        'fullname' => true,
        'designation' => true,
        'telephone_no' => true,
        'mobile_no' => true,
        'email' => true,
        'remarks' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'establishment' => true,
        'user' => true,
        'establishment_accounts' => true
    ];
}
