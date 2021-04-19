<?php
/**
 * PolicyResponse
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
 * PolicyResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PolicyResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'country';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PolicyResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apply_deductible_across_all_coverages' => 'bool',
'beneficiary_stakeholder_ids' => 'string[]',
'broker_stakeholder_id' => 'string',
'country' => 'string',
'coverages' => '\Swagger\Client\Model\CoverageOrSublimitV1Response[]',
'currency' => 'string',
'deductible' => '\Swagger\Client\Model\DeductibleV1Response',
'effective_date' => '\DateTime',
'expiration_date' => '\DateTime',
'id' => 'string',
'inception_date' => '\DateTime',
'insured_stakeholder_ids' => 'string[]',
'insurer_stakeholder_id' => 'string',
'mortgages' => '\Swagger\Client\Model\MortgageV1Response[]',
'onsite_contact_stakeholder_id' => 'string',
'policy_number' => 'string',
'policy_owner_stakeholder_id' => 'string',
'risk_address' => '\Swagger\Client\Model\AddressV1Response'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apply_deductible_across_all_coverages' => null,
'beneficiary_stakeholder_ids' => 'uuid',
'broker_stakeholder_id' => 'uuid',
'country' => 'ISO 3166',
'coverages' => null,
'currency' => 'ISO 4217',
'deductible' => null,
'effective_date' => 'date-time',
'expiration_date' => 'date-time',
'id' => 'uuid',
'inception_date' => 'date-time',
'insured_stakeholder_ids' => 'uuid',
'insurer_stakeholder_id' => 'uuid',
'mortgages' => null,
'onsite_contact_stakeholder_id' => 'uuid',
'policy_number' => null,
'policy_owner_stakeholder_id' => 'uuid',
'risk_address' => null    ];

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
        'apply_deductible_across_all_coverages' => 'applyDeductibleAcrossAllCoverages',
'beneficiary_stakeholder_ids' => 'beneficiaryStakeholderIds',
'broker_stakeholder_id' => 'brokerStakeholderId',
'country' => 'country',
'coverages' => 'coverages',
'currency' => 'currency',
'deductible' => 'deductible',
'effective_date' => 'effectiveDate',
'expiration_date' => 'expirationDate',
'id' => 'id',
'inception_date' => 'inceptionDate',
'insured_stakeholder_ids' => 'insuredStakeholderIds',
'insurer_stakeholder_id' => 'insurerStakeholderId',
'mortgages' => 'mortgages',
'onsite_contact_stakeholder_id' => 'onsiteContactStakeholderId',
'policy_number' => 'policyNumber',
'policy_owner_stakeholder_id' => 'policyOwnerStakeholderId',
'risk_address' => 'riskAddress'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_deductible_across_all_coverages' => 'setApplyDeductibleAcrossAllCoverages',
'beneficiary_stakeholder_ids' => 'setBeneficiaryStakeholderIds',
'broker_stakeholder_id' => 'setBrokerStakeholderId',
'country' => 'setCountry',
'coverages' => 'setCoverages',
'currency' => 'setCurrency',
'deductible' => 'setDeductible',
'effective_date' => 'setEffectiveDate',
'expiration_date' => 'setExpirationDate',
'id' => 'setId',
'inception_date' => 'setInceptionDate',
'insured_stakeholder_ids' => 'setInsuredStakeholderIds',
'insurer_stakeholder_id' => 'setInsurerStakeholderId',
'mortgages' => 'setMortgages',
'onsite_contact_stakeholder_id' => 'setOnsiteContactStakeholderId',
'policy_number' => 'setPolicyNumber',
'policy_owner_stakeholder_id' => 'setPolicyOwnerStakeholderId',
'risk_address' => 'setRiskAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_deductible_across_all_coverages' => 'getApplyDeductibleAcrossAllCoverages',
'beneficiary_stakeholder_ids' => 'getBeneficiaryStakeholderIds',
'broker_stakeholder_id' => 'getBrokerStakeholderId',
'country' => 'getCountry',
'coverages' => 'getCoverages',
'currency' => 'getCurrency',
'deductible' => 'getDeductible',
'effective_date' => 'getEffectiveDate',
'expiration_date' => 'getExpirationDate',
'id' => 'getId',
'inception_date' => 'getInceptionDate',
'insured_stakeholder_ids' => 'getInsuredStakeholderIds',
'insurer_stakeholder_id' => 'getInsurerStakeholderId',
'mortgages' => 'getMortgages',
'onsite_contact_stakeholder_id' => 'getOnsiteContactStakeholderId',
'policy_number' => 'getPolicyNumber',
'policy_owner_stakeholder_id' => 'getPolicyOwnerStakeholderId',
'risk_address' => 'getRiskAddress'    ];

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
        $this->container['apply_deductible_across_all_coverages'] = isset($data['apply_deductible_across_all_coverages']) ? $data['apply_deductible_across_all_coverages'] : null;
        $this->container['beneficiary_stakeholder_ids'] = isset($data['beneficiary_stakeholder_ids']) ? $data['beneficiary_stakeholder_ids'] : null;
        $this->container['broker_stakeholder_id'] = isset($data['broker_stakeholder_id']) ? $data['broker_stakeholder_id'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['coverages'] = isset($data['coverages']) ? $data['coverages'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['deductible'] = isset($data['deductible']) ? $data['deductible'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inception_date'] = isset($data['inception_date']) ? $data['inception_date'] : null;
        $this->container['insured_stakeholder_ids'] = isset($data['insured_stakeholder_ids']) ? $data['insured_stakeholder_ids'] : null;
        $this->container['insurer_stakeholder_id'] = isset($data['insurer_stakeholder_id']) ? $data['insurer_stakeholder_id'] : null;
        $this->container['mortgages'] = isset($data['mortgages']) ? $data['mortgages'] : null;
        $this->container['onsite_contact_stakeholder_id'] = isset($data['onsite_contact_stakeholder_id']) ? $data['onsite_contact_stakeholder_id'] : null;
        $this->container['policy_number'] = isset($data['policy_number']) ? $data['policy_number'] : null;
        $this->container['policy_owner_stakeholder_id'] = isset($data['policy_owner_stakeholder_id']) ? $data['policy_owner_stakeholder_id'] : null;
        $this->container['risk_address'] = isset($data['risk_address']) ? $data['risk_address'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('country', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['apply_deductible_across_all_coverages'] === null) {
            $invalidProperties[] = "'apply_deductible_across_all_coverages' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['risk_address'] === null) {
            $invalidProperties[] = "'risk_address' can't be null";
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
     * Gets apply_deductible_across_all_coverages
     *
     * @return bool
     */
    public function getApplyDeductibleAcrossAllCoverages()
    {
        return $this->container['apply_deductible_across_all_coverages'];
    }

    /**
     * Sets apply_deductible_across_all_coverages
     *
     * @param bool $apply_deductible_across_all_coverages apply_deductible_across_all_coverages
     *
     * @return $this
     */
    public function setApplyDeductibleAcrossAllCoverages($apply_deductible_across_all_coverages)
    {
        $this->container['apply_deductible_across_all_coverages'] = $apply_deductible_across_all_coverages;

        return $this;
    }

    /**
     * Gets beneficiary_stakeholder_ids
     *
     * @return string[]
     */
    public function getBeneficiaryStakeholderIds()
    {
        return $this->container['beneficiary_stakeholder_ids'];
    }

    /**
     * Sets beneficiary_stakeholder_ids
     *
     * @param string[] $beneficiary_stakeholder_ids beneficiary_stakeholder_ids
     *
     * @return $this
     */
    public function setBeneficiaryStakeholderIds($beneficiary_stakeholder_ids)
    {
        $this->container['beneficiary_stakeholder_ids'] = $beneficiary_stakeholder_ids;

        return $this;
    }

    /**
     * Gets broker_stakeholder_id
     *
     * @return string
     */
    public function getBrokerStakeholderId()
    {
        return $this->container['broker_stakeholder_id'];
    }

    /**
     * Sets broker_stakeholder_id
     *
     * @param string $broker_stakeholder_id broker_stakeholder_id
     *
     * @return $this
     */
    public function setBrokerStakeholderId($broker_stakeholder_id)
    {
        $this->container['broker_stakeholder_id'] = $broker_stakeholder_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets coverages
     *
     * @return \Swagger\Client\Model\CoverageOrSublimitV1Response[]
     */
    public function getCoverages()
    {
        return $this->container['coverages'];
    }

    /**
     * Sets coverages
     *
     * @param \Swagger\Client\Model\CoverageOrSublimitV1Response[] $coverages coverages
     *
     * @return $this
     */
    public function setCoverages($coverages)
    {
        $this->container['coverages'] = $coverages;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets deductible
     *
     * @return \Swagger\Client\Model\DeductibleV1Response
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param \Swagger\Client\Model\DeductibleV1Response $deductible deductible
     *
     * @return $this
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date effective_date
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inception_date
     *
     * @return \DateTime
     */
    public function getInceptionDate()
    {
        return $this->container['inception_date'];
    }

    /**
     * Sets inception_date
     *
     * @param \DateTime $inception_date inception_date
     *
     * @return $this
     */
    public function setInceptionDate($inception_date)
    {
        $this->container['inception_date'] = $inception_date;

        return $this;
    }

    /**
     * Gets insured_stakeholder_ids
     *
     * @return string[]
     */
    public function getInsuredStakeholderIds()
    {
        return $this->container['insured_stakeholder_ids'];
    }

    /**
     * Sets insured_stakeholder_ids
     *
     * @param string[] $insured_stakeholder_ids insured_stakeholder_ids
     *
     * @return $this
     */
    public function setInsuredStakeholderIds($insured_stakeholder_ids)
    {
        $this->container['insured_stakeholder_ids'] = $insured_stakeholder_ids;

        return $this;
    }

    /**
     * Gets insurer_stakeholder_id
     *
     * @return string
     */
    public function getInsurerStakeholderId()
    {
        return $this->container['insurer_stakeholder_id'];
    }

    /**
     * Sets insurer_stakeholder_id
     *
     * @param string $insurer_stakeholder_id insurer_stakeholder_id
     *
     * @return $this
     */
    public function setInsurerStakeholderId($insurer_stakeholder_id)
    {
        $this->container['insurer_stakeholder_id'] = $insurer_stakeholder_id;

        return $this;
    }

    /**
     * Gets mortgages
     *
     * @return \Swagger\Client\Model\MortgageV1Response[]
     */
    public function getMortgages()
    {
        return $this->container['mortgages'];
    }

    /**
     * Sets mortgages
     *
     * @param \Swagger\Client\Model\MortgageV1Response[] $mortgages mortgages
     *
     * @return $this
     */
    public function setMortgages($mortgages)
    {
        $this->container['mortgages'] = $mortgages;

        return $this;
    }

    /**
     * Gets onsite_contact_stakeholder_id
     *
     * @return string
     */
    public function getOnsiteContactStakeholderId()
    {
        return $this->container['onsite_contact_stakeholder_id'];
    }

    /**
     * Sets onsite_contact_stakeholder_id
     *
     * @param string $onsite_contact_stakeholder_id onsite_contact_stakeholder_id
     *
     * @return $this
     */
    public function setOnsiteContactStakeholderId($onsite_contact_stakeholder_id)
    {
        $this->container['onsite_contact_stakeholder_id'] = $onsite_contact_stakeholder_id;

        return $this;
    }

    /**
     * Gets policy_number
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->container['policy_number'];
    }

    /**
     * Sets policy_number
     *
     * @param string $policy_number policy_number
     *
     * @return $this
     */
    public function setPolicyNumber($policy_number)
    {
        $this->container['policy_number'] = $policy_number;

        return $this;
    }

    /**
     * Gets policy_owner_stakeholder_id
     *
     * @return string
     */
    public function getPolicyOwnerStakeholderId()
    {
        return $this->container['policy_owner_stakeholder_id'];
    }

    /**
     * Sets policy_owner_stakeholder_id
     *
     * @param string $policy_owner_stakeholder_id policy_owner_stakeholder_id
     *
     * @return $this
     */
    public function setPolicyOwnerStakeholderId($policy_owner_stakeholder_id)
    {
        $this->container['policy_owner_stakeholder_id'] = $policy_owner_stakeholder_id;

        return $this;
    }

    /**
     * Gets risk_address
     *
     * @return \Swagger\Client\Model\AddressV1Response
     */
    public function getRiskAddress()
    {
        return $this->container['risk_address'];
    }

    /**
     * Sets risk_address
     *
     * @param \Swagger\Client\Model\AddressV1Response $risk_address risk_address
     *
     * @return $this
     */
    public function setRiskAddress($risk_address)
    {
        $this->container['risk_address'] = $risk_address;

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