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
 * @property \DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property \DTS\eBaySDK\Trading\Types\PerformanceDashboardType[] $Performance
 * @property \DTS\eBaySDK\Trading\Types\PowerSellerDashboardType $PowerSellerStatus
 * @property \DTS\eBaySDK\Trading\Types\SearchStandingDashboardType $SearchStanding
 * @property \DTS\eBaySDK\Trading\Types\SellerAccountDashboardType $SellerAccount
 * @property \DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType $SellerFeeDiscount
 */
class GetSellerDashboardResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BuyerSatisfaction' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ],
        'Performance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PerformanceDashboardType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Performance'
        ],
        'PowerSellerStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PowerSellerDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ],
        'SearchStanding' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SearchStandingDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ],
        'SellerAccount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerAccountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ],
        'SellerFeeDiscount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
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