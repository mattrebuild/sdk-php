<?php
/**
 * LossUpdateRequest
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LossUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LossUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LossUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_notice_of_loss' => '\DateTime',
'loss_date' => '\DateTime',
'loss_description' => 'string',
'peril' => '\Swagger\Client\Model\PerilUpdateRequest',
'potential_subrogation' => '\Swagger\Client\Model\PotentialSubrogationUpdateRequest'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_notice_of_loss' => 'date-time',
'loss_date' => 'date-time',
'loss_description' => null,
'peril' => null,
'potential_subrogation' => null    ];

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
        'first_notice_of_loss' => 'firstNoticeOfLoss',
'loss_date' => 'lossDate',
'loss_description' => 'lossDescription',
'peril' => 'peril',
'potential_subrogation' => 'potentialSubrogation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_notice_of_loss' => 'setFirstNoticeOfLoss',
'loss_date' => 'setLossDate',
'loss_description' => 'setLossDescription',
'peril' => 'setPeril',
'potential_subrogation' => 'setPotentialSubrogation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_notice_of_loss' => 'getFirstNoticeOfLoss',
'loss_date' => 'getLossDate',
'loss_description' => 'getLossDescription',
'peril' => 'getPeril',
'potential_subrogation' => 'getPotentialSubrogation'    ];

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
        $this->container['first_notice_of_loss'] = isset($data['first_notice_of_loss']) ? $data['first_notice_of_loss'] : null;
        $this->container['loss_date'] = isset($data['loss_date']) ? $data['loss_date'] : null;
        $this->container['loss_description'] = isset($data['loss_description']) ? $data['loss_description'] : null;
        $this->container['peril'] = isset($data['peril']) ? $data['peril'] : null;
        $this->container['potential_subrogation'] = isset($data['potential_subrogation']) ? $data['potential_subrogation'] : null;
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
     * Gets first_notice_of_loss
     *
     * @return \DateTime
     */
    public function getFirstNoticeOfLoss()
    {
        return $this->container['first_notice_of_loss'];
    }

    /**
     * Sets first_notice_of_loss
     *
     * @param \DateTime $first_notice_of_loss The first notice of loss
     *
     * @return $this
     */
    public function setFirstNoticeOfLoss($first_notice_of_loss)
    {
        $this->container['first_notice_of_loss'] = $first_notice_of_loss;

        return $this;
    }

    /**
     * Gets loss_date
     *
     * @return \DateTime
     */
    public function getLossDate()
    {
        return $this->container['loss_date'];
    }

    /**
     * Sets loss_date
     *
     * @param \DateTime $loss_date The loss daet
     *
     * @return $this
     */
    public function setLossDate($loss_date)
    {
        $this->container['loss_date'] = $loss_date;

        return $this;
    }

    /**
     * Gets loss_description
     *
     * @return string
     */
    public function getLossDescription()
    {
        return $this->container['loss_description'];
    }

    /**
     * Sets loss_description
     *
     * @param string $loss_description The loss description
     *
     * @return $this
     */
    public function setLossDescription($loss_description)
    {
        $this->container['loss_description'] = $loss_description;

        return $this;
    }

    /**
     * Gets peril
     *
     * @return \Swagger\Client\Model\PerilUpdateRequest
     */
    public function getPeril()
    {
        return $this->container['peril'];
    }

    /**
     * Sets peril
     *
     * @param \Swagger\Client\Model\PerilUpdateRequest $peril peril
     *
     * @return $this
     */
    public function setPeril($peril)
    {
        $this->container['peril'] = $peril;

        return $this;
    }

    /**
     * Gets potential_subrogation
     *
     * @return \Swagger\Client\Model\PotentialSubrogationUpdateRequest
     */
    public function getPotentialSubrogation()
    {
        return $this->container['potential_subrogation'];
    }

    /**
     * Sets potential_subrogation
     *
     * @param \Swagger\Client\Model\PotentialSubrogationUpdateRequest $potential_subrogation potential_subrogation
     *
     * @return $this
     */
    public function setPotentialSubrogation($potential_subrogation)
    {
        $this->container['potential_subrogation'] = $potential_subrogation;

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
