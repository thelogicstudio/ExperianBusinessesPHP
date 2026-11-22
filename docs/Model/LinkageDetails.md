# # LinkageDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**record_key** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\LinkageKeys**](LinkageKeys.md) |  | [optional]
**linkage_type** | **string** | \&quot;H\&quot; &#x3D; Headquarters, \&quot;U\&quot; &#x3D; Ultimate Parent, \&quot;B\&quot; &#x3D; Branch | [optional]
**linkage_level** | **float** | Indicates how many parent companies are above the business in the family tree. For example, an Ultimate Parent will return linkageLevel &#x3D; 0. An Ultimate Parent&#39;s immediate subsidiaries will return linkageLevel &#x3D; 1 | [optional]
**linkage_src** | **string** | Linkage source code | [optional]
**bin** | **string** | 9-digit Business Identification Number (BIN) | [optional]
**parent_bin** | **string** | 9-digit Business Identification Number (BIN) for the immediate Parent of the business | [optional]
**ultimate_parent_bin** | **string** | 9-digit Business Identification Number (BIN) for the Ultimate Parent of the business | [optional]
**domestic_ult_parent_bin** | **string** | 9-digit Business Identification Number (BIN) for the Domestic Ultimate Parent of the business | [optional]
**hq_indicator** | **bool** | If true indicates this BIN is a legal entity/headquarter BIN.  If hqIndicator is true, branchIndicator must be false | [optional]
**hq_branch_code** | **string** | headquarter/branch code. Value \&quot;H\&quot; indicates Headquarter and \&quot;B\&quot; indicates Branch. | [optional]
**activity_flag** | **string** | Activity flag | [optional]
**parent_indicator** | **bool** | If true indicates the BIN for this linkage record is the Parent of another entity | [optional]
**ultimate_parent_indicator** | **bool** | If true indicates the BIN for this linkage record is an Ultimate Parent BIN | [optional]
**subsidiary_indicator** | **bool** | If true indicates the BIN for this linkage record is a subsidiary of another entity | [optional]
**branch_indicator** | **bool** | If true indicates the BIN for this linkage record is a \&quot;branch\&quot; located under a legal entity/headquarter BIN | [optional]
**version** | **string** | Indicates if the linkage record is in the current version of the linkage database | [optional]
**create_date** | **string** | Linkage record create date | [optional]
**updated_date** | **string** | Linkage updated date | [optional]
**reported_date** | **string** | Linkage reported date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
