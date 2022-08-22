<?php
/**
 * OrderAddress
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
 * OrderAddress Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'country_id' => 'string',
        'country_state_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'street' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'company' => 'string',
        'department' => 'string',
        'title' => 'string',
        'vat_id' => 'string',
        'phone_number' => 'string',
        'additional_address_line1' => 'string',
        'additional_address_line2' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'country' => '\ServeXS\Shopware\v6\Store\Model\Country',
        'country_state' => '\ServeXS\Shopware\v6\Store\Model\CountryState',
        'salutation' => '\ServeXS\Shopware\v6\Store\Model\Salutation'
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
        'version_id' => null,
        'country_id' => null,
        'country_state_id' => null,
        'first_name' => null,
        'last_name' => null,
        'street' => null,
        'zipcode' => null,
        'city' => null,
        'company' => null,
        'department' => null,
        'title' => null,
        'vat_id' => null,
        'phone_number' => null,
        'additional_address_line1' => null,
        'additional_address_line2' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'country' => null,
        'country_state' => null,
        'salutation' => null
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
        'version_id' => 'versionId',
        'country_id' => 'countryId',
        'country_state_id' => 'countryStateId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'street' => 'street',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'company' => 'company',
        'department' => 'department',
        'title' => 'title',
        'vat_id' => 'vatId',
        'phone_number' => 'phoneNumber',
        'additional_address_line1' => 'additionalAddressLine1',
        'additional_address_line2' => 'additionalAddressLine2',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'country' => 'country',
        'country_state' => 'countryState',
        'salutation' => 'salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'country_id' => 'setCountryId',
        'country_state_id' => 'setCountryStateId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'street' => 'setStreet',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'company' => 'setCompany',
        'department' => 'setDepartment',
        'title' => 'setTitle',
        'vat_id' => 'setVatId',
        'phone_number' => 'setPhoneNumber',
        'additional_address_line1' => 'setAdditionalAddressLine1',
        'additional_address_line2' => 'setAdditionalAddressLine2',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'country' => 'setCountry',
        'country_state' => 'setCountryState',
        'salutation' => 'setSalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'country_id' => 'getCountryId',
        'country_state_id' => 'getCountryStateId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'street' => 'getStreet',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'company' => 'getCompany',
        'department' => 'getDepartment',
        'title' => 'getTitle',
        'vat_id' => 'getVatId',
        'phone_number' => 'getPhoneNumber',
        'additional_address_line1' => 'getAdditionalAddressLine1',
        'additional_address_line2' => 'getAdditionalAddressLine2',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'country' => 'getCountry',
        'country_state' => 'getCountryState',
        'salutation' => 'getSalutation'
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
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['country_id'] = $data['country_id'] ?? null;
        $this->container['country_state_id'] = $data['country_state_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['zipcode'] = $data['zipcode'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['vat_id'] = $data['vat_id'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['additional_address_line1'] = $data['additional_address_line1'] ?? null;
        $this->container['additional_address_line2'] = $data['additional_address_line2'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['country_state'] = $data['country_state'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
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

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['country_id'])) {
            $invalidProperties[] = "invalid value for 'country_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['country_state_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['country_state_id'])) {
            $invalidProperties[] = "invalid value for 'country_state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['zipcode'] === null) {
            $invalidProperties[] = "'zipcode' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string|null
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string|null $version_id version_id
     *
     * @return self
     */
    public function setVersionId($version_id)
    {

        if (!is_null($version_id) && (!preg_match("/^[0-9a-f]{32}$/", $version_id))) {
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $country_id))) {
            throw new \InvalidArgumentException("invalid value for $country_id when calling OrderAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets country_state_id
     *
     * @return string|null
     */
    public function getCountryStateId()
    {
        return $this->container['country_state_id'];
    }

    /**
     * Sets country_state_id
     *
     * @param string|null $country_state_id country_state_id
     *
     * @return self
     */
    public function setCountryStateId($country_state_id)
    {

        if (!is_null($country_state_id) && (!preg_match("/^[0-9a-f]{32}$/", $country_state_id))) {
            throw new \InvalidArgumentException("invalid value for $country_state_id when calling OrderAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['country_state_id'] = $country_state_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string|null $vat_id vat_id
     *
     * @return self
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets additional_address_line1
     *
     * @return string|null
     */
    public function getAdditionalAddressLine1()
    {
        return $this->container['additional_address_line1'];
    }

    /**
     * Sets additional_address_line1
     *
     * @param string|null $additional_address_line1 additional_address_line1
     *
     * @return self
     */
    public function setAdditionalAddressLine1($additional_address_line1)
    {
        $this->container['additional_address_line1'] = $additional_address_line1;

        return $this;
    }

    /**
     * Gets additional_address_line2
     *
     * @return string|null
     */
    public function getAdditionalAddressLine2()
    {
        return $this->container['additional_address_line2'];
    }

    /**
     * Sets additional_address_line2
     *
     * @param string|null $additional_address_line2 additional_address_line2
     *
     * @return self
     */
    public function setAdditionalAddressLine2($additional_address_line2)
    {
        $this->container['additional_address_line2'] = $additional_address_line2;

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
     * Gets country
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_state
     *
     * @return \ServeXS\Shopware\v6\Store\Model\CountryState|null
     */
    public function getCountryState()
    {
        return $this->container['country_state'];
    }

    /**
     * Sets country_state
     *
     * @param \ServeXS\Shopware\v6\Store\Model\CountryState|null $country_state country_state
     *
     * @return self
     */
    public function setCountryState($country_state)
    {
        $this->container['country_state'] = $country_state;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Salutation|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Salutation|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

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


