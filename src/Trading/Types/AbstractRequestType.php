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
 * @property \DTS\eBaySDK\Trading\Types\BotBlockRequestType $BotBlock
 * @property \DTS\eBaySDK\Trading\Enums\DetailLevelCodeType[] $DetailLevel
 * @property string $EndUserIP
 * @property \DTS\eBaySDK\Trading\Enums\ErrorHandlingCodeType $ErrorHandling
 * @property string $ErrorLanguage
 * @property string $InvocationID
 * @property string $MessageID
 * @property string[] $OutputSelector
 * @property string $Version
 * @property \DTS\eBaySDK\Trading\Enums\WarningLevelCodeType $WarningLevel
 */
class AbstractRequestType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BotBlock' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BotBlockRequestType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
        ],
        'DetailLevel' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DetailLevel'
        ],
        'EndUserIP' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndUserIP'
        ],
        'ErrorHandling' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorHandling'
        ],
        'ErrorLanguage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorLanguage'
        ],
        'InvocationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvocationID'
        ],
        'MessageID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ],
        'OutputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OutputSelector'
        ],
        'Version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ],
        'WarningLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WarningLevel'
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