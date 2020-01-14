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

class WirelessCarrierIDCodeType extends Enum 
{
    const C_ATT = 'ATT';
    const C_CINCINNATI_BELL = 'CincinnatiBell';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_MOVISTAR = 'Movistar';
    const C_NEXTEL = 'Nextel';
    const C_SPRINT = 'Sprint';
    const C_T_MOBILE = 'TMobile';
    const C_US_CELLULAR = 'USCellular';
    const C_VERIZON = 'Verizon';
    const C_VODAFONE = 'Vodafone';

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