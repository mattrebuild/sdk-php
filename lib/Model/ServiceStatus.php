<?php
/**
 * ServiceStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One API
 *
 * The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.
 *
 * OpenAPI spec version: null
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * ServiceStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceStatus
{
    /**
     * Possible values of this enum
     */
    const ACCESSIBLE = 'Accessible';
const DEGRADED = 'Degraded';
const IN_ACCESSIBLE = 'InAccessible';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCESSIBLE,
self::DEGRADED,
self::IN_ACCESSIBLE,        ];
    }
}
