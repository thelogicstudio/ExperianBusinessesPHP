<?php
/**
 * LeasingInformationResult
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
 * LeasingInformationResult Class Doc Comment
 *
 * @category Class
 * @description Leasing Information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeasingInformationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeasingInformationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leasing_name' => 'string',
        'address' => '\TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResultAddress',
        'phone' => 'string',
        'lease_commencement_date' => 'string',
        'original_lease_amount' => 'float',
        'lease_close_date' => 'string',
        'lease_term' => 'float',
        'payments_per_year' => 'float',
        'payment_interval' => 'string',
        'payment_type' => 'string',
        'comment_code' => 'string',
        'current_due_date' => 'string',
        'scheduled_amount_due' => 'float',
        'current_balance_amount' => 'float',
        'number_of_payments_overdue' => 'float',
        'payment_overdue_amount' => 'float',
        'total_remaining_balance' => 'float',
        'number_of_current_payments' => 'float',
        'number_of_late_payments' => 'float',
        'days_late30' => 'float',
        'days_late60' => 'float',
        'days_late90' => 'float',
        'days_late90_plus' => 'float',
        'lease_product_type' => 'string',
        'lease_type' => 'string',
        'lease_extract_date' => 'string',
        'customer_dispute_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leasing_name' => null,
        'address' => null,
        'phone' => null,
        'lease_commencement_date' => null,
        'original_lease_amount' => null,
        'lease_close_date' => null,
        'lease_term' => null,
        'payments_per_year' => null,
        'payment_interval' => null,
        'payment_type' => null,
        'comment_code' => null,
        'current_due_date' => null,
        'scheduled_amount_due' => null,
        'current_balance_amount' => null,
        'number_of_payments_overdue' => null,
        'payment_overdue_amount' => null,
        'total_remaining_balance' => null,
        'number_of_current_payments' => null,
        'number_of_late_payments' => null,
        'days_late30' => null,
        'days_late60' => null,
        'days_late90' => null,
        'days_late90_plus' => null,
        'lease_product_type' => null,
        'lease_type' => null,
        'lease_extract_date' => null,
        'customer_dispute_indicator' => null
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
        'leasing_name' => 'leasingName',
        'address' => 'address',
        'phone' => 'phone',
        'lease_commencement_date' => 'leaseCommencementDate',
        'original_lease_amount' => 'originalLeaseAmount',
        'lease_close_date' => 'leaseCloseDate',
        'lease_term' => 'leaseTerm',
        'payments_per_year' => 'paymentsPerYear',
        'payment_interval' => 'paymentInterval',
        'payment_type' => 'paymentType',
        'comment_code' => 'commentCode',
        'current_due_date' => 'currentDueDate',
        'scheduled_amount_due' => 'scheduledAmountDue',
        'current_balance_amount' => 'currentBalanceAmount',
        'number_of_payments_overdue' => 'numberOfPaymentsOverdue',
        'payment_overdue_amount' => 'paymentOverdueAmount',
        'total_remaining_balance' => 'totalRemainingBalance',
        'number_of_current_payments' => 'numberOfCurrentPayments',
        'number_of_late_payments' => 'numberOfLatePayments',
        'days_late30' => 'daysLate30',
        'days_late60' => 'daysLate60',
        'days_late90' => 'daysLate90',
        'days_late90_plus' => 'daysLate90Plus',
        'lease_product_type' => 'leaseProductType',
        'lease_type' => 'leaseType',
        'lease_extract_date' => 'leaseExtractDate',
        'customer_dispute_indicator' => 'customerDisputeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leasing_name' => 'setLeasingName',
        'address' => 'setAddress',
        'phone' => 'setPhone',
        'lease_commencement_date' => 'setLeaseCommencementDate',
        'original_lease_amount' => 'setOriginalLeaseAmount',
        'lease_close_date' => 'setLeaseCloseDate',
        'lease_term' => 'setLeaseTerm',
        'payments_per_year' => 'setPaymentsPerYear',
        'payment_interval' => 'setPaymentInterval',
        'payment_type' => 'setPaymentType',
        'comment_code' => 'setCommentCode',
        'current_due_date' => 'setCurrentDueDate',
        'scheduled_amount_due' => 'setScheduledAmountDue',
        'current_balance_amount' => 'setCurrentBalanceAmount',
        'number_of_payments_overdue' => 'setNumberOfPaymentsOverdue',
        'payment_overdue_amount' => 'setPaymentOverdueAmount',
        'total_remaining_balance' => 'setTotalRemainingBalance',
        'number_of_current_payments' => 'setNumberOfCurrentPayments',
        'number_of_late_payments' => 'setNumberOfLatePayments',
        'days_late30' => 'setDaysLate30',
        'days_late60' => 'setDaysLate60',
        'days_late90' => 'setDaysLate90',
        'days_late90_plus' => 'setDaysLate90Plus',
        'lease_product_type' => 'setLeaseProductType',
        'lease_type' => 'setLeaseType',
        'lease_extract_date' => 'setLeaseExtractDate',
        'customer_dispute_indicator' => 'setCustomerDisputeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leasing_name' => 'getLeasingName',
        'address' => 'getAddress',
        'phone' => 'getPhone',
        'lease_commencement_date' => 'getLeaseCommencementDate',
        'original_lease_amount' => 'getOriginalLeaseAmount',
        'lease_close_date' => 'getLeaseCloseDate',
        'lease_term' => 'getLeaseTerm',
        'payments_per_year' => 'getPaymentsPerYear',
        'payment_interval' => 'getPaymentInterval',
        'payment_type' => 'getPaymentType',
        'comment_code' => 'getCommentCode',
        'current_due_date' => 'getCurrentDueDate',
        'scheduled_amount_due' => 'getScheduledAmountDue',
        'current_balance_amount' => 'getCurrentBalanceAmount',
        'number_of_payments_overdue' => 'getNumberOfPaymentsOverdue',
        'payment_overdue_amount' => 'getPaymentOverdueAmount',
        'total_remaining_balance' => 'getTotalRemainingBalance',
        'number_of_current_payments' => 'getNumberOfCurrentPayments',
        'number_of_late_payments' => 'getNumberOfLatePayments',
        'days_late30' => 'getDaysLate30',
        'days_late60' => 'getDaysLate60',
        'days_late90' => 'getDaysLate90',
        'days_late90_plus' => 'getDaysLate90Plus',
        'lease_product_type' => 'getLeaseProductType',
        'lease_type' => 'getLeaseType',
        'lease_extract_date' => 'getLeaseExtractDate',
        'customer_dispute_indicator' => 'getCustomerDisputeIndicator'
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
        $this->container['leasing_name'] = isset($data['leasing_name']) ? $data['leasing_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['lease_commencement_date'] = isset($data['lease_commencement_date']) ? $data['lease_commencement_date'] : null;
        $this->container['original_lease_amount'] = isset($data['original_lease_amount']) ? $data['original_lease_amount'] : null;
        $this->container['lease_close_date'] = isset($data['lease_close_date']) ? $data['lease_close_date'] : null;
        $this->container['lease_term'] = isset($data['lease_term']) ? $data['lease_term'] : null;
        $this->container['payments_per_year'] = isset($data['payments_per_year']) ? $data['payments_per_year'] : null;
        $this->container['payment_interval'] = isset($data['payment_interval']) ? $data['payment_interval'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['comment_code'] = isset($data['comment_code']) ? $data['comment_code'] : null;
        $this->container['current_due_date'] = isset($data['current_due_date']) ? $data['current_due_date'] : null;
        $this->container['scheduled_amount_due'] = isset($data['scheduled_amount_due']) ? $data['scheduled_amount_due'] : null;
        $this->container['current_balance_amount'] = isset($data['current_balance_amount']) ? $data['current_balance_amount'] : null;
        $this->container['number_of_payments_overdue'] = isset($data['number_of_payments_overdue']) ? $data['number_of_payments_overdue'] : null;
        $this->container['payment_overdue_amount'] = isset($data['payment_overdue_amount']) ? $data['payment_overdue_amount'] : null;
        $this->container['total_remaining_balance'] = isset($data['total_remaining_balance']) ? $data['total_remaining_balance'] : null;
        $this->container['number_of_current_payments'] = isset($data['number_of_current_payments']) ? $data['number_of_current_payments'] : null;
        $this->container['number_of_late_payments'] = isset($data['number_of_late_payments']) ? $data['number_of_late_payments'] : null;
        $this->container['days_late30'] = isset($data['days_late30']) ? $data['days_late30'] : null;
        $this->container['days_late60'] = isset($data['days_late60']) ? $data['days_late60'] : null;
        $this->container['days_late90'] = isset($data['days_late90']) ? $data['days_late90'] : null;
        $this->container['days_late90_plus'] = isset($data['days_late90_plus']) ? $data['days_late90_plus'] : null;
        $this->container['lease_product_type'] = isset($data['lease_product_type']) ? $data['lease_product_type'] : null;
        $this->container['lease_type'] = isset($data['lease_type']) ? $data['lease_type'] : null;
        $this->container['lease_extract_date'] = isset($data['lease_extract_date']) ? $data['lease_extract_date'] : null;
        $this->container['customer_dispute_indicator'] = isset($data['customer_dispute_indicator']) ? $data['customer_dispute_indicator'] : null;
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
     * Gets leasing_name
     *
     * @return string
     */
    public function getLeasingName()
    {
        return $this->container['leasing_name'];
    }

    /**
     * Sets leasing_name
     *
     * @param string $leasing_name Lease name
     *
     * @return $this
     */
    public function setLeasingName($leasing_name)
    {
        $this->container['leasing_name'] = $leasing_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResultAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResultAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets lease_commencement_date
     *
     * @return string
     */
    public function getLeaseCommencementDate()
    {
        return $this->container['lease_commencement_date'];
    }

    /**
     * Sets lease_commencement_date
     *
     * @param string $lease_commencement_date Lease start date
     *
     * @return $this
     */
    public function setLeaseCommencementDate($lease_commencement_date)
    {
        $this->container['lease_commencement_date'] = $lease_commencement_date;

        return $this;
    }

    /**
     * Gets original_lease_amount
     *
     * @return float
     */
    public function getOriginalLeaseAmount()
    {
        return $this->container['original_lease_amount'];
    }

    /**
     * Sets original_lease_amount
     *
     * @param float $original_lease_amount Original lease amount
     *
     * @return $this
     */
    public function setOriginalLeaseAmount($original_lease_amount)
    {
        $this->container['original_lease_amount'] = $original_lease_amount;

        return $this;
    }

    /**
     * Gets lease_close_date
     *
     * @return string
     */
    public function getLeaseCloseDate()
    {
        return $this->container['lease_close_date'];
    }

    /**
     * Sets lease_close_date
     *
     * @param string $lease_close_date Lease close date
     *
     * @return $this
     */
    public function setLeaseCloseDate($lease_close_date)
    {
        $this->container['lease_close_date'] = $lease_close_date;

        return $this;
    }

    /**
     * Gets lease_term
     *
     * @return float
     */
    public function getLeaseTerm()
    {
        return $this->container['lease_term'];
    }

    /**
     * Sets lease_term
     *
     * @param float $lease_term Lease term
     *
     * @return $this
     */
    public function setLeaseTerm($lease_term)
    {
        $this->container['lease_term'] = $lease_term;

        return $this;
    }

    /**
     * Gets payments_per_year
     *
     * @return float
     */
    public function getPaymentsPerYear()
    {
        return $this->container['payments_per_year'];
    }

    /**
     * Sets payments_per_year
     *
     * @param float $payments_per_year Payments per year
     *
     * @return $this
     */
    public function setPaymentsPerYear($payments_per_year)
    {
        $this->container['payments_per_year'] = $payments_per_year;

        return $this;
    }

    /**
     * Gets payment_interval
     *
     * @return string
     */
    public function getPaymentInterval()
    {
        return $this->container['payment_interval'];
    }

    /**
     * Sets payment_interval
     *
     * @param string $payment_interval Payment interval
     *
     * @return $this
     */
    public function setPaymentInterval($payment_interval)
    {
        $this->container['payment_interval'] = $payment_interval;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type Payment type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets comment_code
     *
     * @return string
     */
    public function getCommentCode()
    {
        return $this->container['comment_code'];
    }

    /**
     * Sets comment_code
     *
     * @param string $comment_code Comments
     *
     * @return $this
     */
    public function setCommentCode($comment_code)
    {
        $this->container['comment_code'] = $comment_code;

        return $this;
    }

    /**
     * Gets current_due_date
     *
     * @return string
     */
    public function getCurrentDueDate()
    {
        return $this->container['current_due_date'];
    }

    /**
     * Sets current_due_date
     *
     * @param string $current_due_date Current due date
     *
     * @return $this
     */
    public function setCurrentDueDate($current_due_date)
    {
        $this->container['current_due_date'] = $current_due_date;

        return $this;
    }

    /**
     * Gets scheduled_amount_due
     *
     * @return float
     */
    public function getScheduledAmountDue()
    {
        return $this->container['scheduled_amount_due'];
    }

    /**
     * Sets scheduled_amount_due
     *
     * @param float $scheduled_amount_due Scheduled amount due
     *
     * @return $this
     */
    public function setScheduledAmountDue($scheduled_amount_due)
    {
        $this->container['scheduled_amount_due'] = $scheduled_amount_due;

        return $this;
    }

    /**
     * Gets current_balance_amount
     *
     * @return float
     */
    public function getCurrentBalanceAmount()
    {
        return $this->container['current_balance_amount'];
    }

    /**
     * Sets current_balance_amount
     *
     * @param float $current_balance_amount Current balance
     *
     * @return $this
     */
    public function setCurrentBalanceAmount($current_balance_amount)
    {
        $this->container['current_balance_amount'] = $current_balance_amount;

        return $this;
    }

    /**
     * Gets number_of_payments_overdue
     *
     * @return float
     */
    public function getNumberOfPaymentsOverdue()
    {
        return $this->container['number_of_payments_overdue'];
    }

    /**
     * Sets number_of_payments_overdue
     *
     * @param float $number_of_payments_overdue Number of payments overdue
     *
     * @return $this
     */
    public function setNumberOfPaymentsOverdue($number_of_payments_overdue)
    {
        $this->container['number_of_payments_overdue'] = $number_of_payments_overdue;

        return $this;
    }

    /**
     * Gets payment_overdue_amount
     *
     * @return float
     */
    public function getPaymentOverdueAmount()
    {
        return $this->container['payment_overdue_amount'];
    }

    /**
     * Sets payment_overdue_amount
     *
     * @param float $payment_overdue_amount Payment overdue amount
     *
     * @return $this
     */
    public function setPaymentOverdueAmount($payment_overdue_amount)
    {
        $this->container['payment_overdue_amount'] = $payment_overdue_amount;

        return $this;
    }

    /**
     * Gets total_remaining_balance
     *
     * @return float
     */
    public function getTotalRemainingBalance()
    {
        return $this->container['total_remaining_balance'];
    }

    /**
     * Sets total_remaining_balance
     *
     * @param float $total_remaining_balance Total remaining balance
     *
     * @return $this
     */
    public function setTotalRemainingBalance($total_remaining_balance)
    {
        $this->container['total_remaining_balance'] = $total_remaining_balance;

        return $this;
    }

    /**
     * Gets number_of_current_payments
     *
     * @return float
     */
    public function getNumberOfCurrentPayments()
    {
        return $this->container['number_of_current_payments'];
    }

    /**
     * Sets number_of_current_payments
     *
     * @param float $number_of_current_payments Number of current payments
     *
     * @return $this
     */
    public function setNumberOfCurrentPayments($number_of_current_payments)
    {
        $this->container['number_of_current_payments'] = $number_of_current_payments;

        return $this;
    }

    /**
     * Gets number_of_late_payments
     *
     * @return float
     */
    public function getNumberOfLatePayments()
    {
        return $this->container['number_of_late_payments'];
    }

    /**
     * Sets number_of_late_payments
     *
     * @param float $number_of_late_payments Number of late payments
     *
     * @return $this
     */
    public function setNumberOfLatePayments($number_of_late_payments)
    {
        $this->container['number_of_late_payments'] = $number_of_late_payments;

        return $this;
    }

    /**
     * Gets days_late30
     *
     * @return float
     */
    public function getDaysLate30()
    {
        return $this->container['days_late30'];
    }

    /**
     * Sets days_late30
     *
     * @param float $days_late30 Days late 30
     *
     * @return $this
     */
    public function setDaysLate30($days_late30)
    {
        $this->container['days_late30'] = $days_late30;

        return $this;
    }

    /**
     * Gets days_late60
     *
     * @return float
     */
    public function getDaysLate60()
    {
        return $this->container['days_late60'];
    }

    /**
     * Sets days_late60
     *
     * @param float $days_late60 Days late 60
     *
     * @return $this
     */
    public function setDaysLate60($days_late60)
    {
        $this->container['days_late60'] = $days_late60;

        return $this;
    }

    /**
     * Gets days_late90
     *
     * @return float
     */
    public function getDaysLate90()
    {
        return $this->container['days_late90'];
    }

    /**
     * Sets days_late90
     *
     * @param float $days_late90 Days late 90
     *
     * @return $this
     */
    public function setDaysLate90($days_late90)
    {
        $this->container['days_late90'] = $days_late90;

        return $this;
    }

    /**
     * Gets days_late90_plus
     *
     * @return float
     */
    public function getDaysLate90Plus()
    {
        return $this->container['days_late90_plus'];
    }

    /**
     * Sets days_late90_plus
     *
     * @param float $days_late90_plus Days late 90+
     *
     * @return $this
     */
    public function setDaysLate90Plus($days_late90_plus)
    {
        $this->container['days_late90_plus'] = $days_late90_plus;

        return $this;
    }

    /**
     * Gets lease_product_type
     *
     * @return string
     */
    public function getLeaseProductType()
    {
        return $this->container['lease_product_type'];
    }

    /**
     * Sets lease_product_type
     *
     * @param string $lease_product_type Lease product type
     *
     * @return $this
     */
    public function setLeaseProductType($lease_product_type)
    {
        $this->container['lease_product_type'] = $lease_product_type;

        return $this;
    }

    /**
     * Gets lease_type
     *
     * @return string
     */
    public function getLeaseType()
    {
        return $this->container['lease_type'];
    }

    /**
     * Sets lease_type
     *
     * @param string $lease_type Lease type
     *
     * @return $this
     */
    public function setLeaseType($lease_type)
    {
        $this->container['lease_type'] = $lease_type;

        return $this;
    }

    /**
     * Gets lease_extract_date
     *
     * @return string
     */
    public function getLeaseExtractDate()
    {
        return $this->container['lease_extract_date'];
    }

    /**
     * Sets lease_extract_date
     *
     * @param string $lease_extract_date Lease extract date
     *
     * @return $this
     */
    public function setLeaseExtractDate($lease_extract_date)
    {
        $this->container['lease_extract_date'] = $lease_extract_date;

        return $this;
    }

    /**
     * Gets customer_dispute_indicator
     *
     * @return bool
     */
    public function getCustomerDisputeIndicator()
    {
        return $this->container['customer_dispute_indicator'];
    }

    /**
     * Sets customer_dispute_indicator
     *
     * @param bool $customer_dispute_indicator If true indicates a customer dispute is on file
     *
     * @return $this
     */
    public function setCustomerDisputeIndicator($customer_dispute_indicator)
    {
        $this->container['customer_dispute_indicator'] = $customer_dispute_indicator;

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


