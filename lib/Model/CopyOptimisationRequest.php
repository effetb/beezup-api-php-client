<?php
/**
 * CopyOptimisationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * # The REST API of BeezUP system ## Overview The REST APIs provide programmatic access to read and write BeezUP data.  Basically, with this API you will be able to do everything like you were with your browser on https://go.beezup.com !  The main features are: - Register and manage your account - Create and manage and share your stores with your friends/co-workers. - Import your product catalog and schedule the auto importation - Search the channels your want to use - Configure your channels for your catalogs to export your product information:     - cost and general settings     - category and columns mappings     - your will be able to create and manage your custom column     - put in place exlusion filters based on simple conditions on your product data     - override product values     - get product vision for a channel catalog scope - Analyze and optimize your performance of your catalogs on all yours channels with different type of reportings by day, channel, category and by product. - Automatize your optimisation by using rules! - And of course... Manage your orders harvested from all your marketplaces:     - Synchronize your orders in an uniformized way     - Get the available actions and update the order status - ...and more!  ## Authentication credentials The public API with the base path **_/v2/public** have been put in place to give you an entry point to our system for the user registration, login and lost password. The public API does not require any credentials. We give you the some public list of values and public channels for our public commercial web site [www.beezup.com](http://www.beezup.com).  The user API with the base path **_/v2/user** requires a token which is available on this page: https://go.beezup.com/Account/MyAccount  ## Things to keep in mind ### API Rate Limits - The BeezUP REST API is limited to 100 calls/minute.  ### Media type The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.  ### Required content type The required and default encoding for the request and responses is UTF8.  ### Required date time format All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.  ### Base URL The Base URL of the BeezUP API Order Management REST API conforms to the following template.  https://api.beezup.com  All URLs returned by the BeezUP API are relative to this base URL, and all requests to the REST API must use this base URL template.  You can test our API on https://api-docs.beezup.com/swagger-ui\\ You can contact us on [gitter, #BeezUP/API](https://gitter.im/BeezUP/API)
 *
 * OpenAPI spec version: 2.0
 * Contact: help@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EffetB\BeezupApi\Model;

use \ArrayAccess;
use \EffetB\BeezupApi\ObjectSerializer;

/**
 * CopyOptimisationRequest Class Doc Comment
 *
 * @category Class
 * @description Copy the optimisation between 2 channels
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CopyOptimisationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'copyOptimisationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id_source' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelId',
        'channel_id_target' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelId',
        'keep_existing_optimisation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_id_source' => null,
        'channel_id_target' => null,
        'keep_existing_optimisation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
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
        'channel_id_source' => 'channelIdSource',
        'channel_id_target' => 'channelIdTarget',
        'keep_existing_optimisation' => 'keepExistingOptimisation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_id_source' => 'setChannelIdSource',
        'channel_id_target' => 'setChannelIdTarget',
        'keep_existing_optimisation' => 'setKeepExistingOptimisation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_id_source' => 'getChannelIdSource',
        'channel_id_target' => 'getChannelIdTarget',
        'keep_existing_optimisation' => 'getKeepExistingOptimisation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
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
        $this->container['channel_id_source'] = isset($data['channel_id_source']) ? $data['channel_id_source'] : null;
        $this->container['channel_id_target'] = isset($data['channel_id_target']) ? $data['channel_id_target'] : null;
        $this->container['keep_existing_optimisation'] = isset($data['keep_existing_optimisation']) ? $data['keep_existing_optimisation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_id_source'] === null) {
            $invalidProperties[] = "'channel_id_source' can't be null";
        }
        if ($this->container['channel_id_target'] === null) {
            $invalidProperties[] = "'channel_id_target' can't be null";
        }
        if ($this->container['keep_existing_optimisation'] === null) {
            $invalidProperties[] = "'keep_existing_optimisation' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['channel_id_source'] === null) {
            return false;
        }
        if ($this->container['channel_id_target'] === null) {
            return false;
        }
        if ($this->container['keep_existing_optimisation'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id_source
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelId
     */
    public function getChannelIdSource()
    {
        return $this->container['channel_id_source'];
    }

    /**
     * Sets channel_id_source
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelId $channel_id_source channel_id_source
     *
     * @return $this
     */
    public function setChannelIdSource($channel_id_source)
    {
        $this->container['channel_id_source'] = $channel_id_source;

        return $this;
    }

    /**
     * Gets channel_id_target
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelId
     */
    public function getChannelIdTarget()
    {
        return $this->container['channel_id_target'];
    }

    /**
     * Sets channel_id_target
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelId $channel_id_target channel_id_target
     *
     * @return $this
     */
    public function setChannelIdTarget($channel_id_target)
    {
        $this->container['channel_id_target'] = $channel_id_target;

        return $this;
    }

    /**
     * Gets keep_existing_optimisation
     *
     * @return bool
     */
    public function getKeepExistingOptimisation()
    {
        return $this->container['keep_existing_optimisation'];
    }

    /**
     * Sets keep_existing_optimisation
     *
     * @param bool $keep_existing_optimisation If true the existing optimisation will be kept
     *
     * @return $this
     */
    public function setKeepExistingOptimisation($keep_existing_optimisation)
    {
        $this->container['keep_existing_optimisation'] = $keep_existing_optimisation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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


