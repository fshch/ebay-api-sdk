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
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerAlertTypeCodeType $AlertType
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
 * @property integer $Count
 * @property integer $DurationInDays
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
 */
class SellingManagerAlertType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AlertType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlertType'
        ],
        'AutomationAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomationAlert'
        ],
        'Count' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Count'
        ],
        'DurationInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DurationInDays'
        ],
        'GeneralAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GeneralAlert'
        ],
        'InventoryAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryAlert'
        ],
        'PaisaPayAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayAlert'
        ],
        'SoldAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAlert'
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