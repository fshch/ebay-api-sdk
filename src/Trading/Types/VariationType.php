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
 * @property boolean $Delete
 * @property \DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string $PrivateNotes
 * @property integer $Quantity
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property \DTS\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property string $SKU
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $UnitCost
 * @property integer $UnitsAvailable
 * @property \DTS\eBaySDK\Trading\Types\VariationProductListingDetailsType $VariationProductListingDetails
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $VariationSpecifics
 * @property string $VariationTitle
 * @property string $VariationViewItemURL
 * @property integer $WatchCount
 */
class VariationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Delete' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Delete'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'PrivateNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'SellingManagerProductInventoryStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ],
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'StartPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'UnitCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ],
        'UnitsAvailable' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitsAvailable'
        ],
        'VariationProductListingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VariationProductListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationProductListingDetails'
        ],
        'VariationSpecifics' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ],
        'VariationTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationTitle'
        ],
        'VariationViewItemURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationViewItemURL'
        ],
        'WatchCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
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