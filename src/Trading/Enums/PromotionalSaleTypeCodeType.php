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

class PromotionalSaleTypeCodeType extends Enum 
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FREE_SHIPPING_ONLY = 'FreeShippingOnly';
    const C_PRICE_DISCOUNT_AND_FREE_SHIPPING = 'PriceDiscountAndFreeShipping';
    const C_PRICE_DISCOUNT_ONLY = 'PriceDiscountOnly';

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
