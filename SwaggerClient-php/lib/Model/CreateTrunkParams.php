<?php
/**
 * CreateTrunkParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Phone.com API
 *
 * This is a Phone.com api Swagger definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apisupport@phone.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateTrunkParams Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateTrunkParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateTrunkParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'uri' => 'string',
        'max_concurrent_calls' => 'int',
        'max_minutes_per_month' => 'int',
        'greeting' => 'object',
        'error_message' => 'object',
        'codecs' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'uri' => null,
        'max_concurrent_calls' => null,
        'max_minutes_per_month' => null,
        'greeting' => null,
        'error_message' => null,
        'codecs' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'uri' => 'uri',
        'max_concurrent_calls' => 'max_concurrent_calls',
        'max_minutes_per_month' => 'max_minutes_per_month',
        'greeting' => 'greeting',
        'error_message' => 'error_message',
        'codecs' => 'codecs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'uri' => 'setUri',
        'max_concurrent_calls' => 'setMaxConcurrentCalls',
        'max_minutes_per_month' => 'setMaxMinutesPerMonth',
        'greeting' => 'setGreeting',
        'error_message' => 'setErrorMessage',
        'codecs' => 'setCodecs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'uri' => 'getUri',
        'max_concurrent_calls' => 'getMaxConcurrentCalls',
        'max_minutes_per_month' => 'getMaxMinutesPerMonth',
        'greeting' => 'getGreeting',
        'error_message' => 'getErrorMessage',
        'codecs' => 'getCodecs'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['max_concurrent_calls'] = isset($data['max_concurrent_calls']) ? $data['max_concurrent_calls'] : null;
        $this->container['max_minutes_per_month'] = isset($data['max_minutes_per_month']) ? $data['max_minutes_per_month'] : null;
        $this->container['greeting'] = isset($data['greeting']) ? $data['greeting'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['codecs'] = isset($data['codecs']) ? $data['codecs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of Trunk
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param string $uri URI of Trunk (in the form of SIP/user@host.com:port)
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets max_concurrent_calls
     * @return int
     */
    public function getMaxConcurrentCalls()
    {
        return $this->container['max_concurrent_calls'];
    }

    /**
     * Sets max_concurrent_calls
     * @param int $max_concurrent_calls Max concurrent calls
     * @return $this
     */
    public function setMaxConcurrentCalls($max_concurrent_calls)
    {
        $this->container['max_concurrent_calls'] = $max_concurrent_calls;

        return $this;
    }

    /**
     * Gets max_minutes_per_month
     * @return int
     */
    public function getMaxMinutesPerMonth()
    {
        return $this->container['max_minutes_per_month'];
    }

    /**
     * Sets max_minutes_per_month
     * @param int $max_minutes_per_month Max minutes per month
     * @return $this
     */
    public function setMaxMinutesPerMonth($max_minutes_per_month)
    {
        $this->container['max_minutes_per_month'] = $max_minutes_per_month;

        return $this;
    }

    /**
     * Gets greeting
     * @return object
     */
    public function getGreeting()
    {
        return $this->container['greeting'];
    }

    /**
     * Sets greeting
     * @param object $greeting Recording lookup object
     * @return $this
     */
    public function setGreeting($greeting)
    {
        $this->container['greeting'] = $greeting;

        return $this;
    }

    /**
     * Gets error_message
     * @return object
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param object $error_message Recording lookup object
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets codecs
     * @return object[]
     */
    public function getCodecs()
    {
        return $this->container['codecs'];
    }

    /**
     * Sets codecs
     * @param object[] $codecs Custom audio codec configuration
     * @return $this
     */
    public function setCodecs($codecs)
    {
        $this->container['codecs'] = $codecs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


