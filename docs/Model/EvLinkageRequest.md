# # EvLinkageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subcode** | **string** | Your Experian account subcode for billing purposes |
**comments** | **string** | Optionally, you can send a comment along with your request; and the comment will be returned with your response. Useful for your internal ID tracking | [optional]
**bin** | **string** | Experian Business Identification Number | [optional]
**linkage_record_key** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\EvLinkageRequestLinkageRecordKey**](EvLinkageRequestLinkageRecordKey.md) |  | [optional]
**data_points** | **string[]** | The dataPoints array allows you to specify which product options you wish to request.  More than one option can be selected at a time.   Please check with your Experian Account Executive / Support Rep for guidance on which product option setting is required for your business. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
