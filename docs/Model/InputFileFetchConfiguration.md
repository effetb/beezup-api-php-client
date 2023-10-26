# InputFileFetchConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | Indicate the Uri of the file. (http, https, ftp, ftps, sftp are allowed) | 
**credential** | [**\EffetB\BeezupApi\Model\Credential**](Credential.md) |  | [optional] 
**download_catalog_strategy** | [**\EffetB\BeezupApi\Model\DownloadCatalogStrategy**](DownloadCatalogStrategy.md) |  | 
**compression_format_strategy** | [**\EffetB\BeezupApi\Model\CompressionFormatStrategy**](CompressionFormatStrategy.md) |  | [optional] 
**compressed_relative_path** | **string** | Indicate the relative path in the compressed file | [optional] 
**download_timeout** | **int** | Indicate the download time out in second | [optional] [default to 30]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


