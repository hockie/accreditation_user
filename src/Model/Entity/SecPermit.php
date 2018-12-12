<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SecPermit Entity
 *
 * @property int $id
 * @property string $permit_no
 * @property \Cake\I18n\FrozenDate $valid_until
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property string $file
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class SecPermit extends Entity
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
        'permit_no' => true,
        'valid_until' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'file' => true,
        'user' => true,
        'establishment_accounts' => true
    ];
}
