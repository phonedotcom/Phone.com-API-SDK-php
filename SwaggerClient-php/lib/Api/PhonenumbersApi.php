<?php
/**
 * PhonenumbersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Phone.com API
 *
 * This is a Phone.com api Swagger definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apisupport@phone.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * PhonenumbersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhonenumbersApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return PhonenumbersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAccountPhoneNumber
     *
     * Add a phone number to an account
     *
     * @param int $account_id Account ID (required)
     * @param \Swagger\Client\Model\CreatePhoneNumberParams $data Phone Number data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneNumberFull
     */
    public function createAccountPhoneNumber($account_id, $data = null)
    {
        list($response) = $this->createAccountPhoneNumberWithHttpInfo($account_id, $data);
        return $response;
    }

    /**
     * Operation createAccountPhoneNumberWithHttpInfo
     *
     * Add a phone number to an account
     *
     * @param int $account_id Account ID (required)
     * @param \Swagger\Client\Model\CreatePhoneNumberParams $data Phone Number data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneNumberFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccountPhoneNumberWithHttpInfo($account_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createAccountPhoneNumber');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/phone-numbers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PhoneNumberFull',
                '/accounts/{account_id}/phone-numbers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneNumberFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneNumberFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountPhoneNumber
     *
     * Show details of an individual phone number
     *
     * @param int $account_id Account ID (required)
     * @param int $number_id Number ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneNumberFull
     */
    public function getAccountPhoneNumber($account_id, $number_id)
    {
        list($response) = $this->getAccountPhoneNumberWithHttpInfo($account_id, $number_id);
        return $response;
    }

    /**
     * Operation getAccountPhoneNumberWithHttpInfo
     *
     * Show details of an individual phone number
     *
     * @param int $account_id Account ID (required)
     * @param int $number_id Number ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneNumberFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountPhoneNumberWithHttpInfo($account_id, $number_id)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getAccountPhoneNumber');
        }
        // verify the required parameter 'number_id' is set
        if ($number_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $number_id when calling getAccountPhoneNumber');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/phone-numbers/{number_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($number_id !== null) {
            $resourcePath = str_replace(
                "{" . "number_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($number_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PhoneNumberFull',
                '/accounts/{account_id}/phone-numbers/{number_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneNumberFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneNumberFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listAccountPhoneNumbers
     *
     * Get a list of phone numbers registered to an account
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_name Name filter (optional)
     * @param string[] $filters_phone_number Phone number filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_name Name sorting (optional)
     * @param string $sort_phone_number Phone number sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ListPhoneNumbers
     */
    public function listAccountPhoneNumbers($account_id, $filters_id = null, $filters_name = null, $filters_phone_number = null, $sort_id = null, $sort_name = null, $sort_phone_number = null, $limit = null, $offset = null, $fields = null)
    {
        list($response) = $this->listAccountPhoneNumbersWithHttpInfo($account_id, $filters_id, $filters_name, $filters_phone_number, $sort_id, $sort_name, $sort_phone_number, $limit, $offset, $fields);
        return $response;
    }

    /**
     * Operation listAccountPhoneNumbersWithHttpInfo
     *
     * Get a list of phone numbers registered to an account
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_name Name filter (optional)
     * @param string[] $filters_phone_number Phone number filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_name Name sorting (optional)
     * @param string $sort_phone_number Phone number sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ListPhoneNumbers, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAccountPhoneNumbersWithHttpInfo($account_id, $filters_id = null, $filters_name = null, $filters_phone_number = null, $sort_id = null, $sort_name = null, $sort_phone_number = null, $limit = null, $offset = null, $fields = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listAccountPhoneNumbers');
        }
        if (!is_null($sort_id) && !preg_match("/asc|desc/", $sort_id)) {
            throw new \InvalidArgumentException("invalid value for \"sort_id\" when calling PhonenumbersApi.listAccountPhoneNumbers, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_name) && !preg_match("/asc|desc/", $sort_name)) {
            throw new \InvalidArgumentException("invalid value for \"sort_name\" when calling PhonenumbersApi.listAccountPhoneNumbers, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_phone_number) && !preg_match("/asc|desc/", $sort_phone_number)) {
            throw new \InvalidArgumentException("invalid value for \"sort_phone_number\" when calling PhonenumbersApi.listAccountPhoneNumbers, must conform to the pattern /asc|desc/.");
        }

        // parse inputs
        $resourcePath = "/accounts/{account_id}/phone-numbers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (is_array($filters_id)) {
            $filters_id = $this->apiClient->getSerializer()->serializeCollection($filters_id, 'multi', true);
        }
        if ($filters_id !== null) {
            $queryParams['filters[id]'] = $this->apiClient->getSerializer()->toQueryValue($filters_id);
        }
        // query params
        if (is_array($filters_name)) {
            $filters_name = $this->apiClient->getSerializer()->serializeCollection($filters_name, 'multi', true);
        }
        if ($filters_name !== null) {
            $queryParams['filters[name]'] = $this->apiClient->getSerializer()->toQueryValue($filters_name);
        }
        // query params
        if (is_array($filters_phone_number)) {
            $filters_phone_number = $this->apiClient->getSerializer()->serializeCollection($filters_phone_number, 'multi', true);
        }
        if ($filters_phone_number !== null) {
            $queryParams['filters[phone_number]'] = $this->apiClient->getSerializer()->toQueryValue($filters_phone_number);
        }
        // query params
        if ($sort_id !== null) {
            $queryParams['sort[id]'] = $this->apiClient->getSerializer()->toQueryValue($sort_id);
        }
        // query params
        if ($sort_name !== null) {
            $queryParams['sort[name]'] = $this->apiClient->getSerializer()->toQueryValue($sort_name);
        }
        // query params
        if ($sort_phone_number !== null) {
            $queryParams['sort[phone_number]'] = $this->apiClient->getSerializer()->toQueryValue($sort_phone_number);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ListPhoneNumbers',
                '/accounts/{account_id}/phone-numbers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ListPhoneNumbers', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ListPhoneNumbers', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceAccountPhoneNumber
     *
     * Update the settings for an existing phone number on your account
     *
     * @param int $account_id Account ID (required)
     * @param int $number_id Number ID (required)
     * @param \Swagger\Client\Model\ReplacePhoneNumberParams $data Phone Number data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneNumberFull
     */
    public function replaceAccountPhoneNumber($account_id, $number_id, $data = null)
    {
        list($response) = $this->replaceAccountPhoneNumberWithHttpInfo($account_id, $number_id, $data);
        return $response;
    }

    /**
     * Operation replaceAccountPhoneNumberWithHttpInfo
     *
     * Update the settings for an existing phone number on your account
     *
     * @param int $account_id Account ID (required)
     * @param int $number_id Number ID (required)
     * @param \Swagger\Client\Model\ReplacePhoneNumberParams $data Phone Number data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneNumberFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceAccountPhoneNumberWithHttpInfo($account_id, $number_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling replaceAccountPhoneNumber');
        }
        // verify the required parameter 'number_id' is set
        if ($number_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $number_id when calling replaceAccountPhoneNumber');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/phone-numbers/{number_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($number_id !== null) {
            $resourcePath = str_replace(
                "{" . "number_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($number_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PhoneNumberFull',
                '/accounts/{account_id}/phone-numbers/{number_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneNumberFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneNumberFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
