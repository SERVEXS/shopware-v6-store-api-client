<?php
/**
 * ProductReview
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
 * ProductReview Class Doc Comment
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
class ProductReview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'product_id' => 'string',
        'product_version_id' => 'string',
        'sales_channel_id' => 'string',
        'language_id' => 'string',
        'title' => 'string',
        'content' => 'string',
        'points' => 'float',
        'status' => 'bool',
        'comment' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'product_id' => null,
        'product_version_id' => null,
        'sales_channel_id' => null,
        'language_id' => null,
        'title' => null,
        'content' => null,
        'points' => 'float',
        'status' => null,
        'comment' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'product_id' => 'productId',
        'product_version_id' => 'productVersionId',
        'sales_channel_id' => 'salesChannelId',
        'language_id' => 'languageId',
        'title' => 'title',
        'content' => 'content',
        'points' => 'points',
        'status' => 'status',
        'comment' => 'comment',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_id' => 'setProductId',
        'product_version_id' => 'setProductVersionId',
        'sales_channel_id' => 'setSalesChannelId',
        'language_id' => 'setLanguageId',
        'title' => 'setTitle',
        'content' => 'setContent',
        'points' => 'setPoints',
        'status' => 'setStatus',
        'comment' => 'setComment',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_id' => 'getProductId',
        'product_version_id' => 'getProductVersionId',
        'sales_channel_id' => 'getSalesChannelId',
        'language_id' => 'getLanguageId',
        'title' => 'getTitle',
        'content' => 'getContent',
        'points' => 'getPoints',
        'status' => 'getStatus',
        'comment' => 'getComment',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_version_id'] = $data['product_version_id'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['product_id'])) {
            $invalidProperties[] = "invalid value for 'product_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['product_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['product_version_id'])) {
            $invalidProperties[] = "invalid value for 'product_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ProductReview., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $product_id))) {
            throw new \InvalidArgumentException("invalid value for $product_id when calling ProductReview., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_version_id
     *
     * @return string|null
     */
    public function getProductVersionId()
    {
        return $this->container['product_version_id'];
    }

    /**
     * Sets product_version_id
     *
     * @param string|null $product_version_id product_version_id
     *
     * @return self
     */
    public function setProductVersionId($product_version_id)
    {

        if (!is_null($product_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $product_version_id))) {
            throw new \InvalidArgumentException("invalid value for $product_version_id when calling ProductReview., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_version_id'] = $product_version_id;

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
            throw new \InvalidArgumentException("invalid value for $sales_channel_id when calling ProductReview., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $language_id when calling ProductReview., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets points
     *
     * @return float|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param float|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets status
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param bool|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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


