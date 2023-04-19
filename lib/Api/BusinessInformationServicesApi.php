<?php
/**
 * BusinessInformationServicesApi
 * PHP version 5
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Businesses
 *
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code.   A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the  List of Similars product option to search for a business, or a Name/Address request for automated matching.</p>  <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
 *
 * OpenAPI spec version: 1.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.31
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExperianBusinessesPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TheLogicStudio\ExperianBusinessesPHP\ApiException;
use TheLogicStudio\ExperianBusinessesPHP\Configuration;
use TheLogicStudio\ExperianBusinessesPHP\HeaderSelector;
use TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * BusinessInformationServicesApi Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse
     */
    public function aggregates($body, $content_type = 'application/json')
    {
        list($response) = $this->aggregatesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation aggregatesWithHttpInfo
     *
     * BizAggs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function aggregatesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse';
        $request = $this->aggregatesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsync($body, $content_type = 'application/json')
    {
        return $this->aggregatesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregatesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesResponse';
        $request = $this->aggregatesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'aggregates'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessAggregatesRequest $body Business Aggregates Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aggregatesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse
     */
    public function bankruptcies($body, $content_type = 'application/json')
    {
        list($response) = $this->bankruptciesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation bankruptciesWithHttpInfo
     *
     * Business Bankruptcies
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bankruptciesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse';
        $request = $this->bankruptciesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsync($body, $content_type = 'application/json')
    {
        return $this->bankruptciesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bankruptciesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyResponse';
        $request = $this->bankruptciesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bankruptcies'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessBankruptcyDataRequest $body Business Bankruptcies Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bankruptciesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse
     */
    public function bci($body, $content_type)
    {
        list($response) = $this->bciWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation bciWithHttpInfo
     *
     * Business Compliance Insight JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bciWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse';
        $request = $this->bciRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsync($body, $content_type)
    {
        return $this->bciAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bciAsyncWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponse';
        $request = $this->bciRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bci'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bciRequest($body, $content_type)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bci'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bci'
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


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML
     */
    public function bcihtml($body, $content_type)
    {
        list($response) = $this->bcihtmlWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation bcihtmlWithHttpInfo
     *
     * Business Compliance Insight HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcihtmlWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML';
        $request = $this->bcihtmlRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsync($body, $content_type)
    {
        return $this->bcihtmlAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcihtmlAsyncWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponseHTML';
        $request = $this->bcihtmlRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bcihtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bcihtmlRequest($body, $content_type)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bcihtml'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bcihtml'
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


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF
     */
    public function bcipdf($body, $content_type)
    {
        list($response) = $this->bcipdfWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation bcipdfWithHttpInfo
     *
     * Business Compliance Insight PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF, HTTP status code, HTTP response headers (array of strings)
     */
    public function bcipdfWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF';
        $request = $this->bcipdfRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsync($body, $content_type)
    {
        return $this->bcipdfAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bcipdfAsyncWithHttpInfo($body, $content_type)
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BCIResponsePDF';
        $request = $this->bcipdfRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bcipdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BCIRequest $body BCI Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bcipdfRequest($body, $content_type)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling bcipdf'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling bcipdf'
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


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse
     */
    public function businesscontacts($body, $content_type = 'application/json')
    {
        list($response) = $this->businesscontactsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation businesscontactsWithHttpInfo
     *
     * Business Contacts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function businesscontactsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse';
        $request = $this->businesscontactsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsync($body, $content_type = 'application/json')
    {
        return $this->businesscontactsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function businesscontactsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsResponse';
        $request = $this->businesscontactsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'businesscontacts'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessContactsRequest $body Business Data Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function businesscontactsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse
     */
    public function collections($body, $content_type = 'application/json')
    {
        list($response) = $this->collectionsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation collectionsWithHttpInfo
     *
     * Commercial Collections
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function collectionsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse';
        $request = $this->collectionsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsync($body, $content_type = 'application/json')
    {
        return $this->collectionsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function collectionsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsResponse';
        $request = $this->collectionsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'collections'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCollectionsRequest $body Commercial Collections Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function collectionsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse
     */
    public function corporateLinkage($body, $content_type = 'application/json')
    {
        list($response) = $this->corporateLinkageWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation corporateLinkageWithHttpInfo
     *
     * Corporate Linkage
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateLinkageWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse';
        $request = $this->corporateLinkageRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsync($body, $content_type = 'application/json')
    {
        return $this->corporateLinkageAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateLinkageAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CorporateLinkageResponse';
        $request = $this->corporateLinkageRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'corporateLinkage'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateLinkageRequest $body Corporate Linkage Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function corporateLinkageRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse
     */
    public function corporateRegistration($body, $content_type = 'application/json')
    {
        list($response) = $this->corporateRegistrationWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation corporateRegistrationWithHttpInfo
     *
     * Corporate Registrations
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function corporateRegistrationWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse';
        $request = $this->corporateRegistrationRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsync($body, $content_type = 'application/json')
    {
        return $this->corporateRegistrationAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function corporateRegistrationAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationResponse';
        $request = $this->corporateRegistrationRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'corporateRegistration'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessCorporateRegistrationsRequest $body Corporate Registrations Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function corporateRegistrationRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse
     */
    public function creditstatus($body, $content_type = 'application/json')
    {
        list($response) = $this->creditstatusWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation creditstatusWithHttpInfo
     *
     * Commercial Credit Status
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditstatusWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse';
        $request = $this->creditstatusRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsync($body, $content_type = 'application/json')
    {
        return $this->creditstatusAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditstatusAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\CreditStatusResponse';
        $request = $this->creditstatusRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditstatus'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Credit Status Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function creditstatusRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse
     */
    public function facts($body, $content_type = 'application/json')
    {
        list($response) = $this->factsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation factsWithHttpInfo
     *
     * Business Facts
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function factsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse';
        $request = $this->factsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsync($body, $content_type = 'application/json')
    {
        return $this->factsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function factsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFactsResponse';
        $request = $this->factsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'facts'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Facts Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function factsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse
     */
    public function fraudShields($body, $content_type = 'application/json')
    {
        list($response) = $this->fraudShieldsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation fraudShieldsWithHttpInfo
     *
     * Commercial Fraud Shields
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudShieldsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse';
        $request = $this->fraudShieldsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsync($body, $content_type = 'application/json')
    {
        return $this->fraudShieldsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fraudShieldsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessFraudShieldResponse';
        $request = $this->fraudShieldsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fraudShields'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Commercial Fraud Shields Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fraudShieldsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse
     */
    public function governmentdetails($body, $content_type = 'application/json')
    {
        list($response) = $this->governmentdetailsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation governmentdetailsWithHttpInfo
     *
     * Government Details
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function governmentdetailsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse';
        $request = $this->governmentdetailsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsync($body, $content_type = 'application/json')
    {
        return $this->governmentdetailsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function governmentdetailsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsResponse';
        $request = $this->governmentdetailsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'governmentdetails'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\GovernmentDetailsRequest $body Government Details Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function governmentdetailsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse
     */
    public function headers($body, $content_type = 'application/json')
    {
        list($response) = $this->headersWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation headersWithHttpInfo
     *
     * Business Headers
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function headersWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse';
        $request = $this->headersRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsync($body, $content_type = 'application/json')
    {
        return $this->headersAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function headersAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessHeaderResponse';
        $request = $this->headersRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'headers'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequest $body Business Headers Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function headersRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse
     */
    public function intelliscoreplus($body, $content_type = 'application/json')
    {
        list($response) = $this->intelliscoreplusWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation intelliscoreplusWithHttpInfo
     *
     * Intelliscore Plus JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplusWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse';
        $request = $this->intelliscoreplusRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsync($body, $content_type = 'application/json')
    {
        return $this->intelliscoreplusAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplusAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusResponse';
        $request = $this->intelliscoreplusRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscoreplus'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function intelliscoreplusRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse
     */
    public function intelliscoreplushtml($body, $content_type = 'application/json')
    {
        list($response) = $this->intelliscoreplushtmlWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation intelliscoreplushtmlWithHttpInfo
     *
     * Intelliscore Plus HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscoreplushtmlWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse';
        $request = $this->intelliscoreplushtmlRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsync($body, $content_type = 'application/json')
    {
        return $this->intelliscoreplushtmlAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscoreplushtmlAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusHTMLResponse';
        $request = $this->intelliscoreplushtmlRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscoreplushtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus HTML Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function intelliscoreplushtmlRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse
     */
    public function intelliscorepluspdf($body, $content_type = 'application/json')
    {
        list($response) = $this->intelliscorepluspdfWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation intelliscorepluspdfWithHttpInfo
     *
     * Intelliscore Plus PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function intelliscorepluspdfWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse';
        $request = $this->intelliscorepluspdfRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsync($body, $content_type = 'application/json')
    {
        return $this->intelliscorepluspdfAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function intelliscorepluspdfAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusPDFResponse';
        $request = $this->intelliscorepluspdfRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'intelliscorepluspdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\IntelliscorePlusRequest $body Intelliscore Plus PDF Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function intelliscorepluspdfRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse
     */
    public function istwatch($body, $content_type = 'application/json')
    {
        list($response) = $this->istwatchWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation istwatchWithHttpInfo
     *
     * IST Watch
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function istwatchWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse';
        $request = $this->istwatchRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsync($body, $content_type = 'application/json')
    {
        return $this->istwatchAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function istwatchAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchResponse';
        $request = $this->istwatchRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'istwatch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ISTWatchRequest $body IST Watch Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function istwatchRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse
     */
    public function judgments($body, $content_type = 'application/json')
    {
        list($response) = $this->judgmentsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation judgmentsWithHttpInfo
     *
     * Business Judgments
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function judgmentsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse';
        $request = $this->judgmentsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsync($body, $content_type = 'application/json')
    {
        return $this->judgmentsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function judgmentsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentResponse';
        $request = $this->judgmentsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'judgments'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessJudgmentRequest $body Business Judgments Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function judgmentsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse
     */
    public function legalCollectionSummaries($body, $content_type = 'application/json')
    {
        list($response) = $this->legalCollectionSummariesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation legalCollectionSummariesWithHttpInfo
     *
     * Legal Filings and Collections Summaries
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function legalCollectionSummariesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse';
        $request = $this->legalCollectionSummariesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsync($body, $content_type = 'application/json')
    {
        return $this->legalCollectionSummariesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalCollectionSummariesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesResponse';
        $request = $this->legalCollectionSummariesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'legalCollectionSummaries'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLegalCollectionSummariesRequest $body Legal Filings and Collections Summaries Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function legalCollectionSummariesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse
     */
    public function liens($body, $content_type = 'application/json')
    {
        list($response) = $this->liensWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation liensWithHttpInfo
     *
     * Business Liens
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function liensWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse';
        $request = $this->liensRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsync($body, $content_type = 'application/json')
    {
        return $this->liensAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liensAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensResponse';
        $request = $this->liensRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'liens'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessLiensRequest $body Business Liens Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function liensRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse
     */
    public function multisegments($body, $content_type = 'application/json')
    {
        list($response) = $this->multisegmentsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation multisegmentsWithHttpInfo
     *
     * MultiSegments. Request a la carte segments in a single call
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function multisegmentsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse';
        $request = $this->multisegmentsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsync($body, $content_type = 'application/json')
    {
        return $this->multisegmentsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function multisegmentsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsResponse';
        $request = $this->multisegmentsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'multisegments'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\MultiSegmentsRequest $body Multi Segments Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function multisegmentsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse
     */
    public function premierprofiles($body, $content_type = 'application/json')
    {
        list($response) = $this->premierprofilesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation premierprofilesWithHttpInfo
     *
     * Premier Profiles JSON
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse';
        $request = $this->premierprofilesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsync($body, $content_type = 'application/json')
    {
        return $this->premierprofilesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesResponse';
        $request = $this->premierprofilesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofiles'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function premierprofilesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse
     */
    public function premierprofileshtml($body, $content_type = 'application/json')
    {
        list($response) = $this->premierprofileshtmlWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation premierprofileshtmlWithHttpInfo
     *
     * Premier Profiles HTML
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofileshtmlWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse';
        $request = $this->premierprofileshtmlRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsync($body, $content_type = 'application/json')
    {
        return $this->premierprofileshtmlAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofileshtmlAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesHTMLResponse';
        $request = $this->premierprofileshtmlRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofileshtml'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function premierprofileshtmlRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse
     */
    public function premierprofilespdf($body, $content_type = 'application/json')
    {
        list($response) = $this->premierprofilespdfWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation premierprofilespdfWithHttpInfo
     *
     * Premier Profiles PDF
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function premierprofilespdfWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse';
        $request = $this->premierprofilespdfRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsync($body, $content_type = 'application/json')
    {
        return $this->premierprofilespdfAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function premierprofilespdfAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\PremierProfilesPDFResponse';
        $request = $this->premierprofilespdfRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'premierprofilespdf'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessPremierProfileRequest $body Business Premier Profile PDF Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body. (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function premierprofilespdfRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse
     */
    public function quicksearch($body, $content_type = 'application/json')
    {
        list($response) = $this->quicksearchWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation quicksearchWithHttpInfo
     *
     * Quick Search.  Our secondary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function quicksearchWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse';
        $request = $this->quicksearchRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsync($body, $content_type = 'application/json')
    {
        return $this->quicksearchAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function quicksearchAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchResponse';
        $request = $this->quicksearchRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'quicksearch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\QuickSearchRequest $body QuickSearch Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function quicksearchRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse
     */
    public function reverseaddresses($body, $content_type = 'application/json')
    {
        list($response) = $this->reverseaddressesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation reverseaddressesWithHttpInfo
     *
     * Reverse Addresses
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reverseaddressesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse';
        $request = $this->reverseaddressesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsync($body, $content_type = 'application/json')
    {
        return $this->reverseaddressesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reverseaddressesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseAddressesResponse';
        $request = $this->reverseaddressesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reverseaddresses'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseAddressesRequest $body Reverse Address Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reverseaddressesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse
     */
    public function reversephones($body, $content_type = 'application/json')
    {
        list($response) = $this->reversephonesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation reversephonesWithHttpInfo
     *
     * Reverse Phones
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversephonesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse';
        $request = $this->reversephonesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsync($body, $content_type = 'application/json')
    {
        return $this->reversephonesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversephonesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReversePhonesResponse';
        $request = $this->reversephonesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reversephones'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReversePhonesRequest $body Reverse Phones Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reversephonesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse
     */
    public function reversetaxids($body, $content_type = 'application/json')
    {
        list($response) = $this->reversetaxidsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation reversetaxidsWithHttpInfo
     *
     * Reverse TaxIDs
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reversetaxidsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse';
        $request = $this->reversetaxidsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsync($body, $content_type = 'application/json')
    {
        return $this->reversetaxidsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reversetaxidsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ReverseTaxIDsResponse';
        $request = $this->reversetaxidsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reversetaxids'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessReverseTaxIDsRequest $body Reverse TaxID Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reversetaxidsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse
     */
    public function riskdashboards($body, $content_type = 'application/json')
    {
        list($response) = $this->riskdashboardsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation riskdashboardsWithHttpInfo
     *
     * Commercial Risk Dashboards
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function riskdashboardsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse';
        $request = $this->riskdashboardsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsync($body, $content_type = 'application/json')
    {
        return $this->riskdashboardsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function riskdashboardsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\RiskDashboardsResponse';
        $request = $this->riskdashboardsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'riskdashboards'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessDataRequestWithModel $body Commercial Risk Dashboards Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function riskdashboardsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse
     */
    public function scores($body, $content_type = 'application/json')
    {
        list($response) = $this->scoresWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation scoresWithHttpInfo
     *
     * Commercial Scores
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoresWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse';
        $request = $this->scoresRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsync($body, $content_type = 'application/json')
    {
        return $this->scoresAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoresAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresResponse';
        $request = $this->scoresRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scores'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessScoresRequest $body Commercial Scores Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scoresRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse
     */
    public function scoressearch($body, $content_type = 'application/json')
    {
        list($response) = $this->scoressearchWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation scoressearchWithHttpInfo
     *
     * Scores Auto Search
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function scoressearchWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse';
        $request = $this->scoressearchRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsync($body, $content_type = 'application/json')
    {
        return $this->scoressearchAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scoressearchAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchResponse';
        $request = $this->scoressearchRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scoressearch'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\ScoresSearchRequest $body Commercial Scores Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function scoressearchRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse
     */
    public function search($body, $content_type = 'application/json')
    {
        list($response) = $this->searchWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Advanced Business Search.  The primary search method
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse';
        $request = $this->searchRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync($body, $content_type = 'application/json')
    {
        return $this->searchAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\SearchResponse';
        $request = $this->searchRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'search'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\SearchRequest $body Business Search Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse
     */
    public function trades($body, $content_type = 'application/json')
    {
        list($response) = $this->tradesWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation tradesWithHttpInfo
     *
     * Commercial Trades
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function tradesWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse';
        $request = $this->tradesRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsync($body, $content_type = 'application/json')
    {
        return $this->tradesAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesResponse';
        $request = $this->tradesRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'trades'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessTradesRequest $body Commercial Trades Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function tradesRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse
     */
    public function uccfilings($body, $content_type = 'application/json')
    {
        list($response) = $this->uccfilingsWithHttpInfo($body, $content_type);
        return $response;
    }

    /**
     * Operation uccfilingsWithHttpInfo
     *
     * UCC Filings
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \TheLogicStudio\ExperianBusinessesPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uccfilingsWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse';
        $request = $this->uccfilingsRequest($body, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse502',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TheLogicStudio\ExperianBusinessesPHP\Model\ErrorResponse503',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsync($body, $content_type = 'application/json')
    {
        return $this->uccfilingsAsyncWithHttpInfo($body, $content_type)
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
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uccfilingsAsyncWithHttpInfo($body, $content_type = 'application/json')
    {
        $returnType = '\TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsResponse';
        $request = $this->uccfilingsRequest($body, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'uccfilings'
     *
     * @param  \TheLogicStudio\ExperianBusinessesPHP\Model\BusinessUCCFilingsRequest $body UCC Filings Request (required)
     * @param  string $content_type Content-Type field is to describe the data contained in the body (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uccfilingsRequest($body, $content_type = 'application/json')
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

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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

        return $options;
    }
}
