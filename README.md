# OpenAPIClient-php

The affixapi.com API documentation.

# Introduction
Affix API is an OAuth 2.1 application that allows developers to access
customer data, without developers needing to manage or maintain
integrations; or collect login credentials or API keys from users for these
third party systems.

# OAuth 2.1
Affix API follows the [OAuth 2.1 spec](https://datatracker.ietf.org/doc/html/draft-ietf-oauth-v2-1-08).

As an OAuth application, Affix API handles not only both the collection of
sensitive user credentials or API keys, but also builds and maintains the
integrations with the providers, so you don't have to.

# How to obtain an access token
in order to get started, you must:
  - register a `client_id`
  - direct your user to the sign in flow  (`https://connect.affixapi.com`
    [with the appropriate query
    parameters](https://github.com/affixapi/starter-kit/tree/master/connect))
  - capture `authorization_code` we will send to your redirect URI after
    the sign in flow is complete and exchange that `authorization_code` for
    a Bearer token

# Sandbox keys (xhr mode)
### dev
```
eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6ImQ1OTZhMmYzLWYzNzktNGE1ZC1hMmRhLTk4OWJmYWViYTg1ZCIsImlhdCI6MTcwMjkyMDkwMywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5kZXYuZW5naW5lZXJpbmcuYWZmaXhhcGkuY29tIiwic3ViIjoiZGV2ZWxvcGVyIiwiYXVkIjoiM0ZEQUVERjktMURDQTRGNTQtODc5NDlGNkEtNDEwMjc2NDMifQ.VLWYjCQvBS0C3ZA6_J3-U-idZj5EYI2IlDdTjAWBxSIHGufp6cqaVodKsF2BeIqcIeB3P0lW-KL9mY3xGd7ckQ
```

#### `employees` endpoint sample:
```
curl --fail \\
  -X GET \\
  -H 'Authorization: Bearer eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6ImQ1OTZhMmYzLWYzNzktNGE1ZC1hMmRhLTk4OWJmYWViYTg1ZCIsImlhdCI6MTcwMjkyMDkwMywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5kZXYuZW5naW5lZXJpbmcuYWZmaXhhcGkuY29tIiwic3ViIjoiZGV2ZWxvcGVyIiwiYXVkIjoiM0ZEQUVERjktMURDQTRGNTQtODc5NDlGNkEtNDEwMjc2NDMifQ.VLWYjCQvBS0C3ZA6_J3-U-idZj5EYI2IlDdTjAWBxSIHGufp6cqaVodKsF2BeIqcIeB3P0lW-KL9mY3xGd7ckQ' \\
  'https://dev.api.affixapi.com/2023-03-01/xhr/employees'
```

### prod
```
eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6IjI5YjFjYTg4LWNlNjktNDgyZC1iNGZjLTkzMWMzZmJkYWM4ZSIsImlhdCI6MTcwMjkyMTA4MywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5wcm9kLmVuZ2luZWVyaW5nLmFmZml4YXBpLmNvbSIsInN1YiI6ImRldmVsb3BlciIsImF1ZCI6IjA4QkIwODFFLUQ5QUI0RDE0LThERjk5MjMzLTY2NjE1Q0U5In0.2zdpFAmiyYiYk6MOcbXNUwwR4M1Fextnaac340x54AidiWXCyw-u9KeavbqfYF6q8a9kcDLrxhJ8Wc_3tIzuVw
```

#### `employees` endpoint sample:
```
curl --fail \\
  -X GET \\
  -H 'Authorization: Bearer eyJhbGciOiJFUzI1NiIsImtpZCI6Ims5RmxwSFR1YklmZWNsUU5QRVZzeFcxazFZZ0Zfbk1BWllOSGVuOFQxdGciLCJ0eXAiOiJKV1MifQ.eyJwcm92aWRlciI6InNhbmRib3giLCJzY29wZXMiOlsiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2NvbXBhbnkiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWUiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvZW1wbG95ZWVzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL2lkZW50aXR5IiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3BheXJ1bnMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvcGF5cnVucy86cGF5cnVuX2lkIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWJhbGFuY2VzIiwiLzIwMjMtMDMtMDEvZGV2ZWxvcGVyL3RpbWUtb2ZmLWVudHJpZXMiLCIvMjAyMy0wMy0wMS9kZXZlbG9wZXIvdGltZXNoZWV0cyJdLCJ0b2tlbiI6IjI5YjFjYTg4LWNlNjktNDgyZC1iNGZjLTkzMWMzZmJkYWM4ZSIsImlhdCI6MTcwMjkyMTA4MywiaXNzIjoicHVibGljYXBpLWludGVybWVkaWF0ZS5wcm9kLmVuZ2luZWVyaW5nLmFmZml4YXBpLmNvbSIsInN1YiI6ImRldmVsb3BlciIsImF1ZCI6IjA4QkIwODFFLUQ5QUI0RDE0LThERjk5MjMzLTY2NjE1Q0U5In0.2zdpFAmiyYiYk6MOcbXNUwwR4M1Fextnaac340x54AidiWXCyw-u9KeavbqfYF6q8a9kcDLrxhJ8Wc_3tIzuVw' \\
  'https://api.affixapi.com/2023-03-01/xhr/employees'
```

# Compression
We support `brotli`, `gzip`, and `deflate` compression algorithms.

To enable, pass the `Accept-Encoding` header with one or all of the values:
`br`, `gzip`, `deflate`, or `identity` (no compression)

In the response, you will receive the `Content-Encoding` response header
indicating the compression algorithm used in the data payload to enable you
to decompress the result. If the `Accept-Encoding: identity` header was
passed, no `Content-Encoding` response header is sent back, as no
compression algorithm was used.

# Webhooks
An exciting feature for HR/Payroll modes are webhooks.

If enabled, your `webhook_uri` is set on your `client_id` for the
respective environment: `dev | prod`

Webhooks are configured to make live requests to the underlying integration
1x/hr, and if a difference is detected since the last request, we will send a
request to your `webhook_uri` with this shape:

```
{

  added: <api.v20230301.Employees>[
    <api.v20230301.Employee>{
      ...,
      date_of_birth: '2010-08-06',
      display_full_name: 'Daija Rogahn',
      employee_number: '57993',
      employment_status: 'pending',
      employment_type: 'other',
      employments: [
        {
          currency: 'eur',
          effective_date: '2022-02-25',
          employment_type: 'other',
          job_title: 'Dynamic Implementation Manager',
          pay_frequency: 'semimonthly',
          pay_period: 'YEAR',
          pay_rate: 96000,
        },
      ],
      first_name: 'Daija',
      ...
    }
  ],
  removed: [],
  updated: [
    <api.v20230301.Employee>{
      ...,
      date_of_birth: '2009-11-09',
      display_full_name: 'Lourdes Stiedemann',
      employee_number: '63189',
      employment_status: 'leave',
      employment_type: 'full_time',
      employments: [
        {
          currency: 'gbp',
          effective_date: '2023-01-16',
          employment_type: 'full_time',
          job_title: 'Forward Brand Planner',
          pay_frequency: 'semimonthly',
          pay_period: 'YEAR',
          pay_rate: 86000,
        },
      ],
      first_name: 'Lourdes',
    }
  ]
}
```

the following headers will be sent with webhook requests:

```
x-affix-api-signature: ab8474e609db95d5df3adc39ea3add7a7544bd215c5c520a30a650ae93a2fba7

x-affix-api-origin:  webhooks-employees-webhook

user-agent:  affixapi.com
```

Before trusting the payload, you should sign the payload and verify the
signature matches the signature sent by the `affixapi.com` service.

This secures that the data sent to your `webhook_uri` is from the
`affixapi.com` server.

The signature is created by combining the signing secret (your
`client_secret`) with the body of the request sent using a standard
HMAC-SHA256 keyed hash.

The signature can be created via:
  - create an `HMAC` with your `client_secret`
  - update the `HMAC` with the payload
  - get the hex digest -> this is the signature

Sample `typescript` code that follows this recipe:

```
import { createHmac } from 'crypto';

export const computeSignature = ({
  str,
  signingSecret,
}: {
  signingSecret: string;
  str: string;
}): string => {
  const hmac = createHmac('sha256', signingSecret);
  hmac.update(str);
  const signature = hmac.digest('hex');

  return signature;
};
```

While verifying the Affix API signature header should be your primary
method of confirming validity, you can also whitelist our outbound webhook
static IP addresses.

```
dev:
  - 52.210.169.82
  - 52.210.38.77
  - 3.248.135.204

prod:
  - 52.51.160.102
  - 54.220.83.244
  - 3.254.213.171
```

## Rate limits
Open endpoints (not gated by an API key) (applied at endpoint level):
  - 15 requests every 1 minute (by IP address)
  - 25 requests every 5 minutes (by IP address)

Gated endpoints (require an API key) (applied at endpoint level):
  - 40 requests every 1 minute (by IP address)
  - 40 requests every 5 minutes (by `client_id`)

Things to keep in mind:
  - Open endpoints (not gated by an API key) will likely be called by your
    users, not you, so rate limits generally would not apply to you.
  - As a developer, rate limits are applied at the endpoint granularity.
    - For example, say the rate limits below are 10 requests per minute by ip.
      from that same ip, within 1 minute, you get:
      - 10 requests per minute on `/orders`,
      - another 10 requests per minute on `/items`,
      - and another 10 requests per minute on `/identity`,
      - for a total of 30 requests per minute.



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: access-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class20230301Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->officialCompanies20230301();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class20230301Api->officialCompanies20230301: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.affixapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Class20230301Api* | [**officialCompanies20230301**](docs/Api/Class20230301Api.md#officialcompanies20230301) | **GET** /2023-03-01/official/company | Company
*Class20230301Api* | [**officialCreateEmployee20230301**](docs/Api/Class20230301Api.md#officialcreateemployee20230301) | **POST** /2023-03-01/official/employee | Create Employee
*Class20230301Api* | [**officialEmployees20230301**](docs/Api/Class20230301Api.md#officialemployees20230301) | **GET** /2023-03-01/official/employees | Employees
*Class20230301Api* | [**officialGroups20230301**](docs/Api/Class20230301Api.md#officialgroups20230301) | **GET** /2023-03-01/official/groups | Groups
*Class20230301Api* | [**officialTimeOffBalances20230301**](docs/Api/Class20230301Api.md#officialtimeoffbalances20230301) | **GET** /2023-03-01/official/time-off-balances | Time off balances
*Class20230301Api* | [**officialTimeOffEntries20230301**](docs/Api/Class20230301Api.md#officialtimeoffentries20230301) | **GET** /2023-03-01/official/time-off-entries | Time off entries
*Class20230301Api* | [**officialTimesheets20230301**](docs/Api/Class20230301Api.md#officialtimesheets20230301) | **GET** /2023-03-01/official/timesheets | Timesheets
*Class20230301Api* | [**officialWorkLocations20230301**](docs/Api/Class20230301Api.md#officialworklocations20230301) | **GET** /2023-03-01/official/work-locations | Work locations
*Class20230301Api* | [**officialdentity20230301**](docs/Api/Class20230301Api.md#officialdentity20230301) | **GET** /2023-03-01/official/identity | Identity
*Class20230301Api* | [**xhrCompanies20230301**](docs/Api/Class20230301Api.md#xhrcompanies20230301) | **GET** /2023-03-01/xhr/company | Company
*Class20230301Api* | [**xhrCreateEmployee20230301**](docs/Api/Class20230301Api.md#xhrcreateemployee20230301) | **POST** /2023-03-01/xhr/employee | Create employee
*Class20230301Api* | [**xhrEmployees20230301**](docs/Api/Class20230301Api.md#xhremployees20230301) | **GET** /2023-03-01/xhr/employees | Employees
*Class20230301Api* | [**xhrGroups20230301**](docs/Api/Class20230301Api.md#xhrgroups20230301) | **GET** /2023-03-01/xhr/groups | Groups
*Class20230301Api* | [**xhrIdentity20230301**](docs/Api/Class20230301Api.md#xhridentity20230301) | **GET** /2023-03-01/xhr/identity | Identity
*Class20230301Api* | [**xhrPayruns20230301**](docs/Api/Class20230301Api.md#xhrpayruns20230301) | **GET** /2023-03-01/xhr/payruns | Payruns
*Class20230301Api* | [**xhrPayslips20230301**](docs/Api/Class20230301Api.md#xhrpayslips20230301) | **GET** /2023-03-01/xhr/payruns/{payrun_id} | Payslips
*Class20230301Api* | [**xhrTimeOffBalances20230301**](docs/Api/Class20230301Api.md#xhrtimeoffbalances20230301) | **GET** /2023-03-01/xhr/time-off-balances | Time off balances
*Class20230301Api* | [**xhrTimeOffEntries20230301**](docs/Api/Class20230301Api.md#xhrtimeoffentries20230301) | **GET** /2023-03-01/xhr/time-off-entries | Time off entries
*Class20230301Api* | [**xhrTimesheets20230301**](docs/Api/Class20230301Api.md#xhrtimesheets20230301) | **GET** /2023-03-01/xhr/timesheets | Timesheets
*Class20230301Api* | [**xhrWorkLocations20230301**](docs/Api/Class20230301Api.md#xhrworklocations20230301) | **GET** /2023-03-01/xhr/work-locations | Work locations
*CoreApi* | [**providers**](docs/Api/CoreApi.md#providers) | **GET** /providers | Providers
*ManagementApi* | [**client**](docs/Api/ManagementApi.md#client) | **GET** /2023-03-01/management/client | Client
*ManagementApi* | [**disconnect**](docs/Api/ManagementApi.md#disconnect) | **POST** /2023-03-01/management/disconnect | Disconnect token
*ManagementApi* | [**introspect**](docs/Api/ManagementApi.md#introspect) | **GET** /2023-03-01/management/introspect | Inspect token
*ManagementApi* | [**token**](docs/Api/ManagementApi.md#token) | **POST** /2023-03-01/management/token | Create token
*ManagementApi* | [**tokens**](docs/Api/ManagementApi.md#tokens) | **GET** /2023-03-01/management/tokens | Tokens
*ManagementApi* | [**updateClient**](docs/Api/ManagementApi.md#updateclient) | **POST** /2023-03-01/management/client | Update client
*OfficialApi* | [**officialCompanies20230301**](docs/Api/OfficialApi.md#officialcompanies20230301) | **GET** /2023-03-01/official/company | Company
*OfficialApi* | [**officialCreateEmployee20230301**](docs/Api/OfficialApi.md#officialcreateemployee20230301) | **POST** /2023-03-01/official/employee | Create Employee
*OfficialApi* | [**officialEmployees20230301**](docs/Api/OfficialApi.md#officialemployees20230301) | **GET** /2023-03-01/official/employees | Employees
*OfficialApi* | [**officialGroups20230301**](docs/Api/OfficialApi.md#officialgroups20230301) | **GET** /2023-03-01/official/groups | Groups
*OfficialApi* | [**officialTimeOffBalances20230301**](docs/Api/OfficialApi.md#officialtimeoffbalances20230301) | **GET** /2023-03-01/official/time-off-balances | Time off balances
*OfficialApi* | [**officialTimeOffEntries20230301**](docs/Api/OfficialApi.md#officialtimeoffentries20230301) | **GET** /2023-03-01/official/time-off-entries | Time off entries
*OfficialApi* | [**officialTimesheets20230301**](docs/Api/OfficialApi.md#officialtimesheets20230301) | **GET** /2023-03-01/official/timesheets | Timesheets
*OfficialApi* | [**officialWorkLocations20230301**](docs/Api/OfficialApi.md#officialworklocations20230301) | **GET** /2023-03-01/official/work-locations | Work locations
*OfficialApi* | [**officialdentity20230301**](docs/Api/OfficialApi.md#officialdentity20230301) | **GET** /2023-03-01/official/identity | Identity
*XHRApi* | [**xhrCompanies20230301**](docs/Api/XHRApi.md#xhrcompanies20230301) | **GET** /2023-03-01/xhr/company | Company
*XHRApi* | [**xhrCreateEmployee20230301**](docs/Api/XHRApi.md#xhrcreateemployee20230301) | **POST** /2023-03-01/xhr/employee | Create employee
*XHRApi* | [**xhrEmployees20230301**](docs/Api/XHRApi.md#xhremployees20230301) | **GET** /2023-03-01/xhr/employees | Employees
*XHRApi* | [**xhrGroups20230301**](docs/Api/XHRApi.md#xhrgroups20230301) | **GET** /2023-03-01/xhr/groups | Groups
*XHRApi* | [**xhrIdentity20230301**](docs/Api/XHRApi.md#xhridentity20230301) | **GET** /2023-03-01/xhr/identity | Identity
*XHRApi* | [**xhrPayruns20230301**](docs/Api/XHRApi.md#xhrpayruns20230301) | **GET** /2023-03-01/xhr/payruns | Payruns
*XHRApi* | [**xhrPayslips20230301**](docs/Api/XHRApi.md#xhrpayslips20230301) | **GET** /2023-03-01/xhr/payruns/{payrun_id} | Payslips
*XHRApi* | [**xhrTimeOffBalances20230301**](docs/Api/XHRApi.md#xhrtimeoffbalances20230301) | **GET** /2023-03-01/xhr/time-off-balances | Time off balances
*XHRApi* | [**xhrTimeOffEntries20230301**](docs/Api/XHRApi.md#xhrtimeoffentries20230301) | **GET** /2023-03-01/xhr/time-off-entries | Time off entries
*XHRApi* | [**xhrTimesheets20230301**](docs/Api/XHRApi.md#xhrtimesheets20230301) | **GET** /2023-03-01/xhr/timesheets | Timesheets
*XHRApi* | [**xhrWorkLocations20230301**](docs/Api/XHRApi.md#xhrworklocations20230301) | **GET** /2023-03-01/xhr/work-locations | Work locations

## Models

- [AddressNoNonNullRequest](docs/Model/AddressNoNonNullRequest.md)
- [AddressResponse](docs/Model/AddressResponse.md)
- [ClientRequest](docs/Model/ClientRequest.md)
- [ClientResponse](docs/Model/ClientResponse.md)
- [CompanyResponse](docs/Model/CompanyResponse.md)
- [CreateEmployeeRequest](docs/Model/CreateEmployeeRequest.md)
- [CreateEmployeeRequestBankAccount](docs/Model/CreateEmployeeRequestBankAccount.md)
- [CreateEmployeeRequestManager](docs/Model/CreateEmployeeRequestManager.md)
- [CurrencyRequest](docs/Model/CurrencyRequest.md)
- [CurrencyResponse](docs/Model/CurrencyResponse.md)
- [DisconnectResponse](docs/Model/DisconnectResponse.md)
- [EmployeeResponse](docs/Model/EmployeeResponse.md)
- [EmploymentNoNullEnumRequest](docs/Model/EmploymentNoNullEnumRequest.md)
- [EmploymentResponse](docs/Model/EmploymentResponse.md)
- [GroupNoNullEnumRequest](docs/Model/GroupNoNullEnumRequest.md)
- [GroupResponse](docs/Model/GroupResponse.md)
- [IdAndMessageResponse](docs/Model/IdAndMessageResponse.md)
- [IdentityResponse](docs/Model/IdentityResponse.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse401](docs/Model/InlineResponse401.md)
- [InlineResponse409](docs/Model/InlineResponse409.md)
- [IntrospectResponse](docs/Model/IntrospectResponse.md)
- [LocationNoNonNullRequest](docs/Model/LocationNoNonNullRequest.md)
- [LocationResponse](docs/Model/LocationResponse.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [ModeRequest](docs/Model/ModeRequest.md)
- [ModeResponse](docs/Model/ModeResponse.md)
- [PayrunResponse](docs/Model/PayrunResponse.md)
- [PayslipResponse](docs/Model/PayslipResponse.md)
- [PayslipResponseContributions](docs/Model/PayslipResponseContributions.md)
- [PayslipResponseDeductions](docs/Model/PayslipResponseDeductions.md)
- [PayslipResponseEarnings](docs/Model/PayslipResponseEarnings.md)
- [PayslipResponseTaxes](docs/Model/PayslipResponseTaxes.md)
- [ProviderRequest](docs/Model/ProviderRequest.md)
- [ProviderResponse](docs/Model/ProviderResponse.md)
- [ScopesRequest](docs/Model/ScopesRequest.md)
- [ScopesResponse](docs/Model/ScopesResponse.md)
- [TimeOffBalanceResponse](docs/Model/TimeOffBalanceResponse.md)
- [TimeOffEntryResponse](docs/Model/TimeOffEntryResponse.md)
- [TimesheetResponse](docs/Model/TimesheetResponse.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [TokenResponse](docs/Model/TokenResponse.md)

## Authorization

### access-token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### basic

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@affixapi.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2023-03-01`
    - Package version: `1.1.46`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
