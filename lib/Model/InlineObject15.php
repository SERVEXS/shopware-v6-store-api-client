<?php
/**
 * InlineObject15
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
 * InlineObject15 Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject15 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_15';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'option' => 'mixed',
        'storefront_url' => 'string',
        'salutation_id' => 'mixed',
        'first_name' => 'string',
        'last_name' => 'string',
        'street' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'tags' => 'string',
        'language_id' => 'mixed',
        'custom_fields' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'option' => null,
        'storefront_url' => null,
        'salutation_id' => null,
        'first_name' => null,
        'last_name' => null,
        'street' => null,
        'city' => null,
        'zip_code' => null,
        'tags' => null,
        'language_id' => null,
        'custom_fields' => null
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
        'email' => 'email',
        'option' => 'option',
        'storefront_url' => 'storefrontUrl',
        'salutation_id' => 'salutationId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'street' => 'street',
        'city' => 'city',
        'zip_code' => 'zipCode',
        'tags' => 'tags',
        'language_id' => 'languageId',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'option' => 'setOption',
        'storefront_url' => 'setStorefrontUrl',
        'salutation_id' => 'setSalutationId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'street' => 'setStreet',
        'city' => 'setCity',
        'zip_code' => 'setZipCode',
        'tags' => 'setTags',
        'language_id' => 'setLanguageId',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'option' => 'getOption',
        'storefront_url' => 'getStorefrontUrl',
        'salutation_id' => 'getSalutationId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'street' => 'getStreet',
        'city' => 'getCity',
        'zip_code' => 'getZipCode',
        'tags' => 'getTags',
        'language_id' => 'getLanguageId',
        'custom_fields' => 'getCustomFields'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['option'] = $data['option'] ?? null;
        $this->container['storefront_url'] = $data['storefront_url'] ?? null;
        $this->container['salutation_id'] = $data['salutation_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['option'] === null) {
            $invalidProperties[] = "'option' can't be null";
        }
        if ($this->container['storefront_url'] === null) {
            $invalidProperties[] = "'storefront_url' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address that will receive the confirmation and the newsletter.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets option
     *
     * @return mixed
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param mixed $option Defines what should be done.
     *
     * @return self
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets storefront_url
     *
     * @return string
     */
    public function getStorefrontUrl()
    {
        return $this->container['storefront_url'];
    }

    /**
     * Sets storefront_url
     *
     * @param string $storefront_url Url of the storefront of the shop. This will be used for generating the link to the /newsletter/confirm inside the confirm email.
     *
     * @return self
     */
    public function setStorefrontUrl($storefront_url)
    {
        $this->container['storefront_url'] = $storefront_url;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return mixed|null
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param mixed|null $salutation_id Identifier of the salutation.
     *
     * @return self
     */
    public function setSalutationId($salutation_id)
    {
        $this->container['salutation_id'] = $salutation_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name
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
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name
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
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code Zip code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags Zip code
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return mixed|null
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param mixed|null $language_id Identifier of the language.
     *
     * @return self
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return string|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param string|null $custom_fields Custom field data that should be added to the subscription.
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


