<?php
/**
 * Greeting
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
 * Greeting Class Doc Comment
 *
 * @category    Class
 * @description Voicemail Greeting Object. See below for details. Can be set to NULL to reset greeting options.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Greeting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Greeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'alternate' => '\Swagger\Client\Model\MediaSummary',
        'standard' => '\Swagger\Client\Model\MediaSummary',
        'enable_leave_message_prompt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'alternate' => null,
        'standard' => null,
        'enable_leave_message_prompt' => null
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
        'type' => 'type',
        'alternate' => 'alternate',
        'standard' => 'standard',
        'enable_leave_message_prompt' => 'enable_leave_message_prompt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'alternate' => 'setAlternate',
        'standard' => 'setStandard',
        'enable_leave_message_prompt' => 'setEnableLeaveMessagePrompt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'alternate' => 'getAlternate',
        'standard' => 'getStandard',
        'enable_leave_message_prompt' => 'getEnableLeaveMessagePrompt'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['alternate'] = isset($data['alternate']) ? $data['alternate'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['enable_leave_message_prompt'] = isset($data['enable_leave_message_prompt']) ? $data['enable_leave_message_prompt'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The greeting to play. Can be \"name\" for the name_greeting as described above, \"standard\" for the standard greeting, or \"alternate\" for an alternate greeting. See below for details.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets alternate
     * @return \Swagger\Client\Model\MediaSummary
     */
    public function getAlternate()
    {
        return $this->container['alternate'];
    }

    /**
     * Sets alternate
     * @param \Swagger\Client\Model\MediaSummary $alternate Greeting to be played when type=\"alternate\". Output is a Greeting Summary Object. Input must be a Greeting Lookup Object.
     * @return $this
     */
    public function setAlternate($alternate)
    {
        $this->container['alternate'] = $alternate;

        return $this;
    }

    /**
     * Gets standard
     * @return \Swagger\Client\Model\MediaSummary
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     * @param \Swagger\Client\Model\MediaSummary $standard Greeting to be played when type=\"standard\". Output is a Greeting Summary Object. Input must be a Greeting Lookup Object.
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets enable_leave_message_prompt
     * @return bool
     */
    public function getEnableLeaveMessagePrompt()
    {
        return $this->container['enable_leave_message_prompt'];
    }

    /**
     * Sets enable_leave_message_prompt
     * @param bool $enable_leave_message_prompt Whether to prompt the caller with the following words after the voicemail greeting has been played: \"Please leave your message after the tone. When finished, hang up or press the pound key.\" Boolean.
     * @return $this
     */
    public function setEnableLeaveMessagePrompt($enable_leave_message_prompt)
    {
        $this->container['enable_leave_message_prompt'] = $enable_leave_message_prompt;

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


