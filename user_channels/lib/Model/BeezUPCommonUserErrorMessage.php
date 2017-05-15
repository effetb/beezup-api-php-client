<?php
/**
 * BeezUPCommonUserErrorMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics
 *
 * This API will help you to manage the tracking of your clicks and your sales, get reporting on this trackings and put in place rules based on this reporting to automatically optimize your channel catalogs. \\ Also, you will be able to consult the rule execution reporting.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
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
 * BeezUPCommonUserErrorMessage Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonUserErrorMessage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.UserErrorMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'doc_url' => '\Swagger\Client\Model\BeezUPCommonDocUrl',
        'code' => 'string',
        'message' => 'string',
        'culture_name' => 'string',
        'arguments' => '\Swagger\Client\Model\BeezUPCommonUserErrorMessageArguments[]'
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
        'doc_url' => 'docUrl',
        'code' => 'code',
        'message' => 'message',
        'culture_name' => 'cultureName',
        'arguments' => 'arguments'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'doc_url' => 'setDocUrl',
        'code' => 'setCode',
        'message' => 'setMessage',
        'culture_name' => 'setCultureName',
        'arguments' => 'setArguments'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'doc_url' => 'getDocUrl',
        'code' => 'getCode',
        'message' => 'getMessage',
        'culture_name' => 'getCultureName',
        'arguments' => 'getArguments'
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
        $this->container['doc_url'] = isset($data['doc_url']) ? $data['doc_url'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['culture_name'] = isset($data['culture_name']) ? $data['culture_name'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets doc_url
     * @return \Swagger\Client\Model\BeezUPCommonDocUrl
     */
    public function getDocUrl()
    {
        return $this->container['doc_url'];
    }

    /**
     * Sets doc_url
     * @param \Swagger\Client\Model\BeezUPCommonDocUrl $doc_url
     * @return $this
     */
    public function setDocUrl($doc_url)
    {
        $this->container['doc_url'] = $doc_url;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code the error code. The error code can be a pattern containing the argument's name
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The error message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets culture_name
     * @return string
     */
    public function getCultureName()
    {
        return $this->container['culture_name'];
    }

    /**
     * Sets culture_name
     * @param string $culture_name If the error is translated, the culture name will be indicated
     * @return $this
     */
    public function setCultureName($culture_name)
    {
        $this->container['culture_name'] = $culture_name;

        return $this;
    }

    /**
     * Gets arguments
     * @return \Swagger\Client\Model\BeezUPCommonUserErrorMessageArguments[]
     */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
     * Sets arguments
     * @param \Swagger\Client\Model\BeezUPCommonUserErrorMessageArguments[] $arguments a dictionary string/object
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;

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


