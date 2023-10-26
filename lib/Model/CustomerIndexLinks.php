<?php
/**
 * CustomerIndexLinks
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
 * CustomerIndexLinks Class Doc Comment
 *
 * @category Class
 * @description Gives you want you can do on this API
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerIndexLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customerIndexLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\EffetB\BeezupApi\Model\LinksGetCustomerIndexLink',
        'account_info' => '\EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink',
        'friend_info' => '\EffetB\BeezupApi\Model\LinksGetFriendInfoLink',
        'logout' => '\EffetB\BeezupApi\Model\LinksLogoutLink',
        'stores' => '\EffetB\BeezupApi\Model\LinksGetStoresLink',
        'billing_periods' => '\EffetB\BeezupApi\Model\LinksGetBillingPeriodsLink',
        'standard_offers' => '\EffetB\BeezupApi\Model\LinksGetStandardOffersLink',
        'get_offer' => '\EffetB\BeezupApi\Model\LinksGetOfferLink',
        'invoices' => '\EffetB\BeezupApi\Model\LinksGetInvoicesLink',
        'contracts' => '\EffetB\BeezupApi\Model\LinksGetContractsLink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'self' => null,
        'account_info' => null,
        'friend_info' => null,
        'logout' => null,
        'stores' => null,
        'billing_periods' => null,
        'standard_offers' => null,
        'get_offer' => null,
        'invoices' => null,
        'contracts' => null
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
        'self' => 'self',
        'account_info' => 'accountInfo',
        'friend_info' => 'friendInfo',
        'logout' => 'logout',
        'stores' => 'stores',
        'billing_periods' => 'billingPeriods',
        'standard_offers' => 'standardOffers',
        'get_offer' => 'getOffer',
        'invoices' => 'invoices',
        'contracts' => 'contracts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'account_info' => 'setAccountInfo',
        'friend_info' => 'setFriendInfo',
        'logout' => 'setLogout',
        'stores' => 'setStores',
        'billing_periods' => 'setBillingPeriods',
        'standard_offers' => 'setStandardOffers',
        'get_offer' => 'setGetOffer',
        'invoices' => 'setInvoices',
        'contracts' => 'setContracts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'account_info' => 'getAccountInfo',
        'friend_info' => 'getFriendInfo',
        'logout' => 'getLogout',
        'stores' => 'getStores',
        'billing_periods' => 'getBillingPeriods',
        'standard_offers' => 'getStandardOffers',
        'get_offer' => 'getGetOffer',
        'invoices' => 'getInvoices',
        'contracts' => 'getContracts'
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
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['account_info'] = isset($data['account_info']) ? $data['account_info'] : null;
        $this->container['friend_info'] = isset($data['friend_info']) ? $data['friend_info'] : null;
        $this->container['logout'] = isset($data['logout']) ? $data['logout'] : null;
        $this->container['stores'] = isset($data['stores']) ? $data['stores'] : null;
        $this->container['billing_periods'] = isset($data['billing_periods']) ? $data['billing_periods'] : null;
        $this->container['standard_offers'] = isset($data['standard_offers']) ? $data['standard_offers'] : null;
        $this->container['get_offer'] = isset($data['get_offer']) ? $data['get_offer'] : null;
        $this->container['invoices'] = isset($data['invoices']) ? $data['invoices'] : null;
        $this->container['contracts'] = isset($data['contracts']) ? $data['contracts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['self'] === null) {
            $invalidProperties[] = "'self' can't be null";
        }
        if ($this->container['account_info'] === null) {
            $invalidProperties[] = "'account_info' can't be null";
        }
        if ($this->container['friend_info'] === null) {
            $invalidProperties[] = "'friend_info' can't be null";
        }
        if ($this->container['billing_periods'] === null) {
            $invalidProperties[] = "'billing_periods' can't be null";
        }
        if ($this->container['standard_offers'] === null) {
            $invalidProperties[] = "'standard_offers' can't be null";
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

        if ($this->container['self'] === null) {
            return false;
        }
        if ($this->container['account_info'] === null) {
            return false;
        }
        if ($this->container['friend_info'] === null) {
            return false;
        }
        if ($this->container['billing_periods'] === null) {
            return false;
        }
        if ($this->container['standard_offers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets self
     *
     * @return \EffetB\BeezupApi\Model\LinksGetCustomerIndexLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \EffetB\BeezupApi\Model\LinksGetCustomerIndexLink $self self
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets account_info
     *
     * @return \EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink
     */
    public function getAccountInfo()
    {
        return $this->container['account_info'];
    }

    /**
     * Sets account_info
     *
     * @param \EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink $account_info account_info
     *
     * @return $this
     */
    public function setAccountInfo($account_info)
    {
        $this->container['account_info'] = $account_info;

        return $this;
    }

    /**
     * Gets friend_info
     *
     * @return \EffetB\BeezupApi\Model\LinksGetFriendInfoLink
     */
    public function getFriendInfo()
    {
        return $this->container['friend_info'];
    }

    /**
     * Sets friend_info
     *
     * @param \EffetB\BeezupApi\Model\LinksGetFriendInfoLink $friend_info friend_info
     *
     * @return $this
     */
    public function setFriendInfo($friend_info)
    {
        $this->container['friend_info'] = $friend_info;

        return $this;
    }

    /**
     * Gets logout
     *
     * @return \EffetB\BeezupApi\Model\LinksLogoutLink
     */
    public function getLogout()
    {
        return $this->container['logout'];
    }

    /**
     * Sets logout
     *
     * @param \EffetB\BeezupApi\Model\LinksLogoutLink $logout logout
     *
     * @return $this
     */
    public function setLogout($logout)
    {
        $this->container['logout'] = $logout;

        return $this;
    }

    /**
     * Gets stores
     *
     * @return \EffetB\BeezupApi\Model\LinksGetStoresLink
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param \EffetB\BeezupApi\Model\LinksGetStoresLink $stores stores
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

        return $this;
    }

    /**
     * Gets billing_periods
     *
     * @return \EffetB\BeezupApi\Model\LinksGetBillingPeriodsLink
     */
    public function getBillingPeriods()
    {
        return $this->container['billing_periods'];
    }

    /**
     * Sets billing_periods
     *
     * @param \EffetB\BeezupApi\Model\LinksGetBillingPeriodsLink $billing_periods billing_periods
     *
     * @return $this
     */
    public function setBillingPeriods($billing_periods)
    {
        $this->container['billing_periods'] = $billing_periods;

        return $this;
    }

    /**
     * Gets standard_offers
     *
     * @return \EffetB\BeezupApi\Model\LinksGetStandardOffersLink
     */
    public function getStandardOffers()
    {
        return $this->container['standard_offers'];
    }

    /**
     * Sets standard_offers
     *
     * @param \EffetB\BeezupApi\Model\LinksGetStandardOffersLink $standard_offers standard_offers
     *
     * @return $this
     */
    public function setStandardOffers($standard_offers)
    {
        $this->container['standard_offers'] = $standard_offers;

        return $this;
    }

    /**
     * Gets get_offer
     *
     * @return \EffetB\BeezupApi\Model\LinksGetOfferLink
     */
    public function getGetOffer()
    {
        return $this->container['get_offer'];
    }

    /**
     * Sets get_offer
     *
     * @param \EffetB\BeezupApi\Model\LinksGetOfferLink $get_offer get_offer
     *
     * @return $this
     */
    public function setGetOffer($get_offer)
    {
        $this->container['get_offer'] = $get_offer;

        return $this;
    }

    /**
     * Gets invoices
     *
     * @return \EffetB\BeezupApi\Model\LinksGetInvoicesLink
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices
     *
     * @param \EffetB\BeezupApi\Model\LinksGetInvoicesLink $invoices invoices
     *
     * @return $this
     */
    public function setInvoices($invoices)
    {
        $this->container['invoices'] = $invoices;

        return $this;
    }

    /**
     * Gets contracts
     *
     * @return \EffetB\BeezupApi\Model\LinksGetContractsLink
     */
    public function getContracts()
    {
        return $this->container['contracts'];
    }

    /**
     * Sets contracts
     *
     * @param \EffetB\BeezupApi\Model\LinksGetContractsLink $contracts contracts
     *
     * @return $this
     */
    public function setContracts($contracts)
    {
        $this->container['contracts'] = $contracts;

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


