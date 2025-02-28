<?php
/**
 * InputFileFetchConfiguration
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
 * InputFileFetchConfiguration Class Doc Comment
 *
 * @category Class
 * @description Describe the way to download the file
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputFileFetchConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inputFileFetchConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uri' => 'string',
        'credential' => '\EffetB\BeezupApi\Model\Credential',
        'download_catalog_strategy' => '\EffetB\BeezupApi\Model\DownloadCatalogStrategy',
        'compression_format_strategy' => '\EffetB\BeezupApi\Model\CompressionFormatStrategy',
        'compressed_relative_path' => 'string',
        'download_timeout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uri' => null,
        'credential' => null,
        'download_catalog_strategy' => null,
        'compression_format_strategy' => null,
        'compressed_relative_path' => null,
        'download_timeout' => 'int32'
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
        'uri' => 'uri',
        'credential' => 'credential',
        'download_catalog_strategy' => 'downloadCatalogStrategy',
        'compression_format_strategy' => 'compressionFormatStrategy',
        'compressed_relative_path' => 'compressedRelativePath',
        'download_timeout' => 'downloadTimeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'credential' => 'setCredential',
        'download_catalog_strategy' => 'setDownloadCatalogStrategy',
        'compression_format_strategy' => 'setCompressionFormatStrategy',
        'compressed_relative_path' => 'setCompressedRelativePath',
        'download_timeout' => 'setDownloadTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'credential' => 'getCredential',
        'download_catalog_strategy' => 'getDownloadCatalogStrategy',
        'compression_format_strategy' => 'getCompressionFormatStrategy',
        'compressed_relative_path' => 'getCompressedRelativePath',
        'download_timeout' => 'getDownloadTimeout'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['download_catalog_strategy'] = isset($data['download_catalog_strategy']) ? $data['download_catalog_strategy'] : null;
        $this->container['compression_format_strategy'] = isset($data['compression_format_strategy']) ? $data['compression_format_strategy'] : null;
        $this->container['compressed_relative_path'] = isset($data['compressed_relative_path']) ? $data['compressed_relative_path'] : null;
        $this->container['download_timeout'] = isset($data['download_timeout']) ? $data['download_timeout'] : 30;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['download_catalog_strategy'] === null) {
            $invalidProperties[] = "'download_catalog_strategy' can't be null";
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

        if ($this->container['uri'] === null) {
            return false;
        }
        if ($this->container['download_catalog_strategy'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri Indicate the Uri of the file. (http, https, ftp, ftps, sftp are allowed)
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets credential
     *
     * @return \EffetB\BeezupApi\Model\Credential
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     *
     * @param \EffetB\BeezupApi\Model\Credential $credential credential
     *
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

        return $this;
    }

    /**
     * Gets download_catalog_strategy
     *
     * @return \EffetB\BeezupApi\Model\DownloadCatalogStrategy
     */
    public function getDownloadCatalogStrategy()
    {
        return $this->container['download_catalog_strategy'];
    }

    /**
     * Sets download_catalog_strategy
     *
     * @param \EffetB\BeezupApi\Model\DownloadCatalogStrategy $download_catalog_strategy download_catalog_strategy
     *
     * @return $this
     */
    public function setDownloadCatalogStrategy($download_catalog_strategy)
    {
        $this->container['download_catalog_strategy'] = $download_catalog_strategy;

        return $this;
    }

    /**
     * Gets compression_format_strategy
     *
     * @return \EffetB\BeezupApi\Model\CompressionFormatStrategy
     */
    public function getCompressionFormatStrategy()
    {
        return $this->container['compression_format_strategy'];
    }

    /**
     * Sets compression_format_strategy
     *
     * @param \EffetB\BeezupApi\Model\CompressionFormatStrategy $compression_format_strategy compression_format_strategy
     *
     * @return $this
     */
    public function setCompressionFormatStrategy($compression_format_strategy)
    {
        $this->container['compression_format_strategy'] = $compression_format_strategy;

        return $this;
    }

    /**
     * Gets compressed_relative_path
     *
     * @return string
     */
    public function getCompressedRelativePath()
    {
        return $this->container['compressed_relative_path'];
    }

    /**
     * Sets compressed_relative_path
     *
     * @param string $compressed_relative_path Indicate the relative path in the compressed file
     *
     * @return $this
     */
    public function setCompressedRelativePath($compressed_relative_path)
    {
        $this->container['compressed_relative_path'] = $compressed_relative_path;

        return $this;
    }

    /**
     * Gets download_timeout
     *
     * @return int
     */
    public function getDownloadTimeout()
    {
        return $this->container['download_timeout'];
    }

    /**
     * Sets download_timeout
     *
     * @param int $download_timeout Indicate the download time out in second
     *
     * @return $this
     */
    public function setDownloadTimeout($download_timeout)
    {
        $this->container['download_timeout'] = $download_timeout;

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


