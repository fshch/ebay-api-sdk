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

class GalleryStatusCodeType extends Enum 
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_IMAGE_NON_EXISTENT = 'ImageNonExistent';
    const C_IMAGE_PROCESSING_ERROR = 'ImageProcessingError';
    const C_IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';
    const C_INVALID_FILE = 'InvalidFile';
    const C_INVALID_FILE_FORMAT = 'InvalidFileFormat';
    const C_INVALID_PROTOCOL = 'InvalidProtocol';
    const C_INVALID_URL = 'InvalidUrl';
    const C_PENDING = 'Pending';
    const C_SERVER_DOWN = 'ServerDown';
    const C_SUCCESS = 'Success';

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