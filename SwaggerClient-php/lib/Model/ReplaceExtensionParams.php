<?php
/**
 * ReplaceExtensionParams
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
 * ReplaceExtensionParams Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReplaceExtensionParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReplaceExtensionParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voicemail' => '\Swagger\Client\Model\Voicemail',
        'call_notifications' => '\Swagger\Client\Model\CallNotifications',
        'name_greeting' => 'object',
        'name' => 'string',
        'timezone' => 'string',
        'include_in_directory' => 'bool',
        'extension' => 'int',
        'enable_outbound_calls' => 'bool',
        'usage_type' => 'string',
        'full_name' => 'string',
        'enable_call_waiting' => 'bool',
        'caller_id' => 'string',
        'local_area_code' => 'int',
        'route' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'voicemail' => 'voicemail',
        'call_notifications' => 'call_notifications',
        'name_greeting' => 'name_greeting',
        'name' => 'name',
        'timezone' => 'timezone',
        'include_in_directory' => 'include_in_directory',
        'extension' => 'extension',
        'enable_outbound_calls' => 'enable_outbound_calls',
        'usage_type' => 'usage_type',
        'full_name' => 'full_name',
        'enable_call_waiting' => 'enable_call_waiting',
        'caller_id' => 'caller_id',
        'local_area_code' => 'local_area_code',
        'route' => 'route'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'voicemail' => 'setVoicemail',
        'call_notifications' => 'setCallNotifications',
        'name_greeting' => 'setNameGreeting',
        'name' => 'setName',
        'timezone' => 'setTimezone',
        'include_in_directory' => 'setIncludeInDirectory',
        'extension' => 'setExtension',
        'enable_outbound_calls' => 'setEnableOutboundCalls',
        'usage_type' => 'setUsageType',
        'full_name' => 'setFullName',
        'enable_call_waiting' => 'setEnableCallWaiting',
        'caller_id' => 'setCallerId',
        'local_area_code' => 'setLocalAreaCode',
        'route' => 'setRoute'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'voicemail' => 'getVoicemail',
        'call_notifications' => 'getCallNotifications',
        'name_greeting' => 'getNameGreeting',
        'name' => 'getName',
        'timezone' => 'getTimezone',
        'include_in_directory' => 'getIncludeInDirectory',
        'extension' => 'getExtension',
        'enable_outbound_calls' => 'getEnableOutboundCalls',
        'usage_type' => 'getUsageType',
        'full_name' => 'getFullName',
        'enable_call_waiting' => 'getEnableCallWaiting',
        'caller_id' => 'getCallerId',
        'local_area_code' => 'getLocalAreaCode',
        'route' => 'getRoute'
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
        $this->container['voicemail'] = isset($data['voicemail']) ? $data['voicemail'] : null;
        $this->container['call_notifications'] = isset($data['call_notifications']) ? $data['call_notifications'] : null;
        $this->container['name_greeting'] = isset($data['name_greeting']) ? $data['name_greeting'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['include_in_directory'] = isset($data['include_in_directory']) ? $data['include_in_directory'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['enable_outbound_calls'] = isset($data['enable_outbound_calls']) ? $data['enable_outbound_calls'] : null;
        $this->container['usage_type'] = isset($data['usage_type']) ? $data['usage_type'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['enable_call_waiting'] = isset($data['enable_call_waiting']) ? $data['enable_call_waiting'] : null;
        $this->container['caller_id'] = isset($data['caller_id']) ? $data['caller_id'] : null;
        $this->container['local_area_code'] = isset($data['local_area_code']) ? $data['local_area_code'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
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
     * Gets voicemail
     * @return \Swagger\Client\Model\Voicemail
     */
    public function getVoicemail()
    {
        return $this->container['voicemail'];
    }

    /**
     * Sets voicemail
     * @param \Swagger\Client\Model\Voicemail $voicemail Voicemail object
     * @return $this
     */
    public function setVoicemail($voicemail)
    {
        $this->container['voicemail'] = $voicemail;

        return $this;
    }

    /**
     * Gets call_notifications
     * @return \Swagger\Client\Model\CallNotifications
     */
    public function getCallNotifications()
    {
        return $this->container['call_notifications'];
    }

    /**
     * Sets call_notifications
     * @param \Swagger\Client\Model\CallNotifications $call_notifications Call Notifications object
     * @return $this
     */
    public function setCallNotifications($call_notifications)
    {
        $this->container['call_notifications'] = $call_notifications;

        return $this;
    }

    /**
     * Gets name_greeting
     * @return object
     */
    public function getNameGreeting()
    {
        return $this->container['name_greeting'];
    }

    /**
     * Sets name_greeting
     * @param object $name_greeting Recording lookup object
     * @return $this
     */
    public function setNameGreeting($name_greeting)
    {
        $this->container['name_greeting'] = $name_greeting;

        return $this;
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
     * @param string $name Name (required)
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone Timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets include_in_directory
     * @return bool
     */
    public function getIncludeInDirectory()
    {
        return $this->container['include_in_directory'];
    }

    /**
     * Sets include_in_directory
     * @param bool $include_in_directory Include in dial-by-name directory
     * @return $this
     */
    public function setIncludeInDirectory($include_in_directory)
    {
        $this->container['include_in_directory'] = $include_in_directory;

        return $this;
    }

    /**
     * Gets extension
     * @return int
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param int $extension Extension number (required)
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets enable_outbound_calls
     * @return bool
     */
    public function getEnableOutboundCalls()
    {
        return $this->container['enable_outbound_calls'];
    }

    /**
     * Sets enable_outbound_calls
     * @param bool $enable_outbound_calls Enable outgoing calls
     * @return $this
     */
    public function setEnableOutboundCalls($enable_outbound_calls)
    {
        $this->container['enable_outbound_calls'] = $enable_outbound_calls;

        return $this;
    }

    /**
     * Gets usage_type
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     * @param string $usage_type Extension type
     * @return $this
     */
    public function setUsageType($usage_type)
    {
        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets full_name
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     * @param string $full_name Contact name
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets enable_call_waiting
     * @return bool
     */
    public function getEnableCallWaiting()
    {
        return $this->container['enable_call_waiting'];
    }

    /**
     * Sets enable_call_waiting
     * @param bool $enable_call_waiting Enable Call Waiting
     * @return $this
     */
    public function setEnableCallWaiting($enable_call_waiting)
    {
        $this->container['enable_call_waiting'] = $enable_call_waiting;

        return $this;
    }

    /**
     * Gets caller_id
     * @return string
     */
    public function getCallerId()
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     * @param string $caller_id Caller ID
     * @return $this
     */
    public function setCallerId($caller_id)
    {
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets local_area_code
     * @return int
     */
    public function getLocalAreaCode()
    {
        return $this->container['local_area_code'];
    }

    /**
     * Sets local_area_code
     * @param int $local_area_code Local area code
     * @return $this
     */
    public function setLocalAreaCode($local_area_code)
    {
        $this->container['local_area_code'] = $local_area_code;

        return $this;
    }

    /**
     * Gets route
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param string $route Route object lookup (must belong to this extension)
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

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


