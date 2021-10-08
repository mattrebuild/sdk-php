<?php
/**
 * LineItemResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xactimate One API
 *
 * The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * LineItemResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LineItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity' => '\OpenAPI\Client\Model\ActivityType',
        'age' => 'double',
        'condition' => '\OpenAPI\Client\Model\ConditionType',
        'coverage_id' => 'string',
        'folder_id' => 'string',
        'id' => 'string',
        'is_covered' => 'bool',
        'media' => '\OpenAPI\Client\Model\LineItemMediaResponse[]',
        'name' => 'string',
        'notes' => 'string',
        'pricing' => '\OpenAPI\Client\Model\LineItemPricingResponse',
        'quantity' => 'double',
        'units' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity' => null,
        'age' => 'double',
        'condition' => null,
        'coverage_id' => 'uuid',
        'folder_id' => 'uuid',
        'id' => 'uuid',
        'is_covered' => null,
        'media' => null,
        'name' => null,
        'notes' => null,
        'pricing' => null,
        'quantity' => 'double',
        'units' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activity' => 'activity',
        'age' => 'age',
        'condition' => 'condition',
        'coverage_id' => 'coverageId',
        'folder_id' => 'folderId',
        'id' => 'id',
        'is_covered' => 'isCovered',
        'media' => 'media',
        'name' => 'name',
        'notes' => 'notes',
        'pricing' => 'pricing',
        'quantity' => 'quantity',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
        'age' => 'setAge',
        'condition' => 'setCondition',
        'coverage_id' => 'setCoverageId',
        'folder_id' => 'setFolderId',
        'id' => 'setId',
        'is_covered' => 'setIsCovered',
        'media' => 'setMedia',
        'name' => 'setName',
        'notes' => 'setNotes',
        'pricing' => 'setPricing',
        'quantity' => 'setQuantity',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
        'age' => 'getAge',
        'condition' => 'getCondition',
        'coverage_id' => 'getCoverageId',
        'folder_id' => 'getFolderId',
        'id' => 'getId',
        'is_covered' => 'getIsCovered',
        'media' => 'getMedia',
        'name' => 'getName',
        'notes' => 'getNotes',
        'pricing' => 'getPricing',
        'quantity' => 'getQuantity',
        'units' => 'getUnits'
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
        return self::$openAPIModelName;
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
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['age'] = $data['age'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['coverage_id'] = $data['coverage_id'] ?? null;
        $this->container['folder_id'] = $data['folder_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['is_covered'] = $data['is_covered'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_covered'] === null) {
            $invalidProperties[] = "'is_covered' can't be null";
        }
        if ($this->container['media'] === null) {
            $invalidProperties[] = "'media' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
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
     * Gets activity
     *
     * @return \OpenAPI\Client\Model\ActivityType
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \OpenAPI\Client\Model\ActivityType $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets age
     *
     * @return double|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param double|null $age The age of the line item.
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \OpenAPI\Client\Model\ConditionType
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \OpenAPI\Client\Model\ConditionType $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets coverage_id
     *
     * @return string|null
     */
    public function getCoverageId()
    {
        return $this->container['coverage_id'];
    }

    /**
     * Sets coverage_id
     *
     * @param string|null $coverage_id The coverage id of the line item.
     *
     * @return self
     */
    public function setCoverageId($coverage_id)
    {
        $this->container['coverage_id'] = $coverage_id;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id The id of folder which contains the line item.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The id of the line item.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_covered
     *
     * @return bool
     */
    public function getIsCovered()
    {
        return $this->container['is_covered'];
    }

    /**
     * Sets is_covered
     *
     * @param bool $is_covered Whether the line item is covered.
     *
     * @return self
     */
    public function setIsCovered($is_covered)
    {
        $this->container['is_covered'] = $is_covered;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\LineItemMediaResponse[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\LineItemMediaResponse[] $media The media items of the line item.
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

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
     * @param string $name The name of the line item.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes The notes on the line item.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \OpenAPI\Client\Model\LineItemPricingResponse|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \OpenAPI\Client\Model\LineItemPricingResponse|null $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity The quantity of the line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string $units The unit of the line item.
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


