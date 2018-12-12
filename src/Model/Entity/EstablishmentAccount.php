<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstablishmentAccount Entity
 *
 * @property int $id
 * @property string $email
 * @property string $tin
 * @property int $type_of_org
 * @property int $establishment_detail_id
 * @property int $owner_information_id
 * @property int $managing_company_information_id
 * @property int $general_manager_information_id
 * @property int $capitalization_id
 * @property int $authorized_representative_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $entity_types_id
 * @property int $entity_category_id
 * @property int $entity_category_type_id
 * @property string $auth_key
 * @property int $mayor_permit_id
 * @property int $dti_permit_id
 * @property int $sec_permit_id
 * @property int $cda_permit_id
 *
 * @property \App\Model\Entity\EstablishmentDetail $establishment_detail
 * @property \App\Model\Entity\OwnerInformation $owner_information
 * @property \App\Model\Entity\ManagingCompanyInformation $managing_company_information
 * @property \App\Model\Entity\GeneralManagerInformation $general_manager_information
 * @property \App\Model\Entity\Capitalization $capitalization
 * @property \App\Model\Entity\AuthorizedRepresentative $authorized_representative
 * @property \App\Model\Entity\EntityType $entity_type
 * @property \App\Model\Entity\EntityCategory $entity_category
 * @property \App\Model\Entity\EntityCategoryType $entity_category_type
 */
class EstablishmentAccount extends Entity
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
        'email' => true,
        'tin' => true,
        'type_of_org' => true,
        'establishment_detail_id' => true,
        'owner_information_id' => true,
        'managing_company_information_id' => true,
        'general_manager_information_id' => true,
        'capitalization_id' => true,
        'authorized_representative_id' => true,
        'created' => true,
        'modified' => true,
        'entity_types_id' => true,
        'entity_category_id' => true,
        'entity_category_type_id' => true,
        'auth_key' => true,
        'mayor_permit_id' => true,
        'dti_permit_id' => true,
        'sec_permit_id' => true,
        'cda_permit_id' => true,
        'establishment_detail' => true,
        'owner_information' => true,
        'managing_company_information' => true,
        'general_manager_information' => true,
        'capitalization' => true,
        'authorized_representative' => true,
        'entity_type' => true,
        'entity_category' => true,
        'entity_category_type' => true
    ];
}
