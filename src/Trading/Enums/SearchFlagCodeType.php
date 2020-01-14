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

class SearchFlagCodeType extends Enum 
{
    const C_CHARITY = 'Charity';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FREE_SHIPPING = 'FreeShipping';
    const C_GERMAN_MOTORS_SEARCHABLE = 'GermanMotorsSearchable';
    const C_LOCAL_SEARCH = 'LocalSearch';
    const C_LOT = 'Lot';

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
