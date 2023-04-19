# TheLogicStudio\ExperianBusinessesPHP\BusinessInformationServicesApi

All URIs are relative to *https://sandbox-us-api.experian.com/businessinformation/businesses*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregates**](BusinessInformationServicesApi.md#aggregates) | **POST** /v1/aggregates | BizAggs
[**bankruptcies**](BusinessInformationServicesApi.md#bankruptcies) | **POST** /v1/bankruptcies | Business Bankruptcies
[**bci**](BusinessInformationServicesApi.md#bci) | **POST** /v1/bci | Business Compliance Insight JSON
[**bcihtml**](BusinessInformationServicesApi.md#bcihtml) | **POST** /v1/bci/html | Business Compliance Insight HTML
[**bcipdf**](BusinessInformationServicesApi.md#bcipdf) | **POST** /v1/bci/pdf | Business Compliance Insight PDF
[**businesscontacts**](BusinessInformationServicesApi.md#businesscontacts) | **POST** /v1/businesscontacts | Business Contacts
[**collections**](BusinessInformationServicesApi.md#collections) | **POST** /v1/collections | Commercial Collections
[**corporateLinkage**](BusinessInformationServicesApi.md#corporateLinkage) | **POST** /v1/corporatelinkage | Corporate Linkage
[**corporateRegistration**](BusinessInformationServicesApi.md#corporateRegistration) | **POST** /v1/corporateregistrations | Corporate Registrations
[**creditstatus**](BusinessInformationServicesApi.md#creditstatus) | **POST** /v1/creditstatus | Commercial Credit Status
[**facts**](BusinessInformationServicesApi.md#facts) | **POST** /v1/facts | Business Facts
[**fraudShields**](BusinessInformationServicesApi.md#fraudShields) | **POST** /v1/fraudshields | Commercial Fraud Shields
[**governmentdetails**](BusinessInformationServicesApi.md#governmentdetails) | **POST** /v1/governmentdetails | Government Details
[**headers**](BusinessInformationServicesApi.md#headers) | **POST** /v1/headers | Business Headers
[**intelliscoreplus**](BusinessInformationServicesApi.md#intelliscoreplus) | **POST** /v1/reports/intelliscoreplus | Intelliscore Plus JSON
[**intelliscoreplushtml**](BusinessInformationServicesApi.md#intelliscoreplushtml) | **POST** /v1/reports/intelliscoreplus/html | Intelliscore Plus HTML
[**intelliscorepluspdf**](BusinessInformationServicesApi.md#intelliscorepluspdf) | **POST** /v1/reports/intelliscoreplus/pdf | Intelliscore Plus PDF
[**istwatch**](BusinessInformationServicesApi.md#istwatch) | **POST** /v1/istwatch | IST Watch
[**judgments**](BusinessInformationServicesApi.md#judgments) | **POST** /v1/judgments | Business Judgments
[**legalCollectionSummaries**](BusinessInformationServicesApi.md#legalCollectionSummaries) | **POST** /v1/legalcollectionsummaries | Legal Filings and Collections Summaries
[**liens**](BusinessInformationServicesApi.md#liens) | **POST** /v1/liens | Business Liens
[**multisegments**](BusinessInformationServicesApi.md#multisegments) | **POST** /v1/multisegments | MultiSegments. Request a la carte segments in a single call
[**premierprofiles**](BusinessInformationServicesApi.md#premierprofiles) | **POST** /v1/reports/premierprofiles | Premier Profiles JSON
[**premierprofileshtml**](BusinessInformationServicesApi.md#premierprofileshtml) | **POST** /v1/reports/premierprofiles/html | Premier Profiles HTML
[**premierprofilespdf**](BusinessInformationServicesApi.md#premierprofilespdf) | **POST** /v1/reports/premierprofiles/pdf | Premier Profiles PDF
[**quicksearch**](BusinessInformationServicesApi.md#quicksearch) | **POST** /v1/quicksearch | Quick Search.  Our secondary search method
[**reverseaddresses**](BusinessInformationServicesApi.md#reverseaddresses) | **POST** /v1/reverseaddresses | Reverse Addresses
[**reversephones**](BusinessInformationServicesApi.md#reversephones) | **POST** /v1/reversephones | Reverse Phones
[**reversetaxids**](BusinessInformationServicesApi.md#reversetaxids) | **POST** /v1/reversetaxids | Reverse TaxIDs
[**riskdashboards**](BusinessInformationServicesApi.md#riskdashboards) | **POST** /v1/riskdashboards | Commercial Risk Dashboards
[**scores**](BusinessInformationServicesApi.md#scores) | **POST** /v1/scores | Commercial Scores
[**scoressearch**](BusinessInformationServicesApi.md#scoressearch) | **POST** /v1/scores/search | Scores Auto Search
[**search**](BusinessInformationServicesApi.md#search) | **POST** /v1/search | Advanced Business Search.  The primary search method
[**trades**](BusinessInformationServicesApi.md#trades) | **POST** /v1/trades | Commercial Trades
[**uccfilings**](BusinessInformationServicesApi.md#uccfilings) | **POST** /v1/uccfilings | UCC Filings


# **aggregates**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse aggregates($body, $content_type)

BizAggs

<p>Experian commercial aggregates, or BizAggs, represent over 400 unique data  attributes that represent the building blocks of commercial credit.  The standard BizAggs include aggregates based on tradlines, bankruptcies, liens, judgments, UCC filings, collections firmographics, and inquiries against the business.  The BizAggs API allows for real-time access to the BizAggs via RESTful API, allowing you to power custom models and make decisions in an instant.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest | Business Aggregates Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->aggregates($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->aggregates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest**](../Model/BusinessAggregatesRequest.md)| Business Aggregates Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse**](../Model/BusinessAggregatesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankruptcies**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse bankruptcies($body, $content_type)

Business Bankruptcies

<p>The Bankruptcies API can return both a summary level view of business bankruptcies and also details on each bankruptcy on file for a business, including Chapter 7, 11, and 13 bankruptcies. New bankruptcy filings are added to the Experian database within 24 hours, and bankruptcies remain on Experian's file for 9 years and 9 months.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest | Business Bankruptcies Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->bankruptcies($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->bankruptcies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest**](../Model/BusinessBankruptcyDataRequest.md)| Business Bankruptcies Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse**](../Model/BusinessBankruptcyResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bci**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse bci($body, $content_type)

Business Compliance Insight JSON

<p>The Business Compliance Insight API is used for know-your-customer (KYC) investigations to learn more about the business, who runs it, and who they are affiliated with.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest | BCI Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->bci($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->bci: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest**](../Model/BCIRequest.md)| BCI Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse**](../Model/BCIResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bcihtml**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML bcihtml($body, $content_type)

Business Compliance Insight HTML

<p>The Business Compliance Insight API is used for know-your-customer (KYC) investigations to learn more about the business, who runs it, and who they are affiliated with.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest | BCI Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->bcihtml($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->bcihtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest**](../Model/BCIRequest.md)| BCI Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML**](../Model/BCIResponseHTML.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bcipdf**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF bcipdf($body, $content_type)

Business Compliance Insight PDF

<p>The Business Compliance Insight API is used for know-your-customer (KYC) investigations to learn more about the business, who runs it, and who they are affiliated with.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest | BCI Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->bcipdf($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->bcipdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest**](../Model/BCIRequest.md)| BCI Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF**](../Model/BCIResponsePDF.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businesscontacts**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse businesscontacts($body, $content_type)

Business Contacts

<p>The Business Contacts API provides a high-level view of business  to consumer linkage for contacts affiliated with the business. The  API will identify any known business owners/principals of the  business, including both individual owners and company owners, as  well as the known contact titles of those individuals at the business.   Lastly, the API also returns a list of other businesses those contacts  are affiliated with.  The Business Contacts API is useful in identifying potentially undisclosed beneficial owners, as well as providing business  affiliations and contact affiliations to support fraud, regulatory,  or compliance investigations.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest | Business Data Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->businesscontacts($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->businesscontacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest**](../Model/BusinessContactsRequest.md)| Business Data Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse**](../Model/BusinessContactsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **collections**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse collections($body, $content_type)

Commercial Collections

Experian's commercial collections database is the largest in the industry and contains information contributed by collection agencies to Experian.  The Collections API returns both summary and detailed information of collections activity on file for the business. Collections activity remains on Experian's file for up to 6 years.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest | Commercial Collections Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->collections($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->collections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest**](../Model/BusinessCollectionsRequest.md)| Commercial Collections Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse**](../Model/BusinessCollectionsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **corporateLinkage**
> \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse corporateLinkage($body, $content_type)

Corporate Linkage

<p>Use the Corporate Linkage API to make better decisions through the identification of relationships within a corporate family tree. Corporate Linkage identifies financial and legal relationships between businesses of all sizes, including small and midsize businesses. Corporate Linkage enhances decision making by revealing parent company and ultimate parent relationships, allowing risk managers to assess overall corporate exposure, and to help meet \"Know Your Customer\" requirements.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest | Corporate Linkage Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->corporateLinkage($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->corporateLinkage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest**](../Model/BusinessCorporateLinkageRequest.md)| Corporate Linkage Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse**](../Model/CorporateLinkageResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **corporateRegistration**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse corporateRegistration($body, $content_type)

Corporate Registrations

<p>The Corporate Registrations API identifies corporate filing information from the Secretary of State including state of origin, business structure (Corporation, LLC, etc.), date of incorporation, current status, most recent filing date, charter number, and the name and address of the registered agent.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest | Corporate Registrations Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->corporateRegistration($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->corporateRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest**](../Model/BusinessCorporateRegistrationsRequest.md)| Corporate Registrations Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse**](../Model/BusinessCorporateRegistrationResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditstatus**
> \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse creditstatus($body, $content_type)

Commercial Credit Status

<p>The Credit Status API can be used to check a business against several key credit attributes, including combined tradeline count, combined account balance, current days-beyond-terms (DBT), combined recent high credit amount, the number of years on Experian's commercial database, and the number of recent credit inquiries made on the business.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest | Commercial Credit Status Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->creditstatus($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->creditstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest**](../Model/BusinessDataRequest.md)| Commercial Credit Status Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse**](../Model/CreditStatusResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facts**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse facts($body, $content_type)

Business Facts

<p>Find key operational and firmographic details about business with the Business Facts API, including industry (SIC and NAICS codes), incorporation and public company status, number of years on file, annual sales and number of employees, and the names of key executive contacts.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest | Business Facts Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->facts($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->facts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest**](../Model/BusinessDataRequest.md)| Business Facts Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse**](../Model/BusinessFactsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fraudShields**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse fraudShields($body, $content_type)

Commercial Fraud Shields

<p>Experian's Commercial Fraud Shield provides a series of checks to screen for potential indicators of fraudulent activity. These checks examine potential listings on the OFAC warning list, whether or not the business is currently active, if the business is a previous victim of fraud, and whether or not there are potential inconsistencies between the business name, address, phone and Tax ID Number.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest | Commercial Fraud Shields Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->fraudShields($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->fraudShields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest**](../Model/BusinessDataRequest.md)| Commercial Fraud Shields Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse**](../Model/BusinessFraudShieldResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **governmentdetails**
> \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse governmentdetails($body, $content_type)

Government Details

<p>The Government Details API highlights key details about a businesses activity with the US Government, including economic diversity status, government debarred indicator, contract awards, CAGE code, and more. <P> List of BINs: 400237477, 402756632, 706871274, 700000893, 700046917, 700096784, 700231129, 700417270, 709191606, 712512408, 712530141, 700802577, 700802577, 701555469, 712533455,  701555469, 712533455, 713153131, 713394768, 713632536 , 712562034, 712565718, 712583219, 712608044, 712645747, 712718513, 712828682, 712878367, 712884859 </p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest | Government Details Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->governmentdetails($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->governmentdetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest**](../Model/GovernmentDetailsRequest.md)| Government Details Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse**](../Model/GovernmentDetailsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **headers**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse headers($body, $content_type)

Business Headers

<p>The Business Headers API is both an individual API, and also a data segment returned with many of Experian's credit and public record APIs. The business header contains critical business identity information such as Experian's best business name on file, the full verified legal name and DBA names of the business, the business address, phone number, business Tax Identification number or Employer Identification Number (EIN), and the businesses website URL.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest | Business Headers Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->headers($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->headers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest**](../Model/BusinessDataRequest.md)| Business Headers Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse**](../Model/BusinessHeaderResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intelliscoreplus**
> \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse intelliscoreplus($body, $content_type)

Intelliscore Plus JSON

<p>Our score only report in JSON format.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest | Intelliscore Plus Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->intelliscoreplus($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->intelliscoreplus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest**](../Model/IntelliscorePlusRequest.md)| Intelliscore Plus Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse**](../Model/IntelliscorePlusResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intelliscoreplushtml**
> \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse intelliscoreplushtml($body, $content_type)

Intelliscore Plus HTML

<p>Our score only report in HTML format.</p> <p><strong>Note:</strong> To fully render the report you will need to obtain reference files from Experian, including images, css, and javascript.  Please contact us at bisapi.support@experian.com for more information.</p> <p><strong>Note:</strong> The HTML response is wrapped inside JSON, so the double quotes are escaped. To test the HTML API, you have to unescape the quotes. Typically, if you read the result attribute of the API response programmatically using a client application, the unescaping will be done automatically.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest | Intelliscore Plus HTML Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->intelliscoreplushtml($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->intelliscoreplushtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest**](../Model/IntelliscorePlusRequest.md)| Intelliscore Plus HTML Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse**](../Model/IntelliscorePlusHTMLResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intelliscorepluspdf**
> \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse intelliscorepluspdf($body, $content_type)

Intelliscore Plus PDF

<p>Our score only report in PDF format.</p> <p><strong>Note:</strong> The PDF response is Base64 encoded and wrapped inside JSON. You need to Base64 decode the string <code>results</code> and save it as a PDF file to see the PDF Report using a PDF Viewer.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest | Intelliscore Plus PDF Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->intelliscorepluspdf($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->intelliscorepluspdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest**](../Model/IntelliscorePlusRequest.md)| Intelliscore Plus PDF Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse**](../Model/IntelliscorePlusPDFResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **istwatch**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse istwatch($body, $content_type)

IST Watch

The IST Watch API allows you to meet OFAC regulatory compliance compliance and screen for a number of compliance and global watchlists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest | IST Watch Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->istwatch($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->istwatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest**](../Model/ISTWatchRequest.md)| IST Watch Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse**](../Model/ISTWatchResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **judgments**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse judgments($body, $content_type)

Business Judgments

<p>The Judgments API returns the total number of judgments and judgment balances and details on each judgment on file for the business. Judgments are court decisions directing a business to make payments to a plaintiff. Judgments are kept on file by Experian for 6 years and 9 months.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest | Business Judgments Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->judgments($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->judgments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest**](../Model/BusinessJudgmentRequest.md)| Business Judgments Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse**](../Model/BusinessJudgmentResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **legalCollectionSummaries**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse legalCollectionSummaries($body, $content_type)

Legal Filings and Collections Summaries

<p>The Legal Filings and Collections Summaries API provides a quick summary of commercial public record and collections activity on a business. The API provides a count and balance of all legal items, and individual counts and balances for bankruptcies, liens, judgments, UCC filings, and collections that are on file. These powerful attributes can be used as a key piece of your credit scorecard.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest | Legal Filings and Collections Summaries Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->legalCollectionSummaries($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->legalCollectionSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest**](../Model/BusinessLegalCollectionSummariesRequest.md)| Legal Filings and Collections Summaries Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse**](../Model/BusinessLegalCollectionSummariesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **liens**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse liens($body, $content_type)

Business Liens

<p>The Liens API returns the total number of tax liens and lien balances and also details on each tax lien on file for a business. A tax lien is a claim on the property or goods of a business by a governmental tax agency. Tax liens are kept on file by Experian for 6 years and 9 months.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest | Business Liens Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->liens($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->liens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest**](../Model/BusinessLiensRequest.md)| Business Liens Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse**](../Model/BusinessLiensResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multisegments**
> \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse multisegments($body, $content_type)

MultiSegments. Request a la carte segments in a single call

<p>The MultiSegments API allows you to call the data segments available in most of the endpoints in the Businesses API in a single API call, simplifying your development process and potentially improving your API response time experience.</p> <BR><p>The list of segments that can be called from the MultiSegments API are:</p> <p>bankruptcyDetail, bankruptcySummary, collectionsDetail, collectionsSummary, businessContacts, corporateLinkageFull, corporateLinkagePartial, corporateRegistration, creditStatus, businessFacts, fraudShield, istWatch, header, judgmentDetail, judgmentSummary, legalFilingsCollectionsSummary, legalFilingsSummary, lienDetail, lienSummary, reverseAddress, reversePhone, reverseTaxId, riskDashboard, commercialScore, fsrScore, tradePaymentSummary, tradePaymentTotals, tradePaymentTrends, tradePaymentExperiences, uccFilingsDetail, uccFilingsSummary</p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest | Multi Segments Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->multisegments($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->multisegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest**](../Model/MultiSegmentsRequest.md)| Multi Segments Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse**](../Model/MultiSegmentsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premierprofiles**
> \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse premierprofiles($body, $content_type)

Premier Profiles JSON

<p>Imagine a report that provides a full picture of each new business customer; highlighting their strengths and vulnerabilities and in-depth details of its financial activities. The Premier Profile API from Experian delivers this superior level of customer information, allowing you to do business with confidence. Providing views of business payment performance, public record history, and company backgrounds, the Premier Profile lets you quickly and precisely determine a business's creditworthiness and consistently make better, more profitable decisions.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Premier Profile and BizAggs</strong></p> <p>You can now request a Premier Profile and BizAggs in a single API call.  Please see further details on the sample Premier Profile request documentation.</p> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest | Business Premier Profile Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->premierprofiles($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->premierprofiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest**](../Model/BusinessPremierProfileRequest.md)| Business Premier Profile Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse**](../Model/PremierProfilesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premierprofileshtml**
> \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse premierprofileshtml($body, $content_type)

Premier Profiles HTML

<p>The Premier Profile HTML API returns our flagship Premier Profile Report in HTML format so that it can be quickly rendered in your own application.</p> <p><strong>Note:</strong> To fully render the report you will need to obtain reference files from Experian, including images, css, and javascript.  Please contact us at bisapi.support@experian.com for more information.</p> <p><strong>Note:</strong> The HTML response is wrapped inside JSON, so the double quotes are escaped. To test the HTML API, you have to unescape the quotes. Typically, if you read the result attribute of the API response programmatically using a client application, the unescaping will be done automatically.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest | Business Premier Profile Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->premierprofileshtml($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->premierprofileshtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest**](../Model/BusinessPremierProfileRequest.md)| Business Premier Profile Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse**](../Model/PremierProfilesHTMLResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **premierprofilespdf**
> \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse premierprofilespdf($body, $content_type)

Premier Profiles PDF

<p>The Premier Profile PDF API returns our flagship Premier Profile Report in PDF format so that it can be quickly rendered in your own application.</p> <p><strong>Note:</strong> The PDF response is Base64 encoded and wrapped inside JSON. You need to Base64 decode the string <code>results</code> and save it as a PDF file to see the PDF Report using a PDF Viewer.</p> <p><strong>BIN Request</strong></p> <p>{ \"subcode\":\"0586548\", \"bin\":\"\", \"modelCode\":\"\", \"comments\":\"\" } </p> <p><strong>Business Name and Address Request</strong></p> <p>{ \"subcode\": \"0586548\", \"name\": \"\", \"street\": \"\", \"city\": \"\", \"state\": \"\", \"zip\": \"\", \"phone\":\"\", \"taxId\":\"\", \"modelCode\":\"\", comments\": \"\" } </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest | Business Premier Profile PDF Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body.

try {
    $result = $apiInstance->premierprofilespdf($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->premierprofilespdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest**](../Model/BusinessPremierProfileRequest.md)| Business Premier Profile PDF Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body. | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse**](../Model/PremierProfilesPDFResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quicksearch**
> \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse quicksearch($body, $content_type)

Quick Search.  Our secondary search method

<p>Experian's proprietary Quick Search API is powered by OneSearch, our advanced search/match technology and offers new ways to search for a business within Experian's commercial database.  Quick Search API users can search by:</p> <p><ul> <li>Business Name</li> <li>Address</li> <li>Phone Number</li> <li>Contact Name</li> <li>Business Identification Number (BIN)</li> </ul></p> <p>Quick Search contains millions of active businesses and the most inquiried upon businesses in Experian's database.  If you don't find a result using Quick Search, please don't stop there.  Use Experian's Advanced Search to perform a more extensive search of Experian's database.</p> <p>Search Automation.  For users looking to automate their search/match workflow, it is recommend to use our Advanced Search and our Match Reliability Code. The Quick Search API does not provide a Match Reliability Code; it uses a more flexible search algorithm primarily targeted to human users as a type-ahead search.</p> <p>Billing and Caching.  Experian does not perform any caching of Quick Search results at this time.  Every Quick Search API call invokes the latest data available in our database and results in a billing log entry.  We highly recommend implementing caching to prevent duplicate searches from being billed.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest | QuickSearch Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->quicksearch($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->quicksearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest**](../Model/QuickSearchRequest.md)| QuickSearch Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse**](../Model/QuickSearchResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reverseaddresses**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse reverseaddresses($body, $content_type)

Reverse Addresses

<p>The Reverse Addresses API returns back businesses that are affiliated with an input address. Street address, city, state,  and zip code are all required fields on your request input.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest | Reverse Address Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->reverseaddresses($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->reverseaddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest**](../Model/BusinessReverseAddressesRequest.md)| Reverse Address Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse**](../Model/ReverseAddressesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reversephones**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse reversephones($body, $content_type)

Reverse Phones

<p>The Reverse Phones API returns back businesses that are  affiliated with an input phone number. The phone number input  should be a US based phone number.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest | Reverse Phones Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->reversephones($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->reversephones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest**](../Model/BusinessReversePhonesRequest.md)| Reverse Phones Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse**](../Model/ReversePhonesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reversetaxids**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse reversetaxids($body, $content_type)

Reverse TaxIDs

<p>The Reverse Tax IDs API returns back businesses that are  affiliated with an input Tax ID (EIN). The input Tax ID should  be an Employer Identification Number - not a consumer SSN.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest | Reverse TaxID Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->reversetaxids($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->reversetaxids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest**](../Model/BusinessReverseTaxIDsRequest.md)| Reverse TaxID Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse**](../Model/ReverseTaxIDsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **riskdashboards**
> \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse riskdashboards($body, $content_type)

Commercial Risk Dashboards

<p>Experian's Commercial Risk Dashboards API contains a summary of credit information that can be used to quickly understand the financial health of a business.  Included are both of Experian's commercial risk scores, including the Intelliscore Plus and Financial Stability Risk scores, Experian's recommended credit limit amount, current DBT and derogatory legal count, and a count of potential indicators of fraud.</p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel | Commercial Risk Dashboards Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->riskdashboards($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->riskdashboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel**](../Model/BusinessDataRequestWithModel.md)| Commercial Risk Dashboards Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse**](../Model/RiskDashboardsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scores**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse scores($body, $content_type)

Commercial Scores

<p>The Commercial Scores API allows you to request Experian's Intelliscore Plus Score, Financial Stability Risk Score, or Commercial Recovery Score, or any combination thereof. </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>Sample subcode for Commercial Recovery Score (Collections Score)</p> <ul> <li>Commercial Recovery Score Logistic Regression (Model 243) - 0517614</li> <li>Commercial Recovery Score Machine Learning (Model 245) - 0517614</li> </ul> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest | Commercial Scores Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->scores($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->scores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest**](../Model/BusinessScoresRequest.md)| Commercial Scores Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse**](../Model/ScoresResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scoressearch**
> \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse scoressearch($body, $content_type)

Scores Auto Search

<p>The Scores Auto Search API provides our Scores API response, but with  a Business Name and Address request input. The Commercial Scores API allows you to request Experian's Intelliscore Plus Score, Financial Stability Risk Score, or Commercial Recovery Score, or any combination thereof.</p> <p>Scores Auto Search uses the following inputs:</p> <p> <ul> <li>Business Name, City and State - Required</li> <li>Street Address, Zip Code, Phone and Tax ID - Optional</li> <li>Match Reliability Code - Optional. The default MRC value is 96, if not specified</li> <li>Geo - Optional. Geo set as true will return geographic data on the location</li> <li>Comments - Optional. Echos back in your response.</li> <li>Commercial Score - Optional. Controls if you receive commercial score info</li> <li>FSR Score - Optional. Controls if you receive FSR score info</li> <li>Colllections Score (object) - Optional.  Controls if you receive the Collections score info</li> <li>Subcode - Required</li> </ul> </p> <p>Sample subcodes for Intelliscore Plus version 3</p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>Sample subcode for Commercial Recovery Score (Collections Score)</p> <ul> <li>Commercial Recovery Score Logistic Regression (Model 243) - 0517614</li> <li>Commercial Recovery Score Machine Learning (Model 245) - 0517614</li> </ul> <p>&nbsp;</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest | Commercial Scores Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->scoressearch($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->scoressearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest**](../Model/ScoresSearchRequest.md)| Commercial Scores Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse**](../Model/ScoresSearchResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse search($body, $content_type)

Advanced Business Search.  The primary search method

<p>The Business Search API allows you to leverage Experian's powerful search match technology to find information on a business.  The Search API presents a list of business to the business you are searching for, ranked by match reliability code.  Each business returned in the list will include the legal name, address, and phone number of the business Experian has on file, and optionally business geocode data. Additionally, several depth indicators show the businesses trade line activity and the availability of other key data, each of which help provide confidence in having the best matching business based on your search input.</p><br> <p><strong>SBCS Consortium Members</strong> can use the Businesses API /search endpoint.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/businesses/small-business-financial-exchangetm\">SBFE MultiSegments API</a>, using either the List of Similars product option to search for a business, or a Name/Address request for automated matching.</p> <br> <p><b>Product Request</b></p><br><p>In order to request business data for most of Experian's Business Information APIs, the Business Identification Number (BIN) must be provided on the request.  You can search for a BIN by providing the following information:</p> <ul> <li>Business Name, City and State - Required</li> <li>Street Address, Zip Code, Phone and Tax ID - Optional</li> <li>Geo - Optional. Geo set as true will return geographic data on the location</li> <li>Comments - Optional. Echos back in your response</li> <li>Subcode - Required</li>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest | Business Search Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->search($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest**](../Model/SearchRequest.md)| Business Search Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trades**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse trades($body, $content_type)

Commercial Trades

<p>Use the Trades API to request a summary or detail of all continuous, new, and additional payment experiences, and request snapshots of monthly and quarterly payment trends. Investigating detailed tradeline activity is essential for developing a deeper understanding of a business applicant's credit risk and payment history.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest | Commercial Trades Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->trades($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->trades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest**](../Model/BusinessTradesRequest.md)| Commercial Trades Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse**](../Model/BusinessTradesResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uccfilings**
> \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse uccfilings($body, $content_type)

UCC Filings

<p>The UCC Filings API returns both summary and detail level views of Uniform Commercial Code-1 Filings (UCC-1) filed with the Secretary of State.  UCC Filings identify lenders or financial institutions that have a secured interest in a particular piece of property; this is very important when the collateral  includes substantial, or derogatory items such as Accounts Receivable, Contracts,  Inventory, or Notes Receivable. Experian keeps UCCs on file for 5 years.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = TheLogicStudio\ExperianBusinessesPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new TheLogicStudio\ExperianBusinessesPHP\Api\BusinessInformationServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest(); // \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest | UCC Filings Request
$content_type = "application/json"; // string | Content-Type field is to describe the data contained in the body

try {
    $result = $apiInstance->uccfilings($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessInformationServicesApi->uccfilings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest**](../Model/BusinessUCCFilingsRequest.md)| UCC Filings Request |
 **content_type** | **string**| Content-Type field is to describe the data contained in the body | [optional] [default to application/json]

### Return type

[**\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse**](../Model/BusinessUCCFilingsResponse.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

