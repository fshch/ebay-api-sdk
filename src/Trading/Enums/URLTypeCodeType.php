<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Enums;

use MyCLabs\Enum\Enum;

class URLTypeCodeType extends Enum 
{
    const C_APPEAL_PRODUCT_URL = 'AppealProductUrl';
    const C_CREATE_PRODUCT_URL = 'CreateProductUrl';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_EBAY_STORE_URL = 'eBayStoreURL';
    const C_LARGE_LOGO_URL = 'LargeLogoURL';
    const C_MANAGE_PRODUCT_URL = 'ManageProductUrl';
    const C_MEDIUM_LOGO_URL = 'MediumLogoURL';
    const C_MY_EBAY_BIDDING_URL = 'MyeBayBiddingURL';
    const C_MY_EBAY_NOT_WON_URL = 'MyeBayNotWonURL';
    const C_MY_EBAY_URL = 'MyeBayURL';
    const C_MY_EBAY_WATCHING_URL = 'MyeBayWatchingURL';
    const C_MY_EBAY_WON_URL = 'MyeBayWonURL';
    const C_SMALL_LOGO_URL = 'SmallLogoURL';
    const C_VIEW_ITEM_URL = 'ViewItemURL';
    const C_VIEW_USER_URL = 'ViewUserURL';

    /**
     * Just for test case,because when called outside class, get_parent_class() always return false,unless the function
     * and class is in the same file
     *
     * @return string
     */
    public static function getParentClass()
    {
        return get_parent_class();
    }

}