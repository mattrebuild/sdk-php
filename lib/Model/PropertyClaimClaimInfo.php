<?php
/**
 * PropertyClaimClaimInfo
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
 * # Introduction  The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.  This API uses a modern <a href=\"https://en.wikipedia.org/wiki/Representational_state_transfer\" target=\"_blank\">REST</a> architectural style that follows <a href=\"https://en.wikipedia.org/wiki/HATEOAS\" target=\"_blank\">HATEOAS</a> principles. It also includes the following features:  - Uses predictable resource-oriented URLs - Accepts JSON-encoded request bodies - Returns JSON-encoded responses - Uses standard HTTP response codes, authentication, and methods/verbs
 *
 * OpenAPI spec version: 0.1.198
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
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
 * PropertyClaimClaimInfo Class Doc Comment
 *
 * @category Class
 * @description Information about the specific claim
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyClaimClaimInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyClaimClaimInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'loss_information' => 'string',
        'additional_information' => 'string',
        'loss_date' => '\DateTime',
        'first_notice_of_loss' => '\DateTime',
        'peril_ref' => 'string',
        'cause_of_loss_ref' => 'string',
        'cause_of_loss_explanation' => 'string',
        'cat_code' => 'string',
        'agent_number' => 'string',
        'reference_number' => 'string',
        'potential_subrogation' => 'bool',
        'claim_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'loss_information' => null,
        'additional_information' => null,
        'loss_date' => 'date-time',
        'first_notice_of_loss' => 'date-time',
        'peril_ref' => 'uri',
        'cause_of_loss_ref' => 'uri',
        'cause_of_loss_explanation' => null,
        'cat_code' => null,
        'agent_number' => null,
        'reference_number' => null,
        'potential_subrogation' => null,
        'claim_number' => null
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
        'loss_information' => 'lossInformation',
        'additional_information' => 'additionalInformation',
        'loss_date' => 'lossDate',
        'first_notice_of_loss' => 'firstNoticeOfLoss',
        'peril_ref' => 'perilRef',
        'cause_of_loss_ref' => 'causeOfLossRef',
        'cause_of_loss_explanation' => 'causeOfLossExplanation',
        'cat_code' => 'catCode',
        'agent_number' => 'agentNumber',
        'reference_number' => 'referenceNumber',
        'potential_subrogation' => 'potentialSubrogation',
        'claim_number' => 'claimNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loss_information' => 'setLossInformation',
        'additional_information' => 'setAdditionalInformation',
        'loss_date' => 'setLossDate',
        'first_notice_of_loss' => 'setFirstNoticeOfLoss',
        'peril_ref' => 'setPerilRef',
        'cause_of_loss_ref' => 'setCauseOfLossRef',
        'cause_of_loss_explanation' => 'setCauseOfLossExplanation',
        'cat_code' => 'setCatCode',
        'agent_number' => 'setAgentNumber',
        'reference_number' => 'setReferenceNumber',
        'potential_subrogation' => 'setPotentialSubrogation',
        'claim_number' => 'setClaimNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loss_information' => 'getLossInformation',
        'additional_information' => 'getAdditionalInformation',
        'loss_date' => 'getLossDate',
        'first_notice_of_loss' => 'getFirstNoticeOfLoss',
        'peril_ref' => 'getPerilRef',
        'cause_of_loss_ref' => 'getCauseOfLossRef',
        'cause_of_loss_explanation' => 'getCauseOfLossExplanation',
        'cat_code' => 'getCatCode',
        'agent_number' => 'getAgentNumber',
        'reference_number' => 'getReferenceNumber',
        'potential_subrogation' => 'getPotentialSubrogation',
        'claim_number' => 'getClaimNumber'
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
        $this->container['loss_information'] = isset($data['loss_information']) ? $data['loss_information'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
        $this->container['loss_date'] = isset($data['loss_date']) ? $data['loss_date'] : null;
        $this->container['first_notice_of_loss'] = isset($data['first_notice_of_loss']) ? $data['first_notice_of_loss'] : null;
        $this->container['peril_ref'] = isset($data['peril_ref']) ? $data['peril_ref'] : null;
        $this->container['cause_of_loss_ref'] = isset($data['cause_of_loss_ref']) ? $data['cause_of_loss_ref'] : null;
        $this->container['cause_of_loss_explanation'] = isset($data['cause_of_loss_explanation']) ? $data['cause_of_loss_explanation'] : null;
        $this->container['cat_code'] = isset($data['cat_code']) ? $data['cat_code'] : null;
        $this->container['agent_number'] = isset($data['agent_number']) ? $data['agent_number'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['potential_subrogation'] = isset($data['potential_subrogation']) ? $data['potential_subrogation'] : null;
        $this->container['claim_number'] = isset($data['claim_number']) ? $data['claim_number'] : null;
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
     * Gets loss_information
     *
     * @return string
     */
    public function getLossInformation()
    {
        return $this->container['loss_information'];
    }

    /**
     * Sets loss_information
     *
     * @param string $loss_information A description of the loss
     *
     * @return $this
     */
    public function setLossInformation($loss_information)
    {
        $this->container['loss_information'] = $loss_information;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string $additional_information Any additional claim information
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

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
     * @param \DateTime $loss_date The date when the loss occured
     *
     * @return $this
     */
    public function setLossDate($loss_date)
    {
        $this->container['loss_date'] = $loss_date;

        return $this;
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
     * @param \DateTime $first_notice_of_loss The date when the carrier was informed of the loss
     *
     * @return $this
     */
    public function setFirstNoticeOfLoss($first_notice_of_loss)
    {
        $this->container['first_notice_of_loss'] = $first_notice_of_loss;

        return $this;
    }

    /**
     * Gets peril_ref
     *
     * @return string
     */
    public function getPerilRef()
    {
        return $this->container['peril_ref'];
    }

    /**
     * Sets peril_ref
     *
     * @param string $peril_ref The type of loss
     *
     * @return $this
     */
    public function setPerilRef($peril_ref)
    {
        $this->container['peril_ref'] = $peril_ref;

        return $this;
    }

    /**
     * Gets cause_of_loss_ref
     *
     * @return string
     */
    public function getCauseOfLossRef()
    {
        return $this->container['cause_of_loss_ref'];
    }

    /**
     * Sets cause_of_loss_ref
     *
     * @param string $cause_of_loss_ref The cause of the peril
     *
     * @return $this
     */
    public function setCauseOfLossRef($cause_of_loss_ref)
    {
        $this->container['cause_of_loss_ref'] = $cause_of_loss_ref;

        return $this;
    }

    /**
     * Gets cause_of_loss_explanation
     *
     * @return string
     */
    public function getCauseOfLossExplanation()
    {
        return $this->container['cause_of_loss_explanation'];
    }

    /**
     * Sets cause_of_loss_explanation
     *
     * @param string $cause_of_loss_explanation Notes explaining the cause of loss. Required if causeOfLossRef refers to 'Other'
     *
     * @return $this
     */
    public function setCauseOfLossExplanation($cause_of_loss_explanation)
    {
        $this->container['cause_of_loss_explanation'] = $cause_of_loss_explanation;

        return $this;
    }

    /**
     * Gets cat_code
     *
     * @return string
     */
    public function getCatCode()
    {
        return $this->container['cat_code'];
    }

    /**
     * Sets cat_code
     *
     * @param string $cat_code 
     *
     * @return $this
     */
    public function setCatCode($cat_code)
    {
        $this->container['cat_code'] = $cat_code;

        return $this;
    }

    /**
     * Gets agent_number
     *
     * @return string
     */
    public function getAgentNumber()
    {
        return $this->container['agent_number'];
    }

    /**
     * Sets agent_number
     *
     * @param string $agent_number 
     *
     * @return $this
     */
    public function setAgentNumber($agent_number)
    {
        $this->container['agent_number'] = $agent_number;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number The reference number for this claim. This eases integration with external systems.
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets potential_subrogation
     *
     * @return bool
     */
    public function getPotentialSubrogation()
    {
        return $this->container['potential_subrogation'];
    }

    /**
     * Sets potential_subrogation
     *
     * @param bool $potential_subrogation 
     *
     * @return $this
     */
    public function setPotentialSubrogation($potential_subrogation)
    {
        $this->container['potential_subrogation'] = $potential_subrogation;

        return $this;
    }

    /**
     * Gets claim_number
     *
     * @return string
     */
    public function getClaimNumber()
    {
        return $this->container['claim_number'];
    }

    /**
     * Sets claim_number
     *
     * @param string $claim_number The claim number
     *
     * @return $this
     */
    public function setClaimNumber($claim_number)
    {
        $this->container['claim_number'] = $claim_number;

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


