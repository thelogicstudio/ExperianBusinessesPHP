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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function aggregates($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['aggregates'][0])
    {
        list($response) = $this->aggregatesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation aggregatesWithHttpInfo
     *
     * BizAggs
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function aggregatesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['aggregates'][0])
    {
        $request = $this->aggregatesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['aggregates'][0])
    {
        return $this->aggregatesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['aggregates'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse';
        $request = $this->aggregatesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['aggregates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function aggregatesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['aggregates'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling aggregates'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bankruptcies($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bankruptcies'][0])
    {
        list($response) = $this->bankruptciesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation bankruptciesWithHttpInfo
     *
     * Business Bankruptcies
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bankruptciesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bankruptcies'][0])
    {
        $request = $this->bankruptciesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bankruptcies'][0])
    {
        return $this->bankruptciesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bankruptcies'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse';
        $request = $this->bankruptciesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bankruptcies'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bankruptciesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bankruptcies'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bankruptcies'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bci($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bci'][0])
    {
        list($response) = $this->bciWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation bciWithHttpInfo
     *
     * Business Compliance Insight JSON
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bciWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bci'][0])
    {
        $request = $this->bciRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bci'][0])
    {
        return $this->bciAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bci'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse';
        $request = $this->bciRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bci'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bciRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bci'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bci'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bcihtml($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcihtml'][0])
    {
        list($response) = $this->bcihtmlWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation bcihtmlWithHttpInfo
     *
     * Business Compliance Insight HTML
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcihtmlWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcihtml'][0])
    {
        $request = $this->bcihtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcihtml'][0])
    {
        return $this->bcihtmlAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcihtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML';
        $request = $this->bcihtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcihtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bcihtmlRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcihtml'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bcihtml'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function bcipdf($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcipdf'][0])
    {
        list($response) = $this->bcipdfWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation bcipdfWithHttpInfo
     *
     * Business Compliance Insight PDF
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcipdfWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcipdf'][0])
    {
        $request = $this->bcipdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcipdf'][0])
    {
        return $this->bcipdfAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcipdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF';
        $request = $this->bcipdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bcipdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bcipdfRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['bcipdf'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bcipdf'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function businesscontacts($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['businesscontacts'][0])
    {
        list($response) = $this->businesscontactsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation businesscontactsWithHttpInfo
     *
     * Business Contacts
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function businesscontactsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['businesscontacts'][0])
    {
        $request = $this->businesscontactsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['businesscontacts'][0])
    {
        return $this->businesscontactsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['businesscontacts'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse';
        $request = $this->businesscontactsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['businesscontacts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function businesscontactsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['businesscontacts'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling businesscontacts'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function collections($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['collections'][0])
    {
        list($response) = $this->collectionsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation collectionsWithHttpInfo
     *
     * Commercial Collections
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function collectionsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['collections'][0])
    {
        $request = $this->collectionsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['collections'][0])
    {
        return $this->collectionsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['collections'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse';
        $request = $this->collectionsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['collections'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function collectionsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['collections'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling collections'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function corporateLinkage($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        list($response) = $this->corporateLinkageWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation corporateLinkageWithHttpInfo
     *
     * Corporate Linkage
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateLinkageWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        $request = $this->corporateLinkageRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        return $this->corporateLinkageAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateLinkage'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse';
        $request = $this->corporateLinkageRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateLinkage'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function corporateLinkageRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateLinkage'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling corporateLinkage'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function corporateRegistration($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        list($response) = $this->corporateRegistrationWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation corporateRegistrationWithHttpInfo
     *
     * Corporate Registrations
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateRegistrationWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        $request = $this->corporateRegistrationRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        return $this->corporateRegistrationAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateRegistration'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse';
        $request = $this->corporateRegistrationRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['corporateRegistration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function corporateRegistrationRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['corporateRegistration'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling corporateRegistration'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function creditstatus($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['creditstatus'][0])
    {
        list($response) = $this->creditstatusWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation creditstatusWithHttpInfo
     *
     * Commercial Credit Status
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditstatusWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['creditstatus'][0])
    {
        $request = $this->creditstatusRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['creditstatus'][0])
    {
        return $this->creditstatusAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['creditstatus'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse';
        $request = $this->creditstatusRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditstatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditstatusRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['creditstatus'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling creditstatus'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function cyberscore($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['cyberscore'][0])
    {
        list($response) = $this->cyberscoreWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation cyberscoreWithHttpInfo
     *
     * Cyber Risk Score and Attributes
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function cyberscoreWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['cyberscore'][0])
    {
        $request = $this->cyberscoreRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyberscoreAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['cyberscore'][0])
    {
        return $this->cyberscoreAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cyberscoreAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['cyberscore'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreResponse';
        $request = $this->cyberscoreRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\CyberScoreRequest $body Cyber Score Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cyberscore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cyberscoreRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['cyberscore'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling cyberscore'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function facts($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['facts'][0])
    {
        list($response) = $this->factsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation factsWithHttpInfo
     *
     * Business Facts
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function factsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['facts'][0])
    {
        $request = $this->factsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['facts'][0])
    {
        return $this->factsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['facts'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse';
        $request = $this->factsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['facts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function factsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['facts'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling facts'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function fraudShields($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['fraudShields'][0])
    {
        list($response) = $this->fraudShieldsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation fraudShieldsWithHttpInfo
     *
     * Commercial Fraud Shields
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudShieldsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['fraudShields'][0])
    {
        $request = $this->fraudShieldsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['fraudShields'][0])
    {
        return $this->fraudShieldsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['fraudShields'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse';
        $request = $this->fraudShieldsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['fraudShields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function fraudShieldsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['fraudShields'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling fraudShields'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function governmentdetails($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['governmentdetails'][0])
    {
        list($response) = $this->governmentdetailsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation governmentdetailsWithHttpInfo
     *
     * Government Details
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function governmentdetailsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['governmentdetails'][0])
    {
        $request = $this->governmentdetailsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['governmentdetails'][0])
    {
        return $this->governmentdetailsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['governmentdetails'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse';
        $request = $this->governmentdetailsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['governmentdetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function governmentdetailsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['governmentdetails'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling governmentdetails'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function headers($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['headers'][0])
    {
        list($response) = $this->headersWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation headersWithHttpInfo
     *
     * Business Headers
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function headersWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['headers'][0])
    {
        $request = $this->headersRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['headers'][0])
    {
        return $this->headersAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['headers'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse';
        $request = $this->headersRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function headersRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['headers'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling headers'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscoreplus($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        list($response) = $this->intelliscoreplusWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation intelliscoreplusWithHttpInfo
     *
     * Intelliscore Plus JSON
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplusWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        $request = $this->intelliscoreplusRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        return $this->intelliscoreplusAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplus'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse';
        $request = $this->intelliscoreplusRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscoreplusRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplus'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling intelliscoreplus'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscoreplushtml($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        list($response) = $this->intelliscoreplushtmlWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation intelliscoreplushtmlWithHttpInfo
     *
     * Intelliscore Plus HTML
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplushtmlWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        $request = $this->intelliscoreplushtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        return $this->intelliscoreplushtmlAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse';
        $request = $this->intelliscoreplushtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscoreplushtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscoreplushtmlRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscoreplushtml'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling intelliscoreplushtml'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function intelliscorepluspdf($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        list($response) = $this->intelliscorepluspdfWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation intelliscorepluspdfWithHttpInfo
     *
     * Intelliscore Plus PDF
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscorepluspdfWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        $request = $this->intelliscorepluspdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        return $this->intelliscorepluspdfAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse';
        $request = $this->intelliscorepluspdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['intelliscorepluspdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function intelliscorepluspdfRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['intelliscorepluspdf'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling intelliscorepluspdf'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function istwatch($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['istwatch'][0])
    {
        list($response) = $this->istwatchWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation istwatchWithHttpInfo
     *
     * IST Watch
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function istwatchWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['istwatch'][0])
    {
        $request = $this->istwatchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['istwatch'][0])
    {
        return $this->istwatchAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['istwatch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse';
        $request = $this->istwatchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['istwatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function istwatchRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['istwatch'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling istwatch'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function judgments($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['judgments'][0])
    {
        list($response) = $this->judgmentsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation judgmentsWithHttpInfo
     *
     * Business Judgments
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function judgmentsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['judgments'][0])
    {
        $request = $this->judgmentsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['judgments'][0])
    {
        return $this->judgmentsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['judgments'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse';
        $request = $this->judgmentsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['judgments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function judgmentsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['judgments'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling judgments'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function legalCollectionSummaries($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        list($response) = $this->legalCollectionSummariesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation legalCollectionSummariesWithHttpInfo
     *
     * Legal Filings and Collections Summaries
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function legalCollectionSummariesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        $request = $this->legalCollectionSummariesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        return $this->legalCollectionSummariesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse';
        $request = $this->legalCollectionSummariesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legalCollectionSummaries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function legalCollectionSummariesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['legalCollectionSummaries'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling legalCollectionSummaries'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function liens($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['liens'][0])
    {
        list($response) = $this->liensWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation liensWithHttpInfo
     *
     * Business Liens
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function liensWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['liens'][0])
    {
        $request = $this->liensRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['liens'][0])
    {
        return $this->liensAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['liens'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse';
        $request = $this->liensRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liens'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function liensRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['liens'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling liens'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function multisegments($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['multisegments'][0])
    {
        list($response) = $this->multisegmentsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation multisegmentsWithHttpInfo
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function multisegmentsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['multisegments'][0])
    {
        $request = $this->multisegmentsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['multisegments'][0])
    {
        return $this->multisegmentsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['multisegments'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse';
        $request = $this->multisegmentsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['multisegments'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function multisegmentsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['multisegments'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling multisegments'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofiles($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofiles'][0])
    {
        list($response) = $this->premierprofilesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation premierprofilesWithHttpInfo
     *
     * Premier Profiles JSON
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofiles'][0])
    {
        $request = $this->premierprofilesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofiles'][0])
    {
        return $this->premierprofilesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofiles'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse';
        $request = $this->premierprofilesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofiles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofilesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofiles'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling premierprofiles'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofileshtml($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        list($response) = $this->premierprofileshtmlWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation premierprofileshtmlWithHttpInfo
     *
     * Premier Profiles HTML
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofileshtmlWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        $request = $this->premierprofileshtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        return $this->premierprofileshtmlAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofileshtml'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse';
        $request = $this->premierprofileshtmlRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofileshtml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofileshtmlRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofileshtml'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling premierprofileshtml'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function premierprofilespdf($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        list($response) = $this->premierprofilespdfWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation premierprofilespdfWithHttpInfo
     *
     * Premier Profiles PDF
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilespdfWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        $request = $this->premierprofilespdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        return $this->premierprofilespdfAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofilespdf'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse';
        $request = $this->premierprofilespdfRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['premierprofilespdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function premierprofilespdfRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['premierprofilespdf'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling premierprofilespdf'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function quicksearch($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['quicksearch'][0])
    {
        list($response) = $this->quicksearchWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation quicksearchWithHttpInfo
     *
     * Quick Search.  Our secondary search method
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function quicksearchWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['quicksearch'][0])
    {
        $request = $this->quicksearchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['quicksearch'][0])
    {
        return $this->quicksearchAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['quicksearch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse';
        $request = $this->quicksearchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['quicksearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function quicksearchRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['quicksearch'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling quicksearch'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reverseaddresses($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        list($response) = $this->reverseaddressesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation reverseaddressesWithHttpInfo
     *
     * Reverse Addresses
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseaddressesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        $request = $this->reverseaddressesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        return $this->reverseaddressesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reverseaddresses'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse';
        $request = $this->reverseaddressesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reverseaddresses'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reverseaddressesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reverseaddresses'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling reverseaddresses'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reversephones($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversephones'][0])
    {
        list($response) = $this->reversephonesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation reversephonesWithHttpInfo
     *
     * Reverse Phones
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversephonesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversephones'][0])
    {
        $request = $this->reversephonesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversephones'][0])
    {
        return $this->reversephonesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversephones'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse';
        $request = $this->reversephonesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversephones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reversephonesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversephones'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling reversephones'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function reversetaxids($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversetaxids'][0])
    {
        list($response) = $this->reversetaxidsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation reversetaxidsWithHttpInfo
     *
     * Reverse TaxIDs
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversetaxidsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversetaxids'][0])
    {
        $request = $this->reversetaxidsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversetaxids'][0])
    {
        return $this->reversetaxidsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversetaxids'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse';
        $request = $this->reversetaxidsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reversetaxids'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reversetaxidsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['reversetaxids'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling reversetaxids'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function riskdashboards($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['riskdashboards'][0])
    {
        list($response) = $this->riskdashboardsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation riskdashboardsWithHttpInfo
     *
     * Commercial Risk Dashboards
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function riskdashboardsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['riskdashboards'][0])
    {
        $request = $this->riskdashboardsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['riskdashboards'][0])
    {
        return $this->riskdashboardsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['riskdashboards'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse';
        $request = $this->riskdashboardsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['riskdashboards'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function riskdashboardsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['riskdashboards'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling riskdashboards'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function scores($content_type, $body, string $contentType = self::contentTypes['scores'][0])
    {
        list($response) = $this->scoresWithHttpInfo($content_type, $body, $contentType);
        return $response;
    }

    /**
     * Operation scoresWithHttpInfo
     *
     * Commercial Scores
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoresWithHttpInfo($content_type, $body, string $contentType = self::contentTypes['scores'][0])
    {
        $request = $this->scoresRequest($content_type, $body, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsync($content_type, $body, string $contentType = self::contentTypes['scores'][0])
    {
        return $this->scoresAsyncWithHttpInfo($content_type, $body, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsyncWithHttpInfo($content_type, $body, string $contentType = self::contentTypes['scores'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse';
        $request = $this->scoresRequest($content_type, $body, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scores'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function scoresRequest($content_type, $body, string $contentType = self::contentTypes['scores'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling scores'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function scoressearch($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['scoressearch'][0])
    {
        list($response) = $this->scoressearchWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation scoressearchWithHttpInfo
     *
     * Scores Auto Search
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoressearchWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['scoressearch'][0])
    {
        $request = $this->scoressearchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['scoressearch'][0])
    {
        return $this->scoressearchAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['scoressearch'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse';
        $request = $this->scoressearchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['scoressearch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function scoressearchRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['scoressearch'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling scoressearch'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function search($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['search'][0])
    {
        list($response) = $this->searchWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['search'][0])
    {
        $request = $this->searchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['search'][0])
    {
        return $this->searchAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['search'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse';
        $request = $this->searchRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['search'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['search'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling search'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function trades($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['trades'][0])
    {
        list($response) = $this->tradesWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation tradesWithHttpInfo
     *
     * Commercial Trades
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function tradesWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['trades'][0])
    {
        $request = $this->tradesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['trades'][0])
    {
        return $this->tradesAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['trades'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse';
        $request = $this->tradesRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trades'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tradesRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['trades'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling trades'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503
     */
    public function uccfilings($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['uccfilings'][0])
    {
        list($response) = $this->uccfilingsWithHttpInfo($content_type, $body, $x_comments, $contentType);
        return $response;
    }

    /**
     * Operation uccfilingsWithHttpInfo
     *
     * UCC Filings
     *
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502|\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503, HTTP status code, HTTP response headers (array of strings)
     */
    public function uccfilingsWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['uccfilings'][0])
    {
        $request = $this->uccfilingsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsync($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['uccfilings'][0])
    {
        return $this->uccfilingsAsyncWithHttpInfo($content_type, $body, $x_comments, $contentType)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsyncWithHttpInfo($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['uccfilings'][0])
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse';
        $request = $this->uccfilingsRequest($content_type, $body, $x_comments, $contentType);

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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string|null $x_comments An echo back field that will return x-comments in the response header (optional, default to 'Test comment')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uccfilings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uccfilingsRequest($content_type, $body, $x_comments = 'Test comment', string $contentType = self::contentTypes['uccfilings'][0])
    {

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling uccfilings'
            );
        }

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


        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_comments !== null) {
            $headerParams['x-comments'] = ObjectSerializer::toHeaderValue($x_comments);
        }



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
