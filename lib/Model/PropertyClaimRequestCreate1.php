<?php
/**
 * PropertyClaimRequestCreate1
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One Customer Api
 *
 * # API Intro  Insert the intro documentation here.  The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.
 *
 * OpenAPI spec version: 0.1.8
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PropertyClaimRequestCreate1 Class Doc Comment
 *
 * @category Class
 * @description Creates a property claim
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyClaimRequestCreate1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyClaimRequestCreate_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'template_ref' => 'string',
        'name' => 'string',
        'creator' => 'string',
        'personnel' => '\Swagger\Client\Model\PropertyclaimsPersonnel',
        'policy_info' => '\Swagger\Client\Model\PropertyclaimsPolicyInfo',
        'claim_info' => '\Swagger\Client\Model\PropertyclaimsClaimInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'template_ref' => 'uri',
        'name' => null,
        'creator' => 'email',
        'personnel' => null,
        'policy_info' => null,
        'claim_info' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'template_ref' => 'templateRef',
        'name' => 'name',
        'creator' => 'creator',
        'personnel' => 'personnel',
        'policy_info' => 'policyInfo',
        'claim_info' => 'claimInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_ref' => 'setTemplateRef',
        'name' => 'setName',
        'creator' => 'setCreator',
        'personnel' => 'setPersonnel',
        'policy_info' => 'setPolicyInfo',
        'claim_info' => 'setClaimInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_ref' => 'getTemplateRef',
        'name' => 'getName',
        'creator' => 'getCreator',
        'personnel' => 'getPersonnel',
        'policy_info' => 'getPolicyInfo',
        'claim_info' => 'getClaimInfo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['template_ref'] = isset($data['template_ref']) ? $data['template_ref'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['personnel'] = isset($data['personnel']) ? $data['personnel'] : null;
        $this->container['policy_info'] = isset($data['policy_info']) ? $data['policy_info'] : null;
        $this->container['claim_info'] = isset($data['claim_info']) ? $data['claim_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets template_ref
     *
     * @return string
     */
    public function getTemplateRef()
    {
        return $this->container['template_ref'];
    }

    /**
     * Sets template_ref
     *
     * @param string $template_ref The claim template uri to create the property claim from
     *
     * @return $this
     */
    public function setTemplateRef($template_ref)
    {
        $this->container['template_ref'] = $template_ref;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name for the created property claim
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator The email of the user creating the property claim
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets personnel
     *
     * @return \Swagger\Client\Model\PropertyclaimsPersonnel
     */
    public function getPersonnel()
    {
        return $this->container['personnel'];
    }

    /**
     * Sets personnel
     *
     * @param \Swagger\Client\Model\PropertyclaimsPersonnel $personnel personnel
     *
     * @return $this
     */
    public function setPersonnel($personnel)
    {
        $this->container['personnel'] = $personnel;

        return $this;
    }

    /**
     * Gets policy_info
     *
     * @return \Swagger\Client\Model\PropertyclaimsPolicyInfo
     */
    public function getPolicyInfo()
    {
        return $this->container['policy_info'];
    }

    /**
     * Sets policy_info
     *
     * @param \Swagger\Client\Model\PropertyclaimsPolicyInfo $policy_info policy_info
     *
     * @return $this
     */
    public function setPolicyInfo($policy_info)
    {
        $this->container['policy_info'] = $policy_info;

        return $this;
    }

    /**
     * Gets claim_info
     *
     * @return \Swagger\Client\Model\PropertyclaimsClaimInfo
     */
    public function getClaimInfo()
    {
        return $this->container['claim_info'];
    }

    /**
     * Sets claim_info
     *
     * @param \Swagger\Client\Model\PropertyclaimsClaimInfo $claim_info claim_info
     *
     * @return $this
     */
    public function setClaimInfo($claim_info)
    {
        $this->container['claim_info'] = $claim_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


