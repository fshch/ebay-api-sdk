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
 * @property string $BaseURL
 * @property string $ExternalPictureURL
 * @property string $FullURL
 * @property \DTS\eBaySDK\Trading\Enums\PictureFormatCodeType $PictureFormat
 * @property string $PictureName
 * @property \DTS\eBaySDK\Trading\Enums\PictureSetCodeType $PictureSet
 * @property \DTS\eBaySDK\Trading\Types\PictureSetMemberType[] $PictureSetMember
 * @property \DateTime $UseByDate
 */
class SiteHostedPictureDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BaseURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BaseURL'
        ],
        'ExternalPictureURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalPictureURL'
        ],
        'FullURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FullURL'
        ],
        'PictureFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureFormat'
        ],
        'PictureName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureName'
        ],
        'PictureSet' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureSet'
        ],
        'PictureSetMember' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PictureSetMemberType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureSetMember'
        ],
        'UseByDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseByDate'
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