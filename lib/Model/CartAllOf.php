<?php
/**
 * CartAllOf
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
 * CartAllOf Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CartAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cart_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'token' => 'string',
        'price' => '\ServeXS\Shopware\v6\Store\Model\CartAllOfPrice',
        'line_items' => '\ServeXS\Shopware\v6\Store\Model\LineItem[]',
        'errors' => '\ServeXS\Shopware\v6\Store\Model\CartAllOfErrors[]',
        'transactions' => '\ServeXS\Shopware\v6\Store\Model\CartAllOfTransactions[]',
        'modified' => 'bool',
        'customer_comment' => 'string',
        'affiliate_code' => 'string',
        'campaign_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'token' => null,
        'price' => null,
        'line_items' => null,
        'errors' => null,
        'transactions' => null,
        'modified' => null,
        'customer_comment' => null,
        'affiliate_code' => null,
        'campaign_code' => null
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
        'name' => 'name',
        'token' => 'token',
        'price' => 'price',
        'line_items' => 'lineItems',
        'errors' => 'errors',
        'transactions' => 'transactions',
        'modified' => 'modified',
        'customer_comment' => 'customerComment',
        'affiliate_code' => 'affiliateCode',
        'campaign_code' => 'campaignCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'token' => 'setToken',
        'price' => 'setPrice',
        'line_items' => 'setLineItems',
        'errors' => 'setErrors',
        'transactions' => 'setTransactions',
        'modified' => 'setModified',
        'customer_comment' => 'setCustomerComment',
        'affiliate_code' => 'setAffiliateCode',
        'campaign_code' => 'setCampaignCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'token' => 'getToken',
        'price' => 'getPrice',
        'line_items' => 'getLineItems',
        'errors' => 'getErrors',
        'transactions' => 'getTransactions',
        'modified' => 'getModified',
        'customer_comment' => 'getCustomerComment',
        'affiliate_code' => 'getAffiliateCode',
        'campaign_code' => 'getCampaignCode'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['customer_comment'] = $data['customer_comment'] ?? null;
        $this->container['affiliate_code'] = $data['affiliate_code'] ?? null;
        $this->container['campaign_code'] = $data['campaign_code'] ?? null;
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
     * @param string|null $name Name of the cart - for example `guest-cart`
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token Context token identifying the cart and the user session
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \ServeXS\Shopware\v6\Store\Model\CartAllOfPrice|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \ServeXS\Shopware\v6\Store\Model\CartAllOfPrice|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \ServeXS\Shopware\v6\Store\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \ServeXS\Shopware\v6\Store\Model\LineItem[]|null $line_items All items within the cart
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \ServeXS\Shopware\v6\Store\Model\CartAllOfErrors[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \ServeXS\Shopware\v6\Store\Model\CartAllOfErrors[]|null $errors A list of all cart errors, such as insufficient stocks, invalid addresses or vouchers.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \ServeXS\Shopware\v6\Store\Model\CartAllOfTransactions[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \ServeXS\Shopware\v6\Store\Model\CartAllOfTransactions[]|null $transactions A list of all payment transactions associated with the current cart.
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return bool|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param bool|null $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets customer_comment
     *
     * @return string|null
     */
    public function getCustomerComment()
    {
        return $this->container['customer_comment'];
    }

    /**
     * Sets customer_comment
     *
     * @param string|null $customer_comment A comment that can be added to the cart.
     *
     * @return self
     */
    public function setCustomerComment($customer_comment)
    {
        $this->container['customer_comment'] = $customer_comment;

        return $this;
    }

    /**
     * Gets affiliate_code
     *
     * @return string|null
     */
    public function getAffiliateCode()
    {
        return $this->container['affiliate_code'];
    }

    /**
     * Sets affiliate_code
     *
     * @param string|null $affiliate_code An affiliate tracking code
     *
     * @return self
     */
    public function setAffiliateCode($affiliate_code)
    {
        $this->container['affiliate_code'] = $affiliate_code;

        return $this;
    }

    /**
     * Gets campaign_code
     *
     * @return string|null
     */
    public function getCampaignCode()
    {
        return $this->container['campaign_code'];
    }

    /**
     * Sets campaign_code
     *
     * @param string|null $campaign_code A campaign tracking code
     *
     * @return self
     */
    public function setCampaignCode($campaign_code)
    {
        $this->container['campaign_code'] = $campaign_code;

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

