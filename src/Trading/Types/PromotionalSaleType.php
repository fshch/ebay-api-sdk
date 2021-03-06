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
 * @property \DTS\eBaySDK\Trading\Enums\DiscountCodeType $DiscountType
 * @property double $DiscountValue
 * @property \DateTime $PromotionalSaleEndTime
 * @property integer $PromotionalSaleID
 * @property \DTS\eBaySDK\Trading\Types\ItemIDArrayType $PromotionalSaleItemIDArray
 * @property string $PromotionalSaleName
 * @property \DateTime $PromotionalSaleStartTime
 * @property \DTS\eBaySDK\Trading\Enums\PromotionalSaleTypeCodeType $PromotionalSaleType
 * @property \DTS\eBaySDK\Trading\Enums\PromotionalSaleStatusCodeType $Status
 */
class PromotionalSaleType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DiscountType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountType'
        ],
        'DiscountValue' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountValue'
        ],
        'PromotionalSaleEndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleEndTime'
        ],
        'PromotionalSaleID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleID'
        ],
        'PromotionalSaleItemIDArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleItemIDArray'
        ],
        'PromotionalSaleName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleName'
        ],
        'PromotionalSaleStartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleStartTime'
        ],
        'PromotionalSaleType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleType'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
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