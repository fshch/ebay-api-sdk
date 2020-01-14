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

class UnpaidItemStatusTypeCodeType extends Enum 
{
    const C_AWAITING_BUYER_RESPONSE = 'AwaitingBuyerResponse';
    const C_AWAITING_SELLER_RESPONSE = 'AwaitingSellerResponse';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FINAL_VALUE_FEE_CREDITED = 'FinalValueFeeCredited';
    const C_FINAL_VALUE_FEE_DENIED = 'FinalValueFeeDenied';
    const C_FINAL_VALUE_FEE_ELIGIBLE = 'FinalValueFeeEligible';
    const C_UNPAID_ITEM_ELIGIBLE = 'UnpaidItemEligible';
    const C_UNPAID_ITEM_FILED = 'UnpaidItemFiled';

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
