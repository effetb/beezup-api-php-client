<?php
/**
 * ChannelCatalog
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
 * ChannelCatalog Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelId',
        'channel_name' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelName',
        'channel_image_url' => '\EffetB\BeezupApi\Model\BeezUPCommonHttpUrl',
        'product_count' => 'int',
        'enabled' => 'bool',
        'is_marketplace' => 'bool',
        'channel_catalog_id' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId',
        'store_id' => '\EffetB\BeezupApi\Model\BeezUPCommonStoreId',
        'general_settings' => '\EffetB\BeezupApi\Model\GeneralSettings',
        'channel_cost_settings' => '\EffetB\BeezupApi\Model\ChannelCostSettings',
        'channel_category_settings' => '\EffetB\BeezupApi\Model\ChannelCategorySettings',
        'cost_settings' => '\EffetB\BeezupApi\Model\CostSettings',
        'category_mapping_settings' => '\EffetB\BeezupApi\Model\ChannelCatalogCategoryMappingSettings',
        'column_mappings' => '\EffetB\BeezupApi\Model\ChannelCatalogColumnMappingListWithName',
        'exclusion_filters' => '\EffetB\BeezupApi\Model\ExclusionFilters',
        'export_url' => '\EffetB\BeezupApi\Model\BeezUPCommonHttpUrl',
        'state' => '\EffetB\BeezupApi\Model\ChannelCatalogState',
        'types' => 'string[]',
        'links' => '\EffetB\BeezupApi\Model\ChannelCatalogLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_id' => null,
        'channel_name' => null,
        'channel_image_url' => null,
        'product_count' => 'int32',
        'enabled' => null,
        'is_marketplace' => null,
        'channel_catalog_id' => null,
        'store_id' => null,
        'general_settings' => null,
        'channel_cost_settings' => null,
        'channel_category_settings' => null,
        'cost_settings' => null,
        'category_mapping_settings' => null,
        'column_mappings' => null,
        'exclusion_filters' => null,
        'export_url' => null,
        'state' => null,
        'types' => null,
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
        'channel_id' => 'channelId',
        'channel_name' => 'channelName',
        'channel_image_url' => 'channelImageUrl',
        'product_count' => 'productCount',
        'enabled' => 'enabled',
        'is_marketplace' => 'isMarketplace',
        'channel_catalog_id' => 'channelCatalogId',
        'store_id' => 'storeId',
        'general_settings' => 'generalSettings',
        'channel_cost_settings' => 'channelCostSettings',
        'channel_category_settings' => 'channelCategorySettings',
        'cost_settings' => 'costSettings',
        'category_mapping_settings' => 'categoryMappingSettings',
        'column_mappings' => 'columnMappings',
        'exclusion_filters' => 'exclusionFilters',
        'export_url' => 'exportUrl',
        'state' => 'state',
        'types' => 'types',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'channel_name' => 'setChannelName',
        'channel_image_url' => 'setChannelImageUrl',
        'product_count' => 'setProductCount',
        'enabled' => 'setEnabled',
        'is_marketplace' => 'setIsMarketplace',
        'channel_catalog_id' => 'setChannelCatalogId',
        'store_id' => 'setStoreId',
        'general_settings' => 'setGeneralSettings',
        'channel_cost_settings' => 'setChannelCostSettings',
        'channel_category_settings' => 'setChannelCategorySettings',
        'cost_settings' => 'setCostSettings',
        'category_mapping_settings' => 'setCategoryMappingSettings',
        'column_mappings' => 'setColumnMappings',
        'exclusion_filters' => 'setExclusionFilters',
        'export_url' => 'setExportUrl',
        'state' => 'setState',
        'types' => 'setTypes',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'channel_name' => 'getChannelName',
        'channel_image_url' => 'getChannelImageUrl',
        'product_count' => 'getProductCount',
        'enabled' => 'getEnabled',
        'is_marketplace' => 'getIsMarketplace',
        'channel_catalog_id' => 'getChannelCatalogId',
        'store_id' => 'getStoreId',
        'general_settings' => 'getGeneralSettings',
        'channel_cost_settings' => 'getChannelCostSettings',
        'channel_category_settings' => 'getChannelCategorySettings',
        'cost_settings' => 'getCostSettings',
        'category_mapping_settings' => 'getCategoryMappingSettings',
        'column_mappings' => 'getColumnMappings',
        'exclusion_filters' => 'getExclusionFilters',
        'export_url' => 'getExportUrl',
        'state' => 'getState',
        'types' => 'getTypes',
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['channel_name'] = isset($data['channel_name']) ? $data['channel_name'] : null;
        $this->container['channel_image_url'] = isset($data['channel_image_url']) ? $data['channel_image_url'] : null;
        $this->container['product_count'] = isset($data['product_count']) ? $data['product_count'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['is_marketplace'] = isset($data['is_marketplace']) ? $data['is_marketplace'] : null;
        $this->container['channel_catalog_id'] = isset($data['channel_catalog_id']) ? $data['channel_catalog_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['general_settings'] = isset($data['general_settings']) ? $data['general_settings'] : null;
        $this->container['channel_cost_settings'] = isset($data['channel_cost_settings']) ? $data['channel_cost_settings'] : null;
        $this->container['channel_category_settings'] = isset($data['channel_category_settings']) ? $data['channel_category_settings'] : null;
        $this->container['cost_settings'] = isset($data['cost_settings']) ? $data['cost_settings'] : null;
        $this->container['category_mapping_settings'] = isset($data['category_mapping_settings']) ? $data['category_mapping_settings'] : null;
        $this->container['column_mappings'] = isset($data['column_mappings']) ? $data['column_mappings'] : null;
        $this->container['exclusion_filters'] = isset($data['exclusion_filters']) ? $data['exclusion_filters'] : null;
        $this->container['export_url'] = isset($data['export_url']) ? $data['export_url'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
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

        if ($this->container['channel_id'] === null) {
            $invalidProperties[] = "'channel_id' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalidProperties[] = "'channel_name' can't be null";
        }
        if ($this->container['channel_image_url'] === null) {
            $invalidProperties[] = "'channel_image_url' can't be null";
        }
        if ($this->container['product_count'] === null) {
            $invalidProperties[] = "'product_count' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['is_marketplace'] === null) {
            $invalidProperties[] = "'is_marketplace' can't be null";
        }
        if ($this->container['channel_catalog_id'] === null) {
            $invalidProperties[] = "'channel_catalog_id' can't be null";
        }
        if ($this->container['store_id'] === null) {
            $invalidProperties[] = "'store_id' can't be null";
        }
        if ($this->container['general_settings'] === null) {
            $invalidProperties[] = "'general_settings' can't be null";
        }
        if ($this->container['channel_cost_settings'] === null) {
            $invalidProperties[] = "'channel_cost_settings' can't be null";
        }
        if ($this->container['channel_category_settings'] === null) {
            $invalidProperties[] = "'channel_category_settings' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['types'] === null) {
            $invalidProperties[] = "'types' can't be null";
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

        if ($this->container['channel_id'] === null) {
            return false;
        }
        if ($this->container['channel_name'] === null) {
            return false;
        }
        if ($this->container['channel_image_url'] === null) {
            return false;
        }
        if ($this->container['product_count'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        if ($this->container['is_marketplace'] === null) {
            return false;
        }
        if ($this->container['channel_catalog_id'] === null) {
            return false;
        }
        if ($this->container['store_id'] === null) {
            return false;
        }
        if ($this->container['general_settings'] === null) {
            return false;
        }
        if ($this->container['channel_cost_settings'] === null) {
            return false;
        }
        if ($this->container['channel_category_settings'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        if ($this->container['types'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelId
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelId $channel_id channel_id
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets channel_name
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelName
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelName $channel_name channel_name
     *
     * @return $this
     */
    public function setChannelName($channel_name)
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets channel_image_url
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl
     */
    public function getChannelImageUrl()
    {
        return $this->container['channel_image_url'];
    }

    /**
     * Sets channel_image_url
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl $channel_image_url channel_image_url
     *
     * @return $this
     */
    public function setChannelImageUrl($channel_image_url)
    {
        $this->container['channel_image_url'] = $channel_image_url;

        return $this;
    }

    /**
     * Gets product_count
     *
     * @return int
     */
    public function getProductCount()
    {
        return $this->container['product_count'];
    }

    /**
     * Sets product_count
     *
     * @param int $product_count The product count exported considering category mapping. Not all filters have been applied.
     *
     * @return $this
     */
    public function setProductCount($product_count)
    {
        $this->container['product_count'] = $product_count;

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
     * @param bool $enabled Indicates if the channel catalog is enable
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets is_marketplace
     *
     * @return bool
     */
    public function getIsMarketplace()
    {
        return $this->container['is_marketplace'];
    }

    /**
     * Sets is_marketplace
     *
     * @param bool $is_marketplace Indicates if this channel catalog is related to a marketplace
     *
     * @return $this
     */
    public function setIsMarketplace($is_marketplace)
    {
        $this->container['is_marketplace'] = $is_marketplace;

        return $this;
    }

    /**
     * Gets channel_catalog_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId
     */
    public function getChannelCatalogId()
    {
        return $this->container['channel_catalog_id'];
    }

    /**
     * Sets channel_catalog_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId $channel_catalog_id channel_catalog_id
     *
     * @return $this
     */
    public function setChannelCatalogId($channel_catalog_id)
    {
        $this->container['channel_catalog_id'] = $channel_catalog_id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonStoreId
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonStoreId $store_id store_id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets general_settings
     *
     * @return \EffetB\BeezupApi\Model\GeneralSettings
     */
    public function getGeneralSettings()
    {
        return $this->container['general_settings'];
    }

    /**
     * Sets general_settings
     *
     * @param \EffetB\BeezupApi\Model\GeneralSettings $general_settings general_settings
     *
     * @return $this
     */
    public function setGeneralSettings($general_settings)
    {
        $this->container['general_settings'] = $general_settings;

        return $this;
    }

    /**
     * Gets channel_cost_settings
     *
     * @return \EffetB\BeezupApi\Model\ChannelCostSettings
     */
    public function getChannelCostSettings()
    {
        return $this->container['channel_cost_settings'];
    }

    /**
     * Sets channel_cost_settings
     *
     * @param \EffetB\BeezupApi\Model\ChannelCostSettings $channel_cost_settings channel_cost_settings
     *
     * @return $this
     */
    public function setChannelCostSettings($channel_cost_settings)
    {
        $this->container['channel_cost_settings'] = $channel_cost_settings;

        return $this;
    }

    /**
     * Gets channel_category_settings
     *
     * @return \EffetB\BeezupApi\Model\ChannelCategorySettings
     */
    public function getChannelCategorySettings()
    {
        return $this->container['channel_category_settings'];
    }

    /**
     * Sets channel_category_settings
     *
     * @param \EffetB\BeezupApi\Model\ChannelCategorySettings $channel_category_settings channel_category_settings
     *
     * @return $this
     */
    public function setChannelCategorySettings($channel_category_settings)
    {
        $this->container['channel_category_settings'] = $channel_category_settings;

        return $this;
    }

    /**
     * Gets cost_settings
     *
     * @return \EffetB\BeezupApi\Model\CostSettings
     */
    public function getCostSettings()
    {
        return $this->container['cost_settings'];
    }

    /**
     * Sets cost_settings
     *
     * @param \EffetB\BeezupApi\Model\CostSettings $cost_settings cost_settings
     *
     * @return $this
     */
    public function setCostSettings($cost_settings)
    {
        $this->container['cost_settings'] = $cost_settings;

        return $this;
    }

    /**
     * Gets category_mapping_settings
     *
     * @return \EffetB\BeezupApi\Model\ChannelCatalogCategoryMappingSettings
     */
    public function getCategoryMappingSettings()
    {
        return $this->container['category_mapping_settings'];
    }

    /**
     * Sets category_mapping_settings
     *
     * @param \EffetB\BeezupApi\Model\ChannelCatalogCategoryMappingSettings $category_mapping_settings category_mapping_settings
     *
     * @return $this
     */
    public function setCategoryMappingSettings($category_mapping_settings)
    {
        $this->container['category_mapping_settings'] = $category_mapping_settings;

        return $this;
    }

    /**
     * Gets column_mappings
     *
     * @return \EffetB\BeezupApi\Model\ChannelCatalogColumnMappingListWithName
     */
    public function getColumnMappings()
    {
        return $this->container['column_mappings'];
    }

    /**
     * Sets column_mappings
     *
     * @param \EffetB\BeezupApi\Model\ChannelCatalogColumnMappingListWithName $column_mappings column_mappings
     *
     * @return $this
     */
    public function setColumnMappings($column_mappings)
    {
        $this->container['column_mappings'] = $column_mappings;

        return $this;
    }

    /**
     * Gets exclusion_filters
     *
     * @return \EffetB\BeezupApi\Model\ExclusionFilters
     */
    public function getExclusionFilters()
    {
        return $this->container['exclusion_filters'];
    }

    /**
     * Sets exclusion_filters
     *
     * @param \EffetB\BeezupApi\Model\ExclusionFilters $exclusion_filters exclusion_filters
     *
     * @return $this
     */
    public function setExclusionFilters($exclusion_filters)
    {
        $this->container['exclusion_filters'] = $exclusion_filters;

        return $this;
    }

    /**
     * Gets export_url
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl
     */
    public function getExportUrl()
    {
        return $this->container['export_url'];
    }

    /**
     * Sets export_url
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl $export_url export_url
     *
     * @return $this
     */
    public function setExportUrl($export_url)
    {
        $this->container['export_url'] = $export_url;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \EffetB\BeezupApi\Model\ChannelCatalogState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \EffetB\BeezupApi\Model\ChannelCatalogState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[] $types The channel type list related to the channel
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\ChannelCatalogLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\ChannelCatalogLinks $links links
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


