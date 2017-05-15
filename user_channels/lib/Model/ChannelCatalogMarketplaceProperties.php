<?php
/**
 * ChannelCatalogMarketplaceProperties
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
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
 * ChannelCatalogMarketplaceProperties Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogMarketplaceProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogMarketplaceProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'info' => '\Swagger\Client\Model\BeezUPCommonInfoSummaries',
        'links' => '\Swagger\Client\Model\ChannelCatalogMarketplacePropertiesLinks',
        'property_groups' => '\Swagger\Client\Model\ChannelCatalogMarketplacePropertyGroup[]'
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
        'info' => 'info',
        'links' => 'links',
        'property_groups' => 'propertyGroups'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'info' => 'setInfo',
        'links' => 'setLinks',
        'property_groups' => 'setPropertyGroups'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'info' => 'getInfo',
        'links' => 'getLinks',
        'property_groups' => 'getPropertyGroups'
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
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['property_groups'] = isset($data['property_groups']) ? $data['property_groups'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
        }
        if ($this->container['property_groups'] === null) {
            $invalid_properties[] = "'property_groups' can't be null";
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

        if ($this->container['links'] === null) {
            return false;
        }
        if ($this->container['property_groups'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets info
     * @return \Swagger\Client\Model\BeezUPCommonInfoSummaries
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Swagger\Client\Model\BeezUPCommonInfoSummaries $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\ChannelCatalogMarketplacePropertiesLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\ChannelCatalogMarketplacePropertiesLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets property_groups
     * @return \Swagger\Client\Model\ChannelCatalogMarketplacePropertyGroup[]
     */
    public function getPropertyGroups()
    {
        return $this->container['property_groups'];
    }

    /**
     * Sets property_groups
     * @param \Swagger\Client\Model\ChannelCatalogMarketplacePropertyGroup[] $property_groups The groups settings with constraints
     * @return $this
     */
    public function setPropertyGroups($property_groups)
    {
        $this->container['property_groups'] = $property_groups;

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


