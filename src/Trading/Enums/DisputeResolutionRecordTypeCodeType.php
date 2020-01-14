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

class DisputeResolutionRecordTypeCodeType extends Enum 
{
    const C_APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FEATURE_FEE_CREDIT = 'FeatureFeeCredit';
    const C_FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';
    const C_FVF_CREDIT = 'FVFCredit';
    const C_FVF_CREDIT_NOT_GRANTED = 'FVFCreditNotGranted';
    const C_FVF_ON_SHIPPING_CREDIT = 'FVFOnShippingCredit';
    const C_FVF_ON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';
    const C_GENERATE_CS_TICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';
    const C_INSERTION_FEE_CREDIT = 'InsertionFeeCredit';
    const C_ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';
    const C_RESTRICT_BUYER = 'RestrictBuyer';
    const C_REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';
    const C_REVERSE_FVF_CREDIT = 'ReverseFVFCredit';
    const C_REVERSE_FVF_ON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';
    const C_REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';
    const C_STRIKE_BUYER = 'StrikeBuyer';
    const C_SUSPEND_BUYER = 'SuspendBuyer';
    const C_UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';
    const C_UNPAID_ITEM_REVISED = 'UnpaidItemRevised';
    const C_UNRESTRICT_BUYER = 'UnrestrictBuyer';
    const C_UNSUSPEND_BUYER = 'UnsuspendBuyer';

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