<?php
/**
 * LeasingInformationResult
 *
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

namespace TheLogicStudio\ExperianBusinessesPHP\Model;

use \ArrayAccess;
use \TheLogicStudio\ExperianBusinessesPHP\ObjectSerializer;

/**
 * LeasingInformationResult Class Doc Comment
 *
 * @category Class
 * @description Leasing Information
 * @package  TheLogicStudio\ExperianBusinessesPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LeasingInformationResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeasingInformationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'leasing_name' => false,
        'address' => false,
        'phone' => false,
        'lease_commencement_date' => false,
        'original_lease_amount' => false,
        'lease_close_date' => false,
        'lease_term' => false,
        'payments_per_year' => false,
        'payment_interval' => false,
        'payment_type' => false,
        'comment_code' => false,
        'current_due_date' => false,
        'scheduled_amount_due' => false,
        'current_balance_amount' => false,
        'number_of_payments_overdue' => false,
        'payment_overdue_amount' => false,
        'total_remaining_balance' => false,
        'number_of_current_payments' => false,
        'number_of_late_payments' => false,
        'days_late30' => false,
        'days_late60' => false,
        'days_late90' => false,
        'days_late90_plus' => false,
        'lease_product_type' => false,
        'lease_type' => false,
        'lease_extract_date' => false,
        'customer_dispute_indicator' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('leasing_name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('lease_commencement_date', $data ?? [], null);
        $this->setIfExists('original_lease_amount', $data ?? [], null);
        $this->setIfExists('lease_close_date', $data ?? [], null);
        $this->setIfExists('lease_term', $data ?? [], null);
        $this->setIfExists('payments_per_year', $data ?? [], null);
        $this->setIfExists('payment_interval', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('comment_code', $data ?? [], null);
        $this->setIfExists('current_due_date', $data ?? [], null);
        $this->setIfExists('scheduled_amount_due', $data ?? [], null);
        $this->setIfExists('current_balance_amount', $data ?? [], null);
        $this->setIfExists('number_of_payments_overdue', $data ?? [], null);
        $this->setIfExists('payment_overdue_amount', $data ?? [], null);
        $this->setIfExists('total_remaining_balance', $data ?? [], null);
        $this->setIfExists('number_of_current_payments', $data ?? [], null);
        $this->setIfExists('number_of_late_payments', $data ?? [], null);
        $this->setIfExists('days_late30', $data ?? [], null);
        $this->setIfExists('days_late60', $data ?? [], null);
        $this->setIfExists('days_late90', $data ?? [], null);
        $this->setIfExists('days_late90_plus', $data ?? [], null);
        $this->setIfExists('lease_product_type', $data ?? [], null);
        $this->setIfExists('lease_type', $data ?? [], null);
        $this->setIfExists('lease_extract_date', $data ?? [], null);
        $this->setIfExists('customer_dispute_indicator', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * @return string|null
     */
    public function getLeasingName()
    {
        return $this->container['leasing_name'];
    }

    /**
     * Sets leasing_name
     *
     * @param string|null $leasing_name Lease name
     *
     * @return self
     */
    public function setLeasingName($leasing_name)
    {
        if (is_null($leasing_name)) {
            throw new \InvalidArgumentException('non-nullable leasing_name cannot be null');
        }
        $this->container['leasing_name'] = $leasing_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResultAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExperianBusinessesPHP\Model\LeasingInformationResultAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets lease_commencement_date
     *
     * @return string|null
     */
    public function getLeaseCommencementDate()
    {
        return $this->container['lease_commencement_date'];
    }

    /**
     * Sets lease_commencement_date
     *
     * @param string|null $lease_commencement_date Lease start date
     *
     * @return self
     */
    public function setLeaseCommencementDate($lease_commencement_date)
    {
        if (is_null($lease_commencement_date)) {
            throw new \InvalidArgumentException('non-nullable lease_commencement_date cannot be null');
        }
        $this->container['lease_commencement_date'] = $lease_commencement_date;

        return $this;
    }

    /**
     * Gets original_lease_amount
     *
     * @return float|null
     */
    public function getOriginalLeaseAmount()
    {
        return $this->container['original_lease_amount'];
    }

    /**
     * Sets original_lease_amount
     *
     * @param float|null $original_lease_amount Original lease amount
     *
     * @return self
     */
    public function setOriginalLeaseAmount($original_lease_amount)
    {
        if (is_null($original_lease_amount)) {
            throw new \InvalidArgumentException('non-nullable original_lease_amount cannot be null');
        }
        $this->container['original_lease_amount'] = $original_lease_amount;

        return $this;
    }

    /**
     * Gets lease_close_date
     *
     * @return string|null
     */
    public function getLeaseCloseDate()
    {
        return $this->container['lease_close_date'];
    }

    /**
     * Sets lease_close_date
     *
     * @param string|null $lease_close_date Lease close date
     *
     * @return self
     */
    public function setLeaseCloseDate($lease_close_date)
    {
        if (is_null($lease_close_date)) {
            throw new \InvalidArgumentException('non-nullable lease_close_date cannot be null');
        }
        $this->container['lease_close_date'] = $lease_close_date;

        return $this;
    }

    /**
     * Gets lease_term
     *
     * @return float|null
     */
    public function getLeaseTerm()
    {
        return $this->container['lease_term'];
    }

    /**
     * Sets lease_term
     *
     * @param float|null $lease_term Lease term
     *
     * @return self
     */
    public function setLeaseTerm($lease_term)
    {
        if (is_null($lease_term)) {
            throw new \InvalidArgumentException('non-nullable lease_term cannot be null');
        }
        $this->container['lease_term'] = $lease_term;

        return $this;
    }

    /**
     * Gets payments_per_year
     *
     * @return float|null
     */
    public function getPaymentsPerYear()
    {
        return $this->container['payments_per_year'];
    }

    /**
     * Sets payments_per_year
     *
     * @param float|null $payments_per_year Payments per year
     *
     * @return self
     */
    public function setPaymentsPerYear($payments_per_year)
    {
        if (is_null($payments_per_year)) {
            throw new \InvalidArgumentException('non-nullable payments_per_year cannot be null');
        }
        $this->container['payments_per_year'] = $payments_per_year;

        return $this;
    }

    /**
     * Gets payment_interval
     *
     * @return string|null
     */
    public function getPaymentInterval()
    {
        return $this->container['payment_interval'];
    }

    /**
     * Sets payment_interval
     *
     * @param string|null $payment_interval Payment interval
     *
     * @return self
     */
    public function setPaymentInterval($payment_interval)
    {
        if (is_null($payment_interval)) {
            throw new \InvalidArgumentException('non-nullable payment_interval cannot be null');
        }
        $this->container['payment_interval'] = $payment_interval;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type Payment type
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets comment_code
     *
     * @return string|null
     */
    public function getCommentCode()
    {
        return $this->container['comment_code'];
    }

    /**
     * Sets comment_code
     *
     * @param string|null $comment_code Comments
     *
     * @return self
     */
    public function setCommentCode($comment_code)
    {
        if (is_null($comment_code)) {
            throw new \InvalidArgumentException('non-nullable comment_code cannot be null');
        }
        $this->container['comment_code'] = $comment_code;

        return $this;
    }

    /**
     * Gets current_due_date
     *
     * @return string|null
     */
    public function getCurrentDueDate()
    {
        return $this->container['current_due_date'];
    }

    /**
     * Sets current_due_date
     *
     * @param string|null $current_due_date Current due date
     *
     * @return self
     */
    public function setCurrentDueDate($current_due_date)
    {
        if (is_null($current_due_date)) {
            throw new \InvalidArgumentException('non-nullable current_due_date cannot be null');
        }
        $this->container['current_due_date'] = $current_due_date;

        return $this;
    }

    /**
     * Gets scheduled_amount_due
     *
     * @return float|null
     */
    public function getScheduledAmountDue()
    {
        return $this->container['scheduled_amount_due'];
    }

    /**
     * Sets scheduled_amount_due
     *
     * @param float|null $scheduled_amount_due Scheduled amount due
     *
     * @return self
     */
    public function setScheduledAmountDue($scheduled_amount_due)
    {
        if (is_null($scheduled_amount_due)) {
            throw new \InvalidArgumentException('non-nullable scheduled_amount_due cannot be null');
        }
        $this->container['scheduled_amount_due'] = $scheduled_amount_due;

        return $this;
    }

    /**
     * Gets current_balance_amount
     *
     * @return float|null
     */
    public function getCurrentBalanceAmount()
    {
        return $this->container['current_balance_amount'];
    }

    /**
     * Sets current_balance_amount
     *
     * @param float|null $current_balance_amount Current balance
     *
     * @return self
     */
    public function setCurrentBalanceAmount($current_balance_amount)
    {
        if (is_null($current_balance_amount)) {
            throw new \InvalidArgumentException('non-nullable current_balance_amount cannot be null');
        }
        $this->container['current_balance_amount'] = $current_balance_amount;

        return $this;
    }

    /**
     * Gets number_of_payments_overdue
     *
     * @return float|null
     */
    public function getNumberOfPaymentsOverdue()
    {
        return $this->container['number_of_payments_overdue'];
    }

    /**
     * Sets number_of_payments_overdue
     *
     * @param float|null $number_of_payments_overdue Number of payments overdue
     *
     * @return self
     */
    public function setNumberOfPaymentsOverdue($number_of_payments_overdue)
    {
        if (is_null($number_of_payments_overdue)) {
            throw new \InvalidArgumentException('non-nullable number_of_payments_overdue cannot be null');
        }
        $this->container['number_of_payments_overdue'] = $number_of_payments_overdue;

        return $this;
    }

    /**
     * Gets payment_overdue_amount
     *
     * @return float|null
     */
    public function getPaymentOverdueAmount()
    {
        return $this->container['payment_overdue_amount'];
    }

    /**
     * Sets payment_overdue_amount
     *
     * @param float|null $payment_overdue_amount Payment overdue amount
     *
     * @return self
     */
    public function setPaymentOverdueAmount($payment_overdue_amount)
    {
        if (is_null($payment_overdue_amount)) {
            throw new \InvalidArgumentException('non-nullable payment_overdue_amount cannot be null');
        }
        $this->container['payment_overdue_amount'] = $payment_overdue_amount;

        return $this;
    }

    /**
     * Gets total_remaining_balance
     *
     * @return float|null
     */
    public function getTotalRemainingBalance()
    {
        return $this->container['total_remaining_balance'];
    }

    /**
     * Sets total_remaining_balance
     *
     * @param float|null $total_remaining_balance Total remaining balance
     *
     * @return self
     */
    public function setTotalRemainingBalance($total_remaining_balance)
    {
        if (is_null($total_remaining_balance)) {
            throw new \InvalidArgumentException('non-nullable total_remaining_balance cannot be null');
        }
        $this->container['total_remaining_balance'] = $total_remaining_balance;

        return $this;
    }

    /**
     * Gets number_of_current_payments
     *
     * @return float|null
     */
    public function getNumberOfCurrentPayments()
    {
        return $this->container['number_of_current_payments'];
    }

    /**
     * Sets number_of_current_payments
     *
     * @param float|null $number_of_current_payments Number of current payments
     *
     * @return self
     */
    public function setNumberOfCurrentPayments($number_of_current_payments)
    {
        if (is_null($number_of_current_payments)) {
            throw new \InvalidArgumentException('non-nullable number_of_current_payments cannot be null');
        }
        $this->container['number_of_current_payments'] = $number_of_current_payments;

        return $this;
    }

    /**
     * Gets number_of_late_payments
     *
     * @return float|null
     */
    public function getNumberOfLatePayments()
    {
        return $this->container['number_of_late_payments'];
    }

    /**
     * Sets number_of_late_payments
     *
     * @param float|null $number_of_late_payments Number of late payments
     *
     * @return self
     */
    public function setNumberOfLatePayments($number_of_late_payments)
    {
        if (is_null($number_of_late_payments)) {
            throw new \InvalidArgumentException('non-nullable number_of_late_payments cannot be null');
        }
        $this->container['number_of_late_payments'] = $number_of_late_payments;

        return $this;
    }

    /**
     * Gets days_late30
     *
     * @return float|null
     */
    public function getDaysLate30()
    {
        return $this->container['days_late30'];
    }

    /**
     * Sets days_late30
     *
     * @param float|null $days_late30 Days late 30
     *
     * @return self
     */
    public function setDaysLate30($days_late30)
    {
        if (is_null($days_late30)) {
            throw new \InvalidArgumentException('non-nullable days_late30 cannot be null');
        }
        $this->container['days_late30'] = $days_late30;

        return $this;
    }

    /**
     * Gets days_late60
     *
     * @return float|null
     */
    public function getDaysLate60()
    {
        return $this->container['days_late60'];
    }

    /**
     * Sets days_late60
     *
     * @param float|null $days_late60 Days late 60
     *
     * @return self
     */
    public function setDaysLate60($days_late60)
    {
        if (is_null($days_late60)) {
            throw new \InvalidArgumentException('non-nullable days_late60 cannot be null');
        }
        $this->container['days_late60'] = $days_late60;

        return $this;
    }

    /**
     * Gets days_late90
     *
     * @return float|null
     */
    public function getDaysLate90()
    {
        return $this->container['days_late90'];
    }

    /**
     * Sets days_late90
     *
     * @param float|null $days_late90 Days late 90
     *
     * @return self
     */
    public function setDaysLate90($days_late90)
    {
        if (is_null($days_late90)) {
            throw new \InvalidArgumentException('non-nullable days_late90 cannot be null');
        }
        $this->container['days_late90'] = $days_late90;

        return $this;
    }

    /**
     * Gets days_late90_plus
     *
     * @return float|null
     */
    public function getDaysLate90Plus()
    {
        return $this->container['days_late90_plus'];
    }

    /**
     * Sets days_late90_plus
     *
     * @param float|null $days_late90_plus Days late 90+
     *
     * @return self
     */
    public function setDaysLate90Plus($days_late90_plus)
    {
        if (is_null($days_late90_plus)) {
            throw new \InvalidArgumentException('non-nullable days_late90_plus cannot be null');
        }
        $this->container['days_late90_plus'] = $days_late90_plus;

        return $this;
    }

    /**
     * Gets lease_product_type
     *
     * @return string|null
     */
    public function getLeaseProductType()
    {
        return $this->container['lease_product_type'];
    }

    /**
     * Sets lease_product_type
     *
     * @param string|null $lease_product_type Lease product type
     *
     * @return self
     */
    public function setLeaseProductType($lease_product_type)
    {
        if (is_null($lease_product_type)) {
            throw new \InvalidArgumentException('non-nullable lease_product_type cannot be null');
        }
        $this->container['lease_product_type'] = $lease_product_type;

        return $this;
    }

    /**
     * Gets lease_type
     *
     * @return string|null
     */
    public function getLeaseType()
    {
        return $this->container['lease_type'];
    }

    /**
     * Sets lease_type
     *
     * @param string|null $lease_type Lease type
     *
     * @return self
     */
    public function setLeaseType($lease_type)
    {
        if (is_null($lease_type)) {
            throw new \InvalidArgumentException('non-nullable lease_type cannot be null');
        }
        $this->container['lease_type'] = $lease_type;

        return $this;
    }

    /**
     * Gets lease_extract_date
     *
     * @return string|null
     */
    public function getLeaseExtractDate()
    {
        return $this->container['lease_extract_date'];
    }

    /**
     * Sets lease_extract_date
     *
     * @param string|null $lease_extract_date Lease extract date
     *
     * @return self
     */
    public function setLeaseExtractDate($lease_extract_date)
    {
        if (is_null($lease_extract_date)) {
            throw new \InvalidArgumentException('non-nullable lease_extract_date cannot be null');
        }
        $this->container['lease_extract_date'] = $lease_extract_date;

        return $this;
    }

    /**
     * Gets customer_dispute_indicator
     *
     * @return bool|null
     */
    public function getCustomerDisputeIndicator()
    {
        return $this->container['customer_dispute_indicator'];
    }

    /**
     * Sets customer_dispute_indicator
     *
     * @param bool|null $customer_dispute_indicator If true indicates a customer dispute is on file
     *
     * @return self
     */
    public function setCustomerDisputeIndicator($customer_dispute_indicator)
    {
        if (is_null($customer_dispute_indicator)) {
            throw new \InvalidArgumentException('non-nullable customer_dispute_indicator cannot be null');
        }
        $this->container['customer_dispute_indicator'] = $customer_dispute_indicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer|string $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer|string $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer|string $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


