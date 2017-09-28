<?php
/**
 * ReplacePhoneNumberParams
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
 * ReplacePhoneNumberParams Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReplacePhoneNumberParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReplacePhoneNumberParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'route' => 'object',
        'name' => 'string',
        'block_incoming' => 'string',
        'block_anonymous' => 'string',
        'caller_id' => '\Swagger\Client\Model\CallerIdPhoneNumber',
        'sms_forwarding' => '\Swagger\Client\Model\SmsForwardingParams',
        'pool_item' => 'object',
        'call_notifications' => '\Swagger\Client\Model\CallNotifications'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'route' => null,
        'name' => null,
        'block_incoming' => null,
        'block_anonymous' => null,
        'caller_id' => null,
        'sms_forwarding' => null,
        'pool_item' => null,
        'call_notifications' => null
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
        'route' => 'route',
        'name' => 'name',
        'block_incoming' => 'block_incoming',
        'block_anonymous' => 'block_anonymous',
        'caller_id' => 'caller_id',
        'sms_forwarding' => 'sms_forwarding',
        'pool_item' => 'pool_item',
        'call_notifications' => 'call_notifications'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'route' => 'setRoute',
        'name' => 'setName',
        'block_incoming' => 'setBlockIncoming',
        'block_anonymous' => 'setBlockAnonymous',
        'caller_id' => 'setCallerId',
        'sms_forwarding' => 'setSmsForwarding',
        'pool_item' => 'setPoolItem',
        'call_notifications' => 'setCallNotifications'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'route' => 'getRoute',
        'name' => 'getName',
        'block_incoming' => 'getBlockIncoming',
        'block_anonymous' => 'getBlockAnonymous',
        'caller_id' => 'getCallerId',
        'sms_forwarding' => 'getSmsForwarding',
        'pool_item' => 'getPoolItem',
        'call_notifications' => 'getCallNotifications'
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
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['block_incoming'] = isset($data['block_incoming']) ? $data['block_incoming'] : null;
        $this->container['block_anonymous'] = isset($data['block_anonymous']) ? $data['block_anonymous'] : null;
        $this->container['caller_id'] = isset($data['caller_id']) ? $data['caller_id'] : null;
        $this->container['sms_forwarding'] = isset($data['sms_forwarding']) ? $data['sms_forwarding'] : null;
        $this->container['pool_item'] = isset($data['pool_item']) ? $data['pool_item'] : null;
        $this->container['call_notifications'] = isset($data['call_notifications']) ? $data['call_notifications'] : null;
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
     * Gets route
     * @return object
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param object $route Route lookup object
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

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
     * @param string $name Phone Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets block_incoming
     * @return string
     */
    public function getBlockIncoming()
    {
        return $this->container['block_incoming'];
    }

    /**
     * Sets block_incoming
     * @param string $block_incoming Block incoming calls
     * @return $this
     */
    public function setBlockIncoming($block_incoming)
    {
        $this->container['block_incoming'] = $block_incoming;

        return $this;
    }

    /**
     * Gets block_anonymous
     * @return string
     */
    public function getBlockAnonymous()
    {
        return $this->container['block_anonymous'];
    }

    /**
     * Sets block_anonymous
     * @param string $block_anonymous Block anonymous calls
     * @return $this
     */
    public function setBlockAnonymous($block_anonymous)
    {
        $this->container['block_anonymous'] = $block_anonymous;

        return $this;
    }

    /**
     * Gets caller_id
     * @return \Swagger\Client\Model\CallerIdPhoneNumber
     */
    public function getCallerId()
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     * @param \Swagger\Client\Model\CallerIdPhoneNumber $caller_id
     * @return $this
     */
    public function setCallerId($caller_id)
    {
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets sms_forwarding
     * @return \Swagger\Client\Model\SmsForwardingParams
     */
    public function getSmsForwarding()
    {
        return $this->container['sms_forwarding'];
    }

    /**
     * Sets sms_forwarding
     * @param \Swagger\Client\Model\SmsForwardingParams $sms_forwarding
     * @return $this
     */
    public function setSmsForwarding($sms_forwarding)
    {
        $this->container['sms_forwarding'] = $sms_forwarding;

        return $this;
    }

    /**
     * Gets pool_item
     * @return object
     */
    public function getPoolItem()
    {
        return $this->container['pool_item'];
    }

    /**
     * Sets pool_item
     * @param object $pool_item Pool lookup object
     * @return $this
     */
    public function setPoolItem($pool_item)
    {
        $this->container['pool_item'] = $pool_item;

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
     * @param \Swagger\Client\Model\CallNotifications $call_notifications
     * @return $this
     */
    public function setCallNotifications($call_notifications)
    {
        $this->container['call_notifications'] = $call_notifications;

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


