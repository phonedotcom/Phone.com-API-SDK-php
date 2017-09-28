<?php
/**
 * RuleSetAction
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
 * RuleSetAction Class Doc Comment
 *
 * @category    Class
 * @description Filter Object. Optional. See below for details.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RuleSetAction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RuleSetAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'extension' => '\Swagger\Client\Model\ExtensionSummary',
        'items' => '\Swagger\Client\Model\RuleSetForwardItem[]',
        'timeout' => 'int',
        'hold_music' => '\Swagger\Client\Model\MediaSummary',
        'greeting' => '\Swagger\Client\Model\MediaSummary',
        'duration' => 'int',
        'menu' => '\Swagger\Client\Model\MenuSummary',
        'queue' => '\Swagger\Client\Model\QueueSummary',
        'trunk' => '\Swagger\Client\Model\TrunkSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'extension' => null,
        'items' => null,
        'timeout' => null,
        'hold_music' => null,
        'greeting' => null,
        'duration' => null,
        'menu' => null,
        'queue' => null,
        'trunk' => null
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
        'action' => 'action',
        'extension' => 'extension',
        'items' => 'items',
        'timeout' => 'timeout',
        'hold_music' => 'hold_music',
        'greeting' => 'greeting',
        'duration' => 'duration',
        'menu' => 'menu',
        'queue' => 'queue',
        'trunk' => 'trunk'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'extension' => 'setExtension',
        'items' => 'setItems',
        'timeout' => 'setTimeout',
        'hold_music' => 'setHoldMusic',
        'greeting' => 'setGreeting',
        'duration' => 'setDuration',
        'menu' => 'setMenu',
        'queue' => 'setQueue',
        'trunk' => 'setTrunk'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'extension' => 'getExtension',
        'items' => 'getItems',
        'timeout' => 'getTimeout',
        'hold_music' => 'getHoldMusic',
        'greeting' => 'getGreeting',
        'duration' => 'getDuration',
        'menu' => 'getMenu',
        'queue' => 'getQueue',
        'trunk' => 'getTrunk'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['hold_music'] = isset($data['hold_music']) ? $data['hold_music'] : null;
        $this->container['greeting'] = isset($data['greeting']) ? $data['greeting'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['menu'] = isset($data['menu']) ? $data['menu'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['trunk'] = isset($data['trunk']) ? $data['trunk'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['action']) && !preg_match("/directory|disconnect|fax|forward|greeting|hold|menu|queue|trunk|voicemail/", $this->container['action'])) {
            $invalid_properties[] = "invalid value for 'action', must be conform to the pattern /directory|disconnect|fax|forward|greeting|hold|menu|queue|trunk|voicemail/.";
        }

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

        if (!preg_match("/directory|disconnect|fax|forward|greeting|hold|menu|queue|trunk|voicemail/", $this->container['action'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action Required.
     * @return $this
     */
    public function setAction($action)
    {

        if (!is_null($action) && (!preg_match("/directory|disconnect|fax|forward|greeting|hold|menu|queue|trunk|voicemail/", $action))) {
            throw new \InvalidArgumentException("invalid value for $action when calling RuleSetAction., must conform to the pattern /directory|disconnect|fax|forward|greeting|hold|menu|queue|trunk|voicemail/.");
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets extension
     * @return \Swagger\Client\Model\ExtensionSummary
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param \Swagger\Client\Model\ExtensionSummary $extension Extension that this action refers to. Output is an Extension Summary Object. Input must be an Extension Lookup Object. Required.
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets items
     * @return \Swagger\Client\Model\RuleSetForwardItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\RuleSetForwardItem[] $items This action is for forwarding calls to any number of extensions or phone numbers. The forwarding is handled in parallel, meaning that all phone numbers and/or extensions will ring simultaneously. When the call is answered by any single phone number or extension, ringing will stop for all of them. Subsequent actions in this rule set will be performed if the call is not answered before the timeout period is reached, or if it is forwarded to an extension that has its own route and that route does not result in any actions that disconnect the call or take over call handling.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout Seconds that our routing engine should wait until moving on. Optional. Must be an integer between 5 and 90. Default is 5 seconds.
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets hold_music
     * @return \Swagger\Client\Model\MediaSummary
     */
    public function getHoldMusic()
    {
        return $this->container['hold_music'];
    }

    /**
     * Sets hold_music
     * @param \Swagger\Client\Model\MediaSummary $hold_music Hold Music to be played while callers are waiting. Output is a Media Summary Object. Input must be a Media Lookup Object. Optional. Must refer to a media recording that has is_hold_music set to TRUE. Default is to play a standard ring tone.
     * @return $this
     */
    public function setHoldMusic($hold_music)
    {
        $this->container['hold_music'] = $hold_music;

        return $this;
    }

    /**
     * Gets greeting
     * @return \Swagger\Client\Model\MediaSummary
     */
    public function getGreeting()
    {
        return $this->container['greeting'];
    }

    /**
     * Sets greeting
     * @param \Swagger\Client\Model\MediaSummary $greeting Greeting that this action refers to. Output is a Media Summary Object. Input must be a Media Lookup Object. Required. Must refer to a media recording that has is_hold_music set to FALSE.
     * @return $this
     */
    public function setGreeting($greeting)
    {
        $this->container['greeting'] = $greeting;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Required. Seconds that the caller should be placed on hold before being moved onto the next action. Must be an integer between 1 and 60 seconds.
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets menu
     * @return \Swagger\Client\Model\MenuSummary
     */
    public function getMenu()
    {
        return $this->container['menu'];
    }

    /**
     * Sets menu
     * @param \Swagger\Client\Model\MenuSummary $menu Menu that this action refers to. Required. Output is a Menu Summary Object. Input must be a Menu Lookup Object.
     * @return $this
     */
    public function setMenu($menu)
    {
        $this->container['menu'] = $menu;

        return $this;
    }

    /**
     * Gets queue
     * @return \Swagger\Client\Model\QueueSummary
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     * @param \Swagger\Client\Model\QueueSummary $queue Queue that this action refers to. Required. Output is a Queue Summary Object. Input must be a Queue Lookup Object.
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets trunk
     * @return \Swagger\Client\Model\TrunkSummary
     */
    public function getTrunk()
    {
        return $this->container['trunk'];
    }

    /**
     * Sets trunk
     * @param \Swagger\Client\Model\TrunkSummary $trunk Trunk that this action refers to. Required. Output is a Trunk Summary Object. Input must be a Trunk Lookup Object.
     * @return $this
     */
    public function setTrunk($trunk)
    {
        $this->container['trunk'] = $trunk;

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


