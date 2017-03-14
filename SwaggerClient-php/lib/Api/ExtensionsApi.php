<?php
/**
 * ExtensionsApi
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
 * ExtensionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionsApi
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
     * @return ExtensionsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAccountExtension
     *
     * Create an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param \Swagger\Client\Model\CreateExtensionParams $data Account Extensions Data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ExtensionFull
     */
    public function createAccountExtension($account_id, $data = null)
    {
        list($response) = $this->createAccountExtensionWithHttpInfo($account_id, $data);
        return $response;
    }

    /**
     * Operation createAccountExtensionWithHttpInfo
     *
     * Create an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param \Swagger\Client\Model\CreateExtensionParams $data Account Extensions Data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ExtensionFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccountExtensionWithHttpInfo($account_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createAccountExtension');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions";
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
                '\Swagger\Client\Model\ExtensionFull',
                '/accounts/{account_id}/extensions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ExtensionFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ExtensionFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountExtension
     *
     * Show details of an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ExtensionFull
     */
    public function getAccountExtension($account_id, $extension_id)
    {
        list($response) = $this->getAccountExtensionWithHttpInfo($account_id, $extension_id);
        return $response;
    }

    /**
     * Operation getAccountExtensionWithHttpInfo
     *
     * Show details of an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ExtensionFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountExtensionWithHttpInfo($account_id, $extension_id)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getAccountExtension');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling getAccountExtension');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}";
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
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
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
                '\Swagger\Client\Model\ExtensionFull',
                '/accounts/{account_id}/extensions/{extension_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ExtensionFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ExtensionFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listAccountExtensions
     *
     * Get a list of extensions visible to the authenticated user or client
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_extension Extension filter (optional)
     * @param string[] $filters_name Name filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_extension Extension sorting (optional)
     * @param string $sort_name Name sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ListExtensions
     */
    public function listAccountExtensions($account_id, $filters_id = null, $filters_extension = null, $filters_name = null, $sort_id = null, $sort_extension = null, $sort_name = null, $limit = null, $offset = null, $fields = null)
    {
        list($response) = $this->listAccountExtensionsWithHttpInfo($account_id, $filters_id, $filters_extension, $filters_name, $sort_id, $sort_extension, $sort_name, $limit, $offset, $fields);
        return $response;
    }

    /**
     * Operation listAccountExtensionsWithHttpInfo
     *
     * Get a list of extensions visible to the authenticated user or client
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_extension Extension filter (optional)
     * @param string[] $filters_name Name filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_extension Extension sorting (optional)
     * @param string $sort_name Name sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ListExtensions, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAccountExtensionsWithHttpInfo($account_id, $filters_id = null, $filters_extension = null, $filters_name = null, $sort_id = null, $sort_extension = null, $sort_name = null, $limit = null, $offset = null, $fields = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listAccountExtensions');
        }
        if (!is_null($sort_id) && !preg_match("/asc|desc/", $sort_id)) {
            throw new \InvalidArgumentException("invalid value for \"sort_id\" when calling ExtensionsApi.listAccountExtensions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_extension) && !preg_match("/asc|desc/", $sort_extension)) {
            throw new \InvalidArgumentException("invalid value for \"sort_extension\" when calling ExtensionsApi.listAccountExtensions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_name) && !preg_match("/asc|desc/", $sort_name)) {
            throw new \InvalidArgumentException("invalid value for \"sort_name\" when calling ExtensionsApi.listAccountExtensions, must conform to the pattern /asc|desc/.");
        }

        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions";
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
        if (is_array($filters_extension)) {
            $filters_extension = $this->apiClient->getSerializer()->serializeCollection($filters_extension, 'multi', true);
        }
        if ($filters_extension !== null) {
            $queryParams['filters[extension]'] = $this->apiClient->getSerializer()->toQueryValue($filters_extension);
        }
        // query params
        if (is_array($filters_name)) {
            $filters_name = $this->apiClient->getSerializer()->serializeCollection($filters_name, 'multi', true);
        }
        if ($filters_name !== null) {
            $queryParams['filters[name]'] = $this->apiClient->getSerializer()->toQueryValue($filters_name);
        }
        // query params
        if ($sort_id !== null) {
            $queryParams['sort[id]'] = $this->apiClient->getSerializer()->toQueryValue($sort_id);
        }
        // query params
        if ($sort_extension !== null) {
            $queryParams['sort[extension]'] = $this->apiClient->getSerializer()->toQueryValue($sort_extension);
        }
        // query params
        if ($sort_name !== null) {
            $queryParams['sort[name]'] = $this->apiClient->getSerializer()->toQueryValue($sort_name);
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
                '\Swagger\Client\Model\ListExtensions',
                '/accounts/{account_id}/extensions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ListExtensions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ListExtensions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceAccountExtension
     *
     * Replace an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param \Swagger\Client\Model\ReplaceExtensionParams $data Account Extensions Data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ExtensionFull
     */
    public function replaceAccountExtension($account_id, $extension_id, $data = null)
    {
        list($response) = $this->replaceAccountExtensionWithHttpInfo($account_id, $extension_id, $data);
        return $response;
    }

    /**
     * Operation replaceAccountExtensionWithHttpInfo
     *
     * Replace an individual extension
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param \Swagger\Client\Model\ReplaceExtensionParams $data Account Extensions Data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ExtensionFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceAccountExtensionWithHttpInfo($account_id, $extension_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling replaceAccountExtension');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling replaceAccountExtension');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}";
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
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
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
                '\Swagger\Client\Model\ExtensionFull',
                '/accounts/{account_id}/extensions/{extension_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ExtensionFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ExtensionFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
