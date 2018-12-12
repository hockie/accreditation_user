<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Capitalization Entity
 *
 * @property int $id
 * @property int $establishment_id
 * @property string $name
 * @property string $position
 * @property int $nationality_id
 * @property float $amount_subscribed
 * @property float $amount_paid_up
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Establishment $establishment
 * @property \App\Model\Entity\Nationality $nationality
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class Capitalization extends Entity
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
        'establishment_id' => true,
        'name' => true,
        'position' => true,
        'nationality_id' => true,
        'amount_subscribed' => true,
        'amount_paid_up' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'establishment' => true,
        'nationality' => true,
        'user' => true,
        'establishment_accounts' => true
    ];
}
