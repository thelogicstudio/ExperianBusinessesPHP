# BusinessFacts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_established_date** | **string** | Date the file was established with Experian. Format &#x3D; YYYY-MM-DD | [optional] 
**sic_codes** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\SICCode[]**](SICCode.md) | Array of objects representing SIC codes for the business each with a code and description | [optional] 
**naics_codes** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\NAICSCode[]**](NAICSCode.md) | Array of objects representing NAICS codes for the business each with a code and description | [optional] 
**stock_exchange** | **string** | What stock exchange the stock is offered on (e.g. New York Stock Exchange) | [optional] 
**ticker_symbol** | **string** | Stock exchange ticker symbol | [optional] 
**file_established_flag** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsFileEstablishedFlag**](BusinessFactsFileEstablishedFlag.md) |  | [optional] 
**state_of_incorporation** | **string** | US State in which the business is incorporated | [optional] 
**date_of_incorporation** | **string** | Date in which the business was incorporated (MM/DD/YYYY) | [optional] 
**business_type** | **string** | Business type, such as LLC, Corporation, etc. (if not available will be a null value) | [optional] 
**years_in_business_indicator** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsYearsInBusinessIndicator**](BusinessFactsYearsInBusinessIndicator.md) |  | [optional] 
**years_in_business** | **float** | Number of years in business | [optional] 
**years_on_file** | **float** | Years on file | [optional] 
**fortune1000** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResultFortune1000**](BusinessFactsResultFortune1000.md) |  | [optional] 
**corporate_linkage_type** | **string** | &#39;Headquarters/Parent&#39;, &#39;Branch&#39;, &#39;Subsidiary&#39;, or &#39;Stand alone business&#39; | [optional] 
**executive_information** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ExecutiveInformation[]**](ExecutiveInformation.md) | Key company contacts including owners, officers, and directors | [optional] 
**sales_size_code** | **string** | A &#x3D; Under $500K, B &#x3D; $500K to $999.9K, C &#x3D; $1M to $4.9M, D &#x3D; $5M to $9.9M, F &#x3D; $10M to $24.9M,  G &#x3D; $25M to $74.9M, H &#x3D; $75M to $199.9M, I &#x3D; $200M to $499.9M, J &#x3D; $500M to $999.9M , K &#x3D; $1B+ | [optional] 
**sales_revenue** | **float** | Estimated sales revenue for the business | [optional] 
**employee_size_code** | **string** | A &#x3D; 1-4, B &#x3D; 5-9, C &#x3D; 10-19, D &#x3D; 20-49, E &#x3D; 50-99, F &#x3D; 100-249, G &#x3D; 250-499, H &#x3D; 500-999, I &#x3D; 1000+ | [optional] 
**employee_size** | **float** | Estimated number of employees | [optional] 
**location_employee_size_code** | **string** | A &#x3D; 1-4, B &#x3D; 5-9, C &#x3D; 10-19, D &#x3D; 20-49, E &#x3D; 50-99, F &#x3D; 100-249, G &#x3D; 250-499, H &#x3D; 500-999, I &#x3D; 1000+ | [optional] 
**location_employee_size** | **float** | Estimated number of employees at the inquired upon location | [optional] 
**public_indicator** | **bool** | If true indicates the business is publicly traded | [optional] 
**non_profit_indicator** | **bool** | If true indicates the business is a non-profit entity | [optional] 
**location_sales_revenue** | **string** | Location Sales Revenue | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


