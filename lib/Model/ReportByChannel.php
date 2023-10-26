<?php
/**
 * ReportByChannel
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
 * ReportByChannel Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportByChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reportByChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelBasicInfo',
        'catalog_product_count' => 'int',
        'enabled_product_count' => 'int',
        'click_count' => 'int',
        'cost' => 'float',
        'order_count' => 'int',
        'roi' => 'float',
        'margin' => 'float',
        'performance_indicator' => 'float',
        'total_sales' => 'float',
        'sold_product_count' => 'int',
        'links' => '\EffetB\BeezupApi\Model\ReportByChannelLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel' => null,
        'catalog_product_count' => null,
        'enabled_product_count' => null,
        'click_count' => null,
        'cost' => null,
        'order_count' => null,
        'roi' => null,
        'margin' => null,
        'performance_indicator' => null,
        'total_sales' => null,
        'sold_product_count' => null,
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
        'channel' => 'channel',
        'catalog_product_count' => 'catalogProductCount',
        'enabled_product_count' => 'enabledProductCount',
        'click_count' => 'clickCount',
        'cost' => 'cost',
        'order_count' => 'orderCount',
        'roi' => 'roi',
        'margin' => 'margin',
        'performance_indicator' => 'performanceIndicator',
        'total_sales' => 'totalSales',
        'sold_product_count' => 'soldProductCount',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'catalog_product_count' => 'setCatalogProductCount',
        'enabled_product_count' => 'setEnabledProductCount',
        'click_count' => 'setClickCount',
        'cost' => 'setCost',
        'order_count' => 'setOrderCount',
        'roi' => 'setRoi',
        'margin' => 'setMargin',
        'performance_indicator' => 'setPerformanceIndicator',
        'total_sales' => 'setTotalSales',
        'sold_product_count' => 'setSoldProductCount',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'catalog_product_count' => 'getCatalogProductCount',
        'enabled_product_count' => 'getEnabledProductCount',
        'click_count' => 'getClickCount',
        'cost' => 'getCost',
        'order_count' => 'getOrderCount',
        'roi' => 'getRoi',
        'margin' => 'getMargin',
        'performance_indicator' => 'getPerformanceIndicator',
        'total_sales' => 'getTotalSales',
        'sold_product_count' => 'getSoldProductCount',
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['catalog_product_count'] = isset($data['catalog_product_count']) ? $data['catalog_product_count'] : null;
        $this->container['enabled_product_count'] = isset($data['enabled_product_count']) ? $data['enabled_product_count'] : null;
        $this->container['click_count'] = isset($data['click_count']) ? $data['click_count'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['roi'] = isset($data['roi']) ? $data['roi'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['performance_indicator'] = isset($data['performance_indicator']) ? $data['performance_indicator'] : null;
        $this->container['total_sales'] = isset($data['total_sales']) ? $data['total_sales'] : null;
        $this->container['sold_product_count'] = isset($data['sold_product_count']) ? $data['sold_product_count'] : null;
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['catalog_product_count'] === null) {
            $invalidProperties[] = "'catalog_product_count' can't be null";
        }
        if ($this->container['enabled_product_count'] === null) {
            $invalidProperties[] = "'enabled_product_count' can't be null";
        }
        if ($this->container['click_count'] === null) {
            $invalidProperties[] = "'click_count' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['performance_indicator'] === null) {
            $invalidProperties[] = "'performance_indicator' can't be null";
        }
        if ($this->container['total_sales'] === null) {
            $invalidProperties[] = "'total_sales' can't be null";
        }
        if ($this->container['sold_product_count'] === null) {
            $invalidProperties[] = "'sold_product_count' can't be null";
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

        if ($this->container['channel'] === null) {
            return false;
        }
        if ($this->container['catalog_product_count'] === null) {
            return false;
        }
        if ($this->container['enabled_product_count'] === null) {
            return false;
        }
        if ($this->container['click_count'] === null) {
            return false;
        }
        if ($this->container['cost'] === null) {
            return false;
        }
        if ($this->container['order_count'] === null) {
            return false;
        }
        if ($this->container['performance_indicator'] === null) {
            return false;
        }
        if ($this->container['total_sales'] === null) {
            return false;
        }
        if ($this->container['sold_product_count'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelBasicInfo
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelBasicInfo $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets catalog_product_count
     *
     * @return int
     */
    public function getCatalogProductCount()
    {
        return $this->container['catalog_product_count'];
    }

    /**
     * Sets catalog_product_count
     *
     * @param int $catalog_product_count The catalog product count
     *
     * @return $this
     */
    public function setCatalogProductCount($catalog_product_count)
    {
        $this->container['catalog_product_count'] = $catalog_product_count;

        return $this;
    }

    /**
     * Gets enabled_product_count
     *
     * @return int
     */
    public function getEnabledProductCount()
    {
        return $this->container['enabled_product_count'];
    }

    /**
     * Sets enabled_product_count
     *
     * @param int $enabled_product_count The enabled product count
     *
     * @return $this
     */
    public function setEnabledProductCount($enabled_product_count)
    {
        $this->container['enabled_product_count'] = $enabled_product_count;

        return $this;
    }

    /**
     * Gets click_count
     *
     * @return int
     */
    public function getClickCount()
    {
        return $this->container['click_count'];
    }

    /**
     * Sets click_count
     *
     * @param int $click_count The click count
     *
     * @return $this
     */
    public function setClickCount($click_count)
    {
        $this->container['click_count'] = $click_count;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost The cost for
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count The order count
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets roi
     *
     * @return float
     */
    public function getRoi()
    {
        return $this->container['roi'];
    }

    /**
     * Sets roi
     *
     * @param float $roi The Return On Investment
     *
     * @return $this
     */
    public function setRoi($roi)
    {
        $this->container['roi'] = $roi;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param float $margin The margin
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets performance_indicator
     *
     * @return float
     */
    public function getPerformanceIndicator()
    {
        return $this->container['performance_indicator'];
    }

    /**
     * Sets performance_indicator
     *
     * @param float $performance_indicator The performance indicator based on the performance indicator formula indicated in the request
     *
     * @return $this
     */
    public function setPerformanceIndicator($performance_indicator)
    {
        $this->container['performance_indicator'] = $performance_indicator;

        return $this;
    }

    /**
     * Gets total_sales
     *
     * @return float
     */
    public function getTotalSales()
    {
        return $this->container['total_sales'];
    }

    /**
     * Sets total_sales
     *
     * @param float $total_sales The total sales
     *
     * @return $this
     */
    public function setTotalSales($total_sales)
    {
        $this->container['total_sales'] = $total_sales;

        return $this;
    }

    /**
     * Gets sold_product_count
     *
     * @return int
     */
    public function getSoldProductCount()
    {
        return $this->container['sold_product_count'];
    }

    /**
     * Sets sold_product_count
     *
     * @param int $sold_product_count The product sold count count
     *
     * @return $this
     */
    public function setSoldProductCount($sold_product_count)
    {
        $this->container['sold_product_count'] = $sold_product_count;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\ReportByChannelLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\ReportByChannelLinks $links links
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


