<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\DayOfWeekCodeType[] $DayOfWeek
 * @property \DateTime $EndTime
 * @property string $ListAtSpecificTimeOfDay
 * @property integer $ListingHoldInventoryLevel
 * @property integer $ListingPeriodInWeeks
 * @property integer $MaxActiveItemCount
 * @property \DateTime $StartTime
 */
class SellingManagerAutoListAccordingToScheduleType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DayOfWeek' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DayOfWeek'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'ListAtSpecificTimeOfDay' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListAtSpecificTimeOfDay'
        ],
        'ListingHoldInventoryLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingHoldInventoryLevel'
        ],
        'ListingPeriodInWeeks' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingPeriodInWeeks'
        ],
        'MaxActiveItemCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxActiveItemCount'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ]
    ];
    
    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }
        
        $this->setValues(__CLASS__, $childValues);
    }
}