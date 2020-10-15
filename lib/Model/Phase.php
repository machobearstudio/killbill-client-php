<?php
/**
 * Phase
 *
 * PHP version 7.1+
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.22.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * Phase Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Phase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Phase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'prices' => '\Killbill\Client\Swagger\Model\Price[]',
'fixedPrices' => '\Killbill\Client\Swagger\Model\Price[]',
'duration' => '\Killbill\Client\Swagger\Model\Duration',
'usages' => '\Killbill\Client\Swagger\Model\Usage[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'prices' => null,
'fixedPrices' => null,
'duration' => null,
'usages' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
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
        'type' => 'type',
'prices' => 'prices',
'fixedPrices' => 'fixedPrices',
'duration' => 'duration',
'usages' => 'usages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'prices' => 'setPrices',
'fixedPrices' => 'setFixedPrices',
'duration' => 'setDuration',
'usages' => 'setUsages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'prices' => 'getPrices',
'fixedPrices' => 'getFixedPrices',
'duration' => 'getDuration',
'usages' => 'getUsages'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['fixedPrices'] = isset($data['fixedPrices']) ? $data['fixedPrices'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['usages'] = isset($data['usages']) ? $data['usages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
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
     * @return $this
     */
    public function setType($type): void
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Killbill\Client\Swagger\Model\Price[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Killbill\Client\Swagger\Model\Price[] $prices prices
     *
     * @return $this
     */
    public function setPrices($prices): void
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets fixedPrices
     *
     * @return \Killbill\Client\Swagger\Model\Price[]
     */
    public function getFixedPrices()
    {
        return $this->container['fixedPrices'];
    }

    /**
     * Sets fixedPrices
     *
     * @param \Killbill\Client\Swagger\Model\Price[] $fixedPrices fixedPrices
     *
     * @return $this
     */
    public function setFixedPrices($fixedPrices): void
    {
        $this->container['fixedPrices'] = $fixedPrices;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return \Killbill\Client\Swagger\Model\Duration
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \Killbill\Client\Swagger\Model\Duration $duration duration
     *
     * @return $this
     */
    public function setDuration($duration): void
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return \Killbill\Client\Swagger\Model\Usage[]
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param \Killbill\Client\Swagger\Model\Usage[] $usages usages
     *
     * @return $this
     */
    public function setUsages($usages): void
    {
        $this->container['usages'] = $usages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
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
    public function offsetGet(int $offset)
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
    public function offsetSet(int $offset, $value): void
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
    public function offsetUnset(int $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
