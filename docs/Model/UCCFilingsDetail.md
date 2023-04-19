# UCCFilingsDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_filed** | [**\DateTime**](\DateTime.md) | Date of the UCC Filing. ISO 8601 Format &#x3D; YYYY-MM-DD | [optional] 
**legal_type** | **string** | \&quot;UCC\&quot; | [optional] 
**legal_action** | **string** | \&quot;Original Filing\&quot;, \&quot;Amended\&quot;, \&quot;Assignment\&quot;, \&quot;Partial Release\&quot;, \&quot;Full Release\&quot;, \&quot;Released\&quot;, \&quot;Terminated\&quot;, \&quot;Continuation\&quot; | [optional] 
**document_number** | **string** | Document number of the current action | [optional] 
**filing_location** | **string** | State or court where the current action was filed | [optional] 
**collateral_codes** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\CollateralCode[]**](CollateralCode.md) | Array containing collateral codes and definitions. &#x3D; Blanket Lien, 0 Other, 1 Accounts Receivable, 4 Machinery and Equipment, 5 Furniture and Fixtures, 9 Hereafter Acquired Property, 6 Inventory, H Real Estate, Q Vehicles, + Consumer Goods, E Proceeds, ! Intangibles, F Contract Rights, L Leases, C Crops, 7 Livestock | [optional] 
**secured_party** | **string** | The party who has secured the interest of the pledged collateral by filing the UCC | [optional] 
**assignee** | **string** | The party to whom the security agreement has been assigned to | [optional] 
**owner** | **string** | Owner | [optional] 
**customer_dispute_indicator** | **bool** | If true, indicates that there is a customer dispute on file | [optional] 
**original_ucc_filings_info** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\UCCFilingsDetailOriginalUCCFilingsInfo**](UCCFilingsDetailOriginalUCCFilingsInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


