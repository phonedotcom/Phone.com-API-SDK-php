<?php
/**
 * CreateSubaccountParams
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
 * CreateSubaccountParams Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateSubaccountParams implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateSubaccountParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
        'password' => 'string',
        'contact' => '\Swagger\Client\Model\ContactResponse',
        'billing_contact' => '\Swagger\Client\Model\ContactResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
        'password' => null,
        'contact' => null,
        'billing_contact' => null
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
        'username' => 'username',
        'password' => 'password',
        'contact' => 'contact',
        'billing_contact' => 'billing_contact'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'password' => 'setPassword',
        'contact' => 'setContact',
        'billing_contact' => 'setBillingContact'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'password' => 'getPassword',
        'contact' => 'getContact',
        'billing_contact' => 'getBillingContact'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['billing_contact'] = isset($data['billing_contact']) ? $data['billing_contact'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalid_properties[] = "'password' can't be null";
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

        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['password'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Sub account password
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password Sub account password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets contact
     * @return \Swagger\Client\Model\ContactResponse
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Swagger\Client\Model\ContactResponse $contact Contact Object. See below for details.
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets billing_contact
     * @return \Swagger\Client\Model\ContactResponse
     */
    public function getBillingContact()
    {
        return $this->container['billing_contact'];
    }

    /**
     * Sets billing_contact
     * @param \Swagger\Client\Model\ContactResponse $billing_contact Contact Object for billing purposes. See below for details.
     * @return $this
     */
    public function setBillingContact($billing_contact)
    {
        $this->container['billing_contact'] = $billing_contact;

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


