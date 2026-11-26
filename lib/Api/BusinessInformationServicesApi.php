<?php
/**
 * BusinessInformationServicesApi
 * PHP version 8.1
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Businesses
 *
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> <li><strong>Cyber Risk Score and Attributes</strong> – Identifies employee cyber risk behaviors that indicate risk for a business</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
 *
 * The version of the OpenAPI document: 1.0.3
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.17.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExperianBusinessesPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use TheLogicStudio\ExperianBusinessesPHP\ApiException;
use TheLogicStudio\ExperianBusinessesPHP\Configuration;
use TheLogicStudio\ExperianBusinessesPHP\FormDataProcessor;
use TheLogicStudio\ExperianBusinessesPHP\HeaderSelector;
use TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * BusinessInformationServicesApi Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BusinessInformationServicesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'aggregates' => [
            'application/json',
        ],
        'bankruptcies' => [
            'application/json',
        ],
        'bci' => [
            'application/json',
        ],
        'bcihtml' => [
            'application/json',
        ],
        'bcipdf' => [
            'application/json',
        ],
        'businesscontacts' => [
            'application/json',
        ],
        'collections' => [
            'application/json',
        ],
        'corporateLinkage' => [
            'application/json',
        ],
        'corporateRegistration' => [
            'application/json',
        ],
        'creditstatus' => [
            'application/json',
        ],
        'cyberscore' => [
            'application/json',
        ],
        'facts' => [
            'application/json',
        ],
        'fraudShields' => [
            'application/json',
        ],
        'governmentdetails' => [
            'application/json',
        ],
        'headers' => [
            'application/json',
        ],
        'intelliscoreplus' => [
            'application/json',
        ],
        'intelliscoreplushtml' => [
            'application/json',
        ],
        'intelliscorepluspdf' => [
            'application/json',
        ],
        'istwatch' => [
            'application/json',
        ],
        'judgments' => [
            'application/json',
        ],
        'legalCollectionSummaries' => [
            'application/json',
        ],
        'liens' => [
            'application/json',
        ],
        'multisegments' => [
            'application/json',
        ],
        'premierprofiles' => [
            'application/json',
        ],
        'premierprofileshtml' => [
            'application/json',
        ],
        'premierprofilespdf' => [
            'application/json',
        ],
        'quicksearch' => [
            'application/json',
        ],
        'reverseaddresses' => [
            'application/json',
        ],
        'reversephones' => [
            'application/json',
        ],
        'reversetaxids' => [
            'application/json',
        ],
        'riskdashboards' => [
            'application/json',
        ],
        'scores' => [
            'application/json',
        ],
        'scoressearch' => [
            'application/json',
        ],
        'search' => [
            'application/json',
        ],
        'trades' => [
            'application/json',
        ],
        'uccfilings' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation aggregates
     *
     * BizAggs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function aggregates($body, string $contentType = self::contentTypes['aggregates'][0])
    {
        list($response) = $this->aggregatesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation aggregatesWithHttpInfo
     *
     * BizAggs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function aggregatesWithHttpInfo($body, string $contentType = self::contentTypes['aggregates'][0])
    {
        $request = $this->aggregatesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation aggregatesAsync
     *
     * BizAggs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsync($body, string $contentType = self::contentTypes['aggregates'][0])
    {
        return $this->aggregatesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aggregatesAsyncWithHttpInfo
     *
     * BizAggs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['aggregates'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse';
        $request = $this->aggregatesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'aggregates'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function aggregatesRequest($body, string $contentType = self::contentTypes['aggregates'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling aggregates'
            );
        }


        $resourcePath = '/v1/aggregates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bankruptcies
     *
     * Business Bankruptcies
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bankruptcies($body, string $contentType = self::contentTypes['bankruptcies'][0])
    {
        list($response) = $this->bankruptciesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation bankruptciesWithHttpInfo
     *
     * Business Bankruptcies
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bankruptciesWithHttpInfo($body, string $contentType = self::contentTypes['bankruptcies'][0])
    {
        $request = $this->bankruptciesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation bankruptciesAsync
     *
     * Business Bankruptcies
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsync($body, string $contentType = self::contentTypes['bankruptcies'][0])
    {
        return $this->bankruptciesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bankruptciesAsyncWithHttpInfo
     *
     * Business Bankruptcies
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['bankruptcies'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse';
        $request = $this->bankruptciesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bankruptcies'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bankruptciesRequest($body, string $contentType = self::contentTypes['bankruptcies'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bankruptcies'
            );
        }


        $resourcePath = '/v1/bankruptcies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bci
     *
     * Business Compliance Insight JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bci($body, string $contentType = self::contentTypes['bci'][0])
    {
        list($response) = $this->bciWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation bciWithHttpInfo
     *
     * Business Compliance Insight JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bciWithHttpInfo($body, string $contentType = self::contentTypes['bci'][0])
    {
        $request = $this->bciRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation bciAsync
     *
     * Business Compliance Insight JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsync($body, string $contentType = self::contentTypes['bci'][0])
    {
        return $this->bciAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bciAsyncWithHttpInfo
     *
     * Business Compliance Insight JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsyncWithHttpInfo($body, string $contentType = self::contentTypes['bci'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse';
        $request = $this->bciRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bci'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bciRequest($body, string $contentType = self::contentTypes['bci'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bci'
            );
        }


        $resourcePath = '/v1/bci';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bcihtml
     *
     * Business Compliance Insight HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bcihtml($body, string $contentType = self::contentTypes['bcihtml'][0])
    {
        list($response) = $this->bcihtmlWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation bcihtmlWithHttpInfo
     *
     * Business Compliance Insight HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcihtmlWithHttpInfo($body, string $contentType = self::contentTypes['bcihtml'][0])
    {
        $request = $this->bcihtmlRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation bcihtmlAsync
     *
     * Business Compliance Insight HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsync($body, string $contentType = self::contentTypes['bcihtml'][0])
    {
        return $this->bcihtmlAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bcihtmlAsyncWithHttpInfo
     *
     * Business Compliance Insight HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsyncWithHttpInfo($body, string $contentType = self::contentTypes['bcihtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML';
        $request = $this->bcihtmlRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bcihtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bcihtmlRequest($body, string $contentType = self::contentTypes['bcihtml'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bcihtml'
            );
        }


        $resourcePath = '/v1/bci/html';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bcipdf
     *
     * Business Compliance Insight PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bcipdf($body, string $contentType = self::contentTypes['bcipdf'][0])
    {
        list($response) = $this->bcipdfWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation bcipdfWithHttpInfo
     *
     * Business Compliance Insight PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcipdfWithHttpInfo($body, string $contentType = self::contentTypes['bcipdf'][0])
    {
        $request = $this->bcipdfRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation bcipdfAsync
     *
     * Business Compliance Insight PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsync($body, string $contentType = self::contentTypes['bcipdf'][0])
    {
        return $this->bcipdfAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bcipdfAsyncWithHttpInfo
     *
     * Business Compliance Insight PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsyncWithHttpInfo($body, string $contentType = self::contentTypes['bcipdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF';
        $request = $this->bcipdfRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bcipdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bcipdfRequest($body, string $contentType = self::contentTypes['bcipdf'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bcipdf'
            );
        }


        $resourcePath = '/v1/bci/pdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation businesscontacts
     *
     * Business Contacts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function businesscontacts($body, string $contentType = self::contentTypes['businesscontacts'][0])
    {
        list($response) = $this->businesscontactsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation businesscontactsWithHttpInfo
     *
     * Business Contacts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function businesscontactsWithHttpInfo($body, string $contentType = self::contentTypes['businesscontacts'][0])
    {
        $request = $this->businesscontactsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation businesscontactsAsync
     *
     * Business Contacts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsync($body, string $contentType = self::contentTypes['businesscontacts'][0])
    {
        return $this->businesscontactsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation businesscontactsAsyncWithHttpInfo
     *
     * Business Contacts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['businesscontacts'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse';
        $request = $this->businesscontactsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'businesscontacts'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function businesscontactsRequest($body, string $contentType = self::contentTypes['businesscontacts'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling businesscontacts'
            );
        }


        $resourcePath = '/v1/businesscontacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation collections
     *
     * Commercial Collections
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function collections($body, string $contentType = self::contentTypes['collections'][0])
    {
        list($response) = $this->collectionsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation collectionsWithHttpInfo
     *
     * Commercial Collections
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function collectionsWithHttpInfo($body, string $contentType = self::contentTypes['collections'][0])
    {
        $request = $this->collectionsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation collectionsAsync
     *
     * Commercial Collections
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsync($body, string $contentType = self::contentTypes['collections'][0])
    {
        return $this->collectionsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation collectionsAsyncWithHttpInfo
     *
     * Commercial Collections
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['collections'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse';
        $request = $this->collectionsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'collections'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function collectionsRequest($body, string $contentType = self::contentTypes['collections'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling collections'
            );
        }


        $resourcePath = '/v1/collections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation corporateLinkage
     *
     * Corporate Linkage
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function corporateLinkage($body, string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        list($response) = $this->corporateLinkageWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation corporateLinkageWithHttpInfo
     *
     * Corporate Linkage
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateLinkageWithHttpInfo($body, string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        $request = $this->corporateLinkageRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation corporateLinkageAsync
     *
     * Corporate Linkage
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsync($body, string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        return $this->corporateLinkageAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation corporateLinkageAsyncWithHttpInfo
     *
     * Corporate Linkage
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsyncWithHttpInfo($body, string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse';
        $request = $this->corporateLinkageRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'corporateLinkage'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function corporateLinkageRequest($body, string $contentType = self::contentTypes['corporateLinkage'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling corporateLinkage'
            );
        }


        $resourcePath = '/v1/corporatelinkage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation corporateRegistration
     *
     * Corporate Registrations
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function corporateRegistration($body, string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        list($response) = $this->corporateRegistrationWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation corporateRegistrationWithHttpInfo
     *
     * Corporate Registrations
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateRegistrationWithHttpInfo($body, string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        $request = $this->corporateRegistrationRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation corporateRegistrationAsync
     *
     * Corporate Registrations
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsync($body, string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        return $this->corporateRegistrationAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation corporateRegistrationAsyncWithHttpInfo
     *
     * Corporate Registrations
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsyncWithHttpInfo($body, string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse';
        $request = $this->corporateRegistrationRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'corporateRegistration'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function corporateRegistrationRequest($body, string $contentType = self::contentTypes['corporateRegistration'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling corporateRegistration'
            );
        }


        $resourcePath = '/v1/corporateregistrations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditstatus
     *
     * Commercial Credit Status
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function creditstatus($body, string $contentType = self::contentTypes['creditstatus'][0])
    {
        list($response) = $this->creditstatusWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation creditstatusWithHttpInfo
     *
     * Commercial Credit Status
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditstatusWithHttpInfo($body, string $contentType = self::contentTypes['creditstatus'][0])
    {
        $request = $this->creditstatusRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation creditstatusAsync
     *
     * Commercial Credit Status
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsync($body, string $contentType = self::contentTypes['creditstatus'][0])
    {
        return $this->creditstatusAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditstatusAsyncWithHttpInfo
     *
     * Commercial Credit Status
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsyncWithHttpInfo($body, string $contentType = self::contentTypes['creditstatus'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse';
        $request = $this->creditstatusRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditstatus'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditstatusRequest($body, string $contentType = self::contentTypes['creditstatus'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling creditstatus'
            );
        }


        $resourcePath = '/v1/creditstatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cyberscore
     *
     * Cyber Risk Score and Attributes
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function cyberscore($body, string $contentType = self::contentTypes['cyberscore'][0])
    {
        list($response) = $this->cyberscoreWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation cyberscoreWithHttpInfo
     *
     * Cyber Risk Score and Attributes
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function cyberscoreWithHttpInfo($body, string $contentType = self::contentTypes['cyberscore'][0])
    {
        $request = $this->cyberscoreRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation cyberscoreAsync
     *
     * Cyber Risk Score and Attributes
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyberscoreAsync($body, string $contentType = self::contentTypes['cyberscore'][0])
    {
        return $this->cyberscoreAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cyberscoreAsyncWithHttpInfo
     *
     * Cyber Risk Score and Attributes
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyberscoreAsyncWithHttpInfo($body, string $contentType = self::contentTypes['cyberscore'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse';
        $request = $this->cyberscoreRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cyberscore'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cyberscoreRequest($body, string $contentType = self::contentTypes['cyberscore'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling cyberscore'
            );
        }


        $resourcePath = '/v1/cyberscore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation facts
     *
     * Business Facts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function facts($body, string $contentType = self::contentTypes['facts'][0])
    {
        list($response) = $this->factsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation factsWithHttpInfo
     *
     * Business Facts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function factsWithHttpInfo($body, string $contentType = self::contentTypes['facts'][0])
    {
        $request = $this->factsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation factsAsync
     *
     * Business Facts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsync($body, string $contentType = self::contentTypes['facts'][0])
    {
        return $this->factsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation factsAsyncWithHttpInfo
     *
     * Business Facts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['facts'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse';
        $request = $this->factsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'facts'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function factsRequest($body, string $contentType = self::contentTypes['facts'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling facts'
            );
        }


        $resourcePath = '/v1/facts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fraudShields
     *
     * Commercial Fraud Shields
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function fraudShields($body, string $contentType = self::contentTypes['fraudShields'][0])
    {
        list($response) = $this->fraudShieldsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation fraudShieldsWithHttpInfo
     *
     * Commercial Fraud Shields
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudShieldsWithHttpInfo($body, string $contentType = self::contentTypes['fraudShields'][0])
    {
        $request = $this->fraudShieldsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation fraudShieldsAsync
     *
     * Commercial Fraud Shields
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsync($body, string $contentType = self::contentTypes['fraudShields'][0])
    {
        return $this->fraudShieldsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fraudShieldsAsyncWithHttpInfo
     *
     * Commercial Fraud Shields
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['fraudShields'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse';
        $request = $this->fraudShieldsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fraudShields'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function fraudShieldsRequest($body, string $contentType = self::contentTypes['fraudShields'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling fraudShields'
            );
        }


        $resourcePath = '/v1/fraudshields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation governmentdetails
     *
     * Government Details
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function governmentdetails($body, string $contentType = self::contentTypes['governmentdetails'][0])
    {
        list($response) = $this->governmentdetailsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation governmentdetailsWithHttpInfo
     *
     * Government Details
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function governmentdetailsWithHttpInfo($body, string $contentType = self::contentTypes['governmentdetails'][0])
    {
        $request = $this->governmentdetailsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation governmentdetailsAsync
     *
     * Government Details
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsync($body, string $contentType = self::contentTypes['governmentdetails'][0])
    {
        return $this->governmentdetailsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation governmentdetailsAsyncWithHttpInfo
     *
     * Government Details
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['governmentdetails'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse';
        $request = $this->governmentdetailsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'governmentdetails'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function governmentdetailsRequest($body, string $contentType = self::contentTypes['governmentdetails'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling governmentdetails'
            );
        }


        $resourcePath = '/v1/governmentdetails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation headers
     *
     * Business Headers
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function headers($body, string $contentType = self::contentTypes['headers'][0])
    {
        list($response) = $this->headersWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation headersWithHttpInfo
     *
     * Business Headers
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function headersWithHttpInfo($body, string $contentType = self::contentTypes['headers'][0])
    {
        $request = $this->headersRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation headersAsync
     *
     * Business Headers
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsync($body, string $contentType = self::contentTypes['headers'][0])
    {
        return $this->headersAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation headersAsyncWithHttpInfo
     *
     * Business Headers
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsyncWithHttpInfo($body, string $contentType = self::contentTypes['headers'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse';
        $request = $this->headersRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'headers'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function headersRequest($body, string $contentType = self::contentTypes['headers'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling headers'
            );
        }


        $resourcePath = '/v1/headers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation intelliscoreplus
     *
     * Intelliscore Plus JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscoreplus($body, string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        list($response) = $this->intelliscoreplusWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation intelliscoreplusWithHttpInfo
     *
     * Intelliscore Plus JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplusWithHttpInfo($body, string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        $request = $this->intelliscoreplusRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation intelliscoreplusAsync
     *
     * Intelliscore Plus JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsync($body, string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        return $this->intelliscoreplusAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation intelliscoreplusAsyncWithHttpInfo
     *
     * Intelliscore Plus JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsyncWithHttpInfo($body, string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse';
        $request = $this->intelliscoreplusRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscoreplus'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscoreplusRequest($body, string $contentType = self::contentTypes['intelliscoreplus'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling intelliscoreplus'
            );
        }


        $resourcePath = '/v1/reports/intelliscoreplus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation intelliscoreplushtml
     *
     * Intelliscore Plus HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscoreplushtml($body, string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        list($response) = $this->intelliscoreplushtmlWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation intelliscoreplushtmlWithHttpInfo
     *
     * Intelliscore Plus HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplushtmlWithHttpInfo($body, string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        $request = $this->intelliscoreplushtmlRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation intelliscoreplushtmlAsync
     *
     * Intelliscore Plus HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsync($body, string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        return $this->intelliscoreplushtmlAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation intelliscoreplushtmlAsyncWithHttpInfo
     *
     * Intelliscore Plus HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsyncWithHttpInfo($body, string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse';
        $request = $this->intelliscoreplushtmlRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscoreplushtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscoreplushtmlRequest($body, string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling intelliscoreplushtml'
            );
        }


        $resourcePath = '/v1/reports/intelliscoreplus/html';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation intelliscorepluspdf
     *
     * Intelliscore Plus PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscorepluspdf($body, string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        list($response) = $this->intelliscorepluspdfWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation intelliscorepluspdfWithHttpInfo
     *
     * Intelliscore Plus PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscorepluspdfWithHttpInfo($body, string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        $request = $this->intelliscorepluspdfRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation intelliscorepluspdfAsync
     *
     * Intelliscore Plus PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsync($body, string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        return $this->intelliscorepluspdfAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation intelliscorepluspdfAsyncWithHttpInfo
     *
     * Intelliscore Plus PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsyncWithHttpInfo($body, string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse';
        $request = $this->intelliscorepluspdfRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscorepluspdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscorepluspdfRequest($body, string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling intelliscorepluspdf'
            );
        }


        $resourcePath = '/v1/reports/intelliscoreplus/pdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation istwatch
     *
     * IST Watch
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function istwatch($body, string $contentType = self::contentTypes['istwatch'][0])
    {
        list($response) = $this->istwatchWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation istwatchWithHttpInfo
     *
     * IST Watch
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function istwatchWithHttpInfo($body, string $contentType = self::contentTypes['istwatch'][0])
    {
        $request = $this->istwatchRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation istwatchAsync
     *
     * IST Watch
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsync($body, string $contentType = self::contentTypes['istwatch'][0])
    {
        return $this->istwatchAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation istwatchAsyncWithHttpInfo
     *
     * IST Watch
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsyncWithHttpInfo($body, string $contentType = self::contentTypes['istwatch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse';
        $request = $this->istwatchRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'istwatch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function istwatchRequest($body, string $contentType = self::contentTypes['istwatch'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling istwatch'
            );
        }


        $resourcePath = '/v1/istwatch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation judgments
     *
     * Business Judgments
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function judgments($body, string $contentType = self::contentTypes['judgments'][0])
    {
        list($response) = $this->judgmentsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation judgmentsWithHttpInfo
     *
     * Business Judgments
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function judgmentsWithHttpInfo($body, string $contentType = self::contentTypes['judgments'][0])
    {
        $request = $this->judgmentsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation judgmentsAsync
     *
     * Business Judgments
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsync($body, string $contentType = self::contentTypes['judgments'][0])
    {
        return $this->judgmentsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation judgmentsAsyncWithHttpInfo
     *
     * Business Judgments
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['judgments'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse';
        $request = $this->judgmentsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'judgments'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function judgmentsRequest($body, string $contentType = self::contentTypes['judgments'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling judgments'
            );
        }


        $resourcePath = '/v1/judgments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation legalCollectionSummaries
     *
     * Legal Filings and Collections Summaries
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function legalCollectionSummaries($body, string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        list($response) = $this->legalCollectionSummariesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation legalCollectionSummariesWithHttpInfo
     *
     * Legal Filings and Collections Summaries
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function legalCollectionSummariesWithHttpInfo($body, string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        $request = $this->legalCollectionSummariesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation legalCollectionSummariesAsync
     *
     * Legal Filings and Collections Summaries
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsync($body, string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        return $this->legalCollectionSummariesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation legalCollectionSummariesAsyncWithHttpInfo
     *
     * Legal Filings and Collections Summaries
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse';
        $request = $this->legalCollectionSummariesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'legalCollectionSummaries'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function legalCollectionSummariesRequest($body, string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling legalCollectionSummaries'
            );
        }


        $resourcePath = '/v1/legalcollectionsummaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation liens
     *
     * Business Liens
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function liens($body, string $contentType = self::contentTypes['liens'][0])
    {
        list($response) = $this->liensWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation liensWithHttpInfo
     *
     * Business Liens
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function liensWithHttpInfo($body, string $contentType = self::contentTypes['liens'][0])
    {
        $request = $this->liensRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation liensAsync
     *
     * Business Liens
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsync($body, string $contentType = self::contentTypes['liens'][0])
    {
        return $this->liensAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation liensAsyncWithHttpInfo
     *
     * Business Liens
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsyncWithHttpInfo($body, string $contentType = self::contentTypes['liens'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse';
        $request = $this->liensRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'liens'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function liensRequest($body, string $contentType = self::contentTypes['liens'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling liens'
            );
        }


        $resourcePath = '/v1/liens';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation multisegments
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function multisegments($body, string $contentType = self::contentTypes['multisegments'][0])
    {
        list($response) = $this->multisegmentsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation multisegmentsWithHttpInfo
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function multisegmentsWithHttpInfo($body, string $contentType = self::contentTypes['multisegments'][0])
    {
        $request = $this->multisegmentsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation multisegmentsAsync
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsync($body, string $contentType = self::contentTypes['multisegments'][0])
    {
        return $this->multisegmentsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation multisegmentsAsyncWithHttpInfo
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['multisegments'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse';
        $request = $this->multisegmentsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'multisegments'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function multisegmentsRequest($body, string $contentType = self::contentTypes['multisegments'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling multisegments'
            );
        }


        $resourcePath = '/v1/multisegments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation premierprofiles
     *
     * Premier Profiles JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofiles($body, string $contentType = self::contentTypes['premierprofiles'][0])
    {
        list($response) = $this->premierprofilesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation premierprofilesWithHttpInfo
     *
     * Premier Profiles JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilesWithHttpInfo($body, string $contentType = self::contentTypes['premierprofiles'][0])
    {
        $request = $this->premierprofilesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation premierprofilesAsync
     *
     * Premier Profiles JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsync($body, string $contentType = self::contentTypes['premierprofiles'][0])
    {
        return $this->premierprofilesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation premierprofilesAsyncWithHttpInfo
     *
     * Premier Profiles JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['premierprofiles'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse';
        $request = $this->premierprofilesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofiles'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofilesRequest($body, string $contentType = self::contentTypes['premierprofiles'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling premierprofiles'
            );
        }


        $resourcePath = '/v1/reports/premierprofiles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation premierprofileshtml
     *
     * Premier Profiles HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofileshtml($body, string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        list($response) = $this->premierprofileshtmlWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation premierprofileshtmlWithHttpInfo
     *
     * Premier Profiles HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofileshtmlWithHttpInfo($body, string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        $request = $this->premierprofileshtmlRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation premierprofileshtmlAsync
     *
     * Premier Profiles HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsync($body, string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        return $this->premierprofileshtmlAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation premierprofileshtmlAsyncWithHttpInfo
     *
     * Premier Profiles HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsyncWithHttpInfo($body, string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse';
        $request = $this->premierprofileshtmlRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofileshtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofileshtmlRequest($body, string $contentType = self::contentTypes['premierprofileshtml'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling premierprofileshtml'
            );
        }


        $resourcePath = '/v1/reports/premierprofiles/html';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation premierprofilespdf
     *
     * Premier Profiles PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofilespdf($body, string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        list($response) = $this->premierprofilespdfWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation premierprofilespdfWithHttpInfo
     *
     * Premier Profiles PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilespdfWithHttpInfo($body, string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        $request = $this->premierprofilespdfRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation premierprofilespdfAsync
     *
     * Premier Profiles PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsync($body, string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        return $this->premierprofilespdfAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation premierprofilespdfAsyncWithHttpInfo
     *
     * Premier Profiles PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsyncWithHttpInfo($body, string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse';
        $request = $this->premierprofilespdfRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofilespdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofilespdfRequest($body, string $contentType = self::contentTypes['premierprofilespdf'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling premierprofilespdf'
            );
        }


        $resourcePath = '/v1/reports/premierprofiles/pdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation quicksearch
     *
     * Quick Search.  Our secondary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function quicksearch($body, string $contentType = self::contentTypes['quicksearch'][0])
    {
        list($response) = $this->quicksearchWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation quicksearchWithHttpInfo
     *
     * Quick Search.  Our secondary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function quicksearchWithHttpInfo($body, string $contentType = self::contentTypes['quicksearch'][0])
    {
        $request = $this->quicksearchRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation quicksearchAsync
     *
     * Quick Search.  Our secondary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsync($body, string $contentType = self::contentTypes['quicksearch'][0])
    {
        return $this->quicksearchAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation quicksearchAsyncWithHttpInfo
     *
     * Quick Search.  Our secondary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsyncWithHttpInfo($body, string $contentType = self::contentTypes['quicksearch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse';
        $request = $this->quicksearchRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'quicksearch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function quicksearchRequest($body, string $contentType = self::contentTypes['quicksearch'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling quicksearch'
            );
        }


        $resourcePath = '/v1/quicksearch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reverseaddresses
     *
     * Reverse Addresses
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reverseaddresses($body, string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        list($response) = $this->reverseaddressesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation reverseaddressesWithHttpInfo
     *
     * Reverse Addresses
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseaddressesWithHttpInfo($body, string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        $request = $this->reverseaddressesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation reverseaddressesAsync
     *
     * Reverse Addresses
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsync($body, string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        return $this->reverseaddressesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reverseaddressesAsyncWithHttpInfo
     *
     * Reverse Addresses
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse';
        $request = $this->reverseaddressesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reverseaddresses'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reverseaddressesRequest($body, string $contentType = self::contentTypes['reverseaddresses'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling reverseaddresses'
            );
        }


        $resourcePath = '/v1/reverseaddresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reversephones
     *
     * Reverse Phones
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reversephones($body, string $contentType = self::contentTypes['reversephones'][0])
    {
        list($response) = $this->reversephonesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation reversephonesWithHttpInfo
     *
     * Reverse Phones
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversephonesWithHttpInfo($body, string $contentType = self::contentTypes['reversephones'][0])
    {
        $request = $this->reversephonesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation reversephonesAsync
     *
     * Reverse Phones
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsync($body, string $contentType = self::contentTypes['reversephones'][0])
    {
        return $this->reversephonesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reversephonesAsyncWithHttpInfo
     *
     * Reverse Phones
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['reversephones'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse';
        $request = $this->reversephonesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reversephones'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reversephonesRequest($body, string $contentType = self::contentTypes['reversephones'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling reversephones'
            );
        }


        $resourcePath = '/v1/reversephones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reversetaxids
     *
     * Reverse TaxIDs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reversetaxids($body, string $contentType = self::contentTypes['reversetaxids'][0])
    {
        list($response) = $this->reversetaxidsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation reversetaxidsWithHttpInfo
     *
     * Reverse TaxIDs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversetaxidsWithHttpInfo($body, string $contentType = self::contentTypes['reversetaxids'][0])
    {
        $request = $this->reversetaxidsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation reversetaxidsAsync
     *
     * Reverse TaxIDs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsync($body, string $contentType = self::contentTypes['reversetaxids'][0])
    {
        return $this->reversetaxidsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reversetaxidsAsyncWithHttpInfo
     *
     * Reverse TaxIDs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['reversetaxids'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse';
        $request = $this->reversetaxidsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reversetaxids'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reversetaxidsRequest($body, string $contentType = self::contentTypes['reversetaxids'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling reversetaxids'
            );
        }


        $resourcePath = '/v1/reversetaxids';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation riskdashboards
     *
     * Commercial Risk Dashboards
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function riskdashboards($body, string $contentType = self::contentTypes['riskdashboards'][0])
    {
        list($response) = $this->riskdashboardsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation riskdashboardsWithHttpInfo
     *
     * Commercial Risk Dashboards
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function riskdashboardsWithHttpInfo($body, string $contentType = self::contentTypes['riskdashboards'][0])
    {
        $request = $this->riskdashboardsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation riskdashboardsAsync
     *
     * Commercial Risk Dashboards
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsync($body, string $contentType = self::contentTypes['riskdashboards'][0])
    {
        return $this->riskdashboardsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation riskdashboardsAsyncWithHttpInfo
     *
     * Commercial Risk Dashboards
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['riskdashboards'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse';
        $request = $this->riskdashboardsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'riskdashboards'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function riskdashboardsRequest($body, string $contentType = self::contentTypes['riskdashboards'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling riskdashboards'
            );
        }


        $resourcePath = '/v1/riskdashboards';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scores
     *
     * Commercial Scores
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function scores($body, string $contentType = self::contentTypes['scores'][0])
    {
        list($response) = $this->scoresWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation scoresWithHttpInfo
     *
     * Commercial Scores
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoresWithHttpInfo($body, string $contentType = self::contentTypes['scores'][0])
    {
        $request = $this->scoresRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation scoresAsync
     *
     * Commercial Scores
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsync($body, string $contentType = self::contentTypes['scores'][0])
    {
        return $this->scoresAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scoresAsyncWithHttpInfo
     *
     * Commercial Scores
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsyncWithHttpInfo($body, string $contentType = self::contentTypes['scores'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse';
        $request = $this->scoresRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scores'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function scoresRequest($body, string $contentType = self::contentTypes['scores'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling scores'
            );
        }


        $resourcePath = '/v1/scores';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation scoressearch
     *
     * Scores Auto Search
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function scoressearch($body, string $contentType = self::contentTypes['scoressearch'][0])
    {
        list($response) = $this->scoressearchWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation scoressearchWithHttpInfo
     *
     * Scores Auto Search
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoressearchWithHttpInfo($body, string $contentType = self::contentTypes['scoressearch'][0])
    {
        $request = $this->scoressearchRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation scoressearchAsync
     *
     * Scores Auto Search
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsync($body, string $contentType = self::contentTypes['scoressearch'][0])
    {
        return $this->scoressearchAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scoressearchAsyncWithHttpInfo
     *
     * Scores Auto Search
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsyncWithHttpInfo($body, string $contentType = self::contentTypes['scoressearch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse';
        $request = $this->scoressearchRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scoressearch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function scoressearchRequest($body, string $contentType = self::contentTypes['scoressearch'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling scoressearch'
            );
        }


        $resourcePath = '/v1/scores/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation search
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function search($body, string $contentType = self::contentTypes['search'][0])
    {
        list($response) = $this->searchWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($body, string $contentType = self::contentTypes['search'][0])
    {
        $request = $this->searchRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation searchAsync
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync($body, string $contentType = self::contentTypes['search'][0])
    {
        return $this->searchAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchAsyncWithHttpInfo
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsyncWithHttpInfo($body, string $contentType = self::contentTypes['search'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse';
        $request = $this->searchRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'search'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchRequest($body, string $contentType = self::contentTypes['search'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling search'
            );
        }


        $resourcePath = '/v1/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation trades
     *
     * Commercial Trades
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function trades($body, string $contentType = self::contentTypes['trades'][0])
    {
        list($response) = $this->tradesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation tradesWithHttpInfo
     *
     * Commercial Trades
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function tradesWithHttpInfo($body, string $contentType = self::contentTypes['trades'][0])
    {
        $request = $this->tradesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation tradesAsync
     *
     * Commercial Trades
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsync($body, string $contentType = self::contentTypes['trades'][0])
    {
        return $this->tradesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tradesAsyncWithHttpInfo
     *
     * Commercial Trades
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['trades'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse';
        $request = $this->tradesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'trades'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tradesRequest($body, string $contentType = self::contentTypes['trades'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling trades'
            );
        }


        $resourcePath = '/v1/trades';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation uccfilings
     *
     * UCC Filings
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function uccfilings($body, string $contentType = self::contentTypes['uccfilings'][0])
    {
        list($response) = $this->uccfilingsWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation uccfilingsWithHttpInfo
     *
     * UCC Filings
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function uccfilingsWithHttpInfo($body, string $contentType = self::contentTypes['uccfilings'][0])
    {
        $request = $this->uccfilingsRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $request,
                        $response,
                    );
                case 502:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $request,
                        $response,
                    );
                case 503:
                    return $this->handleResponseWithDataType(
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation uccfilingsAsync
     *
     * UCC Filings
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsync($body, string $contentType = self::contentTypes['uccfilings'][0])
    {
        return $this->uccfilingsAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uccfilingsAsyncWithHttpInfo
     *
     * UCC Filings
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsyncWithHttpInfo($body, string $contentType = self::contentTypes['uccfilings'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse';
        $request = $this->uccfilingsRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'uccfilings'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uccfilingsRequest($body, string $contentType = self::contentTypes['uccfilings'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling uccfilings'
            );
        }


        $resourcePath = '/v1/uccfilings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        if ($this->config->getCertFile()) {
            $options[RequestOptions::CERT] = $this->config->getCertFile();
        }

        if ($this->config->getKeyFile()) {
            $options[RequestOptions::SSL_KEY] = $this->config->getKeyFile();
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
