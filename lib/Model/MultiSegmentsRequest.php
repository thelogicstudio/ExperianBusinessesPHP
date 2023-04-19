<?php
/**
 * MultiSegmentsRequest
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

namespace TheLogicStudio\ExperianBusinessesPHP\Model;

use \ArrayAccess;
use \TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * MultiSegmentsRequest Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiSegmentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiSegmentsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subcode' => 'string',
        'bin' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phone' => 'string',
        'tax_id' => 'string',
        'comments' => 'string',
        'data_points' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subcode' => null,
        'bin' => null,
        'street' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'phone' => null,
        'tax_id' => null,
        'comments' => null,
        'data_points' => null
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
        'subcode' => 'subcode',
        'bin' => 'bin',
        'street' => 'street',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'phone' => 'phone',
        'tax_id' => 'taxId',
        'comments' => 'comments',
        'data_points' => 'dataPoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subcode' => 'setSubcode',
        'bin' => 'setBin',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'phone' => 'setPhone',
        'tax_id' => 'setTaxId',
        'comments' => 'setComments',
        'data_points' => 'setDataPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subcode' => 'getSubcode',
        'bin' => 'getBin',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'phone' => 'getPhone',
        'tax_id' => 'getTaxId',
        'comments' => 'getComments',
        'data_points' => 'getDataPoints'
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
        $this->container['subcode'] = isset($data['subcode']) ? $data['subcode'] : '0563736';
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : '700000001';
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : '9495673800';
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : '123456789';
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : 'test12345';
        $this->container['data_points'] = isset($data['data_points']) ? $data['data_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subcode'] === null) {
            $invalidProperties[] = "'subcode' can't be null";
        }
        if ((mb_strlen($this->container['subcode']) > 7)) {
            $invalidProperties[] = "invalid value for 'subcode', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['bin'] === null) {
            $invalidProperties[] = "'bin' can't be null";
        }
        if ((mb_strlen($this->container['bin']) > 9)) {
            $invalidProperties[] = "invalid value for 'bin', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 255)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 2)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['zip']) && (mb_strlen($this->container['zip']) > 9)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['tax_id']) && (mb_strlen($this->container['tax_id']) > 9)) {
            $invalidProperties[] = "invalid value for 'tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 30)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 30.";
        }

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
     * Gets subcode
     *
     * @return string
     */
    public function getSubcode()
    {
        return $this->container['subcode'];
    }

    /**
     * Sets subcode
     *
     * @param string $subcode Your Experian account subcode for billing purposes (required)
     *
     * @return $this
     */
    public function setSubcode($subcode)
    {
        if ((mb_strlen($subcode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $subcode when calling MultiSegmentsRequest., must be smaller than or equal to 7.');
        }

        $this->container['subcode'] = $subcode;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string $bin 9-digit Business Identification Number (BIN)
     *
     * @return $this
     */
    public function setBin($bin)
    {
        if ((mb_strlen($bin) > 9)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling MultiSegmentsRequest., must be smaller than or equal to 9.');
        }

        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Agent street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        if (!is_null($street) && (mb_strlen($street) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street when calling MultiSegmentsRequest., must be smaller than or equal to 255.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Agent city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MultiSegmentsRequest., must be smaller than or equal to 50.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Agent state
     *
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state when calling MultiSegmentsRequest., must be smaller than or equal to 2.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Agent zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        if (!is_null($zip) && (mb_strlen($zip) > 9)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling MultiSegmentsRequest., must be smaller than or equal to 9.');
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone 10-digit phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling MultiSegmentsRequest., must be smaller than or equal to 10.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string $tax_id 9-digit federal tax ID or Employer Identification Number
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        if (!is_null($tax_id) && (mb_strlen($tax_id) > 9)) {
            throw new \InvalidArgumentException('invalid length for $tax_id when calling MultiSegmentsRequest., must be smaller than or equal to 9.');
        }

        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Optionally, you can send a comment along with your request;  and the comment will be returned with your response.  Useful for your internal ID tracking
     *
     * @return $this
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 30)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling MultiSegmentsRequest., must be smaller than or equal to 30.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets data_points
     *
     * @return string[]
     */
    public function getDataPoints()
    {
        return $this->container['data_points'];
    }

    /**
     * Sets data_points
     *
     * @param string[] $data_points Array containing parameters for commit orders
     *
     * @return $this
     */
    public function setDataPoints($data_points)
    {
        $this->container['data_points'] = $data_points;

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


