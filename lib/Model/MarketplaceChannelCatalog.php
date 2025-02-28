<?php
/**
 * MarketplaceChannelCatalog
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
 * MarketplaceChannelCatalog Class Doc Comment
 *
 * @category Class
 * @description This object indicates you the association between a channel catalog and a marketplace. The account identifier will be automatically defined based on your marketplace merchant identfier.
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceChannelCatalog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'marketplaceChannelCatalog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_settings_status' => '\EffetB\BeezupApi\Model\BeezUPCommonApiSettingsStatus',
        'enabled' => 'bool',
        'marketplace_technical_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode',
        'marketplace_business_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'string',
        'marketplace_iso_country_code_alpha2' => 'string',
        'beez_up_marketplace_name' => '',
        'beez_up_channel_id' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelId',
        'beez_up_channel_catalog_id' => '\EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId',
        'beez_up_store_id' => '\EffetB\BeezupApi\Model\BeezUPCommonStoreId',
        'beez_up_store_name' => 'string',
        'marketplace_merchant_identifiers' => 'map[string,string]',
        'marketplace_account_id' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceAccountId',
        'lov_links' => '\EffetB\BeezupApi\Model\MarketplaceChannelCatalogLovLinks',
        'links' => '\EffetB\BeezupApi\Model\MarketplaceChannelCatalogLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_settings_status' => null,
        'enabled' => null,
        'marketplace_technical_code' => null,
        'marketplace_business_code' => null,
        'marketplace_market_place_id' => null,
        'marketplace_iso_country_code_alpha2' => null,
        'beez_up_marketplace_name' => null,
        'beez_up_channel_id' => null,
        'beez_up_channel_catalog_id' => null,
        'beez_up_store_id' => null,
        'beez_up_store_name' => null,
        'marketplace_merchant_identifiers' => null,
        'marketplace_account_id' => null,
        'lov_links' => null,
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
        'api_settings_status' => 'apiSettingsStatus',
        'enabled' => 'enabled',
        'marketplace_technical_code' => 'marketplaceTechnicalCode',
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'marketplace_market_place_id' => 'marketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'marketplaceIsoCountryCodeAlpha2',
        'beez_up_marketplace_name' => 'beezUPMarketplaceName',
        'beez_up_channel_id' => 'beezUPChannelId',
        'beez_up_channel_catalog_id' => 'beezUPChannelCatalogId',
        'beez_up_store_id' => 'beezUPStoreId',
        'beez_up_store_name' => 'beezUPStoreName',
        'marketplace_merchant_identifiers' => 'marketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'marketplaceAccountId',
        'lov_links' => 'lovLinks',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_settings_status' => 'setApiSettingsStatus',
        'enabled' => 'setEnabled',
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'setMarketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'setMarketplaceIsoCountryCodeAlpha2',
        'beez_up_marketplace_name' => 'setBeezUpMarketplaceName',
        'beez_up_channel_id' => 'setBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'setBeezUpChannelCatalogId',
        'beez_up_store_id' => 'setBeezUpStoreId',
        'beez_up_store_name' => 'setBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'setMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'setMarketplaceAccountId',
        'lov_links' => 'setLovLinks',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_settings_status' => 'getApiSettingsStatus',
        'enabled' => 'getEnabled',
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'marketplace_market_place_id' => 'getMarketplaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'getMarketplaceIsoCountryCodeAlpha2',
        'beez_up_marketplace_name' => 'getBeezUpMarketplaceName',
        'beez_up_channel_id' => 'getBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'getBeezUpChannelCatalogId',
        'beez_up_store_id' => 'getBeezUpStoreId',
        'beez_up_store_name' => 'getBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'getMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'getMarketplaceAccountId',
        'lov_links' => 'getLovLinks',
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
        $this->container['api_settings_status'] = isset($data['api_settings_status']) ? $data['api_settings_status'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['marketplace_technical_code'] = isset($data['marketplace_technical_code']) ? $data['marketplace_technical_code'] : null;
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['marketplace_market_place_id'] = isset($data['marketplace_market_place_id']) ? $data['marketplace_market_place_id'] : null;
        $this->container['marketplace_iso_country_code_alpha2'] = isset($data['marketplace_iso_country_code_alpha2']) ? $data['marketplace_iso_country_code_alpha2'] : null;
        $this->container['beez_up_marketplace_name'] = isset($data['beez_up_marketplace_name']) ? $data['beez_up_marketplace_name'] : null;
        $this->container['beez_up_channel_id'] = isset($data['beez_up_channel_id']) ? $data['beez_up_channel_id'] : null;
        $this->container['beez_up_channel_catalog_id'] = isset($data['beez_up_channel_catalog_id']) ? $data['beez_up_channel_catalog_id'] : null;
        $this->container['beez_up_store_id'] = isset($data['beez_up_store_id']) ? $data['beez_up_store_id'] : null;
        $this->container['beez_up_store_name'] = isset($data['beez_up_store_name']) ? $data['beez_up_store_name'] : null;
        $this->container['marketplace_merchant_identifiers'] = isset($data['marketplace_merchant_identifiers']) ? $data['marketplace_merchant_identifiers'] : null;
        $this->container['marketplace_account_id'] = isset($data['marketplace_account_id']) ? $data['marketplace_account_id'] : null;
        $this->container['lov_links'] = isset($data['lov_links']) ? $data['lov_links'] : null;
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

        if ($this->container['api_settings_status'] === null) {
            $invalidProperties[] = "'api_settings_status' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['marketplace_technical_code'] === null) {
            $invalidProperties[] = "'marketplace_technical_code' can't be null";
        }
        if ($this->container['marketplace_business_code'] === null) {
            $invalidProperties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['marketplace_market_place_id'] === null) {
            $invalidProperties[] = "'marketplace_market_place_id' can't be null";
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            $invalidProperties[] = "'marketplace_iso_country_code_alpha2' can't be null";
        }
        if ($this->container['beez_up_marketplace_name'] === null) {
            $invalidProperties[] = "'beez_up_marketplace_name' can't be null";
        }
        if ($this->container['beez_up_channel_id'] === null) {
            $invalidProperties[] = "'beez_up_channel_id' can't be null";
        }
        if ($this->container['beez_up_channel_catalog_id'] === null) {
            $invalidProperties[] = "'beez_up_channel_catalog_id' can't be null";
        }
        if ($this->container['beez_up_store_id'] === null) {
            $invalidProperties[] = "'beez_up_store_id' can't be null";
        }
        if ($this->container['beez_up_store_name'] === null) {
            $invalidProperties[] = "'beez_up_store_name' can't be null";
        }
        if ($this->container['lov_links'] === null) {
            $invalidProperties[] = "'lov_links' can't be null";
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

        if ($this->container['api_settings_status'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        if ($this->container['marketplace_technical_code'] === null) {
            return false;
        }
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['marketplace_market_place_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            return false;
        }
        if ($this->container['beez_up_marketplace_name'] === null) {
            return false;
        }
        if ($this->container['beez_up_channel_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_channel_catalog_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_store_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_store_name'] === null) {
            return false;
        }
        if ($this->container['lov_links'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets api_settings_status
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonApiSettingsStatus
     */
    public function getApiSettingsStatus()
    {
        return $this->container['api_settings_status'];
    }

    /**
     * Sets api_settings_status
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonApiSettingsStatus $api_settings_status api_settings_status
     *
     * @return $this
     */
    public function setApiSettingsStatus($api_settings_status)
    {
        $this->container['api_settings_status'] = $api_settings_status;

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
     * @param bool $enabled The enabled status of the Channel Catalog
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets marketplace_technical_code
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode
     */
    public function getMarketplaceTechnicalCode()
    {
        return $this->container['marketplace_technical_code'];
    }

    /**
     * Sets marketplace_technical_code
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode $marketplace_technical_code marketplace_technical_code
     *
     * @return $this
     */
    public function setMarketplaceTechnicalCode($marketplace_technical_code)
    {
        $this->container['marketplace_technical_code'] = $marketplace_technical_code;

        return $this;
    }

    /**
     * Gets marketplace_business_code
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode
     */
    public function getMarketplaceBusinessCode()
    {
        return $this->container['marketplace_business_code'];
    }

    /**
     * Sets marketplace_business_code
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode $marketplace_business_code marketplace_business_code
     *
     * @return $this
     */
    public function setMarketplaceBusinessCode($marketplace_business_code)
    {
        $this->container['marketplace_business_code'] = $marketplace_business_code;

        return $this;
    }

    /**
     * Gets marketplace_market_place_id
     *
     * @return string
     */
    public function getMarketplaceMarketPlaceId()
    {
        return $this->container['marketplace_market_place_id'];
    }

    /**
     * Sets marketplace_market_place_id
     *
     * @param string $marketplace_market_place_id The marketplace identifier in the marketplace
     *
     * @return $this
     */
    public function setMarketplaceMarketPlaceId($marketplace_market_place_id)
    {
        $this->container['marketplace_market_place_id'] = $marketplace_market_place_id;

        return $this;
    }

    /**
     * Gets marketplace_iso_country_code_alpha2
     *
     * @return string
     */
    public function getMarketplaceIsoCountryCodeAlpha2()
    {
        return $this->container['marketplace_iso_country_code_alpha2'];
    }

    /**
     * Sets marketplace_iso_country_code_alpha2
     *
     * @param string $marketplace_iso_country_code_alpha2 The marketplace country iso code alpha 2 (see http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Decoding_table for more details)
     *
     * @return $this
     */
    public function setMarketplaceIsoCountryCodeAlpha2($marketplace_iso_country_code_alpha2)
    {
        $this->container['marketplace_iso_country_code_alpha2'] = $marketplace_iso_country_code_alpha2;

        return $this;
    }

    /**
     * Gets beez_up_marketplace_name
     *
     * @return 
     */
    public function getBeezUpMarketplaceName()
    {
        return $this->container['beez_up_marketplace_name'];
    }

    /**
     * Sets beez_up_marketplace_name
     *
     * @param  $beez_up_marketplace_name The marketplace name
     *
     * @return $this
     */
    public function setBeezUpMarketplaceName($beez_up_marketplace_name)
    {
        $this->container['beez_up_marketplace_name'] = $beez_up_marketplace_name;

        return $this;
    }

    /**
     * Gets beez_up_channel_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelId
     */
    public function getBeezUpChannelId()
    {
        return $this->container['beez_up_channel_id'];
    }

    /**
     * Sets beez_up_channel_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelId $beez_up_channel_id beez_up_channel_id
     *
     * @return $this
     */
    public function setBeezUpChannelId($beez_up_channel_id)
    {
        $this->container['beez_up_channel_id'] = $beez_up_channel_id;

        return $this;
    }

    /**
     * Gets beez_up_channel_catalog_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId
     */
    public function getBeezUpChannelCatalogId()
    {
        return $this->container['beez_up_channel_catalog_id'];
    }

    /**
     * Sets beez_up_channel_catalog_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonChannelCatalogId $beez_up_channel_catalog_id beez_up_channel_catalog_id
     *
     * @return $this
     */
    public function setBeezUpChannelCatalogId($beez_up_channel_catalog_id)
    {
        $this->container['beez_up_channel_catalog_id'] = $beez_up_channel_catalog_id;

        return $this;
    }

    /**
     * Gets beez_up_store_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonStoreId
     */
    public function getBeezUpStoreId()
    {
        return $this->container['beez_up_store_id'];
    }

    /**
     * Sets beez_up_store_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonStoreId $beez_up_store_id beez_up_store_id
     *
     * @return $this
     */
    public function setBeezUpStoreId($beez_up_store_id)
    {
        $this->container['beez_up_store_id'] = $beez_up_store_id;

        return $this;
    }

    /**
     * Gets beez_up_store_name
     *
     * @return string
     */
    public function getBeezUpStoreName()
    {
        return $this->container['beez_up_store_name'];
    }

    /**
     * Sets beez_up_store_name
     *
     * @param string $beez_up_store_name The store name
     *
     * @return $this
     */
    public function setBeezUpStoreName($beez_up_store_name)
    {
        $this->container['beez_up_store_name'] = $beez_up_store_name;

        return $this;
    }

    /**
     * Gets marketplace_merchant_identifiers
     *
     * @return map[string,string]
     */
    public function getMarketplaceMerchantIdentifiers()
    {
        return $this->container['marketplace_merchant_identifiers'];
    }

    /**
     * Sets marketplace_merchant_identifiers
     *
     * @param map[string,string] $marketplace_merchant_identifiers The marketplace merchant identifier list
     *
     * @return $this
     */
    public function setMarketplaceMerchantIdentifiers($marketplace_merchant_identifiers)
    {
        $this->container['marketplace_merchant_identifiers'] = $marketplace_merchant_identifiers;

        return $this;
    }

    /**
     * Gets marketplace_account_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceAccountId
     */
    public function getMarketplaceAccountId()
    {
        return $this->container['marketplace_account_id'];
    }

    /**
     * Sets marketplace_account_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonMarketplaceAccountId $marketplace_account_id marketplace_account_id
     *
     * @return $this
     */
    public function setMarketplaceAccountId($marketplace_account_id)
    {
        $this->container['marketplace_account_id'] = $marketplace_account_id;

        return $this;
    }

    /**
     * Gets lov_links
     *
     * @return \EffetB\BeezupApi\Model\MarketplaceChannelCatalogLovLinks
     */
    public function getLovLinks()
    {
        return $this->container['lov_links'];
    }

    /**
     * Sets lov_links
     *
     * @param \EffetB\BeezupApi\Model\MarketplaceChannelCatalogLovLinks $lov_links lov_links
     *
     * @return $this
     */
    public function setLovLinks($lov_links)
    {
        $this->container['lov_links'] = $lov_links;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\MarketplaceChannelCatalogLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\MarketplaceChannelCatalogLinks $links links
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


