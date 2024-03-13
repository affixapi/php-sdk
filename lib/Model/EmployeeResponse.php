<?php
/**
 * EmployeeResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Affix API
 *
 * The affixapi.com API documentation.  # Introduction Affix API is an OAuth 2.1 application that allows developers to access customer data, without developers needing to manage or maintain integrations; or collect login credentials or API keys from users for these third party systems.  # OAuth 2.1 Affix API follows the [OAuth 2.1 spec](https://datatracker.ietf.org/doc/html/draft-ietf-oauth-v2-1-08).  As an OAuth application, Affix API handles not only both the collection of sensitive user credentials or API keys, but also builds and maintains the integrations with the providers, so you don't have to.  # How to obtain an access token in order to get started, you must:   - register a `client_id`   - direct your user to the sign in flow  (`https://connect.affixapi.com`     [with the appropriate query     parameters](https://github.com/affixapi/starter-kit/tree/master/connect))   - capture `authorization_code` we will send to your redirect URI after     the sign in flow is complete and exchange that `authorization_code` for     a Bearer token  # Sandbox keys (developer mode) ### dev ``` eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6ImQ1OTZhMmYzLWYzNzktNGE1ZC1hMmRhLTk4OWJmYWViYTg1ZCIsImlhdCI6MTcwMjkyMDkwMywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5kZXYuZW5naW5lZXJpbmcuYWZmaXhhcGkuY29tIiwic3ViIjoiZGV2ZWxvcGVyIiwiYXVkIjoiM0ZEQUVERjktMURDQTRGNTQtODc5NDlGNkEtNDEwMjc2NDMifQ.VLWYjCQvBS0C3ZA6_J3-U-idZj5EYI2IlDdTjAWBxSIHGufp6cqaVodKsF2BeIqcIeB3P0lW-KL9mY3xGd7ckQ ```  #### `employees` endpoint sample: ``` curl --fail \\   -X GET \\   -H 'Authorization: Bearer eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6ImQ1OTZhMmYzLWYzNzktNGE1ZC1hMmRhLTk4OWJmYWViYTg1ZCIsImlhdCI6MTcwMjkyMDkwMywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5kZXYuZW5naW5lZXJpbmcuYWZmaXhhcGkuY29tIiwic3ViIjoiZGV2ZWxvcGVyIiwiYXVkIjoiM0ZEQUVERjktMURDQTRGNTQtODc5NDlGNkEtNDEwMjc2NDMifQ.VLWYjCQvBS0C3ZA6_J3-U-idZj5EYI2IlDdTjAWBxSIHGufp6cqaVodKsF2BeIqcIeB3P0lW-KL9mY3xGd7ckQ' \\   'https://dev.api.affixapi.com/2023-03-01/developer/employees' ```  ### prod ``` eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6IjI5YjFjYTg4LWNlNjktNDgyZC1iNGZjLTkzMWMzZmJkYWM4ZSIsImlhdCI6MTcwMjkyMTA4MywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5wcm9kLmVuZ2luZWVyaW5nLmFmZml4YXBpLmNvbSIsInN1YiI6ImRldmVsb3BlciIsImF1ZCI6IjA4QkIwODFFLUQ5QUI0RDE0LThERjk5MjMzLTY2NjE1Q0U5In0.2zdpFAmiyYiYk6MOcbXNUwwR4M1Fextnaac340x54AidiWXCyw-u9KeavbqfYF6q8a9kcDLrxhJ8Wc_3tIzuVw ```  #### `employees` endpoint sample: ``` curl --fail \\   -X GET \\   -H 'Authorization: Bearer eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6IjI5YjFjYTg4LWNlNjktNDgyZC1iNGZjLTkzMWMzZmJkYWM4ZSIsImlhdCI6MTcwMjkyMTA4MywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5wcm9kLmVuZ2luZWVyaW5nLmFmZml4YXBpLmNvbSIsInN1YiI6ImRldmVsb3BlciIsImF1ZCI6IjA4QkIwODFFLUQ5QUI0RDE0LThERjk5MjMzLTY2NjE1Q0U5In0.2zdpFAmiyYiYk6MOcbXNUwwR4M1Fextnaac340x54AidiWXCyw-u9KeavbqfYF6q8a9kcDLrxhJ8Wc_3tIzuVw' \\   'https://api.affixapi.com/2023-03-01/developer/employees' ```  # Compression We support `brotli`, `gzip`, and `deflate` compression algorithms.  To enable, pass the `Accept-Encoding` header with one or all of the values: `br`, `gzip`, `deflate`, or `identity` (no compression)  In the response, you will receive the `Content-Encoding` response header indicating the compression algorithm used in the data payload to enable you to decompress the result. If the `Accept-Encoding: identity` header was passed, no `Content-Encoding` response header is sent back, as no compression algorithm was used.  # Webhooks An exciting feature for HR/Payroll modes are webhooks.  If enabled, your `webhook_uri` is set on your `client_id` for the respective environment: `dev | prod`  Webhooks are configured to make live requests to the underlying integration 1x/hr, and if a difference is detected since the last request, we will send a request to your `webhook_uri` with this shape:  ``` {    added: <api.v20230301.Employees>[     <api.v20230301.Employee>{       ...,       date_of_birth: '2010-08-06',       display_full_name: 'Daija Rogahn',       employee_number: '57993',       employment_status: 'pending',       employment_type: 'other',       employments: [         {           currency: 'eur',           effective_date: '2022-02-25',           employment_type: 'other',           job_title: 'Dynamic Implementation Manager',           pay_frequency: 'semimonthly',           pay_period: 'YEAR',           pay_rate: 96000,         },       ],       first_name: 'Daija',       ...     }   ],   removed: [],   updated: [     <api.v20230301.Employee>{       ...,       date_of_birth: '2009-11-09',       display_full_name: 'Lourdes Stiedemann',       employee_number: '63189',       employment_status: 'leave',       employment_type: 'full_time',       employments: [         {           currency: 'gbp',           effective_date: '2023-01-16',           employment_type: 'full_time',           job_title: 'Forward Brand Planner',           pay_frequency: 'semimonthly',           pay_period: 'YEAR',           pay_rate: 86000,         },       ],       first_name: 'Lourdes',     }   ] } ```  the following headers will be sent with webhook requests:  ``` x-affix-api-signature: ab8474e609db95d5df3adc39ea3add7a7544bd215c5c520a30a650ae93a2fba7  x-affix-api-origin:  webhooks-employees-webhook  user-agent:  affixapi.com ```  Before trusting the payload, you should sign the payload and verify the signature matches the signature sent by the `affixapi.com` service.  This secures that the data sent to your `webhook_uri` is from the `affixapi.com` server.  The signature is created by combining the signing secret (your `client_secret`) with the body of the request sent using a standard HMAC-SHA256 keyed hash.  The signature can be created via:   - create an `HMAC` with your `client_secret`   - update the `HMAC` with the payload   - get the hex digest -> this is the signature  Sample `typescript` code that follows this recipe:  ``` import { createHmac } from 'crypto';  export const computeSignature = ({   str,   signingSecret, }: {   signingSecret: string;   str: string; }): string => {   const hmac = createHmac('sha256', signingSecret);   hmac.update(str);   const signature = hmac.digest('hex');    return signature; }; ```  ## Rate limits Open endpoints (not gated by an API key) (applied at endpoint level):   - 15 requests every 1 minute (by IP address)   - 25 requests every 5 minutes (by IP address)  Gated endpoints (require an API key) (applied at endpoint level):   - 40 requests every 1 minute (by IP address)   - 40 requests every 5 minutes (by `client_id`)  Things to keep in mind:   - Open endpoints (not gated by an API key) will likely be called by your     users, not you, so rate limits generally would not apply to you.   - As a developer, rate limits are applied at the endpoint granularity.     - For example, say the rate limits below are 10 requests per minute by ip.       from that same ip, within 1 minute, you get:       - 10 requests per minute on `/orders`,       - another 10 requests per minute on `/items`,       - and another 10 requests per minute on `/identity`,       - for a total of 30 requests per minute.
 *
 * The version of the OpenAPI document: 2023-03-01
 * Contact: developers@affixapi.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EmployeeResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmployeeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'employee_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'display_full_name' => 'string',
        'nationality' => 'string',
        'job_title' => 'string',
        'work_email' => 'string',
        'personal_email' => 'string',
        'mobile_phone_number' => 'string',
        'tax_id' => 'string',
        'gender' => 'string',
        'ethnicity' => 'string',
        'marital_status' => 'string',
        'date_of_birth' => '\DateTime',
        'employment_status' => 'string',
        'employment_type' => 'string',
        'start_date' => '\DateTime',
        'remote_created_at' => '\DateTime',
        'termination_date' => '\DateTime',
        'avatar' => 'string',
        'home_location' => '\OpenAPI\Client\Model\AddressResponse',
        'work_location' => '\OpenAPI\Client\Model\LocationResponse',
        'manager' => '\OpenAPI\Client\Model\CreateEmployeeRequestManager',
        'bank_account' => '\OpenAPI\Client\Model\CreateEmployeeRequestBankAccount',
        'employments' => '\OpenAPI\Client\Model\EmploymentResponse[]',
        'custom_fields' => 'object',
        'groups' => '\OpenAPI\Client\Model\GroupResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'remote_id' => null,
        'employee_number' => null,
        'first_name' => null,
        'last_name' => null,
        'display_full_name' => null,
        'nationality' => null,
        'job_title' => null,
        'work_email' => null,
        'personal_email' => null,
        'mobile_phone_number' => null,
        'tax_id' => null,
        'gender' => null,
        'ethnicity' => null,
        'marital_status' => null,
        'date_of_birth' => 'date',
        'employment_status' => null,
        'employment_type' => null,
        'start_date' => 'date',
        'remote_created_at' => 'date',
        'termination_date' => 'date',
        'avatar' => null,
        'home_location' => null,
        'work_location' => null,
        'manager' => null,
        'bank_account' => null,
        'employments' => null,
        'custom_fields' => null,
        'groups' => null
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
        'id' => 'id',
        'remote_id' => 'remote_id',
        'employee_number' => 'employee_number',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'display_full_name' => 'display_full_name',
        'nationality' => 'nationality',
        'job_title' => 'job_title',
        'work_email' => 'work_email',
        'personal_email' => 'personal_email',
        'mobile_phone_number' => 'mobile_phone_number',
        'tax_id' => 'tax_id',
        'gender' => 'gender',
        'ethnicity' => 'ethnicity',
        'marital_status' => 'marital_status',
        'date_of_birth' => 'date_of_birth',
        'employment_status' => 'employment_status',
        'employment_type' => 'employment_type',
        'start_date' => 'start_date',
        'remote_created_at' => 'remote_created_at',
        'termination_date' => 'termination_date',
        'avatar' => 'avatar',
        'home_location' => 'home_location',
        'work_location' => 'work_location',
        'manager' => 'manager',
        'bank_account' => 'bank_account',
        'employments' => 'employments',
        'custom_fields' => 'custom_fields',
        'groups' => 'groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'remote_id' => 'setRemoteId',
        'employee_number' => 'setEmployeeNumber',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'display_full_name' => 'setDisplayFullName',
        'nationality' => 'setNationality',
        'job_title' => 'setJobTitle',
        'work_email' => 'setWorkEmail',
        'personal_email' => 'setPersonalEmail',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'tax_id' => 'setTaxId',
        'gender' => 'setGender',
        'ethnicity' => 'setEthnicity',
        'marital_status' => 'setMaritalStatus',
        'date_of_birth' => 'setDateOfBirth',
        'employment_status' => 'setEmploymentStatus',
        'employment_type' => 'setEmploymentType',
        'start_date' => 'setStartDate',
        'remote_created_at' => 'setRemoteCreatedAt',
        'termination_date' => 'setTerminationDate',
        'avatar' => 'setAvatar',
        'home_location' => 'setHomeLocation',
        'work_location' => 'setWorkLocation',
        'manager' => 'setManager',
        'bank_account' => 'setBankAccount',
        'employments' => 'setEmployments',
        'custom_fields' => 'setCustomFields',
        'groups' => 'setGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'remote_id' => 'getRemoteId',
        'employee_number' => 'getEmployeeNumber',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'display_full_name' => 'getDisplayFullName',
        'nationality' => 'getNationality',
        'job_title' => 'getJobTitle',
        'work_email' => 'getWorkEmail',
        'personal_email' => 'getPersonalEmail',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'tax_id' => 'getTaxId',
        'gender' => 'getGender',
        'ethnicity' => 'getEthnicity',
        'marital_status' => 'getMaritalStatus',
        'date_of_birth' => 'getDateOfBirth',
        'employment_status' => 'getEmploymentStatus',
        'employment_type' => 'getEmploymentType',
        'start_date' => 'getStartDate',
        'remote_created_at' => 'getRemoteCreatedAt',
        'termination_date' => 'getTerminationDate',
        'avatar' => 'getAvatar',
        'home_location' => 'getHomeLocation',
        'work_location' => 'getWorkLocation',
        'manager' => 'getManager',
        'bank_account' => 'getBankAccount',
        'employments' => 'getEmployments',
        'custom_fields' => 'getCustomFields',
        'groups' => 'getGroups'
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

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_NOT_SPECIFIED = 'not_specified';
    const GENDER_NULL = 'null';
    const ETHNICITY_NULL = 'null';
    const ETHNICITY_ASIAN = 'asian';
    const ETHNICITY_BLACK = 'black';
    const ETHNICITY_HISPANIC = 'hispanic';
    const ETHNICITY_MIXED = 'mixed';
    const ETHNICITY_NOT_SPECIFIED = 'not_specified';
    const ETHNICITY_OTHER = 'other';
    const ETHNICITY_WHITE = 'white';
    const MARITAL_STATUS_SINGLE = 'single';
    const MARITAL_STATUS_MARRIED = 'married';
    const MARITAL_STATUS_NOT_SPECIFIED = 'not_specified';
    const MARITAL_STATUS_NULL = 'null';
    const EMPLOYMENT_STATUS_NULL = 'null';
    const EMPLOYMENT_STATUS_ACTIVE = 'active';
    const EMPLOYMENT_STATUS_INACTIVE = 'inactive';
    const EMPLOYMENT_STATUS_PENDING = 'pending';
    const EMPLOYMENT_STATUS_LEAVE = 'leave';
    const EMPLOYMENT_TYPE_NULL = 'null';
    const EMPLOYMENT_TYPE_FULL_TIME = 'full_time';
    const EMPLOYMENT_TYPE_PART_TIME = 'part_time';
    const EMPLOYMENT_TYPE_CONTRACTOR = 'contractor';
    const EMPLOYMENT_TYPE_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_NOT_SPECIFIED,
            self::GENDER_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEthnicityAllowableValues()
    {
        return [
            self::ETHNICITY_NULL,
            self::ETHNICITY_ASIAN,
            self::ETHNICITY_BLACK,
            self::ETHNICITY_HISPANIC,
            self::ETHNICITY_MIXED,
            self::ETHNICITY_NOT_SPECIFIED,
            self::ETHNICITY_OTHER,
            self::ETHNICITY_WHITE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaritalStatusAllowableValues()
    {
        return [
            self::MARITAL_STATUS_SINGLE,
            self::MARITAL_STATUS_MARRIED,
            self::MARITAL_STATUS_NOT_SPECIFIED,
            self::MARITAL_STATUS_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmploymentStatusAllowableValues()
    {
        return [
            self::EMPLOYMENT_STATUS_NULL,
            self::EMPLOYMENT_STATUS_ACTIVE,
            self::EMPLOYMENT_STATUS_INACTIVE,
            self::EMPLOYMENT_STATUS_PENDING,
            self::EMPLOYMENT_STATUS_LEAVE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmploymentTypeAllowableValues()
    {
        return [
            self::EMPLOYMENT_TYPE_NULL,
            self::EMPLOYMENT_TYPE_FULL_TIME,
            self::EMPLOYMENT_TYPE_PART_TIME,
            self::EMPLOYMENT_TYPE_CONTRACTOR,
            self::EMPLOYMENT_TYPE_OTHER,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['remote_id'] = $data['remote_id'] ?? null;
        $this->container['employee_number'] = $data['employee_number'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['display_full_name'] = $data['display_full_name'] ?? null;
        $this->container['nationality'] = $data['nationality'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['work_email'] = $data['work_email'] ?? null;
        $this->container['personal_email'] = $data['personal_email'] ?? null;
        $this->container['mobile_phone_number'] = $data['mobile_phone_number'] ?? null;
        $this->container['tax_id'] = $data['tax_id'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['ethnicity'] = $data['ethnicity'] ?? null;
        $this->container['marital_status'] = $data['marital_status'] ?? null;
        $this->container['date_of_birth'] = $data['date_of_birth'] ?? null;
        $this->container['employment_status'] = $data['employment_status'] ?? null;
        $this->container['employment_type'] = $data['employment_type'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['remote_created_at'] = $data['remote_created_at'] ?? null;
        $this->container['termination_date'] = $data['termination_date'] ?? null;
        $this->container['avatar'] = $data['avatar'] ?? null;
        $this->container['home_location'] = $data['home_location'] ?? null;
        $this->container['work_location'] = $data['work_location'] ?? null;
        $this->container['manager'] = $data['manager'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['employments'] = $data['employments'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['remote_id'] === null) {
            $invalidProperties[] = "'remote_id' can't be null";
        }
        if ($this->container['employee_number'] === null) {
            $invalidProperties[] = "'employee_number' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['display_full_name'] === null) {
            $invalidProperties[] = "'display_full_name' can't be null";
        }
        if ($this->container['nationality'] === null) {
            $invalidProperties[] = "'nationality' can't be null";
        }
        if ($this->container['job_title'] === null) {
            $invalidProperties[] = "'job_title' can't be null";
        }
        if ($this->container['work_email'] === null) {
            $invalidProperties[] = "'work_email' can't be null";
        }
        if ($this->container['personal_email'] === null) {
            $invalidProperties[] = "'personal_email' can't be null";
        }
        if ($this->container['mobile_phone_number'] === null) {
            $invalidProperties[] = "'mobile_phone_number' can't be null";
        }
        if ($this->container['tax_id'] === null) {
            $invalidProperties[] = "'tax_id' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ethnicity'] === null) {
            $invalidProperties[] = "'ethnicity' can't be null";
        }
        $allowedValues = $this->getEthnicityAllowableValues();
        if (!is_null($this->container['ethnicity']) && !in_array($this->container['ethnicity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ethnicity', must be one of '%s'",
                $this->container['ethnicity'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['marital_status'] === null) {
            $invalidProperties[] = "'marital_status' can't be null";
        }
        $allowedValues = $this->getMaritalStatusAllowableValues();
        if (!is_null($this->container['marital_status']) && !in_array($this->container['marital_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'marital_status', must be one of '%s'",
                $this->container['marital_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_of_birth'] === null) {
            $invalidProperties[] = "'date_of_birth' can't be null";
        }
        if ($this->container['employment_status'] === null) {
            $invalidProperties[] = "'employment_status' can't be null";
        }
        $allowedValues = $this->getEmploymentStatusAllowableValues();
        if (!is_null($this->container['employment_status']) && !in_array($this->container['employment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'employment_status', must be one of '%s'",
                $this->container['employment_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['employment_type'] === null) {
            $invalidProperties[] = "'employment_type' can't be null";
        }
        $allowedValues = $this->getEmploymentTypeAllowableValues();
        if (!is_null($this->container['employment_type']) && !in_array($this->container['employment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'employment_type', must be one of '%s'",
                $this->container['employment_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['remote_created_at'] === null) {
            $invalidProperties[] = "'remote_created_at' can't be null";
        }
        if ($this->container['termination_date'] === null) {
            $invalidProperties[] = "'termination_date' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['home_location'] === null) {
            $invalidProperties[] = "'home_location' can't be null";
        }
        if ($this->container['work_location'] === null) {
            $invalidProperties[] = "'work_location' can't be null";
        }
        if ($this->container['manager'] === null) {
            $invalidProperties[] = "'manager' can't be null";
        }
        if ($this->container['bank_account'] === null) {
            $invalidProperties[] = "'bank_account' can't be null";
        }
        if ($this->container['employments'] === null) {
            $invalidProperties[] = "'employments' can't be null";
        }
        if ($this->container['custom_fields'] === null) {
            $invalidProperties[] = "'custom_fields' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The Affix-assigned id of the individual
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets remote_id
     *
     * @return string
     */
    public function getRemoteId()
    {
        return $this->container['remote_id'];
    }

    /**
     * Sets remote_id
     *
     * @param string $remote_id the remote system-assigned id of the individual
     *
     * @return self
     */
    public function setRemoteId($remote_id)
    {
        $this->container['remote_id'] = $remote_id;

        return $this;
    }

    /**
     * Gets employee_number
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->container['employee_number'];
    }

    /**
     * Sets employee_number
     *
     * @param string $employee_number employee_number
     *
     * @return self
     */
    public function setEmployeeNumber($employee_number)
    {
        $this->container['employee_number'] = $employee_number;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name the first name of the individual
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
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name the last name of the individual
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets display_full_name
     *
     * @return string
     */
    public function getDisplayFullName()
    {
        return $this->container['display_full_name'];
    }

    /**
     * Sets display_full_name
     *
     * @param string $display_full_name display_full_name
     *
     * @return self
     */
    public function setDisplayFullName($display_full_name)
    {
        $this->container['display_full_name'] = $display_full_name;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title job_title
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets work_email
     *
     * @return string
     */
    public function getWorkEmail()
    {
        return $this->container['work_email'];
    }

    /**
     * Sets work_email
     *
     * @param string $work_email the work email of the individual
     *
     * @return self
     */
    public function setWorkEmail($work_email)
    {
        $this->container['work_email'] = $work_email;

        return $this;
    }

    /**
     * Gets personal_email
     *
     * @return string
     */
    public function getPersonalEmail()
    {
        return $this->container['personal_email'];
    }

    /**
     * Sets personal_email
     *
     * @param string $personal_email the personal email of the individual
     *
     * @return self
     */
    public function setPersonalEmail($personal_email)
    {
        $this->container['personal_email'] = $personal_email;

        return $this;
    }

    /**
     * Gets mobile_phone_number
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string $mobile_phone_number +1234567890
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;

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
     * @param string $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets ethnicity
     *
     * @return string
     */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
     * Sets ethnicity
     *
     * @param string $ethnicity ethnicity
     *
     * @return self
     */
    public function setEthnicity($ethnicity)
    {
        $allowedValues = $this->getEthnicityAllowableValues();
        if (!in_array($ethnicity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ethnicity', must be one of '%s'",
                    $ethnicity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ethnicity'] = $ethnicity;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param string $marital_status marital_status
     *
     * @return self
     */
    public function setMaritalStatus($marital_status)
    {
        $allowedValues = $this->getMaritalStatusAllowableValues();
        if (!in_array($marital_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'marital_status', must be one of '%s'",
                    $marital_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets employment_status
     *
     * @return string
     */
    public function getEmploymentStatus()
    {
        return $this->container['employment_status'];
    }

    /**
     * Sets employment_status
     *
     * @param string $employment_status employment_status
     *
     * @return self
     */
    public function setEmploymentStatus($employment_status)
    {
        $allowedValues = $this->getEmploymentStatusAllowableValues();
        if (!in_array($employment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'employment_status', must be one of '%s'",
                    $employment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employment_status'] = $employment_status;

        return $this;
    }

    /**
     * Gets employment_type
     *
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->container['employment_type'];
    }

    /**
     * Sets employment_type
     *
     * @param string $employment_type employment_type
     *
     * @return self
     */
    public function setEmploymentType($employment_type)
    {
        $allowedValues = $this->getEmploymentTypeAllowableValues();
        if (!in_array($employment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'employment_type', must be one of '%s'",
                    $employment_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employment_type'] = $employment_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets remote_created_at
     *
     * @return \DateTime
     */
    public function getRemoteCreatedAt()
    {
        return $this->container['remote_created_at'];
    }

    /**
     * Sets remote_created_at
     *
     * @param \DateTime $remote_created_at remote_created_at
     *
     * @return self
     */
    public function setRemoteCreatedAt($remote_created_at)
    {
        $this->container['remote_created_at'] = $remote_created_at;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime $termination_date termination_date
     *
     * @return self
     */
    public function setTerminationDate($termination_date)
    {
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets home_location
     *
     * @return \OpenAPI\Client\Model\AddressResponse
     */
    public function getHomeLocation()
    {
        return $this->container['home_location'];
    }

    /**
     * Sets home_location
     *
     * @param \OpenAPI\Client\Model\AddressResponse $home_location home_location
     *
     * @return self
     */
    public function setHomeLocation($home_location)
    {
        $this->container['home_location'] = $home_location;

        return $this;
    }

    /**
     * Gets work_location
     *
     * @return \OpenAPI\Client\Model\LocationResponse
     */
    public function getWorkLocation()
    {
        return $this->container['work_location'];
    }

    /**
     * Sets work_location
     *
     * @param \OpenAPI\Client\Model\LocationResponse $work_location work_location
     *
     * @return self
     */
    public function setWorkLocation($work_location)
    {
        $this->container['work_location'] = $work_location;

        return $this;
    }

    /**
     * Gets manager
     *
     * @return \OpenAPI\Client\Model\CreateEmployeeRequestManager
     */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
     * Sets manager
     *
     * @param \OpenAPI\Client\Model\CreateEmployeeRequestManager $manager manager
     *
     * @return self
     */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return \OpenAPI\Client\Model\CreateEmployeeRequestBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \OpenAPI\Client\Model\CreateEmployeeRequestBankAccount $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets employments
     *
     * @return \OpenAPI\Client\Model\EmploymentResponse[]
     */
    public function getEmployments()
    {
        return $this->container['employments'];
    }

    /**
     * Sets employments
     *
     * @param \OpenAPI\Client\Model\EmploymentResponse[] $employments employments
     *
     * @return self
     */
    public function setEmployments($employments)
    {
        $this->container['employments'] = $employments;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \OpenAPI\Client\Model\GroupResponse[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \OpenAPI\Client\Model\GroupResponse[] $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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


