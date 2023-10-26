<?php
/**
 * OrderHeader
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
 * OrderHeader Class Doc Comment
 *
 * @category Class
 * @description Describe the basic information related to an order. All properties with the prefix order_ are translated in the list of values /user/lov/OrderMetaInfoOrderDetails
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode',
        'account_id' => '\EffetB\BeezupApi\Model\AccountId',
        'beez_up_order_id' => '\EffetB\BeezupApi\Model\BeezUPOrderId',
        'beez_up_order_url' => '\EffetB\BeezupApi\Model\BeezUPCommonHttpUrl',
        'marketplace_business_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode',
        'order_marketplace_order_id' => '\EffetB\BeezupApi\Model\MarketplaceOrderId',
        'order_status_beez_up_order_status' => '\EffetB\BeezupApi\Model\BeezUPOrderStatus',
        'order_status_marketplace_order_status' => '\EffetB\BeezupApi\Model\MarketplaceOrderStatus',
        'order_merchant_order_id' => '\EffetB\BeezupApi\Model\OrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => '\EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => '\EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => '\DateTime',
        'order_last_modification_utc_date' => '\DateTime',
        'order_marketplace_last_modification_utc_date' => '\DateTime',
        'order_buyer_name' => '\EffetB\BeezupApi\Model\OrderBuyerName',
        'order_total_price' => 'float',
        'order_currency_code' => '\EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode',
        'processing' => '\EffetB\BeezupApi\Model\Processing',
        'etag' => '\EffetB\BeezupApi\Model\Etag',
        'links' => '\EffetB\BeezupApi\Model\OrderHeaderLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_technical_code' => null,
        'account_id' => null,
        'beez_up_order_id' => null,
        'beez_up_order_url' => null,
        'marketplace_business_code' => null,
        'order_marketplace_order_id' => null,
        'order_status_beez_up_order_status' => null,
        'order_status_marketplace_order_status' => null,
        'order_merchant_order_id' => null,
        'order_merchant_e_commerce_software_name' => null,
        'order_merchant_e_commerce_software_version' => null,
        'order_purchase_utc_date' => 'date-time',
        'order_last_modification_utc_date' => 'date-time',
        'order_marketplace_last_modification_utc_date' => 'date-time',
        'order_buyer_name' => null,
        'order_total_price' => 'decimal',
        'order_currency_code' => null,
        'processing' => null,
        'etag' => null,
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
        'marketplace_technical_code' => 'marketplaceTechnicalCode',
        'account_id' => 'accountId',
        'beez_up_order_id' => 'beezUPOrderId',
        'beez_up_order_url' => 'beezUPOrderUrl',
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'order_marketplace_order_id' => 'order_MarketplaceOrderId',
        'order_status_beez_up_order_status' => 'order_Status_BeezUPOrderStatus',
        'order_status_marketplace_order_status' => 'order_Status_MarketplaceOrderStatus',
        'order_merchant_order_id' => 'order_MerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'order_MerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'order_MerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'order_PurchaseUtcDate',
        'order_last_modification_utc_date' => 'order_LastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'order_MarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'order_Buyer_Name',
        'order_total_price' => 'order_TotalPrice',
        'order_currency_code' => 'order_CurrencyCode',
        'processing' => 'processing',
        'etag' => 'etag',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'account_id' => 'setAccountId',
        'beez_up_order_id' => 'setBeezUpOrderId',
        'beez_up_order_url' => 'setBeezUpOrderUrl',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'order_marketplace_order_id' => 'setOrderMarketplaceOrderId',
        'order_status_beez_up_order_status' => 'setOrderStatusBeezUpOrderStatus',
        'order_status_marketplace_order_status' => 'setOrderStatusMarketplaceOrderStatus',
        'order_merchant_order_id' => 'setOrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'setOrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'setOrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'setOrderPurchaseUtcDate',
        'order_last_modification_utc_date' => 'setOrderLastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'setOrderMarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'setOrderBuyerName',
        'order_total_price' => 'setOrderTotalPrice',
        'order_currency_code' => 'setOrderCurrencyCode',
        'processing' => 'setProcessing',
        'etag' => 'setEtag',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'account_id' => 'getAccountId',
        'beez_up_order_id' => 'getBeezUpOrderId',
        'beez_up_order_url' => 'getBeezUpOrderUrl',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'order_marketplace_order_id' => 'getOrderMarketplaceOrderId',
        'order_status_beez_up_order_status' => 'getOrderStatusBeezUpOrderStatus',
        'order_status_marketplace_order_status' => 'getOrderStatusMarketplaceOrderStatus',
        'order_merchant_order_id' => 'getOrderMerchantOrderId',
        'order_merchant_e_commerce_software_name' => 'getOrderMerchantECommerceSoftwareName',
        'order_merchant_e_commerce_software_version' => 'getOrderMerchantECommerceSoftwareVersion',
        'order_purchase_utc_date' => 'getOrderPurchaseUtcDate',
        'order_last_modification_utc_date' => 'getOrderLastModificationUtcDate',
        'order_marketplace_last_modification_utc_date' => 'getOrderMarketplaceLastModificationUtcDate',
        'order_buyer_name' => 'getOrderBuyerName',
        'order_total_price' => 'getOrderTotalPrice',
        'order_currency_code' => 'getOrderCurrencyCode',
        'processing' => 'getProcessing',
        'etag' => 'getEtag',
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
        $this->container['marketplace_technical_code'] = isset($data['marketplace_technical_code']) ? $data['marketplace_technical_code'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['beez_up_order_id'] = isset($data['beez_up_order_id']) ? $data['beez_up_order_id'] : null;
        $this->container['beez_up_order_url'] = isset($data['beez_up_order_url']) ? $data['beez_up_order_url'] : null;
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['order_marketplace_order_id'] = isset($data['order_marketplace_order_id']) ? $data['order_marketplace_order_id'] : null;
        $this->container['order_status_beez_up_order_status'] = isset($data['order_status_beez_up_order_status']) ? $data['order_status_beez_up_order_status'] : null;
        $this->container['order_status_marketplace_order_status'] = isset($data['order_status_marketplace_order_status']) ? $data['order_status_marketplace_order_status'] : null;
        $this->container['order_merchant_order_id'] = isset($data['order_merchant_order_id']) ? $data['order_merchant_order_id'] : null;
        $this->container['order_merchant_e_commerce_software_name'] = isset($data['order_merchant_e_commerce_software_name']) ? $data['order_merchant_e_commerce_software_name'] : null;
        $this->container['order_merchant_e_commerce_software_version'] = isset($data['order_merchant_e_commerce_software_version']) ? $data['order_merchant_e_commerce_software_version'] : null;
        $this->container['order_purchase_utc_date'] = isset($data['order_purchase_utc_date']) ? $data['order_purchase_utc_date'] : null;
        $this->container['order_last_modification_utc_date'] = isset($data['order_last_modification_utc_date']) ? $data['order_last_modification_utc_date'] : null;
        $this->container['order_marketplace_last_modification_utc_date'] = isset($data['order_marketplace_last_modification_utc_date']) ? $data['order_marketplace_last_modification_utc_date'] : null;
        $this->container['order_buyer_name'] = isset($data['order_buyer_name']) ? $data['order_buyer_name'] : null;
        $this->container['order_total_price'] = isset($data['order_total_price']) ? $data['order_total_price'] : null;
        $this->container['order_currency_code'] = isset($data['order_currency_code']) ? $data['order_currency_code'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
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

        if ($this->container['marketplace_technical_code'] === null) {
            $invalidProperties[] = "'marketplace_technical_code' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['beez_up_order_id'] === null) {
            $invalidProperties[] = "'beez_up_order_id' can't be null";
        }
        if ($this->container['marketplace_business_code'] === null) {
            $invalidProperties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['order_marketplace_order_id'] === null) {
            $invalidProperties[] = "'order_marketplace_order_id' can't be null";
        }
        if ($this->container['order_status_beez_up_order_status'] === null) {
            $invalidProperties[] = "'order_status_beez_up_order_status' can't be null";
        }
        if ($this->container['order_purchase_utc_date'] === null) {
            $invalidProperties[] = "'order_purchase_utc_date' can't be null";
        }
        if ($this->container['order_last_modification_utc_date'] === null) {
            $invalidProperties[] = "'order_last_modification_utc_date' can't be null";
        }
        if ($this->container['order_marketplace_last_modification_utc_date'] === null) {
            $invalidProperties[] = "'order_marketplace_last_modification_utc_date' can't be null";
        }
        if ($this->container['processing'] === null) {
            $invalidProperties[] = "'processing' can't be null";
        }
        if ($this->container['etag'] === null) {
            $invalidProperties[] = "'etag' can't be null";
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

        if ($this->container['marketplace_technical_code'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['beez_up_order_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['order_marketplace_order_id'] === null) {
            return false;
        }
        if ($this->container['order_status_beez_up_order_status'] === null) {
            return false;
        }
        if ($this->container['order_purchase_utc_date'] === null) {
            return false;
        }
        if ($this->container['order_last_modification_utc_date'] === null) {
            return false;
        }
        if ($this->container['order_marketplace_last_modification_utc_date'] === null) {
            return false;
        }
        if ($this->container['processing'] === null) {
            return false;
        }
        if ($this->container['etag'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
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
     * Gets account_id
     *
     * @return \EffetB\BeezupApi\Model\AccountId
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param \EffetB\BeezupApi\Model\AccountId $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets beez_up_order_id
     *
     * @return \EffetB\BeezupApi\Model\BeezUPOrderId
     */
    public function getBeezUpOrderId()
    {
        return $this->container['beez_up_order_id'];
    }

    /**
     * Sets beez_up_order_id
     *
     * @param \EffetB\BeezupApi\Model\BeezUPOrderId $beez_up_order_id beez_up_order_id
     *
     * @return $this
     */
    public function setBeezUpOrderId($beez_up_order_id)
    {
        $this->container['beez_up_order_id'] = $beez_up_order_id;

        return $this;
    }

    /**
     * Gets beez_up_order_url
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl
     */
    public function getBeezUpOrderUrl()
    {
        return $this->container['beez_up_order_url'];
    }

    /**
     * Sets beez_up_order_url
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonHttpUrl $beez_up_order_url beez_up_order_url
     *
     * @return $this
     */
    public function setBeezUpOrderUrl($beez_up_order_url)
    {
        $this->container['beez_up_order_url'] = $beez_up_order_url;

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
     * Gets order_marketplace_order_id
     *
     * @return \EffetB\BeezupApi\Model\MarketplaceOrderId
     */
    public function getOrderMarketplaceOrderId()
    {
        return $this->container['order_marketplace_order_id'];
    }

    /**
     * Sets order_marketplace_order_id
     *
     * @param \EffetB\BeezupApi\Model\MarketplaceOrderId $order_marketplace_order_id order_marketplace_order_id
     *
     * @return $this
     */
    public function setOrderMarketplaceOrderId($order_marketplace_order_id)
    {
        $this->container['order_marketplace_order_id'] = $order_marketplace_order_id;

        return $this;
    }

    /**
     * Gets order_status_beez_up_order_status
     *
     * @return \EffetB\BeezupApi\Model\BeezUPOrderStatus
     */
    public function getOrderStatusBeezUpOrderStatus()
    {
        return $this->container['order_status_beez_up_order_status'];
    }

    /**
     * Sets order_status_beez_up_order_status
     *
     * @param \EffetB\BeezupApi\Model\BeezUPOrderStatus $order_status_beez_up_order_status order_status_beez_up_order_status
     *
     * @return $this
     */
    public function setOrderStatusBeezUpOrderStatus($order_status_beez_up_order_status)
    {
        $this->container['order_status_beez_up_order_status'] = $order_status_beez_up_order_status;

        return $this;
    }

    /**
     * Gets order_status_marketplace_order_status
     *
     * @return \EffetB\BeezupApi\Model\MarketplaceOrderStatus
     */
    public function getOrderStatusMarketplaceOrderStatus()
    {
        return $this->container['order_status_marketplace_order_status'];
    }

    /**
     * Sets order_status_marketplace_order_status
     *
     * @param \EffetB\BeezupApi\Model\MarketplaceOrderStatus $order_status_marketplace_order_status order_status_marketplace_order_status
     *
     * @return $this
     */
    public function setOrderStatusMarketplaceOrderStatus($order_status_marketplace_order_status)
    {
        $this->container['order_status_marketplace_order_status'] = $order_status_marketplace_order_status;

        return $this;
    }

    /**
     * Gets order_merchant_order_id
     *
     * @return \EffetB\BeezupApi\Model\OrderMerchantOrderId
     */
    public function getOrderMerchantOrderId()
    {
        return $this->container['order_merchant_order_id'];
    }

    /**
     * Sets order_merchant_order_id
     *
     * @param \EffetB\BeezupApi\Model\OrderMerchantOrderId $order_merchant_order_id order_merchant_order_id
     *
     * @return $this
     */
    public function setOrderMerchantOrderId($order_merchant_order_id)
    {
        $this->container['order_merchant_order_id'] = $order_merchant_order_id;

        return $this;
    }

    /**
     * Gets order_merchant_e_commerce_software_name
     *
     * @return \EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareName
     */
    public function getOrderMerchantECommerceSoftwareName()
    {
        return $this->container['order_merchant_e_commerce_software_name'];
    }

    /**
     * Sets order_merchant_e_commerce_software_name
     *
     * @param \EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareName $order_merchant_e_commerce_software_name order_merchant_e_commerce_software_name
     *
     * @return $this
     */
    public function setOrderMerchantECommerceSoftwareName($order_merchant_e_commerce_software_name)
    {
        $this->container['order_merchant_e_commerce_software_name'] = $order_merchant_e_commerce_software_name;

        return $this;
    }

    /**
     * Gets order_merchant_e_commerce_software_version
     *
     * @return \EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareVersion
     */
    public function getOrderMerchantECommerceSoftwareVersion()
    {
        return $this->container['order_merchant_e_commerce_software_version'];
    }

    /**
     * Sets order_merchant_e_commerce_software_version
     *
     * @param \EffetB\BeezupApi\Model\OrderMerchantECommerceSoftwareVersion $order_merchant_e_commerce_software_version order_merchant_e_commerce_software_version
     *
     * @return $this
     */
    public function setOrderMerchantECommerceSoftwareVersion($order_merchant_e_commerce_software_version)
    {
        $this->container['order_merchant_e_commerce_software_version'] = $order_merchant_e_commerce_software_version;

        return $this;
    }

    /**
     * Gets order_purchase_utc_date
     *
     * @return \DateTime
     */
    public function getOrderPurchaseUtcDate()
    {
        return $this->container['order_purchase_utc_date'];
    }

    /**
     * Sets order_purchase_utc_date
     *
     * @param \DateTime $order_purchase_utc_date The purchase date of this order
     *
     * @return $this
     */
    public function setOrderPurchaseUtcDate($order_purchase_utc_date)
    {
        $this->container['order_purchase_utc_date'] = $order_purchase_utc_date;

        return $this;
    }

    /**
     * Gets order_last_modification_utc_date
     *
     * @return \DateTime
     */
    public function getOrderLastModificationUtcDate()
    {
        return $this->container['order_last_modification_utc_date'];
    }

    /**
     * Sets order_last_modification_utc_date
     *
     * @param \DateTime $order_last_modification_utc_date The last modification UTC date done by BeezUP of this order
     *
     * @return $this
     */
    public function setOrderLastModificationUtcDate($order_last_modification_utc_date)
    {
        $this->container['order_last_modification_utc_date'] = $order_last_modification_utc_date;

        return $this;
    }

    /**
     * Gets order_marketplace_last_modification_utc_date
     *
     * @return \DateTime
     */
    public function getOrderMarketplaceLastModificationUtcDate()
    {
        return $this->container['order_marketplace_last_modification_utc_date'];
    }

    /**
     * Sets order_marketplace_last_modification_utc_date
     *
     * @param \DateTime $order_marketplace_last_modification_utc_date The last modification UTC date done by the marketplace on this order
     *
     * @return $this
     */
    public function setOrderMarketplaceLastModificationUtcDate($order_marketplace_last_modification_utc_date)
    {
        $this->container['order_marketplace_last_modification_utc_date'] = $order_marketplace_last_modification_utc_date;

        return $this;
    }

    /**
     * Gets order_buyer_name
     *
     * @return \EffetB\BeezupApi\Model\OrderBuyerName
     */
    public function getOrderBuyerName()
    {
        return $this->container['order_buyer_name'];
    }

    /**
     * Sets order_buyer_name
     *
     * @param \EffetB\BeezupApi\Model\OrderBuyerName $order_buyer_name order_buyer_name
     *
     * @return $this
     */
    public function setOrderBuyerName($order_buyer_name)
    {
        $this->container['order_buyer_name'] = $order_buyer_name;

        return $this;
    }

    /**
     * Gets order_total_price
     *
     * @return float
     */
    public function getOrderTotalPrice()
    {
        return $this->container['order_total_price'];
    }

    /**
     * Sets order_total_price
     *
     * @param float $order_total_price The total price of this order (corresponding to the amount paid by the customer)
     *
     * @return $this
     */
    public function setOrderTotalPrice($order_total_price)
    {
        $this->container['order_total_price'] = $order_total_price;

        return $this;
    }

    /**
     * Gets order_currency_code
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode
     */
    public function getOrderCurrencyCode()
    {
        return $this->container['order_currency_code'];
    }

    /**
     * Sets order_currency_code
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode $order_currency_code order_currency_code
     *
     * @return $this
     */
    public function setOrderCurrencyCode($order_currency_code)
    {
        $this->container['order_currency_code'] = $order_currency_code;

        return $this;
    }

    /**
     * Gets processing
     *
     * @return \EffetB\BeezupApi\Model\Processing
     */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
     * Sets processing
     *
     * @param \EffetB\BeezupApi\Model\Processing $processing processing
     *
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;

        return $this;
    }

    /**
     * Gets etag
     *
     * @return \EffetB\BeezupApi\Model\Etag
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     *
     * @param \EffetB\BeezupApi\Model\Etag $etag etag
     *
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\OrderHeaderLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\OrderHeaderLinks $links links
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


