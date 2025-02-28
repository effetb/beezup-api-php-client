<?php
/**
 * AccountInfoLinks
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
 * AccountInfoLinks Class Doc Comment
 *
 * @category Class
 * @description The different actions you can make on this account
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountInfoLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountInfoLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink',
        'save_personal_info' => '\EffetB\BeezupApi\Model\LinksSavePersonalInfoLink',
        'change_password' => '\EffetB\BeezupApi\Model\LinksChangePasswordLink',
        'save_company_info' => '\EffetB\BeezupApi\Model\LinksSaveCompanyInfoLink',
        'get_profile_picture_info' => '\EffetB\BeezupApi\Model\LinksGetProfilePictureInfoLink',
        'save_profile_picture_info' => '\EffetB\BeezupApi\Model\LinksSaveProfilePictureInfoLink',
        'get_credit_card_info' => '\EffetB\BeezupApi\Model\LinksGetCreditCardInfoLink',
        'save_credit_card_info' => '\EffetB\BeezupApi\Model\LinksSaveCreditCardInfoLink',
        'activate_user_account' => '\EffetB\BeezupApi\Model\LinksActivateUserAccountLink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'self' => null,
        'save_personal_info' => null,
        'change_password' => null,
        'save_company_info' => null,
        'get_profile_picture_info' => null,
        'save_profile_picture_info' => null,
        'get_credit_card_info' => null,
        'save_credit_card_info' => null,
        'activate_user_account' => null
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
        'save_personal_info' => 'savePersonalInfo',
        'change_password' => 'changePassword',
        'save_company_info' => 'saveCompanyInfo',
        'get_profile_picture_info' => 'getProfilePictureInfo',
        'save_profile_picture_info' => 'saveProfilePictureInfo',
        'get_credit_card_info' => 'getCreditCardInfo',
        'save_credit_card_info' => 'saveCreditCardInfo',
        'activate_user_account' => 'activateUserAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'save_personal_info' => 'setSavePersonalInfo',
        'change_password' => 'setChangePassword',
        'save_company_info' => 'setSaveCompanyInfo',
        'get_profile_picture_info' => 'setGetProfilePictureInfo',
        'save_profile_picture_info' => 'setSaveProfilePictureInfo',
        'get_credit_card_info' => 'setGetCreditCardInfo',
        'save_credit_card_info' => 'setSaveCreditCardInfo',
        'activate_user_account' => 'setActivateUserAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'save_personal_info' => 'getSavePersonalInfo',
        'change_password' => 'getChangePassword',
        'save_company_info' => 'getSaveCompanyInfo',
        'get_profile_picture_info' => 'getGetProfilePictureInfo',
        'save_profile_picture_info' => 'getSaveProfilePictureInfo',
        'get_credit_card_info' => 'getGetCreditCardInfo',
        'save_credit_card_info' => 'getSaveCreditCardInfo',
        'activate_user_account' => 'getActivateUserAccount'
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
        $this->container['save_personal_info'] = isset($data['save_personal_info']) ? $data['save_personal_info'] : null;
        $this->container['change_password'] = isset($data['change_password']) ? $data['change_password'] : null;
        $this->container['save_company_info'] = isset($data['save_company_info']) ? $data['save_company_info'] : null;
        $this->container['get_profile_picture_info'] = isset($data['get_profile_picture_info']) ? $data['get_profile_picture_info'] : null;
        $this->container['save_profile_picture_info'] = isset($data['save_profile_picture_info']) ? $data['save_profile_picture_info'] : null;
        $this->container['get_credit_card_info'] = isset($data['get_credit_card_info']) ? $data['get_credit_card_info'] : null;
        $this->container['save_credit_card_info'] = isset($data['save_credit_card_info']) ? $data['save_credit_card_info'] : null;
        $this->container['activate_user_account'] = isset($data['activate_user_account']) ? $data['activate_user_account'] : null;
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
        if ($this->container['save_personal_info'] === null) {
            $invalidProperties[] = "'save_personal_info' can't be null";
        }
        if ($this->container['change_password'] === null) {
            $invalidProperties[] = "'change_password' can't be null";
        }
        if ($this->container['save_company_info'] === null) {
            $invalidProperties[] = "'save_company_info' can't be null";
        }
        if ($this->container['get_profile_picture_info'] === null) {
            $invalidProperties[] = "'get_profile_picture_info' can't be null";
        }
        if ($this->container['save_profile_picture_info'] === null) {
            $invalidProperties[] = "'save_profile_picture_info' can't be null";
        }
        if ($this->container['get_credit_card_info'] === null) {
            $invalidProperties[] = "'get_credit_card_info' can't be null";
        }
        if ($this->container['save_credit_card_info'] === null) {
            $invalidProperties[] = "'save_credit_card_info' can't be null";
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
        if ($this->container['save_personal_info'] === null) {
            return false;
        }
        if ($this->container['change_password'] === null) {
            return false;
        }
        if ($this->container['save_company_info'] === null) {
            return false;
        }
        if ($this->container['get_profile_picture_info'] === null) {
            return false;
        }
        if ($this->container['save_profile_picture_info'] === null) {
            return false;
        }
        if ($this->container['get_credit_card_info'] === null) {
            return false;
        }
        if ($this->container['save_credit_card_info'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets self
     *
     * @return \EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \EffetB\BeezupApi\Model\LinksGetUserAccountInfoLink $self self
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets save_personal_info
     *
     * @return \EffetB\BeezupApi\Model\LinksSavePersonalInfoLink
     */
    public function getSavePersonalInfo()
    {
        return $this->container['save_personal_info'];
    }

    /**
     * Sets save_personal_info
     *
     * @param \EffetB\BeezupApi\Model\LinksSavePersonalInfoLink $save_personal_info save_personal_info
     *
     * @return $this
     */
    public function setSavePersonalInfo($save_personal_info)
    {
        $this->container['save_personal_info'] = $save_personal_info;

        return $this;
    }

    /**
     * Gets change_password
     *
     * @return \EffetB\BeezupApi\Model\LinksChangePasswordLink
     */
    public function getChangePassword()
    {
        return $this->container['change_password'];
    }

    /**
     * Sets change_password
     *
     * @param \EffetB\BeezupApi\Model\LinksChangePasswordLink $change_password change_password
     *
     * @return $this
     */
    public function setChangePassword($change_password)
    {
        $this->container['change_password'] = $change_password;

        return $this;
    }

    /**
     * Gets save_company_info
     *
     * @return \EffetB\BeezupApi\Model\LinksSaveCompanyInfoLink
     */
    public function getSaveCompanyInfo()
    {
        return $this->container['save_company_info'];
    }

    /**
     * Sets save_company_info
     *
     * @param \EffetB\BeezupApi\Model\LinksSaveCompanyInfoLink $save_company_info save_company_info
     *
     * @return $this
     */
    public function setSaveCompanyInfo($save_company_info)
    {
        $this->container['save_company_info'] = $save_company_info;

        return $this;
    }

    /**
     * Gets get_profile_picture_info
     *
     * @return \EffetB\BeezupApi\Model\LinksGetProfilePictureInfoLink
     */
    public function getGetProfilePictureInfo()
    {
        return $this->container['get_profile_picture_info'];
    }

    /**
     * Sets get_profile_picture_info
     *
     * @param \EffetB\BeezupApi\Model\LinksGetProfilePictureInfoLink $get_profile_picture_info get_profile_picture_info
     *
     * @return $this
     */
    public function setGetProfilePictureInfo($get_profile_picture_info)
    {
        $this->container['get_profile_picture_info'] = $get_profile_picture_info;

        return $this;
    }

    /**
     * Gets save_profile_picture_info
     *
     * @return \EffetB\BeezupApi\Model\LinksSaveProfilePictureInfoLink
     */
    public function getSaveProfilePictureInfo()
    {
        return $this->container['save_profile_picture_info'];
    }

    /**
     * Sets save_profile_picture_info
     *
     * @param \EffetB\BeezupApi\Model\LinksSaveProfilePictureInfoLink $save_profile_picture_info save_profile_picture_info
     *
     * @return $this
     */
    public function setSaveProfilePictureInfo($save_profile_picture_info)
    {
        $this->container['save_profile_picture_info'] = $save_profile_picture_info;

        return $this;
    }

    /**
     * Gets get_credit_card_info
     *
     * @return \EffetB\BeezupApi\Model\LinksGetCreditCardInfoLink
     */
    public function getGetCreditCardInfo()
    {
        return $this->container['get_credit_card_info'];
    }

    /**
     * Sets get_credit_card_info
     *
     * @param \EffetB\BeezupApi\Model\LinksGetCreditCardInfoLink $get_credit_card_info get_credit_card_info
     *
     * @return $this
     */
    public function setGetCreditCardInfo($get_credit_card_info)
    {
        $this->container['get_credit_card_info'] = $get_credit_card_info;

        return $this;
    }

    /**
     * Gets save_credit_card_info
     *
     * @return \EffetB\BeezupApi\Model\LinksSaveCreditCardInfoLink
     */
    public function getSaveCreditCardInfo()
    {
        return $this->container['save_credit_card_info'];
    }

    /**
     * Sets save_credit_card_info
     *
     * @param \EffetB\BeezupApi\Model\LinksSaveCreditCardInfoLink $save_credit_card_info save_credit_card_info
     *
     * @return $this
     */
    public function setSaveCreditCardInfo($save_credit_card_info)
    {
        $this->container['save_credit_card_info'] = $save_credit_card_info;

        return $this;
    }

    /**
     * Gets activate_user_account
     *
     * @return \EffetB\BeezupApi\Model\LinksActivateUserAccountLink
     */
    public function getActivateUserAccount()
    {
        return $this->container['activate_user_account'];
    }

    /**
     * Sets activate_user_account
     *
     * @param \EffetB\BeezupApi\Model\LinksActivateUserAccountLink $activate_user_account activate_user_account
     *
     * @return $this
     */
    public function setActivateUserAccount($activate_user_account)
    {
        $this->container['activate_user_account'] = $activate_user_account;

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


