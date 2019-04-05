<?php
/**
 * Subject
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
 * Subject Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'principal' => 'string',
'isAuthenticated' => 'bool',
'isRemembered' => 'bool',
'session' => '\Killbill\Client\Model\Session'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'principal' => null,
'isAuthenticated' => null,
'isRemembered' => null,
'session' => null    ];

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
        'principal' => 'principal',
'isAuthenticated' => 'isAuthenticated',
'isRemembered' => 'isRemembered',
'session' => 'session'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'principal' => 'setPrincipal',
'isAuthenticated' => 'setIsAuthenticated',
'isRemembered' => 'setIsRemembered',
'session' => 'setSession'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'principal' => 'getPrincipal',
'isAuthenticated' => 'getIsAuthenticated',
'isRemembered' => 'getIsRemembered',
'session' => 'getSession'    ];

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
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['isAuthenticated'] = isset($data['isAuthenticated']) ? $data['isAuthenticated'] : null;
        $this->container['isRemembered'] = isset($data['isRemembered']) ? $data['isRemembered'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
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
     * Gets principal
     *
     * @return string
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string $principal principal
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets isAuthenticated
     *
     * @return bool
     */
    public function getIsAuthenticated()
    {
        return $this->container['isAuthenticated'];
    }

    /**
     * Sets isAuthenticated
     *
     * @param bool $isAuthenticated isAuthenticated
     *
     * @return $this
     */
    public function setIsAuthenticated($isAuthenticated)
    {
        $this->container['isAuthenticated'] = $isAuthenticated;

        return $this;
    }

    /**
     * Gets isRemembered
     *
     * @return bool
     */
    public function getIsRemembered()
    {
        return $this->container['isRemembered'];
    }

    /**
     * Sets isRemembered
     *
     * @param bool $isRemembered isRemembered
     *
     * @return $this
     */
    public function setIsRemembered($isRemembered)
    {
        $this->container['isRemembered'] = $isRemembered;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \Killbill\Client\Model\Session
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \Killbill\Client\Model\Session $session session
     *
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

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
