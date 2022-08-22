<?php
/**
 * SalesChannelContextAllOfCustomer
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shopware Store API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Store API
 *
 * The version of the OpenAPI document: 6.4.9999999.9999999-dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ServeXS\Shopware\v6\Store\Model;

use \ArrayAccess;
use \ServeXS\Shopware\v6\Store\ObjectSerializer;

/**
 * SalesChannelContextAllOfCustomer Class Doc Comment
 *
 * @category Class
 * @description Information about the current customer - &#x60;null&#x60; if the customer is not logged in
 * @package  ServeXS\Shopware\v6\Store
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SalesChannelContextAllOfCustomer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesChannelContext_allOf_customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_id' => 'string',
        'default_payment_method_id' => 'string',
        'sales_channel_id' => 'string',
        'language_id' => 'string',
        'last_payment_method_id' => 'string',
        'default_billing_address_id' => 'string',
        'default_shipping_address_id' => 'string',
        'customer_number' => 'string',
        'salutation_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'password' => 'string',
        'email' => 'string',
        'title' => 'string',
        'affiliate_code' => 'string',
        'campaign_code' => 'string',
        'active' => 'bool',
        'double_opt_in_registration' => 'bool',
        'double_opt_in_email_sent_date' => '\DateTime',
        'double_opt_in_confirm_date' => '\DateTime',
        'hash' => 'string',
        'guest' => 'bool',
        'first_login' => '\DateTime',
        'last_login' => '\DateTime',
        'newsletter' => 'bool',
        'birthday' => '\DateTime',
        'last_order_date' => '\DateTime',
        'order_count' => 'int',
        'legacy_encoder' => 'string',
        'legacy_password' => 'string',
        'auto_increment' => 'int',
        'remote_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_id' => null,
        'default_payment_method_id' => null,
        'sales_channel_id' => null,
        'language_id' => null,
        'last_payment_method_id' => null,
        'default_billing_address_id' => null,
        'default_shipping_address_id' => null,
        'customer_number' => null,
        'salutation_id' => null,
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'password' => null,
        'email' => null,
        'title' => null,
        'affiliate_code' => null,
        'campaign_code' => null,
        'active' => null,
        'double_opt_in_registration' => null,
        'double_opt_in_email_sent_date' => 'date-time',
        'double_opt_in_confirm_date' => 'date-time',
        'hash' => null,
        'guest' => null,
        'first_login' => 'date-time',
        'last_login' => 'date-time',
        'newsletter' => null,
        'birthday' => 'date-time',
        'last_order_date' => 'date-time',
        'order_count' => 'int32',
        'legacy_encoder' => null,
        'legacy_password' => null,
        'auto_increment' => 'int32',
        'remote_address' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'group_id' => 'groupId',
        'default_payment_method_id' => 'defaultPaymentMethodId',
        'sales_channel_id' => 'salesChannelId',
        'language_id' => 'languageId',
        'last_payment_method_id' => 'lastPaymentMethodId',
        'default_billing_address_id' => 'defaultBillingAddressId',
        'default_shipping_address_id' => 'defaultShippingAddressId',
        'customer_number' => 'customerNumber',
        'salutation_id' => 'salutationId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'company' => 'company',
        'password' => 'password',
        'email' => 'email',
        'title' => 'title',
        'affiliate_code' => 'affiliateCode',
        'campaign_code' => 'campaignCode',
        'active' => 'active',
        'double_opt_in_registration' => 'doubleOptInRegistration',
        'double_opt_in_email_sent_date' => 'doubleOptInEmailSentDate',
        'double_opt_in_confirm_date' => 'doubleOptInConfirmDate',
        'hash' => 'hash',
        'guest' => 'guest',
        'first_login' => 'firstLogin',
        'last_login' => 'lastLogin',
        'newsletter' => 'newsletter',
        'birthday' => 'birthday',
        'last_order_date' => 'lastOrderDate',
        'order_count' => 'orderCount',
        'legacy_encoder' => 'legacyEncoder',
        'legacy_password' => 'legacyPassword',
        'auto_increment' => 'autoIncrement',
        'remote_address' => 'remoteAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
        'default_payment_method_id' => 'setDefaultPaymentMethodId',
        'sales_channel_id' => 'setSalesChannelId',
        'language_id' => 'setLanguageId',
        'last_payment_method_id' => 'setLastPaymentMethodId',
        'default_billing_address_id' => 'setDefaultBillingAddressId',
        'default_shipping_address_id' => 'setDefaultShippingAddressId',
        'customer_number' => 'setCustomerNumber',
        'salutation_id' => 'setSalutationId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'password' => 'setPassword',
        'email' => 'setEmail',
        'title' => 'setTitle',
        'affiliate_code' => 'setAffiliateCode',
        'campaign_code' => 'setCampaignCode',
        'active' => 'setActive',
        'double_opt_in_registration' => 'setDoubleOptInRegistration',
        'double_opt_in_email_sent_date' => 'setDoubleOptInEmailSentDate',
        'double_opt_in_confirm_date' => 'setDoubleOptInConfirmDate',
        'hash' => 'setHash',
        'guest' => 'setGuest',
        'first_login' => 'setFirstLogin',
        'last_login' => 'setLastLogin',
        'newsletter' => 'setNewsletter',
        'birthday' => 'setBirthday',
        'last_order_date' => 'setLastOrderDate',
        'order_count' => 'setOrderCount',
        'legacy_encoder' => 'setLegacyEncoder',
        'legacy_password' => 'setLegacyPassword',
        'auto_increment' => 'setAutoIncrement',
        'remote_address' => 'setRemoteAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
        'default_payment_method_id' => 'getDefaultPaymentMethodId',
        'sales_channel_id' => 'getSalesChannelId',
        'language_id' => 'getLanguageId',
        'last_payment_method_id' => 'getLastPaymentMethodId',
        'default_billing_address_id' => 'getDefaultBillingAddressId',
        'default_shipping_address_id' => 'getDefaultShippingAddressId',
        'customer_number' => 'getCustomerNumber',
        'salutation_id' => 'getSalutationId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'password' => 'getPassword',
        'email' => 'getEmail',
        'title' => 'getTitle',
        'affiliate_code' => 'getAffiliateCode',
        'campaign_code' => 'getCampaignCode',
        'active' => 'getActive',
        'double_opt_in_registration' => 'getDoubleOptInRegistration',
        'double_opt_in_email_sent_date' => 'getDoubleOptInEmailSentDate',
        'double_opt_in_confirm_date' => 'getDoubleOptInConfirmDate',
        'hash' => 'getHash',
        'guest' => 'getGuest',
        'first_login' => 'getFirstLogin',
        'last_login' => 'getLastLogin',
        'newsletter' => 'getNewsletter',
        'birthday' => 'getBirthday',
        'last_order_date' => 'getLastOrderDate',
        'order_count' => 'getOrderCount',
        'legacy_encoder' => 'getLegacyEncoder',
        'legacy_password' => 'getLegacyPassword',
        'auto_increment' => 'getAutoIncrement',
        'remote_address' => 'getRemoteAddress'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['default_payment_method_id'] = $data['default_payment_method_id'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['last_payment_method_id'] = $data['last_payment_method_id'] ?? null;
        $this->container['default_billing_address_id'] = $data['default_billing_address_id'] ?? null;
        $this->container['default_shipping_address_id'] = $data['default_shipping_address_id'] ?? null;
        $this->container['customer_number'] = $data['customer_number'] ?? null;
        $this->container['salutation_id'] = $data['salutation_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['affiliate_code'] = $data['affiliate_code'] ?? null;
        $this->container['campaign_code'] = $data['campaign_code'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['double_opt_in_registration'] = $data['double_opt_in_registration'] ?? null;
        $this->container['double_opt_in_email_sent_date'] = $data['double_opt_in_email_sent_date'] ?? null;
        $this->container['double_opt_in_confirm_date'] = $data['double_opt_in_confirm_date'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['guest'] = $data['guest'] ?? null;
        $this->container['first_login'] = $data['first_login'] ?? null;
        $this->container['last_login'] = $data['last_login'] ?? null;
        $this->container['newsletter'] = $data['newsletter'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['last_order_date'] = $data['last_order_date'] ?? null;
        $this->container['order_count'] = $data['order_count'] ?? null;
        $this->container['legacy_encoder'] = $data['legacy_encoder'] ?? null;
        $this->container['legacy_password'] = $data['legacy_password'] ?? null;
        $this->container['auto_increment'] = $data['auto_increment'] ?? null;
        $this->container['remote_address'] = $data['remote_address'] ?? null;
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
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets default_payment_method_id
     *
     * @return string|null
     */
    public function getDefaultPaymentMethodId()
    {
        return $this->container['default_payment_method_id'];
    }

    /**
     * Sets default_payment_method_id
     *
     * @param string|null $default_payment_method_id default_payment_method_id
     *
     * @return self
     */
    public function setDefaultPaymentMethodId($default_payment_method_id)
    {
        $this->container['default_payment_method_id'] = $default_payment_method_id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string|null
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string|null $sales_channel_id sales_channel_id
     *
     * @return self
     */
    public function setSalesChannelId($sales_channel_id)
    {
        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string|null
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string|null $language_id language_id
     *
     * @return self
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets last_payment_method_id
     *
     * @return string|null
     */
    public function getLastPaymentMethodId()
    {
        return $this->container['last_payment_method_id'];
    }

    /**
     * Sets last_payment_method_id
     *
     * @param string|null $last_payment_method_id last_payment_method_id
     *
     * @return self
     */
    public function setLastPaymentMethodId($last_payment_method_id)
    {
        $this->container['last_payment_method_id'] = $last_payment_method_id;

        return $this;
    }

    /**
     * Gets default_billing_address_id
     *
     * @return string|null
     */
    public function getDefaultBillingAddressId()
    {
        return $this->container['default_billing_address_id'];
    }

    /**
     * Sets default_billing_address_id
     *
     * @param string|null $default_billing_address_id default_billing_address_id
     *
     * @return self
     */
    public function setDefaultBillingAddressId($default_billing_address_id)
    {
        $this->container['default_billing_address_id'] = $default_billing_address_id;

        return $this;
    }

    /**
     * Gets default_shipping_address_id
     *
     * @return string|null
     */
    public function getDefaultShippingAddressId()
    {
        return $this->container['default_shipping_address_id'];
    }

    /**
     * Sets default_shipping_address_id
     *
     * @param string|null $default_shipping_address_id default_shipping_address_id
     *
     * @return self
     */
    public function setDefaultShippingAddressId($default_shipping_address_id)
    {
        $this->container['default_shipping_address_id'] = $default_shipping_address_id;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string|null $customer_number customer_number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return string|null
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param string|null $salutation_id salutation_id
     *
     * @return self
     */
    public function setSalutationId($salutation_id)
    {
        $this->container['salutation_id'] = $salutation_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets affiliate_code
     *
     * @return string|null
     */
    public function getAffiliateCode()
    {
        return $this->container['affiliate_code'];
    }

    /**
     * Sets affiliate_code
     *
     * @param string|null $affiliate_code affiliate_code
     *
     * @return self
     */
    public function setAffiliateCode($affiliate_code)
    {
        $this->container['affiliate_code'] = $affiliate_code;

        return $this;
    }

    /**
     * Gets campaign_code
     *
     * @return string|null
     */
    public function getCampaignCode()
    {
        return $this->container['campaign_code'];
    }

    /**
     * Sets campaign_code
     *
     * @param string|null $campaign_code campaign_code
     *
     * @return self
     */
    public function setCampaignCode($campaign_code)
    {
        $this->container['campaign_code'] = $campaign_code;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets double_opt_in_registration
     *
     * @return bool|null
     */
    public function getDoubleOptInRegistration()
    {
        return $this->container['double_opt_in_registration'];
    }

    /**
     * Sets double_opt_in_registration
     *
     * @param bool|null $double_opt_in_registration double_opt_in_registration
     *
     * @return self
     */
    public function setDoubleOptInRegistration($double_opt_in_registration)
    {
        $this->container['double_opt_in_registration'] = $double_opt_in_registration;

        return $this;
    }

    /**
     * Gets double_opt_in_email_sent_date
     *
     * @return \DateTime|null
     */
    public function getDoubleOptInEmailSentDate()
    {
        return $this->container['double_opt_in_email_sent_date'];
    }

    /**
     * Sets double_opt_in_email_sent_date
     *
     * @param \DateTime|null $double_opt_in_email_sent_date double_opt_in_email_sent_date
     *
     * @return self
     */
    public function setDoubleOptInEmailSentDate($double_opt_in_email_sent_date)
    {
        $this->container['double_opt_in_email_sent_date'] = $double_opt_in_email_sent_date;

        return $this;
    }

    /**
     * Gets double_opt_in_confirm_date
     *
     * @return \DateTime|null
     */
    public function getDoubleOptInConfirmDate()
    {
        return $this->container['double_opt_in_confirm_date'];
    }

    /**
     * Sets double_opt_in_confirm_date
     *
     * @param \DateTime|null $double_opt_in_confirm_date double_opt_in_confirm_date
     *
     * @return self
     */
    public function setDoubleOptInConfirmDate($double_opt_in_confirm_date)
    {
        $this->container['double_opt_in_confirm_date'] = $double_opt_in_confirm_date;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets guest
     *
     * @return bool|null
     */
    public function getGuest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     *
     * @param bool|null $guest guest
     *
     * @return self
     */
    public function setGuest($guest)
    {
        $this->container['guest'] = $guest;

        return $this;
    }

    /**
     * Gets first_login
     *
     * @return \DateTime|null
     */
    public function getFirstLogin()
    {
        return $this->container['first_login'];
    }

    /**
     * Sets first_login
     *
     * @param \DateTime|null $first_login first_login
     *
     * @return self
     */
    public function setFirstLogin($first_login)
    {
        $this->container['first_login'] = $first_login;

        return $this;
    }

    /**
     * Gets last_login
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime|null $last_login last_login
     *
     * @return self
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets newsletter
     *
     * @return bool|null
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     *
     * @param bool|null $newsletter newsletter
     *
     * @return self
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime|null $birthday birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets last_order_date
     *
     * @return \DateTime|null
     */
    public function getLastOrderDate()
    {
        return $this->container['last_order_date'];
    }

    /**
     * Sets last_order_date
     *
     * @param \DateTime|null $last_order_date last_order_date
     *
     * @return self
     */
    public function setLastOrderDate($last_order_date)
    {
        $this->container['last_order_date'] = $last_order_date;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int|null
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int|null $order_count order_count
     *
     * @return self
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets legacy_encoder
     *
     * @return string|null
     */
    public function getLegacyEncoder()
    {
        return $this->container['legacy_encoder'];
    }

    /**
     * Sets legacy_encoder
     *
     * @param string|null $legacy_encoder legacy_encoder
     *
     * @return self
     */
    public function setLegacyEncoder($legacy_encoder)
    {
        $this->container['legacy_encoder'] = $legacy_encoder;

        return $this;
    }

    /**
     * Gets legacy_password
     *
     * @return string|null
     */
    public function getLegacyPassword()
    {
        return $this->container['legacy_password'];
    }

    /**
     * Sets legacy_password
     *
     * @param string|null $legacy_password legacy_password
     *
     * @return self
     */
    public function setLegacyPassword($legacy_password)
    {
        $this->container['legacy_password'] = $legacy_password;

        return $this;
    }

    /**
     * Gets auto_increment
     *
     * @return int|null
     */
    public function getAutoIncrement()
    {
        return $this->container['auto_increment'];
    }

    /**
     * Sets auto_increment
     *
     * @param int|null $auto_increment auto_increment
     *
     * @return self
     */
    public function setAutoIncrement($auto_increment)
    {
        $this->container['auto_increment'] = $auto_increment;

        return $this;
    }

    /**
     * Gets remote_address
     *
     * @return string|null
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param string|null $remote_address remote_address
     *
     * @return self
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
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
    public function offsetUnset($offset)
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

