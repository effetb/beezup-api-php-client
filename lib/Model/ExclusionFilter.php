<?php
/**
 * ExclusionFilter
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
 * ExclusionFilter Class Doc Comment
 *
 * @category Class
 * @description The exclusion filter
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExclusionFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'exclusionFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\EffetB\BeezupApi\Model\ExclusionFilterName',
        'position' => 'int',
        'group_id' => 'string',
        'position_in_group' => 'int',
        'channel_column_id' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId',
        'operator_name' => '\EffetB\BeezupApi\Model\ExclusionFilterOperatorName',
        'value' => 'string',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'position' => 'int32',
        'group_id' => 'guid',
        'position_in_group' => 'int32',
        'channel_column_id' => null,
        'operator_name' => null,
        'value' => null,
        'enabled' => null
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
        'name' => 'name',
        'position' => 'position',
        'group_id' => 'groupId',
        'position_in_group' => 'positionInGroup',
        'channel_column_id' => 'channelColumnId',
        'operator_name' => 'operatorName',
        'value' => 'value',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'position' => 'setPosition',
        'group_id' => 'setGroupId',
        'position_in_group' => 'setPositionInGroup',
        'channel_column_id' => 'setChannelColumnId',
        'operator_name' => 'setOperatorName',
        'value' => 'setValue',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'position' => 'getPosition',
        'group_id' => 'getGroupId',
        'position_in_group' => 'getPositionInGroup',
        'channel_column_id' => 'getChannelColumnId',
        'operator_name' => 'getOperatorName',
        'value' => 'getValue',
        'enabled' => 'getEnabled'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['position_in_group'] = isset($data['position_in_group']) ? $data['position_in_group'] : null;
        $this->container['channel_column_id'] = isset($data['channel_column_id']) ? $data['channel_column_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if (($this->container['position'] < 1)) {
            $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
        }

        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['position_in_group'] === null) {
            $invalidProperties[] = "'position_in_group' can't be null";
        }
        if (($this->container['position_in_group'] < 1)) {
            $invalidProperties[] = "invalid value for 'position_in_group', must be bigger than or equal to 1.";
        }

        if ($this->container['channel_column_id'] === null) {
            $invalidProperties[] = "'channel_column_id' can't be null";
        }
        if ($this->container['operator_name'] === null) {
            $invalidProperties[] = "'operator_name' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['position'] < 1) {
            return false;
        }
        if ($this->container['group_id'] === null) {
            return false;
        }
        if ($this->container['position_in_group'] === null) {
            return false;
        }
        if ($this->container['position_in_group'] < 1) {
            return false;
        }
        if ($this->container['channel_column_id'] === null) {
            return false;
        }
        if ($this->container['operator_name'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return \EffetB\BeezupApi\Model\ExclusionFilterName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \EffetB\BeezupApi\Model\ExclusionFilterName $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position The position of the exclusion filter
     *
     * @return $this
     */
    public function setPosition($position)
    {

        if (($position < 1)) {
            throw new \InvalidArgumentException('invalid value for $position when calling ExclusionFilter., must be bigger than or equal to 1.');
        }

        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id Indicate the filter's group. All filters in the same group means an \"AND\" operation in the filter group
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets position_in_group
     *
     * @return int
     */
    public function getPositionInGroup()
    {
        return $this->container['position_in_group'];
    }

    /**
     * Sets position_in_group
     *
     * @param int $position_in_group Indicate the filter group position. This information is used for the UI purpose and must be unique in the filter group.
     *
     * @return $this
     */
    public function setPositionInGroup($position_in_group)
    {

        if (($position_in_group < 1)) {
            throw new \InvalidArgumentException('invalid value for $position_in_group when calling ExclusionFilter., must be bigger than or equal to 1.');
        }

        $this->container['position_in_group'] = $position_in_group;

        return $this;
    }

    /**
     * Gets channel_column_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId
     */
    public function getChannelColumnId()
    {
        return $this->container['channel_column_id'];
    }

    /**
     * Sets channel_column_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelColumnId $channel_column_id channel_column_id
     *
     * @return $this
     */
    public function setChannelColumnId($channel_column_id)
    {
        $this->container['channel_column_id'] = $channel_column_id;

        return $this;
    }

    /**
     * Gets operator_name
     *
     * @return \EffetB\BeezupApi\Model\ExclusionFilterOperatorName
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     *
     * @param \EffetB\BeezupApi\Model\ExclusionFilterOperatorName $operator_name operator_name
     *
     * @return $this
     */
    public function setOperatorName($operator_name)
    {
        $this->container['operator_name'] = $operator_name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The value indicate by the user when the filter operation requires it.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled indicates if the filter is currently enable.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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


