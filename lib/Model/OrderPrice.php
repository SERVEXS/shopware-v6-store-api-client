<?php
/**
 * OrderPrice
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
 * OrderPrice Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderPrice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order_price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'net_price' => 'float',
        'total_price' => 'float',
        'calculated_taxes' => 'object',
        'tax_rules' => 'object',
        'position_price' => 'float',
        'raw_total' => 'float',
        'tax_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'net_price' => 'float',
        'total_price' => 'float',
        'calculated_taxes' => null,
        'tax_rules' => null,
        'position_price' => 'float',
        'raw_total' => 'float',
        'tax_status' => null
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
        'net_price' => 'netPrice',
        'total_price' => 'totalPrice',
        'calculated_taxes' => 'calculatedTaxes',
        'tax_rules' => 'taxRules',
        'position_price' => 'positionPrice',
        'raw_total' => 'rawTotal',
        'tax_status' => 'taxStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'net_price' => 'setNetPrice',
        'total_price' => 'setTotalPrice',
        'calculated_taxes' => 'setCalculatedTaxes',
        'tax_rules' => 'setTaxRules',
        'position_price' => 'setPositionPrice',
        'raw_total' => 'setRawTotal',
        'tax_status' => 'setTaxStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'net_price' => 'getNetPrice',
        'total_price' => 'getTotalPrice',
        'calculated_taxes' => 'getCalculatedTaxes',
        'tax_rules' => 'getTaxRules',
        'position_price' => 'getPositionPrice',
        'raw_total' => 'getRawTotal',
        'tax_status' => 'getTaxStatus'
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
        $this->container['net_price'] = $data['net_price'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
        $this->container['calculated_taxes'] = $data['calculated_taxes'] ?? null;
        $this->container['tax_rules'] = $data['tax_rules'] ?? null;
        $this->container['position_price'] = $data['position_price'] ?? null;
        $this->container['raw_total'] = $data['raw_total'] ?? null;
        $this->container['tax_status'] = $data['tax_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['net_price'] === null) {
            $invalidProperties[] = "'net_price' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ($this->container['position_price'] === null) {
            $invalidProperties[] = "'position_price' can't be null";
        }
        if ($this->container['raw_total'] === null) {
            $invalidProperties[] = "'raw_total' can't be null";
        }
        if ($this->container['tax_status'] === null) {
            $invalidProperties[] = "'tax_status' can't be null";
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
     * Gets net_price
     *
     * @return float
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float $net_price net_price
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price total_price
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets calculated_taxes
     *
     * @return object|null
     */
    public function getCalculatedTaxes()
    {
        return $this->container['calculated_taxes'];
    }

    /**
     * Sets calculated_taxes
     *
     * @param object|null $calculated_taxes calculated_taxes
     *
     * @return self
     */
    public function setCalculatedTaxes($calculated_taxes)
    {
        $this->container['calculated_taxes'] = $calculated_taxes;

        return $this;
    }

    /**
     * Gets tax_rules
     *
     * @return object|null
     */
    public function getTaxRules()
    {
        return $this->container['tax_rules'];
    }

    /**
     * Sets tax_rules
     *
     * @param object|null $tax_rules tax_rules
     *
     * @return self
     */
    public function setTaxRules($tax_rules)
    {
        $this->container['tax_rules'] = $tax_rules;

        return $this;
    }

    /**
     * Gets position_price
     *
     * @return float
     */
    public function getPositionPrice()
    {
        return $this->container['position_price'];
    }

    /**
     * Sets position_price
     *
     * @param float $position_price position_price
     *
     * @return self
     */
    public function setPositionPrice($position_price)
    {
        $this->container['position_price'] = $position_price;

        return $this;
    }

    /**
     * Gets raw_total
     *
     * @return float
     */
    public function getRawTotal()
    {
        return $this->container['raw_total'];
    }

    /**
     * Sets raw_total
     *
     * @param float $raw_total raw_total
     *
     * @return self
     */
    public function setRawTotal($raw_total)
    {
        $this->container['raw_total'] = $raw_total;

        return $this;
    }

    /**
     * Gets tax_status
     *
     * @return string
     */
    public function getTaxStatus()
    {
        return $this->container['tax_status'];
    }

    /**
     * Sets tax_status
     *
     * @param string $tax_status tax_status
     *
     * @return self
     */
    public function setTaxStatus($tax_status)
    {
        $this->container['tax_status'] = $tax_status;

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


