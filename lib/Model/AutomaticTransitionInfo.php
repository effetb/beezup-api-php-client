<?php
/**
 * AutomaticTransitionInfo
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
 * AutomaticTransitionInfo Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutomaticTransitionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'automaticTransitionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceTechnicalCode',
        'account_id' => '\EffetB\BeezupApi\Model\AccountId',
        'order_status_transition_id' => 'int',
        'enabled' => 'bool',
        'marketplace_business_code' => '\EffetB\BeezupApi\Model\BeezUPCommonMarketplaceBusinessCode',
        'beez_up_order_status' => '\EffetB\BeezupApi\Model\BeezUPOrderStatus',
        'business_operation_type' => '\EffetB\BeezupApi\Model\BusinessOperationType',
        'links' => '\EffetB\BeezupApi\Model\AutomaticTransitionInfoLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_technical_code' => null,
        'account_id' => null,
        'order_status_transition_id' => 'int32',
        'enabled' => null,
        'marketplace_business_code' => null,
        'beez_up_order_status' => null,
        'business_operation_type' => null,
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
        'order_status_transition_id' => 'orderStatusTransitionId',
        'enabled' => 'enabled',
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'beez_up_order_status' => 'beezUPOrderStatus',
        'business_operation_type' => 'businessOperationType',
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
        'order_status_transition_id' => 'setOrderStatusTransitionId',
        'enabled' => 'setEnabled',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'beez_up_order_status' => 'setBeezUpOrderStatus',
        'business_operation_type' => 'setBusinessOperationType',
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
        'order_status_transition_id' => 'getOrderStatusTransitionId',
        'enabled' => 'getEnabled',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'beez_up_order_status' => 'getBeezUpOrderStatus',
        'business_operation_type' => 'getBusinessOperationType',
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
        $this->container['order_status_transition_id'] = isset($data['order_status_transition_id']) ? $data['order_status_transition_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['beez_up_order_status'] = isset($data['beez_up_order_status']) ? $data['beez_up_order_status'] : null;
        $this->container['business_operation_type'] = isset($data['business_operation_type']) ? $data['business_operation_type'] : null;
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
        if ($this->container['order_status_transition_id'] === null) {
            $invalidProperties[] = "'order_status_transition_id' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['marketplace_business_code'] === null) {
            $invalidProperties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['beez_up_order_status'] === null) {
            $invalidProperties[] = "'beez_up_order_status' can't be null";
        }
        if ($this->container['business_operation_type'] === null) {
            $invalidProperties[] = "'business_operation_type' can't be null";
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
        if ($this->container['order_status_transition_id'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['beez_up_order_status'] === null) {
            return false;
        }
        if ($this->container['business_operation_type'] === null) {
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
     * Gets order_status_transition_id
     *
     * @return int
     */
    public function getOrderStatusTransitionId()
    {
        return $this->container['order_status_transition_id'];
    }

    /**
     * Sets order_status_transition_id
     *
     * @param int $order_status_transition_id order_status_transition_id
     *
     * @return $this
     */
    public function setOrderStatusTransitionId($order_status_transition_id)
    {
        $this->container['order_status_transition_id'] = $order_status_transition_id;

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
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * Gets beez_up_order_status
     *
     * @return \EffetB\BeezupApi\Model\BeezUPOrderStatus
     */
    public function getBeezUpOrderStatus()
    {
        return $this->container['beez_up_order_status'];
    }

    /**
     * Sets beez_up_order_status
     *
     * @param \EffetB\BeezupApi\Model\BeezUPOrderStatus $beez_up_order_status beez_up_order_status
     *
     * @return $this
     */
    public function setBeezUpOrderStatus($beez_up_order_status)
    {
        $this->container['beez_up_order_status'] = $beez_up_order_status;

        return $this;
    }

    /**
     * Gets business_operation_type
     *
     * @return \EffetB\BeezupApi\Model\BusinessOperationType
     */
    public function getBusinessOperationType()
    {
        return $this->container['business_operation_type'];
    }

    /**
     * Sets business_operation_type
     *
     * @param \EffetB\BeezupApi\Model\BusinessOperationType $business_operation_type business_operation_type
     *
     * @return $this
     */
    public function setBusinessOperationType($business_operation_type)
    {
        $this->container['business_operation_type'] = $business_operation_type;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\AutomaticTransitionInfoLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\AutomaticTransitionInfoLinks $links links
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


