<?php
/**
 * OrderLineItem
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
 * OrderLineItem Class Doc Comment
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
class OrderLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'order_id' => 'string',
        'order_version_id' => 'string',
        'product_id' => 'string',
        'product_version_id' => 'string',
        'parent_id' => 'string',
        'parent_version_id' => 'string',
        'cover_id' => 'string',
        'identifier' => 'string',
        'referenced_id' => 'string',
        'quantity' => 'int',
        'label' => 'string',
        'payload' => 'object',
        'good' => 'bool',
        'removable' => 'bool',
        'stackable' => 'bool',
        'position' => 'int',
        'price_definition' => 'object',
        'unit_price' => 'float',
        'total_price' => 'float',
        'description' => 'string',
        'type' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'cover' => '\ServeXS\Shopware\v6\Store\Model\Media',
        'order_delivery_positions' => '\ServeXS\Shopware\v6\Store\Model\OrderDeliveryPosition',
        'parent' => '\ServeXS\Shopware\v6\Store\Model\OrderLineItem',
        'children' => '\ServeXS\Shopware\v6\Store\Model\OrderLineItem'
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
        'order_id' => null,
        'order_version_id' => null,
        'product_id' => null,
        'product_version_id' => null,
        'parent_id' => null,
        'parent_version_id' => null,
        'cover_id' => null,
        'identifier' => null,
        'referenced_id' => null,
        'quantity' => 'int64',
        'label' => null,
        'payload' => null,
        'good' => null,
        'removable' => null,
        'stackable' => null,
        'position' => 'int64',
        'price_definition' => null,
        'unit_price' => 'float',
        'total_price' => 'float',
        'description' => null,
        'type' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'cover' => null,
        'order_delivery_positions' => null,
        'parent' => null,
        'children' => null
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
        'order_id' => 'orderId',
        'order_version_id' => 'orderVersionId',
        'product_id' => 'productId',
        'product_version_id' => 'productVersionId',
        'parent_id' => 'parentId',
        'parent_version_id' => 'parentVersionId',
        'cover_id' => 'coverId',
        'identifier' => 'identifier',
        'referenced_id' => 'referencedId',
        'quantity' => 'quantity',
        'label' => 'label',
        'payload' => 'payload',
        'good' => 'good',
        'removable' => 'removable',
        'stackable' => 'stackable',
        'position' => 'position',
        'price_definition' => 'priceDefinition',
        'unit_price' => 'unitPrice',
        'total_price' => 'totalPrice',
        'description' => 'description',
        'type' => 'type',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'cover' => 'cover',
        'order_delivery_positions' => 'orderDeliveryPositions',
        'parent' => 'parent',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'order_id' => 'setOrderId',
        'order_version_id' => 'setOrderVersionId',
        'product_id' => 'setProductId',
        'product_version_id' => 'setProductVersionId',
        'parent_id' => 'setParentId',
        'parent_version_id' => 'setParentVersionId',
        'cover_id' => 'setCoverId',
        'identifier' => 'setIdentifier',
        'referenced_id' => 'setReferencedId',
        'quantity' => 'setQuantity',
        'label' => 'setLabel',
        'payload' => 'setPayload',
        'good' => 'setGood',
        'removable' => 'setRemovable',
        'stackable' => 'setStackable',
        'position' => 'setPosition',
        'price_definition' => 'setPriceDefinition',
        'unit_price' => 'setUnitPrice',
        'total_price' => 'setTotalPrice',
        'description' => 'setDescription',
        'type' => 'setType',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'cover' => 'setCover',
        'order_delivery_positions' => 'setOrderDeliveryPositions',
        'parent' => 'setParent',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'order_id' => 'getOrderId',
        'order_version_id' => 'getOrderVersionId',
        'product_id' => 'getProductId',
        'product_version_id' => 'getProductVersionId',
        'parent_id' => 'getParentId',
        'parent_version_id' => 'getParentVersionId',
        'cover_id' => 'getCoverId',
        'identifier' => 'getIdentifier',
        'referenced_id' => 'getReferencedId',
        'quantity' => 'getQuantity',
        'label' => 'getLabel',
        'payload' => 'getPayload',
        'good' => 'getGood',
        'removable' => 'getRemovable',
        'stackable' => 'getStackable',
        'position' => 'getPosition',
        'price_definition' => 'getPriceDefinition',
        'unit_price' => 'getUnitPrice',
        'total_price' => 'getTotalPrice',
        'description' => 'getDescription',
        'type' => 'getType',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'cover' => 'getCover',
        'order_delivery_positions' => 'getOrderDeliveryPositions',
        'parent' => 'getParent',
        'children' => 'getChildren'
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
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_version_id'] = $data['order_version_id'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_version_id'] = $data['product_version_id'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['parent_version_id'] = $data['parent_version_id'] ?? null;
        $this->container['cover_id'] = $data['cover_id'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['referenced_id'] = $data['referenced_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['good'] = $data['good'] ?? null;
        $this->container['removable'] = $data['removable'] ?? null;
        $this->container['stackable'] = $data['stackable'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['price_definition'] = $data['price_definition'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['cover'] = $data['cover'] ?? null;
        $this->container['order_delivery_positions'] = $data['order_delivery_positions'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['product_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['product_id'])) {
            $invalidProperties[] = "invalid value for 'product_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['product_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['product_version_id'])) {
            $invalidProperties[] = "invalid value for 'product_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['parent_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['parent_id'])) {
            $invalidProperties[] = "invalid value for 'parent_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['parent_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['parent_version_id'])) {
            $invalidProperties[] = "invalid value for 'parent_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['cover_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cover_id'])) {
            $invalidProperties[] = "invalid value for 'cover_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['children'] === null) {
            $invalidProperties[] = "'children' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_id))) {
            throw new \InvalidArgumentException("invalid value for $order_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string|null
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string|null $order_version_id order_version_id
     *
     * @return self
     */
    public function setOrderVersionId($order_version_id)
    {

        if (!is_null($order_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_version_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if (!is_null($product_id) && (!preg_match("/^[0-9a-f]{32}$/", $product_id))) {
            throw new \InvalidArgumentException("invalid value for $product_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $product_version_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_version_id'] = $product_version_id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (!is_null($parent_id) && (!preg_match("/^[0-9a-f]{32}$/", $parent_id))) {
            throw new \InvalidArgumentException("invalid value for $parent_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets parent_version_id
     *
     * @return string|null
     */
    public function getParentVersionId()
    {
        return $this->container['parent_version_id'];
    }

    /**
     * Sets parent_version_id
     *
     * @param string|null $parent_version_id parent_version_id
     *
     * @return self
     */
    public function setParentVersionId($parent_version_id)
    {

        if (!is_null($parent_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $parent_version_id))) {
            throw new \InvalidArgumentException("invalid value for $parent_version_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['parent_version_id'] = $parent_version_id;

        return $this;
    }

    /**
     * Gets cover_id
     *
     * @return string|null
     */
    public function getCoverId()
    {
        return $this->container['cover_id'];
    }

    /**
     * Sets cover_id
     *
     * @param string|null $cover_id cover_id
     *
     * @return self
     */
    public function setCoverId($cover_id)
    {

        if (!is_null($cover_id) && (!preg_match("/^[0-9a-f]{32}$/", $cover_id))) {
            throw new \InvalidArgumentException("invalid value for $cover_id when calling OrderLineItem., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cover_id'] = $cover_id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets referenced_id
     *
     * @return string|null
     */
    public function getReferencedId()
    {
        return $this->container['referenced_id'];
    }

    /**
     * Sets referenced_id
     *
     * @param string|null $referenced_id referenced_id
     *
     * @return self
     */
    public function setReferencedId($referenced_id)
    {
        $this->container['referenced_id'] = $referenced_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return object|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param object|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets good
     *
     * @return bool|null
     */
    public function getGood()
    {
        return $this->container['good'];
    }

    /**
     * Sets good
     *
     * @param bool|null $good good
     *
     * @return self
     */
    public function setGood($good)
    {
        $this->container['good'] = $good;

        return $this;
    }

    /**
     * Gets removable
     *
     * @return bool|null
     */
    public function getRemovable()
    {
        return $this->container['removable'];
    }

    /**
     * Sets removable
     *
     * @param bool|null $removable removable
     *
     * @return self
     */
    public function setRemovable($removable)
    {
        $this->container['removable'] = $removable;

        return $this;
    }

    /**
     * Gets stackable
     *
     * @return bool|null
     */
    public function getStackable()
    {
        return $this->container['stackable'];
    }

    /**
     * Sets stackable
     *
     * @param bool|null $stackable stackable
     *
     * @return self
     */
    public function setStackable($stackable)
    {
        $this->container['stackable'] = $stackable;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets price_definition
     *
     * @return object|null
     */
    public function getPriceDefinition()
    {
        return $this->container['price_definition'];
    }

    /**
     * Sets price_definition
     *
     * @param object|null $price_definition price_definition
     *
     * @return self
     */
    public function setPriceDefinition($price_definition)
    {
        $this->container['price_definition'] = $price_definition;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float|null $total_price total_price
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets cover
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Media|null
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Media|null $cover cover
     *
     * @return self
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets order_delivery_positions
     *
     * @return \ServeXS\Shopware\v6\Store\Model\OrderDeliveryPosition|null
     */
    public function getOrderDeliveryPositions()
    {
        return $this->container['order_delivery_positions'];
    }

    /**
     * Sets order_delivery_positions
     *
     * @param \ServeXS\Shopware\v6\Store\Model\OrderDeliveryPosition|null $order_delivery_positions order_delivery_positions
     *
     * @return self
     */
    public function setOrderDeliveryPositions($order_delivery_positions)
    {
        $this->container['order_delivery_positions'] = $order_delivery_positions;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \ServeXS\Shopware\v6\Store\Model\OrderLineItem|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \ServeXS\Shopware\v6\Store\Model\OrderLineItem|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \ServeXS\Shopware\v6\Store\Model\OrderLineItem
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \ServeXS\Shopware\v6\Store\Model\OrderLineItem $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


