<?php
/**
 * BusinessLegalFilingsCollectionsSummariesResult
 *
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
 * <p>Experian's Business Information Services is a leader in providing data and predictive insights to organizations, helping them mitigate risk and improve profitability.  The Businesses API provides integrated access to our business database which provides comprehensive, third-party-verified information on 99.9 percent of all U.S. companies, with the industry's most extensive data on the broad spectrum of small and midsize businesses.</p> <p>&nbsp;</p> <p>The Businesses API provides a la carte access to Experian's commercial credit and  commercial public record information, including commercial scores, trades, corporate linkage, bankruptcies, liens, judgments, and more.</p> <p>&nbsp;</p> <p><strong>It All Starts With a Search</strong></p> <p>The Business Search API allows you to input a business name, address, city, and state to find their Business Identification Number (BIN) - you'll need this to get data from most of the other APIs.  The primary search method is called \"Advanced Search\" and can be used for automated matching using our Match Reliability Code. A secondary search method, called \"QuickSearch\" and is a type-ahead style search that allows a human user to quickly find a business using a smaller amount of data.</p> <p><strong>SBCS Consortium Members</strong> can use the Businesses API search endpoints.</p> <p><strong>SBFE Consortium Members</strong> must use the <a href=\"/products/us/small-business-financial-exchangetm\">SBFE API</a>, using either the List of Similars product option to search for a business, or a Name/Address request for automated matching.</p> <p>&nbsp;</p> <p><strong>Businesses API in the Sandbox</strong></p> <ul> <li><strong>Advanced Search</strong> - The primary way to search for US businesses and return a List of Similars. Designed for both automation and human interaction</li> <li><strong>Quick Search</strong> - The secondary search method. A flexible, type-ahead style search API for US businesses. Designed primarily for human interaction</li> <li><strong>Headers</strong> - Business identity information. Available as stand-alone and included with most API responses</li> <li><strong>Scores</strong> - Commercial Intelliscore Plus and Financial Stability Risk Scores, with scores, score factors, and monthly and quarterly trends</li> <li><strong>Scores Auto Search</strong> - Returns the Scores API, but with a Business Name and Address request input</li> <li><strong>Premier Profiles JSON</strong> - Experian's flagship commercial credit report</li> <li><strong>Premier Profiles HTML</strong> - Renders a styled Premier Profile report using HTML/CSS</li> <li><strong>Premier Profiles PDF</strong> - Provides an encoded Premier Profile PDF report</li> <li><strong>Intelliscore Report JSON</strong> – Our score only report</li> <li><strong>Intelliscore Report HTML</strong> – Our score only report in HTML format</li> <li><strong>Intelliscore Report PDF</strong> – Our score only report in PDF format</li> <li><strong>Business Compliance Insight JSON</strong> – The BCI report helps with client onboarding and Know-Your-Customer investigations</li> <li><strong>Business Compliance Insight HTML</strong> – The BCI Report in HTML format</li> <li><strong>Business Compliance Insight PDF</strong> – The BCI report in PDF format</li> <li><strong>Aggregates</strong> - The BizAggs represent over 400 unique data attributes that represent the building blocks of commercial credit</li> <li><strong>MultiSegments</strong> - MultiSegments allows you to request segments from most Businesses API endpoints in a single API call</li> <li><strong>Risk Dashboards</strong> - Includes commercial and FSR scores, credit limit amount, current DBT</li> <li><strong>Business Facts</strong> - Key operational facts including SIC, NAICS, public status, sales, employees</li> <li><strong>Fraud Shields</strong> - Screens for potential indicators of fraud. Includes possible OFAC match</li> <li><strong>Credit Status</strong> - Key credit facts about the business including tradeline count, balance, DBT</li> <li><strong>Legal Filings and Collections Summaries</strong> - Summary of all legal filings and collections</li> <li><strong>Collections</strong> - Summary and Detail</li> <li><strong>Trades</strong> - Trade summary, payment experiences, payment totals, and trade payment trends</li> <li><strong>Bankruptcies</strong> - Summary and Detail</li> <li><strong>Liens</strong> - Summary and Detail</li> <li><strong>Judgments</strong> - Summary and Detail</li> <li><strong>UCC Filings</strong> - Summary and Trends</li> <li><strong>Corporate Registrations</strong> - Corporate registration info for the business, including filing status</li> <li><strong>Corporate Linkage</strong> - Partial and/or Full Family Tree</li> <li><strong>Business Contacts</strong> - Individual owners, company owners, contacts and titles, and contacts business affiliations</li> <li><strong>Reverse Addresses</strong> - Input an address and find businesses affiliated with that address</li> <li><strong>Reverse Phones</strong> - Input a phone number and find businesses affiliated with that phone number</li> <li><strong>Reverse Tax IDs</strong> - Input a Tax ID (EIN) and find businesses affiliated with that Tax ID</li> <li><strong>Government Details</strong> – Economic diversity and government contract data for the business</li> <li><strong>IST Watch</strong> - Manage OFAC regulatory compliance and watchlist screening with the IST Watch API</li> </ul> <p>&nbsp;</p> <p><strong>Businesses API Environments</strong></p> <ul> <li><strong>Sandbox </strong> - https://sandbox-us-api.experian.com/businessinformation/businesses</li> <li><strong>UAT </strong> - https://uat-us-api.experian.com/businessinformation/businesses</li> <li><strong>Production</strong> - https://us-api.experian.com/businessinformation/businesses</li> </ul> <p>&nbsp;</p> <p>Please note that the Businesses API in the Developer Portal Sandbox is a non-production service that is for testing and demonstration purposes only. Only a limited number of businesses are available in the sandbox test environment. A list of valid Business Identification Numbers  (BINs) can be provided to you upon your request, and valid BINs in the sandbox can  also be obtained using the Business Search API. Please contact your Experian Account Executive to discuss obtaining production access to the Businesses API.</p> <p>&nbsp;</p> <p><strong>IPv3 Sample Subcodes</strong></p> <ul> <li>IPv3 Logistic Regression - 0586286</li> <li>IPv3 Machine Learning - 0586548</li> </ul> <p>&nbsp;</p> <p><strong>Additional Developer Tools</strong></p> <ul> <li><a href=\"https://github.com/experianplc/Experian-BIS-Postman-Collection\"><strong>BIS API Postman Collection</strong></a> - A starter Postman Collection and Environment for many BIS APIs</li> <li><a href=\"https://github.com/experianplc/BIS-HTML-Resources\"><strong>BIS HTML Resources</strong></a> - Images, CSS, and Javsscript files necessary to render BIS HTML API reports</li> </ul>
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

namespace TheLogicStudio\ExperianBusinessesPHP\Model;

use \ArrayAccess;
use \TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * BusinessLegalFilingsCollectionsSummariesResult Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessLegalFilingsCollectionsSummariesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessLegalFilingsCollectionsSummariesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legal_count' => 'float',
        'legal_balance' => 'float',
        'derogatory_legal_count' => 'float',
        'bankruptcy_indicator' => 'bool',
        'bankruptcy_count' => 'float',
        'lien_count' => 'float',
        'lien_balance' => 'float',
        'judgment_count' => 'float',
        'judgment_balance' => 'float',
        'ucc_filings_count' => 'float',
        'ucc_derogatory_count' => 'float',
        'collection_count' => 'float',
        'collection_balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legal_count' => null,
        'legal_balance' => null,
        'derogatory_legal_count' => null,
        'bankruptcy_indicator' => null,
        'bankruptcy_count' => null,
        'lien_count' => null,
        'lien_balance' => null,
        'judgment_count' => null,
        'judgment_balance' => null,
        'ucc_filings_count' => null,
        'ucc_derogatory_count' => null,
        'collection_count' => null,
        'collection_balance' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'legal_count' => 'legalCount',
        'legal_balance' => 'legalBalance',
        'derogatory_legal_count' => 'derogatoryLegalCount',
        'bankruptcy_indicator' => 'bankruptcyIndicator',
        'bankruptcy_count' => 'bankruptcyCount',
        'lien_count' => 'lienCount',
        'lien_balance' => 'lienBalance',
        'judgment_count' => 'judgmentCount',
        'judgment_balance' => 'judgmentBalance',
        'ucc_filings_count' => 'uccFilingsCount',
        'ucc_derogatory_count' => 'uccDerogatoryCount',
        'collection_count' => 'collectionCount',
        'collection_balance' => 'collectionBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legal_count' => 'setLegalCount',
        'legal_balance' => 'setLegalBalance',
        'derogatory_legal_count' => 'setDerogatoryLegalCount',
        'bankruptcy_indicator' => 'setBankruptcyIndicator',
        'bankruptcy_count' => 'setBankruptcyCount',
        'lien_count' => 'setLienCount',
        'lien_balance' => 'setLienBalance',
        'judgment_count' => 'setJudgmentCount',
        'judgment_balance' => 'setJudgmentBalance',
        'ucc_filings_count' => 'setUccFilingsCount',
        'ucc_derogatory_count' => 'setUccDerogatoryCount',
        'collection_count' => 'setCollectionCount',
        'collection_balance' => 'setCollectionBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legal_count' => 'getLegalCount',
        'legal_balance' => 'getLegalBalance',
        'derogatory_legal_count' => 'getDerogatoryLegalCount',
        'bankruptcy_indicator' => 'getBankruptcyIndicator',
        'bankruptcy_count' => 'getBankruptcyCount',
        'lien_count' => 'getLienCount',
        'lien_balance' => 'getLienBalance',
        'judgment_count' => 'getJudgmentCount',
        'judgment_balance' => 'getJudgmentBalance',
        'ucc_filings_count' => 'getUccFilingsCount',
        'ucc_derogatory_count' => 'getUccDerogatoryCount',
        'collection_count' => 'getCollectionCount',
        'collection_balance' => 'getCollectionBalance'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['legal_count'] = isset($data['legal_count']) ? $data['legal_count'] : null;
        $this->container['legal_balance'] = isset($data['legal_balance']) ? $data['legal_balance'] : null;
        $this->container['derogatory_legal_count'] = isset($data['derogatory_legal_count']) ? $data['derogatory_legal_count'] : null;
        $this->container['bankruptcy_indicator'] = isset($data['bankruptcy_indicator']) ? $data['bankruptcy_indicator'] : null;
        $this->container['bankruptcy_count'] = isset($data['bankruptcy_count']) ? $data['bankruptcy_count'] : null;
        $this->container['lien_count'] = isset($data['lien_count']) ? $data['lien_count'] : null;
        $this->container['lien_balance'] = isset($data['lien_balance']) ? $data['lien_balance'] : null;
        $this->container['judgment_count'] = isset($data['judgment_count']) ? $data['judgment_count'] : null;
        $this->container['judgment_balance'] = isset($data['judgment_balance']) ? $data['judgment_balance'] : null;
        $this->container['ucc_filings_count'] = isset($data['ucc_filings_count']) ? $data['ucc_filings_count'] : null;
        $this->container['ucc_derogatory_count'] = isset($data['ucc_derogatory_count']) ? $data['ucc_derogatory_count'] : null;
        $this->container['collection_count'] = isset($data['collection_count']) ? $data['collection_count'] : null;
        $this->container['collection_balance'] = isset($data['collection_balance']) ? $data['collection_balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets legal_count
     *
     * @return float
     */
    public function getLegalCount()
    {
        return $this->container['legal_count'];
    }

    /**
     * Sets legal_count
     *
     * @param float $legal_count Total count of bankruptcies, liens, judgments, UCC filings, and collections
     *
     * @return $this
     */
    public function setLegalCount($legal_count)
    {
        $this->container['legal_count'] = $legal_count;

        return $this;
    }

    /**
     * Gets legal_balance
     *
     * @return float
     */
    public function getLegalBalance()
    {
        return $this->container['legal_balance'];
    }

    /**
     * Sets legal_balance
     *
     * @param float $legal_balance Total balance of bankruptcies, liens, judgments, and collections
     *
     * @return $this
     */
    public function setLegalBalance($legal_balance)
    {
        $this->container['legal_balance'] = $legal_balance;

        return $this;
    }

    /**
     * Gets derogatory_legal_count
     *
     * @return float
     */
    public function getDerogatoryLegalCount()
    {
        return $this->container['derogatory_legal_count'];
    }

    /**
     * Sets derogatory_legal_count
     *
     * @param float $derogatory_legal_count Total count of bankruptcies, liens, and judgments
     *
     * @return $this
     */
    public function setDerogatoryLegalCount($derogatory_legal_count)
    {
        $this->container['derogatory_legal_count'] = $derogatory_legal_count;

        return $this;
    }

    /**
     * Gets bankruptcy_indicator
     *
     * @return bool
     */
    public function getBankruptcyIndicator()
    {
        return $this->container['bankruptcy_indicator'];
    }

    /**
     * Sets bankruptcy_indicator
     *
     * @param bool $bankruptcy_indicator If true there is a Chapter 7, 11, or 13 bankruptcy on file. New bankruptcies are added to the Experian database within 24 hours after their filing. Bankruptcies remain on file for 9 years and 9 months
     *
     * @return $this
     */
    public function setBankruptcyIndicator($bankruptcy_indicator)
    {
        $this->container['bankruptcy_indicator'] = $bankruptcy_indicator;

        return $this;
    }

    /**
     * Gets bankruptcy_count
     *
     * @return float
     */
    public function getBankruptcyCount()
    {
        return $this->container['bankruptcy_count'];
    }

    /**
     * Sets bankruptcy_count
     *
     * @param float $bankruptcy_count Count of bankruptcies on file for the business
     *
     * @return $this
     */
    public function setBankruptcyCount($bankruptcy_count)
    {
        $this->container['bankruptcy_count'] = $bankruptcy_count;

        return $this;
    }

    /**
     * Gets lien_count
     *
     * @return float
     */
    public function getLienCount()
    {
        return $this->container['lien_count'];
    }

    /**
     * Sets lien_count
     *
     * @param float $lien_count Count of tax liens, or claims on the property or goods on a business by government tax agencies. Tax liens remain on file for 6 years and 9 months
     *
     * @return $this
     */
    public function setLienCount($lien_count)
    {
        $this->container['lien_count'] = $lien_count;

        return $this;
    }

    /**
     * Gets lien_balance
     *
     * @return float
     */
    public function getLienBalance()
    {
        return $this->container['lien_balance'];
    }

    /**
     * Sets lien_balance
     *
     * @param float $lien_balance Count of tax liens, or claims on the property or goods on a business by government tax agencies. Tax liens remain on file for 6 years and 9 months
     *
     * @return $this
     */
    public function setLienBalance($lien_balance)
    {
        $this->container['lien_balance'] = $lien_balance;

        return $this;
    }

    /**
     * Gets judgment_count
     *
     * @return float
     */
    public function getJudgmentCount()
    {
        return $this->container['judgment_count'];
    }

    /**
     * Sets judgment_count
     *
     * @param float $judgment_count Count of judgments, or court decisions directing a business to make payments to a plaintiff. Judgments remain on file for 6 years and 9 months
     *
     * @return $this
     */
    public function setJudgmentCount($judgment_count)
    {
        $this->container['judgment_count'] = $judgment_count;

        return $this;
    }

    /**
     * Gets judgment_balance
     *
     * @return float
     */
    public function getJudgmentBalance()
    {
        return $this->container['judgment_balance'];
    }

    /**
     * Sets judgment_balance
     *
     * @param float $judgment_balance Judgment balance
     *
     * @return $this
     */
    public function setJudgmentBalance($judgment_balance)
    {
        $this->container['judgment_balance'] = $judgment_balance;

        return $this;
    }

    /**
     * Gets ucc_filings_count
     *
     * @return float
     */
    public function getUccFilingsCount()
    {
        return $this->container['ucc_filings_count'];
    }

    /**
     * Sets ucc_filings_count
     *
     * @param float $ucc_filings_count Count of Uniform Commercial Code (UCC) filings on file for the business. UCC filings are required whenever a company pledges assets as collateral to secure financing. UCC filings remain on file for 5 years
     *
     * @return $this
     */
    public function setUccFilingsCount($ucc_filings_count)
    {
        $this->container['ucc_filings_count'] = $ucc_filings_count;

        return $this;
    }

    /**
     * Gets ucc_derogatory_count
     *
     * @return float
     */
    public function getUccDerogatoryCount()
    {
        return $this->container['ucc_derogatory_count'];
    }

    /**
     * Sets ucc_derogatory_count
     *
     * @param float $ucc_derogatory_count \"Derogatory UCCs include one or more of the following as collateral: accounts, accounts receivable, contracts, hereafter acquired inventory, leases, notes receivable, or proceeds. When a business pledges these key assets to secure financing it may indicate the business is under financial stress.\"
     *
     * @return $this
     */
    public function setUccDerogatoryCount($ucc_derogatory_count)
    {
        $this->container['ucc_derogatory_count'] = $ucc_derogatory_count;

        return $this;
    }

    /**
     * Gets collection_count
     *
     * @return float
     */
    public function getCollectionCount()
    {
        return $this->container['collection_count'];
    }

    /**
     * Sets collection_count
     *
     * @param float $collection_count Count of collection accounts on file for the business. Collections remain on file for up to 6 years
     *
     * @return $this
     */
    public function setCollectionCount($collection_count)
    {
        $this->container['collection_count'] = $collection_count;

        return $this;
    }

    /**
     * Gets collection_balance
     *
     * @return float
     */
    public function getCollectionBalance()
    {
        return $this->container['collection_balance'];
    }

    /**
     * Sets collection_balance
     *
     * @param float $collection_balance Collections balance
     *
     * @return $this
     */
    public function setCollectionBalance($collection_balance)
    {
        $this->container['collection_balance'] = $collection_balance;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


