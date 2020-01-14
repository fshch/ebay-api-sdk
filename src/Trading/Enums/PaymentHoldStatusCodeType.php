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

class PaymentHoldStatusCodeType extends Enum 
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_MERCHANT_HOLD = 'MerchantHold';
    const C_NEW_SELLER_HOLD = 'NewSellerHold';
    const C_NONE = 'None';
    const C_PAYMENT_HOLD = 'PaymentHold';
    const C_PAYMENT_REVIEW = 'PaymentReview';
    const C_RELEASE_CONFIRMED = 'ReleaseConfirmed';
    const C_RELEASED = 'Released';
    const C_RELEASE_PENDING = 'ReleasePending';

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
