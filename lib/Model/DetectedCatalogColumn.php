<?php
/**
 * DetectedCatalogColumn
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
 * DetectedCatalogColumn Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetectedCatalogColumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'detectedCatalogColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignored' => 'bool',
        'duplicate_product_value_configuration' => '\EffetB\BeezupApi\Model\DuplicateProductValueConfiguration',
        'id' => '\EffetB\BeezupApi\Model\ColumnId',
        'catalog_column_name' => '\EffetB\BeezupApi\Model\CatalogColumnName',
        'user_colum_name' => '\EffetB\BeezupApi\Model\UserColumName',
        'configuration' => '\EffetB\BeezupApi\Model\ColumnConfiguration',
        'links' => '\EffetB\BeezupApi\Model\DetectedCatalogColumnLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignored' => null,
        'duplicate_product_value_configuration' => null,
        'id' => null,
        'catalog_column_name' => null,
        'user_colum_name' => null,
        'configuration' => null,
        'links' => null
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
        'ignored' => 'ignored',
        'duplicate_product_value_configuration' => 'duplicateProductValueConfiguration',
        'id' => 'id',
        'catalog_column_name' => 'catalogColumnName',
        'user_colum_name' => 'userColumName',
        'configuration' => 'configuration',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignored' => 'setIgnored',
        'duplicate_product_value_configuration' => 'setDuplicateProductValueConfiguration',
        'id' => 'setId',
        'catalog_column_name' => 'setCatalogColumnName',
        'user_colum_name' => 'setUserColumName',
        'configuration' => 'setConfiguration',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignored' => 'getIgnored',
        'duplicate_product_value_configuration' => 'getDuplicateProductValueConfiguration',
        'id' => 'getId',
        'catalog_column_name' => 'getCatalogColumnName',
        'user_colum_name' => 'getUserColumName',
        'configuration' => 'getConfiguration',
        'links' => 'getLinks'
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
        $this->container['ignored'] = isset($data['ignored']) ? $data['ignored'] : false;
        $this->container['duplicate_product_value_configuration'] = isset($data['duplicate_product_value_configuration']) ? $data['duplicate_product_value_configuration'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['catalog_column_name'] = isset($data['catalog_column_name']) ? $data['catalog_column_name'] : null;
        $this->container['user_colum_name'] = isset($data['user_colum_name']) ? $data['user_colum_name'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['catalog_column_name'] === null) {
            $invalidProperties[] = "'catalog_column_name' can't be null";
        }
        if ($this->container['user_colum_name'] === null) {
            $invalidProperties[] = "'user_colum_name' can't be null";
        }
        if ($this->container['configuration'] === null) {
            $invalidProperties[] = "'configuration' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['catalog_column_name'] === null) {
            return false;
        }
        if ($this->container['user_colum_name'] === null) {
            return false;
        }
        if ($this->container['configuration'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ignored
     *
     * @return bool
     */
    public function getIgnored()
    {
        return $this->container['ignored'];
    }

    /**
     * Sets ignored
     *
     * @param bool $ignored IF true, the product values of this column will be not taken in account during the importation process
     *
     * @return $this
     */
    public function setIgnored($ignored)
    {
        $this->container['ignored'] = $ignored;

        return $this;
    }

    /**
     * Gets duplicate_product_value_configuration
     *
     * @return \EffetB\BeezupApi\Model\DuplicateProductValueConfiguration
     */
    public function getDuplicateProductValueConfiguration()
    {
        return $this->container['duplicate_product_value_configuration'];
    }

    /**
     * Sets duplicate_product_value_configuration
     *
     * @param \EffetB\BeezupApi\Model\DuplicateProductValueConfiguration $duplicate_product_value_configuration duplicate_product_value_configuration
     *
     * @return $this
     */
    public function setDuplicateProductValueConfiguration($duplicate_product_value_configuration)
    {
        $this->container['duplicate_product_value_configuration'] = $duplicate_product_value_configuration;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \EffetB\BeezupApi\Model\ColumnId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \EffetB\BeezupApi\Model\ColumnId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets catalog_column_name
     *
     * @return \EffetB\BeezupApi\Model\CatalogColumnName
     */
    public function getCatalogColumnName()
    {
        return $this->container['catalog_column_name'];
    }

    /**
     * Sets catalog_column_name
     *
     * @param \EffetB\BeezupApi\Model\CatalogColumnName $catalog_column_name catalog_column_name
     *
     * @return $this
     */
    public function setCatalogColumnName($catalog_column_name)
    {
        $this->container['catalog_column_name'] = $catalog_column_name;

        return $this;
    }

    /**
     * Gets user_colum_name
     *
     * @return \EffetB\BeezupApi\Model\UserColumName
     */
    public function getUserColumName()
    {
        return $this->container['user_colum_name'];
    }

    /**
     * Sets user_colum_name
     *
     * @param \EffetB\BeezupApi\Model\UserColumName $user_colum_name user_colum_name
     *
     * @return $this
     */
    public function setUserColumName($user_colum_name)
    {
        $this->container['user_colum_name'] = $user_colum_name;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \EffetB\BeezupApi\Model\ColumnConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \EffetB\BeezupApi\Model\ColumnConfiguration $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\DetectedCatalogColumnLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\DetectedCatalogColumnLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


