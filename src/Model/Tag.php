<?php
/**
 * Tag
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.20.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Model;

use \ArrayAccess;
use \Killbill\Client\ObjectSerializer;

/**
 * Tag Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tagId' => 'string',
'objectType' => 'string',
'objectId' => 'string',
'tagDefinitionId' => 'string',
'tagDefinitionName' => 'string',
'auditLogs' => '\Killbill\Client\Model\AuditLog[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tagId' => 'uuid',
'objectType' => null,
'objectId' => 'uuid',
'tagDefinitionId' => 'uuid',
'tagDefinitionName' => null,
'auditLogs' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tagId' => 'tagId',
'objectType' => 'objectType',
'objectId' => 'objectId',
'tagDefinitionId' => 'tagDefinitionId',
'tagDefinitionName' => 'tagDefinitionName',
'auditLogs' => 'auditLogs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tagId' => 'setTagId',
'objectType' => 'setObjectType',
'objectId' => 'setObjectId',
'tagDefinitionId' => 'setTagDefinitionId',
'tagDefinitionName' => 'setTagDefinitionName',
'auditLogs' => 'setAuditLogs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tagId' => 'getTagId',
'objectType' => 'getObjectType',
'objectId' => 'getObjectId',
'tagDefinitionId' => 'getTagDefinitionId',
'tagDefinitionName' => 'getTagDefinitionName',
'auditLogs' => 'getAuditLogs'    ];

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
        return self::$swaggerModelName;
    }

    const OBJECT_TYPE_ACCOUNT = 'ACCOUNT';
const OBJECT_TYPE_ACCOUNT_EMAIL = 'ACCOUNT_EMAIL';
const OBJECT_TYPE_BLOCKING_STATES = 'BLOCKING_STATES';
const OBJECT_TYPE_BUNDLE = 'BUNDLE';
const OBJECT_TYPE_CUSTOM_FIELD = 'CUSTOM_FIELD';
const OBJECT_TYPE_INVOICE = 'INVOICE';
const OBJECT_TYPE_PAYMENT = 'PAYMENT';
const OBJECT_TYPE_TRANSACTION = 'TRANSACTION';
const OBJECT_TYPE_INVOICE_ITEM = 'INVOICE_ITEM';
const OBJECT_TYPE_INVOICE_PAYMENT = 'INVOICE_PAYMENT';
const OBJECT_TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
const OBJECT_TYPE_SUBSCRIPTION_EVENT = 'SUBSCRIPTION_EVENT';
const OBJECT_TYPE_SERVICE_BROADCAST = 'SERVICE_BROADCAST';
const OBJECT_TYPE_PAYMENT_ATTEMPT = 'PAYMENT_ATTEMPT';
const OBJECT_TYPE_PAYMENT_METHOD = 'PAYMENT_METHOD';
const OBJECT_TYPE_TAG = 'TAG';
const OBJECT_TYPE_TAG_DEFINITION = 'TAG_DEFINITION';
const OBJECT_TYPE_TENANT = 'TENANT';
const OBJECT_TYPE_TENANT_KVS = 'TENANT_KVS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_ACCOUNT,
self::OBJECT_TYPE_ACCOUNT_EMAIL,
self::OBJECT_TYPE_BLOCKING_STATES,
self::OBJECT_TYPE_BUNDLE,
self::OBJECT_TYPE_CUSTOM_FIELD,
self::OBJECT_TYPE_INVOICE,
self::OBJECT_TYPE_PAYMENT,
self::OBJECT_TYPE_TRANSACTION,
self::OBJECT_TYPE_INVOICE_ITEM,
self::OBJECT_TYPE_INVOICE_PAYMENT,
self::OBJECT_TYPE_SUBSCRIPTION,
self::OBJECT_TYPE_SUBSCRIPTION_EVENT,
self::OBJECT_TYPE_SERVICE_BROADCAST,
self::OBJECT_TYPE_PAYMENT_ATTEMPT,
self::OBJECT_TYPE_PAYMENT_METHOD,
self::OBJECT_TYPE_TAG,
self::OBJECT_TYPE_TAG_DEFINITION,
self::OBJECT_TYPE_TENANT,
self::OBJECT_TYPE_TENANT_KVS,        ];
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['tagDefinitionId'] = isset($data['tagDefinitionId']) ? $data['tagDefinitionId'] : null;
        $this->container['tagDefinitionName'] = isset($data['tagDefinitionName']) ? $data['tagDefinitionName'] : null;
        $this->container['auditLogs'] = isset($data['auditLogs']) ? $data['auditLogs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets tagId
     *
     * @return string
     */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
     * Sets tagId
     *
     * @param string $tagId tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;

        return $this;
    }

    /**
     * Gets objectType
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
     * Sets objectType
     *
     * @param string $objectType objectType
     *
     * @return $this
     */
    public function setObjectType($objectType)
    {
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($objectType) && !in_array($objectType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'objectType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objectType'] = $objectType;

        return $this;
    }

    /**
     * Gets objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
     * Sets objectId
     *
     * @param string $objectId objectId
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;

        return $this;
    }

    /**
     * Gets tagDefinitionId
     *
     * @return string
     */
    public function getTagDefinitionId()
    {
        return $this->container['tagDefinitionId'];
    }

    /**
     * Sets tagDefinitionId
     *
     * @param string $tagDefinitionId tagDefinitionId
     *
     * @return $this
     */
    public function setTagDefinitionId($tagDefinitionId)
    {
        $this->container['tagDefinitionId'] = $tagDefinitionId;

        return $this;
    }

    /**
     * Gets tagDefinitionName
     *
     * @return string
     */
    public function getTagDefinitionName()
    {
        return $this->container['tagDefinitionName'];
    }

    /**
     * Sets tagDefinitionName
     *
     * @param string $tagDefinitionName tagDefinitionName
     *
     * @return $this
     */
    public function setTagDefinitionName($tagDefinitionName)
    {
        $this->container['tagDefinitionName'] = $tagDefinitionName;

        return $this;
    }

    /**
     * Gets auditLogs
     *
     * @return \Killbill\Client\Model\AuditLog[]
     */
    public function getAuditLogs()
    {
        return $this->container['auditLogs'];
    }

    /**
     * Sets auditLogs
     *
     * @param \Killbill\Client\Model\AuditLog[] $auditLogs auditLogs
     *
     * @return $this
     */
    public function setAuditLogs($auditLogs)
    {
        $this->container['auditLogs'] = $auditLogs;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
