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
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ActualShippingCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property string $BuyerEmail
 * @property string $BuyerID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CashOnDeliveryCost
 * @property \DateTime $CreationTime
 * @property integer $DaysSinceSale
 * @property integer $EmailsSent
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ItemCost
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetInsuranceFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetShippingFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $NetTotalAmount
 * @property string $NotesFromBuyer
 * @property string $NotesToBuyer
 * @property string $NotesToSeller
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType $OrderStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $SalePrice
 * @property integer $SaleRecordID
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalAmount
 * @property integer $TotalQuantity
 * @property \DTS\eBaySDK\Trading\Enums\UnpaidItemStatusTypeCodeType $UnpaidItemStatus
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATInsuranceFee
 * @property \DTS\eBaySDK\Trading\Types\VATRateType[] $VATRate
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATShippingFee
 * @property \DTS\eBaySDK\Trading\Types\AmountType $VATTotalAmount
 */
class SellingManagerSoldOrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActualShippingCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ],
        'AdjustmentAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'BuyerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ],
        'BuyerID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ],
        'CashOnDeliveryCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CashOnDeliveryCost'
        ],
        'CreationTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreationTime'
        ],
        'DaysSinceSale' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DaysSinceSale'
        ],
        'EmailsSent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailsSent'
        ],
        'ItemCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCost'
        ],
        'NetInsuranceFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetInsuranceFee'
        ],
        'NetShippingFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetShippingFee'
        ],
        'NetTotalAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetTotalAmount'
        ],
        'NotesFromBuyer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesFromBuyer'
        ],
        'NotesToBuyer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesToBuyer'
        ],
        'NotesToSeller' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotesToSeller'
        ],
        'OrderStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'SalePrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ],
        'SaleRecordID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleRecordID'
        ],
        'SellingManagerSoldTransaction' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellingManagerSoldTransaction'
        ],
        'ShippingAddress' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'TotalAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalAmount'
        ],
        'TotalQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalQuantity'
        ],
        'UnpaidItemStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemStatus'
        ],
        'VATInsuranceFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATInsuranceFee'
        ],
        'VATRate' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VATRateType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VATRate'
        ],
        'VATShippingFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATShippingFee'
        ],
        'VATTotalAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATTotalAmount'
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