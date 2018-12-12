<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountIdentifier Entity
 *
 * @property int $id
 * @property string $email_address
 * @property string $tin_no
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $note
 *
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class AccountIdentifier extends Entity
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
        'email_address' => true,
        'tin_no' => true,
        'created' => true,
        'modified' => true,
        'note' => true,
        'establishment_accounts' => true
    ];
}
