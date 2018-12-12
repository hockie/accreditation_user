<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $establishment_account_id
 * @property string $description
 * @property float $amount
 * @property int $account_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property string $hash_key
 *
 * @property \App\Model\Entity\EstablishmentAccount $establishment_account
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\User $user
 */
class Payment extends Entity
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
        'establishment_account_id' => true,
        'description' => true,
        'amount' => true,
        'account_type_id' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'hash_key' => true,
        'establishment_account' => true,
        'account_type' => true,
        'user' => true
    ];
}
