<?php
/**
 * CustomerGroup
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
 * CustomerGroup Class Doc Comment
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
class CustomerGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'display_gross' => 'bool',
        'custom_fields' => 'object',
        'registration_active' => 'bool',
        'registration_title' => 'string',
        'registration_introduction' => 'string',
        'registration_only_company_registration' => 'bool',
        'registration_seo_meta_description' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object'
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
        'display_gross' => null,
        'custom_fields' => null,
        'registration_active' => null,
        'registration_title' => null,
        'registration_introduction' => null,
        'registration_only_company_registration' => null,
        'registration_seo_meta_description' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null
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
        'display_gross' => 'displayGross',
        'custom_fields' => 'customFields',
        'registration_active' => 'registrationActive',
        'registration_title' => 'registrationTitle',
        'registration_introduction' => 'registrationIntroduction',
        'registration_only_company_registration' => 'registrationOnlyCompanyRegistration',
        'registration_seo_meta_description' => 'registrationSeoMetaDescription',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'display_gross' => 'setDisplayGross',
        'custom_fields' => 'setCustomFields',
        'registration_active' => 'setRegistrationActive',
        'registration_title' => 'setRegistrationTitle',
        'registration_introduction' => 'setRegistrationIntroduction',
        'registration_only_company_registration' => 'setRegistrationOnlyCompanyRegistration',
        'registration_seo_meta_description' => 'setRegistrationSeoMetaDescription',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'display_gross' => 'getDisplayGross',
        'custom_fields' => 'getCustomFields',
        'registration_active' => 'getRegistrationActive',
        'registration_title' => 'getRegistrationTitle',
        'registration_introduction' => 'getRegistrationIntroduction',
        'registration_only_company_registration' => 'getRegistrationOnlyCompanyRegistration',
        'registration_seo_meta_description' => 'getRegistrationSeoMetaDescription',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated'
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
        $this->container['display_gross'] = $data['display_gross'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['registration_active'] = $data['registration_active'] ?? null;
        $this->container['registration_title'] = $data['registration_title'] ?? null;
        $this->container['registration_introduction'] = $data['registration_introduction'] ?? null;
        $this->container['registration_only_company_registration'] = $data['registration_only_company_registration'] ?? null;
        $this->container['registration_seo_meta_description'] = $data['registration_seo_meta_description'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
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
            throw new \InvalidArgumentException("invalid value for $id when calling CustomerGroup., must conform to the pattern /^[0-9a-f]{32}$/.");
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
     * Gets display_gross
     *
     * @return bool|null
     */
    public function getDisplayGross()
    {
        return $this->container['display_gross'];
    }

    /**
     * Sets display_gross
     *
     * @param bool|null $display_gross display_gross
     *
     * @return self
     */
    public function setDisplayGross($display_gross)
    {
        $this->container['display_gross'] = $display_gross;

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
     * Gets registration_active
     *
     * @return bool|null
     */
    public function getRegistrationActive()
    {
        return $this->container['registration_active'];
    }

    /**
     * Sets registration_active
     *
     * @param bool|null $registration_active registration_active
     *
     * @return self
     */
    public function setRegistrationActive($registration_active)
    {
        $this->container['registration_active'] = $registration_active;

        return $this;
    }

    /**
     * Gets registration_title
     *
     * @return string|null
     */
    public function getRegistrationTitle()
    {
        return $this->container['registration_title'];
    }

    /**
     * Sets registration_title
     *
     * @param string|null $registration_title registration_title
     *
     * @return self
     */
    public function setRegistrationTitle($registration_title)
    {
        $this->container['registration_title'] = $registration_title;

        return $this;
    }

    /**
     * Gets registration_introduction
     *
     * @return string|null
     */
    public function getRegistrationIntroduction()
    {
        return $this->container['registration_introduction'];
    }

    /**
     * Sets registration_introduction
     *
     * @param string|null $registration_introduction registration_introduction
     *
     * @return self
     */
    public function setRegistrationIntroduction($registration_introduction)
    {
        $this->container['registration_introduction'] = $registration_introduction;

        return $this;
    }

    /**
     * Gets registration_only_company_registration
     *
     * @return bool|null
     */
    public function getRegistrationOnlyCompanyRegistration()
    {
        return $this->container['registration_only_company_registration'];
    }

    /**
     * Sets registration_only_company_registration
     *
     * @param bool|null $registration_only_company_registration registration_only_company_registration
     *
     * @return self
     */
    public function setRegistrationOnlyCompanyRegistration($registration_only_company_registration)
    {
        $this->container['registration_only_company_registration'] = $registration_only_company_registration;

        return $this;
    }

    /**
     * Gets registration_seo_meta_description
     *
     * @return string|null
     */
    public function getRegistrationSeoMetaDescription()
    {
        return $this->container['registration_seo_meta_description'];
    }

    /**
     * Sets registration_seo_meta_description
     *
     * @param string|null $registration_seo_meta_description registration_seo_meta_description
     *
     * @return self
     */
    public function setRegistrationSeoMetaDescription($registration_seo_meta_description)
    {
        $this->container['registration_seo_meta_description'] = $registration_seo_meta_description;

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


