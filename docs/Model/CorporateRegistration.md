# CorporateRegistration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state_of_origin** | **string** | Origin state of the corporate registration filing | [optional] 
**original_filing_date** | **string** | Date the corporate registration was originally filed. Format &#x3D; YYYY-MM-DD. Null if not available | [optional] 
**recent_filing_date** | **string** | Date of the most recent corporate registration filing. Format &#x3D; YYYY-MM-DD. Null if not available | [optional] 
**incorporated_date** | **string** | Date the business incorporated in the state. Format &#x3D; YYYY-MM-DD. Null if not available | [optional] 
**business_type** | **string** | Business type, such as LLC, Corporation, etc. Null if not available | [optional] 
**status_description** | **string** | Active businesses are classified as either \&quot;Good standing\&quot; or \&quot;Reinstated\&quot;. A description for inactive businesses is also provided; \&quot;Bankruptcy\&quot;, \&quot;Terminated\&quot;, \&quot;Revoked\&quot;, etc. | [optional] 
**profit_flag** | **string** | \&quot;Profit\&quot;, \&quot;Non-profit\&quot;, or \&quot;Unknown\&quot;. Null if not available | [optional] 
**charter_number** | **string** | Number assigned to each business by the state. Null if not available | [optional] 
**existence_term_years** | **float** | Number of years the business charter is valid. Null if not available | [optional] 
**existence_term_date** | **string** | Date the business charter is valid through. Format &#x3D; YYYY-MM-DD. Null if not available | [optional] 
**federal_tax_id** | **string** | Federal Tax Identification Number or Employer Identification Number (EIN) issued by the Federal government | [optional] 
**state_tax_id** | **string** | State Tax Identification Number issued by the state | [optional] 
**domestic_foreign_indicator** | **string** | \&quot;Domestic filing state\&quot; or \&quot;Foreign filing state\&quot; | [optional] 
**agent_name** | **string** | Name of the agent who filed the corporate registration on behalf of the business. Many states require a third-party agent, but sometimes the agent listed can be the business owner | [optional] 
**agent_address** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\AgentAddressResult**](AgentAddressResult.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


