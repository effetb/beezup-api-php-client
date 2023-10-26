<?php
/**
 * CurrentContractInfo
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
 * CurrentContractInfo Class Doc Comment
 *
 * @category Class
 * @package  EffetB\BeezupApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrentContractInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'currentContractInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trial_period_in_month' => 'int',
        'billing_period_percent_discount' => 'double',
        'discount_duration_in_month' => 'int',
        'percent_discount' => 'double',
        'offer_id' => '\EffetB\BeezupApi\Model\OfferId',
        'store_count' => '\EffetB\BeezupApi\Model\StoreCount',
        'start_utc_date' => '\DateTime',
        'commitment_calculated_finish_utc_date' => '\DateTime',
        'billing_period_in_month' => 'int',
        'fixed_price' => 'double',
        'offer_name' => 'string',
        'currency_code' => '\EffetB\BeezupApi\Model\BeezUPCommonCurrencyCode',
        'contract_id' => '\EffetB\BeezupApi\Model\ContractId',
        'commitment_period_in_month' => 'int',
        'click_included' => 'int',
        'additional_click_price' => 'double',
        'ip_user_creation' => 'string',
        'ip_user_modification' => 'string',
        'fixed_and_variable_click_info' => '\EffetB\BeezupApi\Model\FixedAndVariableClickModelInfo',
        'variable_model_info' => '\EffetB\BeezupApi\Model\VariableModelInfo',
        'is_commitment_renewal_automatically' => 'bool',
        'discount_end_utc_date' => '\DateTime',
        'is_modifiable_contract' => 'bool',
        'links' => '\EffetB\BeezupApi\Model\CurrentContractInfoLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trial_period_in_month' => 'int32',
        'billing_period_percent_discount' => 'double',
        'discount_duration_in_month' => 'int32',
        'percent_discount' => 'double',
        'offer_id' => null,
        'store_count' => null,
        'start_utc_date' => 'date-time',
        'commitment_calculated_finish_utc_date' => 'date-time',
        'billing_period_in_month' => 'int32',
        'fixed_price' => 'double',
        'offer_name' => null,
        'currency_code' => null,
        'contract_id' => null,
        'commitment_period_in_month' => 'int32',
        'click_included' => 'int32',
        'additional_click_price' => 'double',
        'ip_user_creation' => null,
        'ip_user_modification' => null,
        'fixed_and_variable_click_info' => null,
        'variable_model_info' => null,
        'is_commitment_renewal_automatically' => null,
        'discount_end_utc_date' => 'date-time',
        'is_modifiable_contract' => null,
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
        'trial_period_in_month' => 'trialPeriodInMonth',
        'billing_period_percent_discount' => 'billingPeriodPercentDiscount',
        'discount_duration_in_month' => 'discountDurationInMonth',
        'percent_discount' => 'percentDiscount',
        'offer_id' => 'offerId',
        'store_count' => 'storeCount',
        'start_utc_date' => 'startUtcDate',
        'commitment_calculated_finish_utc_date' => 'commitmentCalculatedFinishUtcDate',
        'billing_period_in_month' => 'billingPeriodInMonth',
        'fixed_price' => 'fixedPrice',
        'offer_name' => 'offerName',
        'currency_code' => 'currencyCode',
        'contract_id' => 'contractId',
        'commitment_period_in_month' => 'commitmentPeriodInMonth',
        'click_included' => 'clickIncluded',
        'additional_click_price' => 'additionalClickPrice',
        'ip_user_creation' => 'ipUserCreation',
        'ip_user_modification' => 'ipUserModification',
        'fixed_and_variable_click_info' => 'fixedAndVariableClickInfo',
        'variable_model_info' => 'variableModelInfo',
        'is_commitment_renewal_automatically' => 'isCommitmentRenewalAutomatically',
        'discount_end_utc_date' => 'discountEndUtcDate',
        'is_modifiable_contract' => 'isModifiableContract',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trial_period_in_month' => 'setTrialPeriodInMonth',
        'billing_period_percent_discount' => 'setBillingPeriodPercentDiscount',
        'discount_duration_in_month' => 'setDiscountDurationInMonth',
        'percent_discount' => 'setPercentDiscount',
        'offer_id' => 'setOfferId',
        'store_count' => 'setStoreCount',
        'start_utc_date' => 'setStartUtcDate',
        'commitment_calculated_finish_utc_date' => 'setCommitmentCalculatedFinishUtcDate',
        'billing_period_in_month' => 'setBillingPeriodInMonth',
        'fixed_price' => 'setFixedPrice',
        'offer_name' => 'setOfferName',
        'currency_code' => 'setCurrencyCode',
        'contract_id' => 'setContractId',
        'commitment_period_in_month' => 'setCommitmentPeriodInMonth',
        'click_included' => 'setClickIncluded',
        'additional_click_price' => 'setAdditionalClickPrice',
        'ip_user_creation' => 'setIpUserCreation',
        'ip_user_modification' => 'setIpUserModification',
        'fixed_and_variable_click_info' => 'setFixedAndVariableClickInfo',
        'variable_model_info' => 'setVariableModelInfo',
        'is_commitment_renewal_automatically' => 'setIsCommitmentRenewalAutomatically',
        'discount_end_utc_date' => 'setDiscountEndUtcDate',
        'is_modifiable_contract' => 'setIsModifiableContract',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trial_period_in_month' => 'getTrialPeriodInMonth',
        'billing_period_percent_discount' => 'getBillingPeriodPercentDiscount',
        'discount_duration_in_month' => 'getDiscountDurationInMonth',
        'percent_discount' => 'getPercentDiscount',
        'offer_id' => 'getOfferId',
        'store_count' => 'getStoreCount',
        'start_utc_date' => 'getStartUtcDate',
        'commitment_calculated_finish_utc_date' => 'getCommitmentCalculatedFinishUtcDate',
        'billing_period_in_month' => 'getBillingPeriodInMonth',
        'fixed_price' => 'getFixedPrice',
        'offer_name' => 'getOfferName',
        'currency_code' => 'getCurrencyCode',
        'contract_id' => 'getContractId',
        'commitment_period_in_month' => 'getCommitmentPeriodInMonth',
        'click_included' => 'getClickIncluded',
        'additional_click_price' => 'getAdditionalClickPrice',
        'ip_user_creation' => 'getIpUserCreation',
        'ip_user_modification' => 'getIpUserModification',
        'fixed_and_variable_click_info' => 'getFixedAndVariableClickInfo',
        'variable_model_info' => 'getVariableModelInfo',
        'is_commitment_renewal_automatically' => 'getIsCommitmentRenewalAutomatically',
        'discount_end_utc_date' => 'getDiscountEndUtcDate',
        'is_modifiable_contract' => 'getIsModifiableContract',
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
        $this->container['trial_period_in_month'] = isset($data['trial_period_in_month']) ? $data['trial_period_in_month'] : null;
        $this->container['billing_period_percent_discount'] = isset($data['billing_period_percent_discount']) ? $data['billing_period_percent_discount'] : null;
        $this->container['discount_duration_in_month'] = isset($data['discount_duration_in_month']) ? $data['discount_duration_in_month'] : null;
        $this->container['percent_discount'] = isset($data['percent_discount']) ? $data['percent_discount'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['store_count'] = isset($data['store_count']) ? $data['store_count'] : null;
        $this->container['start_utc_date'] = isset($data['start_utc_date']) ? $data['start_utc_date'] : null;
        $this->container['commitment_calculated_finish_utc_date'] = isset($data['commitment_calculated_finish_utc_date']) ? $data['commitment_calculated_finish_utc_date'] : null;
        $this->container['billing_period_in_month'] = isset($data['billing_period_in_month']) ? $data['billing_period_in_month'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['offer_name'] = isset($data['offer_name']) ? $data['offer_name'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['commitment_period_in_month'] = isset($data['commitment_period_in_month']) ? $data['commitment_period_in_month'] : null;
        $this->container['click_included'] = isset($data['click_included']) ? $data['click_included'] : null;
        $this->container['additional_click_price'] = isset($data['additional_click_price']) ? $data['additional_click_price'] : null;
        $this->container['ip_user_creation'] = isset($data['ip_user_creation']) ? $data['ip_user_creation'] : null;
        $this->container['ip_user_modification'] = isset($data['ip_user_modification']) ? $data['ip_user_modification'] : null;
        $this->container['fixed_and_variable_click_info'] = isset($data['fixed_and_variable_click_info']) ? $data['fixed_and_variable_click_info'] : null;
        $this->container['variable_model_info'] = isset($data['variable_model_info']) ? $data['variable_model_info'] : null;
        $this->container['is_commitment_renewal_automatically'] = isset($data['is_commitment_renewal_automatically']) ? $data['is_commitment_renewal_automatically'] : null;
        $this->container['discount_end_utc_date'] = isset($data['discount_end_utc_date']) ? $data['discount_end_utc_date'] : null;
        $this->container['is_modifiable_contract'] = isset($data['is_modifiable_contract']) ? $data['is_modifiable_contract'] : null;
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

        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets trial_period_in_month
     *
     * @return int
     */
    public function getTrialPeriodInMonth()
    {
        return $this->container['trial_period_in_month'];
    }

    /**
     * Sets trial_period_in_month
     *
     * @param int $trial_period_in_month The trial period in month
     *
     * @return $this
     */
    public function setTrialPeriodInMonth($trial_period_in_month)
    {
        $this->container['trial_period_in_month'] = $trial_period_in_month;

        return $this;
    }

    /**
     * Gets billing_period_percent_discount
     *
     * @return double
     */
    public function getBillingPeriodPercentDiscount()
    {
        return $this->container['billing_period_percent_discount'];
    }

    /**
     * Sets billing_period_percent_discount
     *
     * @param double $billing_period_percent_discount The percent discount related to the billing period
     *
     * @return $this
     */
    public function setBillingPeriodPercentDiscount($billing_period_percent_discount)
    {
        $this->container['billing_period_percent_discount'] = $billing_period_percent_discount;

        return $this;
    }

    /**
     * Gets discount_duration_in_month
     *
     * @return int
     */
    public function getDiscountDurationInMonth()
    {
        return $this->container['discount_duration_in_month'];
    }

    /**
     * Sets discount_duration_in_month
     *
     * @param int $discount_duration_in_month The discount duration in month
     *
     * @return $this
     */
    public function setDiscountDurationInMonth($discount_duration_in_month)
    {
        $this->container['discount_duration_in_month'] = $discount_duration_in_month;

        return $this;
    }

    /**
     * Gets percent_discount
     *
     * @return double
     */
    public function getPercentDiscount()
    {
        return $this->container['percent_discount'];
    }

    /**
     * Sets percent_discount
     *
     * @param double $percent_discount The percent of the discount
     *
     * @return $this
     */
    public function setPercentDiscount($percent_discount)
    {
        $this->container['percent_discount'] = $percent_discount;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return \EffetB\BeezupApi\Model\OfferId
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param \EffetB\BeezupApi\Model\OfferId $offer_id offer_id
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets store_count
     *
     * @return \EffetB\BeezupApi\Model\StoreCount
     */
    public function getStoreCount()
    {
        return $this->container['store_count'];
    }

    /**
     * Sets store_count
     *
     * @param \EffetB\BeezupApi\Model\StoreCount $store_count store_count
     *
     * @return $this
     */
    public function setStoreCount($store_count)
    {
        $this->container['store_count'] = $store_count;

        return $this;
    }

    /**
     * Gets start_utc_date
     *
     * @return \DateTime
     */
    public function getStartUtcDate()
    {
        return $this->container['start_utc_date'];
    }

    /**
     * Sets start_utc_date
     *
     * @param \DateTime $start_utc_date The start date of your contract
     *
     * @return $this
     */
    public function setStartUtcDate($start_utc_date)
    {
        $this->container['start_utc_date'] = $start_utc_date;

        return $this;
    }

    /**
     * Gets commitment_calculated_finish_utc_date
     *
     * @return \DateTime
     */
    public function getCommitmentCalculatedFinishUtcDate()
    {
        return $this->container['commitment_calculated_finish_utc_date'];
    }

    /**
     * Sets commitment_calculated_finish_utc_date
     *
     * @param \DateTime $commitment_calculated_finish_utc_date The calculated end date of commitment
     *
     * @return $this
     */
    public function setCommitmentCalculatedFinishUtcDate($commitment_calculated_finish_utc_date)
    {
        $this->container['commitment_calculated_finish_utc_date'] = $commitment_calculated_finish_utc_date;

        return $this;
    }

    /**
     * Gets billing_period_in_month
     *
     * @return int
     */
    public function getBillingPeriodInMonth()
    {
        return $this->container['billing_period_in_month'];
    }

    /**
     * Sets billing_period_in_month
     *
     * @param int $billing_period_in_month The billing period in month
     *
     * @return $this
     */
    public function setBillingPeriodInMonth($billing_period_in_month)
    {
        $this->container['billing_period_in_month'] = $billing_period_in_month;

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
     * @param double $fixed_price The fixed price of your contract
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets offer_name
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string $offer_name The offer name based on /offers
     *
     * @return $this
     */
    public function setOfferName($offer_name)
    {
        $this->container['offer_name'] = $offer_name;

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
     * Gets contract_id
     *
     * @return \EffetB\BeezupApi\Model\ContractId
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param \EffetB\BeezupApi\Model\ContractId $contract_id contract_id
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets commitment_period_in_month
     *
     * @return int
     */
    public function getCommitmentPeriodInMonth()
    {
        return $this->container['commitment_period_in_month'];
    }

    /**
     * Sets commitment_period_in_month
     *
     * @param int $commitment_period_in_month The commitment period in month
     *
     * @return $this
     */
    public function setCommitmentPeriodInMonth($commitment_period_in_month)
    {
        $this->container['commitment_period_in_month'] = $commitment_period_in_month;

        return $this;
    }

    /**
     * Gets click_included
     *
     * @return int
     */
    public function getClickIncluded()
    {
        return $this->container['click_included'];
    }

    /**
     * Sets click_included
     *
     * @param int $click_included The click included
     *
     * @return $this
     */
    public function setClickIncluded($click_included)
    {
        $this->container['click_included'] = $click_included;

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
     * @param double $additional_click_price Additional click price
     *
     * @return $this
     */
    public function setAdditionalClickPrice($additional_click_price)
    {
        $this->container['additional_click_price'] = $additional_click_price;

        return $this;
    }

    /**
     * Gets ip_user_creation
     *
     * @return string
     */
    public function getIpUserCreation()
    {
        return $this->container['ip_user_creation'];
    }

    /**
     * Sets ip_user_creation
     *
     * @param string $ip_user_creation The IP of the user who creates the contract
     *
     * @return $this
     */
    public function setIpUserCreation($ip_user_creation)
    {
        $this->container['ip_user_creation'] = $ip_user_creation;

        return $this;
    }

    /**
     * Gets ip_user_modification
     *
     * @return string
     */
    public function getIpUserModification()
    {
        return $this->container['ip_user_modification'];
    }

    /**
     * Sets ip_user_modification
     *
     * @param string $ip_user_modification The IP of the user who modified the contract
     *
     * @return $this
     */
    public function setIpUserModification($ip_user_modification)
    {
        $this->container['ip_user_modification'] = $ip_user_modification;

        return $this;
    }

    /**
     * Gets fixed_and_variable_click_info
     *
     * @return \EffetB\BeezupApi\Model\FixedAndVariableClickModelInfo
     */
    public function getFixedAndVariableClickInfo()
    {
        return $this->container['fixed_and_variable_click_info'];
    }

    /**
     * Sets fixed_and_variable_click_info
     *
     * @param \EffetB\BeezupApi\Model\FixedAndVariableClickModelInfo $fixed_and_variable_click_info fixed_and_variable_click_info
     *
     * @return $this
     */
    public function setFixedAndVariableClickInfo($fixed_and_variable_click_info)
    {
        $this->container['fixed_and_variable_click_info'] = $fixed_and_variable_click_info;

        return $this;
    }

    /**
     * Gets variable_model_info
     *
     * @return \EffetB\BeezupApi\Model\VariableModelInfo
     */
    public function getVariableModelInfo()
    {
        return $this->container['variable_model_info'];
    }

    /**
     * Sets variable_model_info
     *
     * @param \EffetB\BeezupApi\Model\VariableModelInfo $variable_model_info variable_model_info
     *
     * @return $this
     */
    public function setVariableModelInfo($variable_model_info)
    {
        $this->container['variable_model_info'] = $variable_model_info;

        return $this;
    }

    /**
     * Gets is_commitment_renewal_automatically
     *
     * @return bool
     */
    public function getIsCommitmentRenewalAutomatically()
    {
        return $this->container['is_commitment_renewal_automatically'];
    }

    /**
     * Sets is_commitment_renewal_automatically
     *
     * @param bool $is_commitment_renewal_automatically Is commitment is automatically renewed
     *
     * @return $this
     */
    public function setIsCommitmentRenewalAutomatically($is_commitment_renewal_automatically)
    {
        $this->container['is_commitment_renewal_automatically'] = $is_commitment_renewal_automatically;

        return $this;
    }

    /**
     * Gets discount_end_utc_date
     *
     * @return \DateTime
     */
    public function getDiscountEndUtcDate()
    {
        return $this->container['discount_end_utc_date'];
    }

    /**
     * Sets discount_end_utc_date
     *
     * @param \DateTime $discount_end_utc_date The end of your discount
     *
     * @return $this
     */
    public function setDiscountEndUtcDate($discount_end_utc_date)
    {
        $this->container['discount_end_utc_date'] = $discount_end_utc_date;

        return $this;
    }

    /**
     * Gets is_modifiable_contract
     *
     * @return bool
     */
    public function getIsModifiableContract()
    {
        return $this->container['is_modifiable_contract'];
    }

    /**
     * Sets is_modifiable_contract
     *
     * @param bool $is_modifiable_contract Is the contract is modifiable ?
     *
     * @return $this
     */
    public function setIsModifiableContract($is_modifiable_contract)
    {
        $this->container['is_modifiable_contract'] = $is_modifiable_contract;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EffetB\BeezupApi\Model\CurrentContractInfoLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EffetB\BeezupApi\Model\CurrentContractInfoLinks $links links
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


