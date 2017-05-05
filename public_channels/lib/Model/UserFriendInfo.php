<?php
/**
 * UserFriendInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer
 *
 * This API will gives you the ability to : - manage your account - manage your stores - shares your stores with your friends - manage your contracts - access to your invoices
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * UserFriendInfo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserFriendInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'userFriendInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'email' => '\Swagger\Client\Model\FriendEmail',
        'profile_picture_url' => '\Swagger\Client\Model\FriendProfilePictureUrl',
        'country_iso_code_alpha3' => '\Swagger\Client\Model\FriendCountryIsoCodeAlpha3',
        'company' => 'string',
        'what_i_do' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'userId',
        'last_name' => 'lastName',
        'first_name' => 'firstName',
        'email' => 'email',
        'profile_picture_url' => 'profilePictureUrl',
        'country_iso_code_alpha3' => 'countryIsoCodeAlpha3',
        'company' => 'company',
        'what_i_do' => 'whatIDo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'email' => 'setEmail',
        'profile_picture_url' => 'setProfilePictureUrl',
        'country_iso_code_alpha3' => 'setCountryIsoCodeAlpha3',
        'company' => 'setCompany',
        'what_i_do' => 'setWhatIDo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'email' => 'getEmail',
        'profile_picture_url' => 'getProfilePictureUrl',
        'country_iso_code_alpha3' => 'getCountryIsoCodeAlpha3',
        'company' => 'getCompany',
        'what_i_do' => 'getWhatIDo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['profile_picture_url'] = isset($data['profile_picture_url']) ? $data['profile_picture_url'] : null;
        $this->container['country_iso_code_alpha3'] = isset($data['country_iso_code_alpha3']) ? $data['country_iso_code_alpha3'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['what_i_do'] = isset($data['what_i_do']) ? $data['what_i_do'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            $invalid_properties[] = "'country_iso_code_alpha3' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalid_properties[] = "'company' can't be null";
        }
        if ($this->container['what_i_do'] === null) {
            $invalid_properties[] = "'what_i_do' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            return false;
        }
        if ($this->container['company'] === null) {
            return false;
        }
        if ($this->container['what_i_do'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id Your friend's user id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Your friend's user last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name Your friend's user first name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets email
     * @return \Swagger\Client\Model\FriendEmail
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param \Swagger\Client\Model\FriendEmail $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets profile_picture_url
     * @return \Swagger\Client\Model\FriendProfilePictureUrl
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     * @param \Swagger\Client\Model\FriendProfilePictureUrl $profile_picture_url
     * @return $this
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets country_iso_code_alpha3
     * @return \Swagger\Client\Model\FriendCountryIsoCodeAlpha3
     */
    public function getCountryIsoCodeAlpha3()
    {
        return $this->container['country_iso_code_alpha3'];
    }

    /**
     * Sets country_iso_code_alpha3
     * @param \Swagger\Client\Model\FriendCountryIsoCodeAlpha3 $country_iso_code_alpha3
     * @return $this
     */
    public function setCountryIsoCodeAlpha3($country_iso_code_alpha3)
    {
        $this->container['country_iso_code_alpha3'] = $country_iso_code_alpha3;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Your friend's user company name
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets what_i_do
     * @return string
     */
    public function getWhatIDo()
    {
        return $this->container['what_i_do'];
    }

    /**
     * Sets what_i_do
     * @param string $what_i_do Your friend's user occupation in his company
     * @return $this
     */
    public function setWhatIDo($what_i_do)
    {
        $this->container['what_i_do'] = $what_i_do;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


