<?php
/**
 * SalesChannelContextAllOfCurrency
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
 * SalesChannelContextAllOfCurrency Class Doc Comment
 *
 * @category Class
 * @description Currency associated with the current user
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SalesChannelContextAllOfCurrency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesChannelContext_allOf_currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iso_code' => 'string',
        'factor' => 'int',
        'symbol' => 'string',
        'short_name' => 'string',
        'name' => 'string',
        'position' => 'int',
        'decimal_precision' => 'int',
        'is_system_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iso_code' => null,
        'factor' => null,
        'symbol' => null,
        'short_name' => null,
        'name' => null,
        'position' => 'int32',
        'decimal_precision' => 'int32',
        'is_system_default' => null
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
        'iso_code' => 'isoCode',
        'factor' => 'factor',
        'symbol' => 'symbol',
        'short_name' => 'shortName',
        'name' => 'name',
        'position' => 'position',
        'decimal_precision' => 'decimalPrecision',
        'is_system_default' => 'isSystemDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iso_code' => 'setIsoCode',
        'factor' => 'setFactor',
        'symbol' => 'setSymbol',
        'short_name' => 'setShortName',
        'name' => 'setName',
        'position' => 'setPosition',
        'decimal_precision' => 'setDecimalPrecision',
        'is_system_default' => 'setIsSystemDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iso_code' => 'getIsoCode',
        'factor' => 'getFactor',
        'symbol' => 'getSymbol',
        'short_name' => 'getShortName',
        'name' => 'getName',
        'position' => 'getPosition',
        'decimal_precision' => 'getDecimalPrecision',
        'is_system_default' => 'getIsSystemDefault'
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
        $this->container['iso_code'] = $data['iso_code'] ?? null;
        $this->container['factor'] = $data['factor'] ?? null;
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['short_name'] = $data['short_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['decimal_precision'] = $data['decimal_precision'] ?? null;
        $this->container['is_system_default'] = $data['is_system_default'] ?? null;
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
     * Gets iso_code
     *
     * @return string|null
     */
    public function getIsoCode()
    {
        return $this->container['iso_code'];
    }

    /**
     * Sets iso_code
     *
     * @param string|null $iso_code iso_code
     *
     * @return self
     */
    public function setIsoCode($iso_code)
    {
        $this->container['iso_code'] = $iso_code;

        return $this;
    }

    /**
     * Gets factor
     *
     * @return int|null
     */
    public function getFactor()
    {
        return $this->container['factor'];
    }

    /**
     * Sets factor
     *
     * @param int|null $factor factor
     *
     * @return self
     */
    public function setFactor($factor)
    {
        $this->container['factor'] = $factor;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name short_name
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets decimal_precision
     *
     * @return int|null
     */
    public function getDecimalPrecision()
    {
        return $this->container['decimal_precision'];
    }

    /**
     * Sets decimal_precision
     *
     * @param int|null $decimal_precision decimal_precision
     *
     * @return self
     */
    public function setDecimalPrecision($decimal_precision)
    {
        $this->container['decimal_precision'] = $decimal_precision;

        return $this;
    }

    /**
     * Gets is_system_default
     *
     * @return bool|null
     */
    public function getIsSystemDefault()
    {
        return $this->container['is_system_default'];
    }

    /**
     * Sets is_system_default
     *
     * @param bool|null $is_system_default is_system_default
     *
     * @return self
     */
    public function setIsSystemDefault($is_system_default)
    {
        $this->container['is_system_default'] = $is_system_default;

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


