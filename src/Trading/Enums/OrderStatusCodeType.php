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

class OrderStatusCodeType extends Enum 
{
    const C_ACTIVE = 'Active';
    const C_ALL = 'All';
    const C_CANCELLED = 'Cancelled';
    const C_CANCEL_PENDING = 'CancelPending';
    const C_COMPLETED = 'Completed';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_INACTIVE = 'Inactive';
    const C_IN_PROCESS = 'InProcess';

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
