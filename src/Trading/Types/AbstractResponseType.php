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
 * @property \DTS\eBaySDK\Trading\Enums\AckCodeType $Ack
 * @property \DTS\eBaySDK\Trading\Types\BotBlockResponseType $BotBlock
 * @property string $Build
 * @property string $CorrelationID
 * @property \DTS\eBaySDK\Trading\Types\DuplicateInvocationDetailsType $DuplicateInvocationDetails
 * @property string $EIASToken
 * @property \DTS\eBaySDK\Trading\Types\ErrorType[] $Errors
 * @property string $ExternalUserData
 * @property string $HardExpirationWarning
 * @property string $Message
 * @property string $NotificationEventName
 * @property string $NotificationSignature
 * @property string $RecipientUserID
 * @property \DateTime $Timestamp
 * @property string $Version
 */
class AbstractResponseType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Ack' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Ack'
        ],
        'BotBlock' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BotBlockResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
        ],
        'Build' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Build'
        ],
        'CorrelationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ],
        'DuplicateInvocationDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DuplicateInvocationDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DuplicateInvocationDetails'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'Errors' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ErrorType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Errors'
        ],
        'ExternalUserData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
        ],
        'HardExpirationWarning' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HardExpirationWarning'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'NotificationEventName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationEventName'
        ],
        'NotificationSignature' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationSignature'
        ],
        'RecipientUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ],
        'Timestamp' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Timestamp'
        ],
        'Version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Version'
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