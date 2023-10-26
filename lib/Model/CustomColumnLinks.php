<?php
/**
 * CustomColumnLinks
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
 * CustomColumnLinks Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomColumnLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customColumnLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'save' => '\EffetB\BeezupApi\Model\LinksCatalogSaveCustomColumnLink',
        'delete' => '\EffetB\BeezupApi\Model\LinksCatalogDeleteCustomColumnLink',
        'rename' => '\EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnUserNameLink',
        'expression' => '\EffetB\BeezupApi\Model\LinksCatalogGetCustomColumnExpressionLink',
        'save_expression' => '\EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnExpressionLink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'save' => null,
        'delete' => null,
        'rename' => null,
        'expression' => null,
        'save_expression' => null
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
        'save' => 'save',
        'delete' => 'delete',
        'rename' => 'rename',
        'expression' => 'expression',
        'save_expression' => 'saveExpression'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'save' => 'setSave',
        'delete' => 'setDelete',
        'rename' => 'setRename',
        'expression' => 'setExpression',
        'save_expression' => 'setSaveExpression'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'save' => 'getSave',
        'delete' => 'getDelete',
        'rename' => 'getRename',
        'expression' => 'getExpression',
        'save_expression' => 'getSaveExpression'
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
        $this->container['save'] = isset($data['save']) ? $data['save'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['rename'] = isset($data['rename']) ? $data['rename'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['save_expression'] = isset($data['save_expression']) ? $data['save_expression'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['save'] === null) {
            $invalidProperties[] = "'save' can't be null";
        }
        if ($this->container['delete'] === null) {
            $invalidProperties[] = "'delete' can't be null";
        }
        if ($this->container['rename'] === null) {
            $invalidProperties[] = "'rename' can't be null";
        }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
        if ($this->container['save_expression'] === null) {
            $invalidProperties[] = "'save_expression' can't be null";
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

        if ($this->container['save'] === null) {
            return false;
        }
        if ($this->container['delete'] === null) {
            return false;
        }
        if ($this->container['rename'] === null) {
            return false;
        }
        if ($this->container['expression'] === null) {
            return false;
        }
        if ($this->container['save_expression'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets save
     *
     * @return \EffetB\BeezupApi\Model\LinksCatalogSaveCustomColumnLink
     */
    public function getSave()
    {
        return $this->container['save'];
    }

    /**
     * Sets save
     *
     * @param \EffetB\BeezupApi\Model\LinksCatalogSaveCustomColumnLink $save save
     *
     * @return $this
     */
    public function setSave($save)
    {
        $this->container['save'] = $save;

        return $this;
    }

    /**
     * Gets delete
     *
     * @return \EffetB\BeezupApi\Model\LinksCatalogDeleteCustomColumnLink
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param \EffetB\BeezupApi\Model\LinksCatalogDeleteCustomColumnLink $delete delete
     *
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets rename
     *
     * @return \EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnUserNameLink
     */
    public function getRename()
    {
        return $this->container['rename'];
    }

    /**
     * Sets rename
     *
     * @param \EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnUserNameLink $rename rename
     *
     * @return $this
     */
    public function setRename($rename)
    {
        $this->container['rename'] = $rename;

        return $this;
    }

    /**
     * Gets expression
     *
     * @return \EffetB\BeezupApi\Model\LinksCatalogGetCustomColumnExpressionLink
     */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
     * Sets expression
     *
     * @param \EffetB\BeezupApi\Model\LinksCatalogGetCustomColumnExpressionLink $expression expression
     *
     * @return $this
     */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;

        return $this;
    }

    /**
     * Gets save_expression
     *
     * @return \EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnExpressionLink
     */
    public function getSaveExpression()
    {
        return $this->container['save_expression'];
    }

    /**
     * Sets save_expression
     *
     * @param \EffetB\BeezupApi\Model\LinksCatalogChangeCustomColumnExpressionLink $save_expression save_expression
     *
     * @return $this
     */
    public function setSaveExpression($save_expression)
    {
        $this->container['save_expression'] = $save_expression;

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


