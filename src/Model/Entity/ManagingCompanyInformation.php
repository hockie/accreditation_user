<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ManagingCompanyInformation Entity
 *
 * @property int $id
 * @property string $company_name
 * @property string $address
 * @property int $region_id
 * @property int $district_province_id
 * @property int $municipality_city_id
 * @property int $zip_code_id
 * @property string $remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\DistrictProvince $district_province
 * @property \App\Model\Entity\MunicipalityCity $municipality_city
 * @property \App\Model\Entity\ZipCode $zip_code
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EstablishmentAccount[] $establishment_accounts
 */
class ManagingCompanyInformation extends Entity
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
        'company_name' => true,
        'address' => true,
        'region_id' => true,
        'district_province_id' => true,
        'municipality_city_id' => true,
        'zip_code_id' => true,
        'remarks' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'region' => true,
        'district_province' => true,
        'municipality_city' => true,
        'zip_code' => true,
        'user' => true,
        'establishment_accounts' => true
    ];
}
