<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sensor Entity.
 *
 * @property int $id
 * @property string $mac_address
 * @property string $name
 * @property string $type
 * @property string $location
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Data[] $data
 * @property \App\Model\Entity\Log[] $log
 * @property \App\Model\Entity\Parameter[] $parameters
 */
class Sensor extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
