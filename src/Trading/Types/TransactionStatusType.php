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
 * @property boolean $BuyerSelectedShipping
 * @property \DTS\eBaySDK\Trading\Enums\CancelStatusCodeType $CancelStatus
 * @property \DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DTS\eBaySDK\Trading\Enums\CompleteStatusCodeType $CompleteStatus
 * @property \DTS\eBaySDK\Trading\Enums\DigitalStatusCodeType $DigitalStatus
 * @property \DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property \DTS\eBaySDK\Trading\Enums\InquiryStatusCodeType $InquiryStatus
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DateTime $LastTimeModified
 * @property \DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\Trading\Enums\ReturnStatusCodeType $ReturnStatus
 */
class TransactionStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BuyerSelectedShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSelectedShipping'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ],
        'CheckoutStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'CompleteStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompleteStatus'
        ],
        'DigitalStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalStatus'
        ],
        'eBayPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'InquiryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InquiryStatus'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'LastTimeModified' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastTimeModified'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'ReturnStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatus'
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