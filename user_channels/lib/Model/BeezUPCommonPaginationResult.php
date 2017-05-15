<?php
/**
 * BeezUPCommonPaginationResult
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
 * BeezUPCommonPaginationResult Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonPaginationResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.PaginationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entry_count' => 'int',
        'page_count' => 'int',
        'total_entry_count' => 'int',
        'links' => '\Swagger\Client\Model\BeezUPCommonPaginationResultLinks'
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
        'entry_count' => 'entryCount',
        'page_count' => 'pageCount',
        'total_entry_count' => 'totalEntryCount',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'entry_count' => 'setEntryCount',
        'page_count' => 'setPageCount',
        'total_entry_count' => 'setTotalEntryCount',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'entry_count' => 'getEntryCount',
        'page_count' => 'getPageCount',
        'total_entry_count' => 'getTotalEntryCount',
        'links' => 'getLinks'
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
        $this->container['entry_count'] = isset($data['entry_count']) ? $data['entry_count'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['total_entry_count'] = isset($data['total_entry_count']) ? $data['total_entry_count'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['entry_count'] === null) {
            $invalid_properties[] = "'entry_count' can't be null";
        }
        if (($this->container['entry_count'] < 0)) {
            $invalid_properties[] = "invalid value for 'entry_count', must be bigger than or equal to 0.";
        }

        if ($this->container['page_count'] === null) {
            $invalid_properties[] = "'page_count' can't be null";
        }
        if (($this->container['page_count'] < 0)) {
            $invalid_properties[] = "invalid value for 'page_count', must be bigger than or equal to 0.";
        }

        if ($this->container['total_entry_count'] === null) {
            $invalid_properties[] = "'total_entry_count' can't be null";
        }
        if (($this->container['total_entry_count'] < 0)) {
            $invalid_properties[] = "invalid value for 'total_entry_count', must be bigger than or equal to 0.";
        }

        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
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

        if ($this->container['entry_count'] === null) {
            return false;
        }
        if ($this->container['entry_count'] < 0) {
            return false;
        }
        if ($this->container['page_count'] === null) {
            return false;
        }
        if ($this->container['page_count'] < 0) {
            return false;
        }
        if ($this->container['total_entry_count'] === null) {
            return false;
        }
        if ($this->container['total_entry_count'] < 0) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets entry_count
     * @return int
     */
    public function getEntryCount()
    {
        return $this->container['entry_count'];
    }

    /**
     * Sets entry_count
     * @param int $entry_count The entry count currently returned
     * @return $this
     */
    public function setEntryCount($entry_count)
    {

        if (($entry_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $entry_count when calling BeezUPCommonPaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['entry_count'] = $entry_count;

        return $this;
    }

    /**
     * Gets page_count
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     * @param int $page_count The page count
     * @return $this
     */
    public function setPageCount($page_count)
    {

        if (($page_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $page_count when calling BeezUPCommonPaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets total_entry_count
     * @return int
     */
    public function getTotalEntryCount()
    {
        return $this->container['total_entry_count'];
    }

    /**
     * Sets total_entry_count
     * @param int $total_entry_count The total entry count
     * @return $this
     */
    public function setTotalEntryCount($total_entry_count)
    {

        if (($total_entry_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_entry_count when calling BeezUPCommonPaginationResult., must be bigger than or equal to 0.');
        }

        $this->container['total_entry_count'] = $total_entry_count;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\BeezUPCommonPaginationResultLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\BeezUPCommonPaginationResultLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


