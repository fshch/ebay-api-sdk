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

class CommentTypeCodeType extends Enum 
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_INDEPENDENTLY_WITHDRAWN = 'IndependentlyWithdrawn';
    const C_NEGATIVE = 'Negative';
    const C_NEUTRAL = 'Neutral';
    const C_POSITIVE = 'Positive';
    const C_WITHDRAWN = 'Withdrawn';

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
