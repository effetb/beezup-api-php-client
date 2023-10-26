# ContractCommitmentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commitment_calculated_finish_date** | [**\DateTime**](\DateTime.md) | The commitment end date related to the offer | [optional] 
**new_contract_start_date** | [**\DateTime**](\DateTime.md) | The start date related to the offer | [optional] 
**commitment_period_in_month** | **int** | The commitment period in month related to the offer | [optional] 
**trial_period_in_month** | **int** | The trial period in month related to the offer | [optional] 
**trial_period_finish_date** | [**\DateTime**](\DateTime.md) | The trial period end date related to the offer | [optional] 
**payment_delay_in_days** | **int** | The payment delay in days related to the offer | [optional] 
**offer_id** | [**\EffetB\BeezupApi\Model\OfferId**](OfferId.md) |  | [optional] 
**offer_name** | **string** | The offer Name | [optional] 
**current_contract_id** | **string** | Your current contract id | [optional] 
**commercial_user_id** | **string** | Your current commercial user id | [optional] 
**model** | **string** | Interal usage: Old offer type. The model description | [optional] 
**current_contract_termination_date** | [**\DateTime**](\DateTime.md) | The current contract termination date | [optional] 
**requested_payment_method** | [**\EffetB\BeezupApi\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**current_customer_payment_method** | [**\EffetB\BeezupApi\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**contract_type** | **int** | Internal usage: Old offer type. Your contract type | [optional] 
**is_model_must_be_transmitted_in_new_contract** | **bool** | Internal usage: Old offer type. Is the current contract model needs to be converted into a new contract type | [optional] 
**fixed_and_variable_click_info** | [**\EffetB\BeezupApi\Model\FixedAndVariableClickModelInfo**](FixedAndVariableClickModelInfo.md) |  | [optional] 
**variable_model_info** | [**\EffetB\BeezupApi\Model\VariableModelInfo**](VariableModelInfo.md) |  | [optional] 
**payment_method_authorized** | [**\EffetB\BeezupApi\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**coupon_offer_code** | [**\EffetB\BeezupApi\Model\CouponOfferCode**](CouponOfferCode.md) |  | [optional] 
**commercial_creator_user_id** | **string** | The commercial that is responsible of the creation of your account | [optional] 
**min_billing_period_in_months** | **int** | The minimum billing period in month authorized for this offer. | [optional] 
**is_customer_wants_to_terminate_his_contract** | **bool** | If true, this means you want to leave us and that&#39;s sad... :&#39;-( | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


