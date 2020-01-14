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

class PaymentStatusCodeType extends Enum 
{
    const C_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    const C_BUYER_E_CHECK_BOUNCED = 'BuyerECheckBounced';
    const C_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    const C_PAYMENT_IN_PROCESS = 'PaymentInProcess';
    const C_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';

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