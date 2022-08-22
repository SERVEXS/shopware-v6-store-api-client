<?php
/**
 * CountryJsonApiAllOf
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shopware Store API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Store API
 *
 * The version of the OpenAPI document: 6.4.9999999.9999999-dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ServeXS\Shopware\v6\Store\Model;

use \ArrayAccess;
use \ServeXS\Shopware\v6\Store\ObjectSerializer;

/**
 * CountryJsonApiAllOf Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CountryJsonApiAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountryJsonApi_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'iso' => 'string',
        'position' => 'int',
        'tax_free' => 'bool',
        'active' => 'bool',
        'shipping_available' => 'bool',
        'iso3' => 'string',
        'display_state_in_registration' => 'bool',
        'force_state_in_registration' => 'bool',
        'company_tax_free' => 'bool',
        'check_vat_id_pattern' => 'bool',
        'vat_id_pattern' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'relationships' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'iso' => null,
        'position' => 'int64',
        'tax_free' => null,
        'active' => null,
        'shipping_available' => null,
        'iso3' => null,
        'display_state_in_registration' => null,
        'force_state_in_registration' => null,
        'company_tax_free' => null,
        'check_vat_id_pattern' => null,
        'vat_id_pattern' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'relationships' => null
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
        'id' => 'id',
        'name' => 'name',
        'iso' => 'iso',
        'position' => 'position',
        'tax_free' => 'taxFree',
        'active' => 'active',
        'shipping_available' => 'shippingAvailable',
        'iso3' => 'iso3',
        'display_state_in_registration' => 'displayStateInRegistration',
        'force_state_in_registration' => 'forceStateInRegistration',
        'company_tax_free' => 'companyTaxFree',
        'check_vat_id_pattern' => 'checkVatIdPattern',
        'vat_id_pattern' => 'vatIdPattern',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'relationships' => 'relationships'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'iso' => 'setIso',
        'position' => 'setPosition',
        'tax_free' => 'setTaxFree',
        'active' => 'setActive',
        'shipping_available' => 'setShippingAvailable',
        'iso3' => 'setIso3',
        'display_state_in_registration' => 'setDisplayStateInRegistration',
        'force_state_in_registration' => 'setForceStateInRegistration',
        'company_tax_free' => 'setCompanyTaxFree',
        'check_vat_id_pattern' => 'setCheckVatIdPattern',
        'vat_id_pattern' => 'setVatIdPattern',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'relationships' => 'setRelationships'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'iso' => 'getIso',
        'position' => 'getPosition',
        'tax_free' => 'getTaxFree',
        'active' => 'getActive',
        'shipping_available' => 'getShippingAvailable',
        'iso3' => 'getIso3',
        'display_state_in_registration' => 'getDisplayStateInRegistration',
        'force_state_in_registration' => 'getForceStateInRegistration',
        'company_tax_free' => 'getCompanyTaxFree',
        'check_vat_id_pattern' => 'getCheckVatIdPattern',
        'vat_id_pattern' => 'getVatIdPattern',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'relationships' => 'getRelationships'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['iso'] = $data['iso'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['tax_free'] = $data['tax_free'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['shipping_available'] = $data['shipping_available'] ?? null;
        $this->container['iso3'] = $data['iso3'] ?? null;
        $this->container['display_state_in_registration'] = $data['display_state_in_registration'] ?? null;
        $this->container['force_state_in_registration'] = $data['force_state_in_registration'] ?? null;
        $this->container['company_tax_free'] = $data['company_tax_free'] ?? null;
        $this->container['check_vat_id_pattern'] = $data['check_vat_id_pattern'] ?? null;
        $this->container['vat_id_pattern'] = $data['vat_id_pattern'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^[0-9a-f]{32}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling CountryJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets iso
     *
     * @return string|null
     */
    public function getIso()
    {
        return $this->container['iso'];
    }

    /**
     * Sets iso
     *
     * @param string|null $iso iso
     *
     * @return self
     */
    public function setIso($iso)
    {
        $this->container['iso'] = $iso;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets tax_free
     *
     * @return bool|null
     */
    public function getTaxFree()
    {
        return $this->container['tax_free'];
    }

    /**
     * Sets tax_free
     *
     * @param bool|null $tax_free tax_free
     *
     * @return self
     */
    public function setTaxFree($tax_free)
    {
        $this->container['tax_free'] = $tax_free;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets shipping_available
     *
     * @return bool|null
     */
    public function getShippingAvailable()
    {
        return $this->container['shipping_available'];
    }

    /**
     * Sets shipping_available
     *
     * @param bool|null $shipping_available shipping_available
     *
     * @return self
     */
    public function setShippingAvailable($shipping_available)
    {
        $this->container['shipping_available'] = $shipping_available;

        return $this;
    }

    /**
     * Gets iso3
     *
     * @return string|null
     */
    public function getIso3()
    {
        return $this->container['iso3'];
    }

    /**
     * Sets iso3
     *
     * @param string|null $iso3 iso3
     *
     * @return self
     */
    public function setIso3($iso3)
    {
        $this->container['iso3'] = $iso3;

        return $this;
    }

    /**
     * Gets display_state_in_registration
     *
     * @return bool|null
     */
    public function getDisplayStateInRegistration()
    {
        return $this->container['display_state_in_registration'];
    }

    /**
     * Sets display_state_in_registration
     *
     * @param bool|null $display_state_in_registration display_state_in_registration
     *
     * @return self
     */
    public function setDisplayStateInRegistration($display_state_in_registration)
    {
        $this->container['display_state_in_registration'] = $display_state_in_registration;

        return $this;
    }

    /**
     * Gets force_state_in_registration
     *
     * @return bool|null
     */
    public function getForceStateInRegistration()
    {
        return $this->container['force_state_in_registration'];
    }

    /**
     * Sets force_state_in_registration
     *
     * @param bool|null $force_state_in_registration force_state_in_registration
     *
     * @return self
     */
    public function setForceStateInRegistration($force_state_in_registration)
    {
        $this->container['force_state_in_registration'] = $force_state_in_registration;

        return $this;
    }

    /**
     * Gets company_tax_free
     *
     * @return bool|null
     */
    public function getCompanyTaxFree()
    {
        return $this->container['company_tax_free'];
    }

    /**
     * Sets company_tax_free
     *
     * @param bool|null $company_tax_free company_tax_free
     *
     * @return self
     */
    public function setCompanyTaxFree($company_tax_free)
    {
        $this->container['company_tax_free'] = $company_tax_free;

        return $this;
    }

    /**
     * Gets check_vat_id_pattern
     *
     * @return bool|null
     */
    public function getCheckVatIdPattern()
    {
        return $this->container['check_vat_id_pattern'];
    }

    /**
     * Sets check_vat_id_pattern
     *
     * @param bool|null $check_vat_id_pattern check_vat_id_pattern
     *
     * @return self
     */
    public function setCheckVatIdPattern($check_vat_id_pattern)
    {
        $this->container['check_vat_id_pattern'] = $check_vat_id_pattern;

        return $this;
    }

    /**
     * Gets vat_id_pattern
     *
     * @return string|null
     */
    public function getVatIdPattern()
    {
        return $this->container['vat_id_pattern'];
    }

    /**
     * Sets vat_id_pattern
     *
     * @param string|null $vat_id_pattern vat_id_pattern
     *
     * @return self
     */
    public function setVatIdPattern($vat_id_pattern)
    {
        $this->container['vat_id_pattern'] = $vat_id_pattern;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets translated
     *
     * @return object|null
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object|null $translated translated
     *
     * @return self
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return object|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param object|null $relationships relationships
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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


