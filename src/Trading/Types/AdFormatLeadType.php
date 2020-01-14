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
 * @property string $AdditionalInformation
 * @property \DTS\eBaySDK\Trading\Types\AddressType $Address
 * @property boolean $Answer1
 * @property boolean $Answer2
 * @property string $BestTimeToCall
 * @property string $Email
 * @property string $ExternalEmail
 * @property boolean $FinancingAnswer
 * @property string $ItemID
 * @property string $ItemTitle
 * @property \DTS\eBaySDK\Trading\Types\MemberMessageExchangeArrayType $MemberMessage
 * @property string $PurchaseTimeFrame
 * @property \DTS\eBaySDK\Trading\Enums\AdFormatLeadStatusCodeType $Status
 * @property \DateTime $SubmittedTime
 * @property string $TradeInMake
 * @property string $TradeInModel
 * @property string $TradeInYear
 * @property string $UserID
 */
class AdFormatLeadType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AdditionalInformation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdditionalInformation'
        ],
        'Address' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Address'
        ],
        'Answer1' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Answer1'
        ],
        'Answer2' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Answer2'
        ],
        'BestTimeToCall' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestTimeToCall'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'ExternalEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalEmail'
        ],
        'FinancingAnswer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinancingAnswer'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ItemTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ],
        'MemberMessage' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MemberMessageExchangeArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MemberMessage'
        ],
        'PurchaseTimeFrame' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseTimeFrame'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'SubmittedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SubmittedTime'
        ],
        'TradeInMake' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInMake'
        ],
        'TradeInModel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInModel'
        ],
        'TradeInYear' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInYear'
        ],
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
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