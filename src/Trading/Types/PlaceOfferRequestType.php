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
 * @property \DTS\eBaySDK\Trading\Types\AffiliateTrackingDetailsType $AffiliateTrackingDetails
 * @property boolean $BlockOnWarning
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Types\OfferType $Offer
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $VariationSpecifics
 */
class PlaceOfferRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AffiliateTrackingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AffiliateTrackingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AffiliateTrackingDetails'
        ],
        'BlockOnWarning' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BlockOnWarning'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'Offer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\OfferType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Offer'
        ],
        'VariationSpecifics' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
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
        
        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'PlaceOfferRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}