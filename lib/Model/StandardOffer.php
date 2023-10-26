<?php
/**
 * StandardOffer
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
 * StandardOffer Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'standardOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offer_id' => 'int',
        'name' => 'string',
        'additional_click_price' => 'double',
        'included_click' => 'int',
        'is_most_popular' => 'bool',
        'is_old_offer' => 'bool',
        'fixed_price' => 'double',
        'currency_code' => '\EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode',
        'position' => 'int',
        'functionalities' => '\EffetB\BeezupApi\Model\OfferFunctionality[]',
        'links' => '\EffetB\BeezupApi\Model\StandardOfferLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offer_id' => 'int32',
        'name' => null,
        'additional_click_price' => 'double',
        'included_click' => 'int32',
        'is_most_popular' => null,
        'is_old_offer' => null,
        'fixed_price' => 'double',
        'currency_code' => null,
        'position' => 'int32',
        'functionalities' => null,
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
        'offer_id' => 'offerId',
        'name' => 'name',
        'additional_click_price' => 'additionalClickPrice',
        'included_click' => 'includedClick',
        'is_most_popular' => 'isMostPopular',
        'is_old_offer' => 'isOldOffer',
        'fixed_price' => 'fixedPrice',
        'currency_code' => 'currencyCode',
        'position' => 'position',
        'functionalities' => 'functionalities',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_id' => 'setOfferId',
        'name' => 'setName',
        'additional_click_price' => 'setAdditionalClickPrice',
        'included_click' => 'setIncludedClick',
        'is_most_popular' => 'setIsMostPopular',
        'is_old_offer' => 'setIsOldOffer',
        'fixed_price' => 'setFixedPrice',
        'currency_code' => 'setCurrencyCode',
        'position' => 'setPosition',
        'functionalities' => 'setFunctionalities',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_id' => 'getOfferId',
        'name' => 'getName',
        'additional_click_price' => 'getAdditionalClickPrice',
        'included_click' => 'getIncludedClick',
        'is_most_popular' => 'getIsMostPopular',
        'is_old_offer' => 'getIsOldOffer',
        'fixed_price' => 'getFixedPrice',
        'currency_code' => 'getCurrencyCode',
        'position' => 'getPosition',
        'functionalities' => 'getFunctionalities',
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
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['additional_click_price'] = isset($data['additional_click_price']) ? $data['additional_click_price'] : null;
        $this->container['included_click'] = isset($data['included_click']) ? $data['included_click'] : null;
        $this->container['is_most_popular'] = isset($data['is_most_popular']) ? $data['is_most_popular'] : null;
        $this->container['is_old_offer'] = isset($data['is_old_offer']) ? $data['is_old_offer'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['functionalities'] = isset($data['functionalities']) ? $data['functionalities'] : null;
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

        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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

        if ($this->container['offer_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets offer_id
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param int $offer_id The offer Id
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The offer name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets additional_click_price
     *
     * @return double
     */
    public function getAdditionalClickPrice()
    {
        return $this->container['additional_click_price'];
    }

    /**
     * Sets additional_click_price
     *
     * @param double $additional_click_price The additional click price
     *
     * @return $this
     */
    public function setAdditionalClickPrice($additional_click_price)
    {
        $this->container['additional_click_price'] = $additional_click_price;

        return $this;
    }

    /**
     * Gets included_click
     *
     * @return int
     */
    public function getIncludedClick()
    {
        return $this->container['included_click'];
    }

    /**
     * Sets included_click
     *
     * @param int $included_click The included click
     *
     * @return $this
     */
    public function setIncludedClick($included_click)
    {
        $this->container['included_click'] = $included_click;

        return $this;
    }

    /**
     * Gets is_most_popular
     *
     * @return bool
     */
    public function getIsMostPopular()
    {
        return $this->container['is_most_popular'];
    }

    /**
     * Sets is_most_popular
     *
     * @param bool $is_most_popular UI purpose. Is the offer is the most popular
     *
     * @return $this
     */
    public function setIsMostPopular($is_most_popular)
    {
        $this->container['is_most_popular'] = $is_most_popular;

        return $this;
    }

    /**
     * Gets is_old_offer
     *
     * @return bool
     */
    public function getIsOldOffer()
    {
        return $this->container['is_old_offer'];
    }

    /**
     * Sets is_old_offer
     *
     * @param bool $is_old_offer Is an old offer
     *
     * @return $this
     */
    public function setIsOldOffer($is_old_offer)
    {
        $this->container['is_old_offer'] = $is_old_offer;

        return $this;
    }

    /**
     * Gets fixed_price
     *
     * @return double
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param double $fixed_price The fixed price of the offer
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return \EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param \EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * @param int $position UI purpose. The position of the offer
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets functionalities
     *
     * @return \EffetB\BeezupApi\Model\OfferFunctionality[]
     */
    public function getFunctionalities()
    {
        return $this->container['functionalities'];
    }

    /**
     * Sets functionalities
     *
     * @param \EffetB\BeezupApi\Model\OfferFunctionality[] $functionalities functionalities
     *
     * @return $this
     */
    public function setFunctionalities($functionalities)
    {
        $this->container['functionalities'] = $functionalities;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\StandardOfferLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\StandardOfferLinks $links links
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


