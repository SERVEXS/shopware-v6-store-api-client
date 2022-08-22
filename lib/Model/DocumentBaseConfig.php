<?php
/**
 * DocumentBaseConfig
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
 * DocumentBaseConfig Class Doc Comment
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
class DocumentBaseConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentBaseConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'document_type_id' => 'string',
        'logo_id' => 'string',
        'name' => 'string',
        'filename_prefix' => 'string',
        'filename_suffix' => 'string',
        'global' => 'bool',
        'document_number' => 'string',
        'config' => 'object',
        'created_at' => '\DateTime',
        'custom_fields' => 'object',
        'updated_at' => '\DateTime',
        'logo' => '\ServeXS\Shopware\v6\Store\Model\Media'
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
        'document_type_id' => null,
        'logo_id' => null,
        'name' => null,
        'filename_prefix' => null,
        'filename_suffix' => null,
        'global' => null,
        'document_number' => null,
        'config' => null,
        'created_at' => 'date-time',
        'custom_fields' => null,
        'updated_at' => 'date-time',
        'logo' => null
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
        'document_type_id' => 'documentTypeId',
        'logo_id' => 'logoId',
        'name' => 'name',
        'filename_prefix' => 'filenamePrefix',
        'filename_suffix' => 'filenameSuffix',
        'global' => 'global',
        'document_number' => 'documentNumber',
        'config' => 'config',
        'created_at' => 'createdAt',
        'custom_fields' => 'customFields',
        'updated_at' => 'updatedAt',
        'logo' => 'logo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_type_id' => 'setDocumentTypeId',
        'logo_id' => 'setLogoId',
        'name' => 'setName',
        'filename_prefix' => 'setFilenamePrefix',
        'filename_suffix' => 'setFilenameSuffix',
        'global' => 'setGlobal',
        'document_number' => 'setDocumentNumber',
        'config' => 'setConfig',
        'created_at' => 'setCreatedAt',
        'custom_fields' => 'setCustomFields',
        'updated_at' => 'setUpdatedAt',
        'logo' => 'setLogo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_type_id' => 'getDocumentTypeId',
        'logo_id' => 'getLogoId',
        'name' => 'getName',
        'filename_prefix' => 'getFilenamePrefix',
        'filename_suffix' => 'getFilenameSuffix',
        'global' => 'getGlobal',
        'document_number' => 'getDocumentNumber',
        'config' => 'getConfig',
        'created_at' => 'getCreatedAt',
        'custom_fields' => 'getCustomFields',
        'updated_at' => 'getUpdatedAt',
        'logo' => 'getLogo'
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
        $this->container['document_type_id'] = $data['document_type_id'] ?? null;
        $this->container['logo_id'] = $data['logo_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['filename_prefix'] = $data['filename_prefix'] ?? null;
        $this->container['filename_suffix'] = $data['filename_suffix'] ?? null;
        $this->container['global'] = $data['global'] ?? null;
        $this->container['document_number'] = $data['document_number'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
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

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['document_type_id'])) {
            $invalidProperties[] = "invalid value for 'document_type_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['logo_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['logo_id'])) {
            $invalidProperties[] = "invalid value for 'logo_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['global'] === null) {
            $invalidProperties[] = "'global' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling DocumentBaseConfig., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id document_type_id
     *
     * @return self
     */
    public function setDocumentTypeId($document_type_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $document_type_id))) {
            throw new \InvalidArgumentException("invalid value for $document_type_id when calling DocumentBaseConfig., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets logo_id
     *
     * @return string|null
     */
    public function getLogoId()
    {
        return $this->container['logo_id'];
    }

    /**
     * Sets logo_id
     *
     * @param string|null $logo_id logo_id
     *
     * @return self
     */
    public function setLogoId($logo_id)
    {

        if (!is_null($logo_id) && (!preg_match("/^[0-9a-f]{32}$/", $logo_id))) {
            throw new \InvalidArgumentException("invalid value for $logo_id when calling DocumentBaseConfig., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['logo_id'] = $logo_id;

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
     * Gets filename_prefix
     *
     * @return string|null
     */
    public function getFilenamePrefix()
    {
        return $this->container['filename_prefix'];
    }

    /**
     * Sets filename_prefix
     *
     * @param string|null $filename_prefix filename_prefix
     *
     * @return self
     */
    public function setFilenamePrefix($filename_prefix)
    {
        $this->container['filename_prefix'] = $filename_prefix;

        return $this;
    }

    /**
     * Gets filename_suffix
     *
     * @return string|null
     */
    public function getFilenameSuffix()
    {
        return $this->container['filename_suffix'];
    }

    /**
     * Sets filename_suffix
     *
     * @param string|null $filename_suffix filename_suffix
     *
     * @return self
     */
    public function setFilenameSuffix($filename_suffix)
    {
        $this->container['filename_suffix'] = $filename_suffix;

        return $this;
    }

    /**
     * Gets global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     *
     * @param bool $global global
     *
     * @return self
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

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
     * Gets logo
     *
     * @return \ServeXS\Shopware\v6\Store\Model\Media|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \ServeXS\Shopware\v6\Store\Model\Media|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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

