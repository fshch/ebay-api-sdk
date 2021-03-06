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

class SellingManagerProductSortCodeType extends Enum 
{
    const C_ACTIVE_QUANTITY = 'ActiveQuantity';
    const C_AVAILABLE_TO_LIST = 'AvailableToList';
    const C_AVERAGE_PRICE = 'AveragePrice';
    const C_AVERAGE_UNIT_COST = 'AverageUnitCost';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_CUSTOM_LABEL = 'CustomLabel';
    const C_FOLDER_NAME = 'FolderName';
    const C_LAST_SUBMITTED_DATE = 'LastSubmittedDate';
    const C_PRODUCT_NAME = 'ProductName';
    const C_SCHEDULED_QUANTITY = 'ScheduledQuantity';
    const C_SOLD_QUANTITY = 'SoldQuantity';
    const C_SUCCESS_PERCENT = 'SuccessPercent';
    const C_UNSOLD_QUANTITY = 'UnsoldQuantity';

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
