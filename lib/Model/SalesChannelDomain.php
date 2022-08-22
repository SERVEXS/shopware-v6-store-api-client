<?php
/**
 * SalesChannelDomain
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
 * SalesChannelDomain Class Doc Comment
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
class SalesChannelDomain implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesChannelDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'url' => 'string',
        'sales_channel_id' => 'string',
        'language_id' => 'string',
        'currency_id' => 'string',
        'snippet_set_id' => 'string',
        'hreflang_use_only_locale' => 'bool',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'language' => '\ServeXS\Shopware\v6\Store\Model\Language',
        'currency' => '\ServeXS\Shopware\v6\Store\Model\Currency',
        'sales_channel_default_hreflang' => '\ServeXS\Shopware\v6\Store\Model\SalesChannel'
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
        'url' => null,
        'sales_channel_id' => null,
        'language_id' => null,
        'currency_id' => null,
        'snippet_set_id' => null,
        'hreflang_use_only_locale' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'language' => null,
        'currency' => null,
        'sales_channel_default_hreflang' => null
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
        'url' => 'url',
        'sales_channel_id' => 'salesChannelId',
        'language_id' => 'languageId',
        'currency_id' => 'currencyId',
        'snippet_set_id' => 'snippetSetId',
        'hreflang_use_only_locale' => 'hreflangUseOnlyLocale',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'language' => 'language',
        'currency' => 'currency',
        'sales_channel_default_hreflang' => 'salesChannelDefaultHreflang'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'sales_channel_id' => 'setSalesChannelId',
        'language_id' => 'setLanguageId',
        'currency_id' => 'setCurrencyId',
        'snippet_set_id' => 'setSnippetSetId',
        'hreflang_use_only_locale' => 'setHreflangUseOnlyLocale',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'language' => 'setLanguage',
        'currency' => 'setCurrency',
        'sales_channel_default_hreflang' => 'setSalesChannelDefaultHreflang'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'sales_channel_id' => 'getSalesChannelId',
        'language_id' => 'getLanguageId',
        'currency_id' => 'getCurrencyId',
        'snippet_set_id' => 'getSnippetSetId',
        'hreflang_use_only_locale' => 'getHreflangUseOnlyLocale',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'language' => 'getLanguage',
        'currency' => 'getCurrency',
        'sales_channel_default_hreflang' => 'getSalesChannelDefaultHreflang'
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['currency_id'] = $data['currency_id'] ?? null;
        $this->container['snippet_set_id'] = $data['snippet_set_id'] ?? null;
        $this->container['hreflang_use_only_locale'] = $data['hreflang_use_only_locale'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['sales_channel_default_hreflang'] = $data['sales_channel_default_hreflang'] ?? null;
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

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['sales_channel_id'])) {
            $invalidProperties[] = "invalid value for 'sales_channel_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['language_id'])) {
            $invalidProperties[] = "invalid value for 'language_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['currency_id'])) {
            $invalidProperties[] = "invalid value for 'currency_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['snippet_set_id'] === null) {
            $invalidProperties[] = "'snippet_set_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['snippet_set_id'])) {
            $invalidProperties[] = "invalid value for 'snippet_set_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling SalesChannelDomain., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return self
     */
    public function setSalesChannelId($sales_channel_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $sales_channel_id))) {
            throw new \InvalidArgumentException("invalid value for $sales_channel_id when calling SalesChannelDomain., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id language_id
     *
     * @return self
     */
    public function setLanguageId($language_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $language_id))) {
            throw new \InvalidArgumentException("invalid value for $language_id when calling SalesChannelDomain., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $currency_id))) {
            throw new \InvalidArgumentException("invalid value for $currency_id when calling SalesChannelDomain., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets snippet_set_id
     *
     * @return string
     */
    public function getSnippetSetId()
    {
        return $this->container['snippet_set_id'];
    }

    /**
     * Sets snippet_set_id
     *
     * @param string $snippet_set_id snippet_set_id
     *
     * @return self
     */
    public function setSnippetSetId($snippet_set_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $snippet_set_id))) {
            throw new \InvalidArgumentException("invalid value for $snippet_set_id when calling SalesChannelDomain., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['snippet_set_id'] = $snippet_set_id;

        return $this;
    }

    /**
     * Gets hreflang_use_only_locale
     *
     * @return bool|null
     */
    public function getHreflangUseOnlyLocale()
    {
        return $this->container['hreflang_use_only_locale'];
    }

    /**
     * Sets hreflang_use_only_locale
     *
     * @param bool|null $hreflang_use_only_locale hreflang_use_only_locale
     *
     * @return self
     */
    public function setHreflangUseOnlyLocale($hreflang_use_only_locale)
    {
        $this->container['hreflang_use_only_locale'] = $hreflang_use_only_locale;

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
     * Gets language
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Language|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sales_channel_default_hreflang
     *
     * @return \ServeXS\Shopware\v6\Store\Model\SalesChannel|null
     */
    public function getSalesChannelDefaultHreflang()
    {
        return $this->container['sales_channel_default_hreflang'];
    }

    /**
     * Sets sales_channel_default_hreflang
     *
     * @param \ServeXS\Shopware\v6\Store\Model\SalesChannel|null $sales_channel_default_hreflang sales_channel_default_hreflang
     *
     * @return self
     */
    public function setSalesChannelDefaultHreflang($sales_channel_default_hreflang)
    {
        $this->container['sales_channel_default_hreflang'] = $sales_channel_default_hreflang;

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

