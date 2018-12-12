<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZipCode Entity
 *
 * @property int $id
 * @property int $municipality_city_id
 * @property string $name
 * @property string $zip_code
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $district_province_id
 * @property int $region_id
 *
 * @property \App\Model\Entity\MunicipalityCity $municipality_city
 * @property \App\Model\Entity\DistrictProvince $district_province
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\EstablishmentDetail[] $establishment_details
 */
class ZipCode extends Entity
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
        'municipality_city_id' => true,
        'name' => true,
        'zip_code' => true,
        'created' => true,
        'modified' => true,
        'district_province_id' => true,
        'region_id' => true,
        'municipality_city' => true,
        'district_province' => true,
        'region' => true,
        'establishment_details' => true
    ];
}
