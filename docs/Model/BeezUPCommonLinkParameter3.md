# BeezUPCommonLinkParameter3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** | The label corresponding to the link parameter. This label is automatically translated based on the Accept-Language http header. | [optional] 
**value** | **object** | The value of the parameter. It can be an integer a string or an object. | [optional] 
**required** | **bool** |  | [optional] [default to false]
**in** | [**\EffetB\BeezupApi\Model\BeezUPCommonParameterIn**](BeezUPCommonParameterIn.md) |  | 
**type** | [**\EffetB\BeezupApi\Model\BeezUPCommonParameterType**](BeezUPCommonParameterType.md) |  | [optional] 
**lov_link** | [**\EffetB\BeezupApi\Model\BeezUPCommonLOVLink3**](BeezUPCommonLOVLink3.md) |  | [optional] 
**lov_required** | **bool** | If true, you MUST indicate a value from the list of values otherwise it&#39;s a freetext | [optional] 
**description** | **string** | description of the parameter | [optional] 
**schema** | **string** | schema of the parameter | [optional] 
**properties** | [**map[string,\EffetB\BeezupApi\Model\BeezUPCommonLinkParameterProperty3]**](BeezUPCommonLinkParameterProperty3.md) | If the parameter is an object with flexible properties (additionProperties/dictionary), we will describe the properties of the object. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


