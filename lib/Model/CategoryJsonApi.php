<?php
/**
 * CategoryJsonApi
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
 * CategoryJsonApi Class Doc Comment
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
class CategoryJsonApi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'attributes' => 'array<string,object>',
        'relationships' => 'object',
        'links' => 'array<string,\ServeXS\Shopware\v6\Store\Model\Link>',
        'meta' => 'array<string,object>',
        'version_id' => 'string',
        'parent_id' => 'string',
        'parent_version_id' => 'string',
        'after_category_id' => 'string',
        'after_category_version_id' => 'string',
        'media_id' => 'string',
        'display_nested_products' => 'bool',
        'breadcrumb' => 'string[]',
        'level' => 'int',
        'path' => 'string',
        'child_count' => 'int',
        'product_assignment_type' => 'string',
        'visible' => 'bool',
        'active' => 'bool',
        'name' => 'string',
        'custom_fields' => 'object',
        'link_type' => 'string',
        'internal_link' => 'string',
        'external_link' => 'string',
        'link_new_tab' => 'bool',
        'description' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'keywords' => 'string',
        'cms_page_id' => 'string',
        'cms_page_version_id' => 'string',
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
        'type' => null,
        'id' => null,
        'attributes' => null,
        'relationships' => null,
        'links' => null,
        'meta' => null,
        'version_id' => null,
        'parent_id' => null,
        'parent_version_id' => null,
        'after_category_id' => null,
        'after_category_version_id' => null,
        'media_id' => null,
        'display_nested_products' => null,
        'breadcrumb' => null,
        'level' => 'int64',
        'path' => null,
        'child_count' => 'int64',
        'product_assignment_type' => null,
        'visible' => null,
        'active' => null,
        'name' => null,
        'custom_fields' => null,
        'link_type' => null,
        'internal_link' => null,
        'external_link' => null,
        'link_new_tab' => null,
        'description' => null,
        'meta_title' => null,
        'meta_description' => null,
        'keywords' => null,
        'cms_page_id' => null,
        'cms_page_version_id' => null,
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
        'type' => 'type',
        'id' => 'id',
        'attributes' => 'attributes',
        'relationships' => 'relationships',
        'links' => 'links',
        'meta' => 'meta',
        'version_id' => 'versionId',
        'parent_id' => 'parentId',
        'parent_version_id' => 'parentVersionId',
        'after_category_id' => 'afterCategoryId',
        'after_category_version_id' => 'afterCategoryVersionId',
        'media_id' => 'mediaId',
        'display_nested_products' => 'displayNestedProducts',
        'breadcrumb' => 'breadcrumb',
        'level' => 'level',
        'path' => 'path',
        'child_count' => 'childCount',
        'product_assignment_type' => 'productAssignmentType',
        'visible' => 'visible',
        'active' => 'active',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'link_type' => 'linkType',
        'internal_link' => 'internalLink',
        'external_link' => 'externalLink',
        'link_new_tab' => 'linkNewTab',
        'description' => 'description',
        'meta_title' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'keywords' => 'keywords',
        'cms_page_id' => 'cmsPageId',
        'cms_page_version_id' => 'cmsPageVersionId',
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
        'type' => 'setType',
        'id' => 'setId',
        'attributes' => 'setAttributes',
        'relationships' => 'setRelationships',
        'links' => 'setLinks',
        'meta' => 'setMeta',
        'version_id' => 'setVersionId',
        'parent_id' => 'setParentId',
        'parent_version_id' => 'setParentVersionId',
        'after_category_id' => 'setAfterCategoryId',
        'after_category_version_id' => 'setAfterCategoryVersionId',
        'media_id' => 'setMediaId',
        'display_nested_products' => 'setDisplayNestedProducts',
        'breadcrumb' => 'setBreadcrumb',
        'level' => 'setLevel',
        'path' => 'setPath',
        'child_count' => 'setChildCount',
        'product_assignment_type' => 'setProductAssignmentType',
        'visible' => 'setVisible',
        'active' => 'setActive',
        'name' => 'setName',
        'custom_fields' => 'setCustomFields',
        'link_type' => 'setLinkType',
        'internal_link' => 'setInternalLink',
        'external_link' => 'setExternalLink',
        'link_new_tab' => 'setLinkNewTab',
        'description' => 'setDescription',
        'meta_title' => 'setMetaTitle',
        'meta_description' => 'setMetaDescription',
        'keywords' => 'setKeywords',
        'cms_page_id' => 'setCmsPageId',
        'cms_page_version_id' => 'setCmsPageVersionId',
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
        'type' => 'getType',
        'id' => 'getId',
        'attributes' => 'getAttributes',
        'relationships' => 'getRelationships',
        'links' => 'getLinks',
        'meta' => 'getMeta',
        'version_id' => 'getVersionId',
        'parent_id' => 'getParentId',
        'parent_version_id' => 'getParentVersionId',
        'after_category_id' => 'getAfterCategoryId',
        'after_category_version_id' => 'getAfterCategoryVersionId',
        'media_id' => 'getMediaId',
        'display_nested_products' => 'getDisplayNestedProducts',
        'breadcrumb' => 'getBreadcrumb',
        'level' => 'getLevel',
        'path' => 'getPath',
        'child_count' => 'getChildCount',
        'product_assignment_type' => 'getProductAssignmentType',
        'visible' => 'getVisible',
        'active' => 'getActive',
        'name' => 'getName',
        'custom_fields' => 'getCustomFields',
        'link_type' => 'getLinkType',
        'internal_link' => 'getInternalLink',
        'external_link' => 'getExternalLink',
        'link_new_tab' => 'getLinkNewTab',
        'description' => 'getDescription',
        'meta_title' => 'getMetaTitle',
        'meta_description' => 'getMetaDescription',
        'keywords' => 'getKeywords',
        'cms_page_id' => 'getCmsPageId',
        'cms_page_version_id' => 'getCmsPageVersionId',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['parent_version_id'] = $data['parent_version_id'] ?? null;
        $this->container['after_category_id'] = $data['after_category_id'] ?? null;
        $this->container['after_category_version_id'] = $data['after_category_version_id'] ?? null;
        $this->container['media_id'] = $data['media_id'] ?? null;
        $this->container['display_nested_products'] = $data['display_nested_products'] ?? null;
        $this->container['breadcrumb'] = $data['breadcrumb'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['child_count'] = $data['child_count'] ?? null;
        $this->container['product_assignment_type'] = $data['product_assignment_type'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['link_type'] = $data['link_type'] ?? null;
        $this->container['internal_link'] = $data['internal_link'] ?? null;
        $this->container['external_link'] = $data['external_link'] ?? null;
        $this->container['link_new_tab'] = $data['link_new_tab'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['meta_title'] = $data['meta_title'] ?? null;
        $this->container['meta_description'] = $data['meta_description'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['cms_page_id'] = $data['cms_page_id'] ?? null;
        $this->container['cms_page_version_id'] = $data['cms_page_version_id'] ?? null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['parent_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['parent_id'])) {
            $invalidProperties[] = "invalid value for 'parent_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['parent_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['parent_version_id'])) {
            $invalidProperties[] = "invalid value for 'parent_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['after_category_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['after_category_id'])) {
            $invalidProperties[] = "invalid value for 'after_category_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['after_category_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['after_category_version_id'])) {
            $invalidProperties[] = "invalid value for 'after_category_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['media_id'])) {
            $invalidProperties[] = "invalid value for 'media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['display_nested_products'] === null) {
            $invalidProperties[] = "'display_nested_products' can't be null";
        }
        if ($this->container['product_assignment_type'] === null) {
            $invalidProperties[] = "'product_assignment_type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['internal_link']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['internal_link'])) {
            $invalidProperties[] = "invalid value for 'internal_link', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['cms_page_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cms_page_id'])) {
            $invalidProperties[] = "invalid value for 'cms_page_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['cms_page_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cms_page_version_id'])) {
            $invalidProperties[] = "invalid value for 'cms_page_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,object>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,object>|null $attributes Members of the attributes object (\"attributes\") represent information about the resource object in which it's defined.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * Gets links
     *
     * @return array<string,\ServeXS\Shopware\v6\Store\Model\Link>|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param array<string,\ServeXS\Shopware\v6\Store\Model\Link>|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return array<string,object>|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param array<string,object>|null $meta Non-standard meta-information that can not be represented as an attribute or relationship.
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
            throw new \InvalidArgumentException("invalid value for $version_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

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
            throw new \InvalidArgumentException("invalid value for $parent_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $parent_version_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['parent_version_id'] = $parent_version_id;

        return $this;
    }

    /**
     * Gets after_category_id
     *
     * @return string|null
     */
    public function getAfterCategoryId()
    {
        return $this->container['after_category_id'];
    }

    /**
     * Sets after_category_id
     *
     * @param string|null $after_category_id after_category_id
     *
     * @return self
     */
    public function setAfterCategoryId($after_category_id)
    {

        if (!is_null($after_category_id) && (!preg_match("/^[0-9a-f]{32}$/", $after_category_id))) {
            throw new \InvalidArgumentException("invalid value for $after_category_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['after_category_id'] = $after_category_id;

        return $this;
    }

    /**
     * Gets after_category_version_id
     *
     * @return string|null
     */
    public function getAfterCategoryVersionId()
    {
        return $this->container['after_category_version_id'];
    }

    /**
     * Sets after_category_version_id
     *
     * @param string|null $after_category_version_id after_category_version_id
     *
     * @return self
     */
    public function setAfterCategoryVersionId($after_category_version_id)
    {

        if (!is_null($after_category_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $after_category_version_id))) {
            throw new \InvalidArgumentException("invalid value for $after_category_version_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['after_category_version_id'] = $after_category_version_id;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string|null
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string|null $media_id media_id
     *
     * @return self
     */
    public function setMediaId($media_id)
    {

        if (!is_null($media_id) && (!preg_match("/^[0-9a-f]{32}$/", $media_id))) {
            throw new \InvalidArgumentException("invalid value for $media_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets display_nested_products
     *
     * @return bool
     */
    public function getDisplayNestedProducts()
    {
        return $this->container['display_nested_products'];
    }

    /**
     * Sets display_nested_products
     *
     * @param bool $display_nested_products display_nested_products
     *
     * @return self
     */
    public function setDisplayNestedProducts($display_nested_products)
    {
        $this->container['display_nested_products'] = $display_nested_products;

        return $this;
    }

    /**
     * Gets breadcrumb
     *
     * @return string[]|null
     */
    public function getBreadcrumb()
    {
        return $this->container['breadcrumb'];
    }

    /**
     * Sets breadcrumb
     *
     * @param string[]|null $breadcrumb breadcrumb
     *
     * @return self
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->container['breadcrumb'] = $breadcrumb;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param int|null $child_count child_count
     *
     * @return self
     */
    public function setChildCount($child_count)
    {
        $this->container['child_count'] = $child_count;

        return $this;
    }

    /**
     * Gets product_assignment_type
     *
     * @return string
     */
    public function getProductAssignmentType()
    {
        return $this->container['product_assignment_type'];
    }

    /**
     * Sets product_assignment_type
     *
     * @param string $product_assignment_type product_assignment_type
     *
     * @return self
     */
    public function setProductAssignmentType($product_assignment_type)
    {
        $this->container['product_assignment_type'] = $product_assignment_type;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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
     * Gets link_type
     *
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type
     *
     * @param string|null $link_type link_type
     *
     * @return self
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /**
     * Gets internal_link
     *
     * @return string|null
     */
    public function getInternalLink()
    {
        return $this->container['internal_link'];
    }

    /**
     * Sets internal_link
     *
     * @param string|null $internal_link internal_link
     *
     * @return self
     */
    public function setInternalLink($internal_link)
    {

        if (!is_null($internal_link) && (!preg_match("/^[0-9a-f]{32}$/", $internal_link))) {
            throw new \InvalidArgumentException("invalid value for $internal_link when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['internal_link'] = $internal_link;

        return $this;
    }

    /**
     * Gets external_link
     *
     * @return string|null
     */
    public function getExternalLink()
    {
        return $this->container['external_link'];
    }

    /**
     * Sets external_link
     *
     * @param string|null $external_link external_link
     *
     * @return self
     */
    public function setExternalLink($external_link)
    {
        $this->container['external_link'] = $external_link;

        return $this;
    }

    /**
     * Gets link_new_tab
     *
     * @return bool|null
     */
    public function getLinkNewTab()
    {
        return $this->container['link_new_tab'];
    }

    /**
     * Sets link_new_tab
     *
     * @param bool|null $link_new_tab link_new_tab
     *
     * @return self
     */
    public function setLinkNewTab($link_new_tab)
    {
        $this->container['link_new_tab'] = $link_new_tab;

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
     * Gets meta_title
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     *
     * @param string|null $meta_title meta_title
     *
     * @return self
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string|null $meta_description meta_description
     *
     * @return self
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets cms_page_id
     *
     * @return string|null
     */
    public function getCmsPageId()
    {
        return $this->container['cms_page_id'];
    }

    /**
     * Sets cms_page_id
     *
     * @param string|null $cms_page_id cms_page_id
     *
     * @return self
     */
    public function setCmsPageId($cms_page_id)
    {

        if (!is_null($cms_page_id) && (!preg_match("/^[0-9a-f]{32}$/", $cms_page_id))) {
            throw new \InvalidArgumentException("invalid value for $cms_page_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cms_page_id'] = $cms_page_id;

        return $this;
    }

    /**
     * Gets cms_page_version_id
     *
     * @return string|null
     */
    public function getCmsPageVersionId()
    {
        return $this->container['cms_page_version_id'];
    }

    /**
     * Sets cms_page_version_id
     *
     * @param string|null $cms_page_version_id cms_page_version_id
     *
     * @return self
     */
    public function setCmsPageVersionId($cms_page_version_id)
    {

        if (!is_null($cms_page_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $cms_page_version_id))) {
            throw new \InvalidArgumentException("invalid value for $cms_page_version_id when calling CategoryJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cms_page_version_id'] = $cms_page_version_id;

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


