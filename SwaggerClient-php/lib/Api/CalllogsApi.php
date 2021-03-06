<?php
/**
 * CalllogsApi
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
 * CalllogsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalllogsApi
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
     * @return CalllogsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAccountCallLogs
     *
     * Show details of an individual Call Log entry
     *
     * @param int $account_id Account ID (required)
     * @param string $call_id Call ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CallLogFull
     */
    public function getAccountCallLogs($account_id, $call_id)
    {
        list($response) = $this->getAccountCallLogsWithHttpInfo($account_id, $call_id);
        return $response;
    }

    /**
     * Operation getAccountCallLogsWithHttpInfo
     *
     * Show details of an individual Call Log entry
     *
     * @param int $account_id Account ID (required)
     * @param string $call_id Call ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CallLogFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountCallLogsWithHttpInfo($account_id, $call_id)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getAccountCallLogs');
        }
        // verify the required parameter 'call_id' is set
        if ($call_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $call_id when calling getAccountCallLogs');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/call-logs/{call_id}";
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
        if ($call_id !== null) {
            $resourcePath = str_replace(
                "{" . "call_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($call_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CallLogFull',
                '/accounts/{account_id}/call-logs/{call_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CallLogFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CallLogFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listAccountCallLogs
     *
     * Get a list of call details associated with your account
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_start_time Call start time filter (optional)
     * @param string $filters_created_at Call log creation time filter (optional)
     * @param string $filters_direction Call direction filter: in or out (optional)
     * @param string $filters_called_number Called number (optional)
     * @param string $filters_type Call type, such as &#39;call&#39;, &#39;fax&#39;, &#39;audiogram&#39; (optional)
     * @param string[] $filters_extension Extension filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_start_time Sorting by call start time: asc or desc (optional)
     * @param string $sort_created_at Sorting by call log creation time: asc or desc (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ListCallLogs
     */
    public function listAccountCallLogs($account_id, $filters_id = null, $filters_start_time = null, $filters_created_at = null, $filters_direction = null, $filters_called_number = null, $filters_type = null, $filters_extension = null, $sort_id = null, $sort_start_time = null, $sort_created_at = null, $limit = null, $offset = null, $fields = null)
    {
        list($response) = $this->listAccountCallLogsWithHttpInfo($account_id, $filters_id, $filters_start_time, $filters_created_at, $filters_direction, $filters_called_number, $filters_type, $filters_extension, $sort_id, $sort_start_time, $sort_created_at, $limit, $offset, $fields);
        return $response;
    }

    /**
     * Operation listAccountCallLogsWithHttpInfo
     *
     * Get a list of call details associated with your account
     *
     * @param int $account_id Account ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_start_time Call start time filter (optional)
     * @param string $filters_created_at Call log creation time filter (optional)
     * @param string $filters_direction Call direction filter: in or out (optional)
     * @param string $filters_called_number Called number (optional)
     * @param string $filters_type Call type, such as &#39;call&#39;, &#39;fax&#39;, &#39;audiogram&#39; (optional)
     * @param string[] $filters_extension Extension filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_start_time Sorting by call start time: asc or desc (optional)
     * @param string $sort_created_at Sorting by call log creation time: asc or desc (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ListCallLogs, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAccountCallLogsWithHttpInfo($account_id, $filters_id = null, $filters_start_time = null, $filters_created_at = null, $filters_direction = null, $filters_called_number = null, $filters_type = null, $filters_extension = null, $sort_id = null, $sort_start_time = null, $sort_created_at = null, $limit = null, $offset = null, $fields = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listAccountCallLogs');
        }
        if (!is_null($filters_created_at) && !preg_match("/^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/", $filters_created_at)) {
            throw new \InvalidArgumentException("invalid value for \"filters_created_at\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/.");
        }

        if (!is_null($filters_direction) && !preg_match("/^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/", $filters_direction)) {
            throw new \InvalidArgumentException("invalid value for \"filters_direction\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/.");
        }

        if (!is_null($filters_called_number) && !preg_match("/^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/", $filters_called_number)) {
            throw new \InvalidArgumentException("invalid value for \"filters_called_number\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/.");
        }

        if (!is_null($filters_type) && !preg_match("/^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/", $filters_type)) {
            throw new \InvalidArgumentException("invalid value for \"filters_type\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /^eq:.*|^ne:.*|^lt:.*|^gt:.*|^lte:.*|^gte:.*|^starts-with:.*|^ends-with:.*|^contains:.*|^not-starts-with:.*|^not-ends-with:.*|^not-contains:.*|^between:.*,.*|^not-between:.*,.*/.");
        }

        if (!is_null($sort_id) && !preg_match("/asc|desc/", $sort_id)) {
            throw new \InvalidArgumentException("invalid value for \"sort_id\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_start_time) && !preg_match("/asc|desc/", $sort_start_time)) {
            throw new \InvalidArgumentException("invalid value for \"sort_start_time\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_created_at) && !preg_match("/asc|desc/", $sort_created_at)) {
            throw new \InvalidArgumentException("invalid value for \"sort_created_at\" when calling CalllogsApi.listAccountCallLogs, must conform to the pattern /asc|desc/.");
        }

        // parse inputs
        $resourcePath = "/accounts/{account_id}/call-logs";
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
        if (is_array($filters_start_time)) {
            $filters_start_time = $this->apiClient->getSerializer()->serializeCollection($filters_start_time, 'multi', true);
        }
        if ($filters_start_time !== null) {
            $queryParams['filters[start_time]'] = $this->apiClient->getSerializer()->toQueryValue($filters_start_time);
        }
        // query params
        if ($filters_created_at !== null) {
            $queryParams['filters[created_at]'] = $this->apiClient->getSerializer()->toQueryValue($filters_created_at);
        }
        // query params
        if ($filters_direction !== null) {
            $queryParams['filters[direction]'] = $this->apiClient->getSerializer()->toQueryValue($filters_direction);
        }
        // query params
        if ($filters_called_number !== null) {
            $queryParams['filters[called_number]'] = $this->apiClient->getSerializer()->toQueryValue($filters_called_number);
        }
        // query params
        if ($filters_type !== null) {
            $queryParams['filters[type]'] = $this->apiClient->getSerializer()->toQueryValue($filters_type);
        }
        // query params
        if (is_array($filters_extension)) {
            $filters_extension = $this->apiClient->getSerializer()->serializeCollection($filters_extension, 'multi', true);
        }
        if ($filters_extension !== null) {
            $queryParams['filters[extension]'] = $this->apiClient->getSerializer()->toQueryValue($filters_extension);
        }
        // query params
        if ($sort_id !== null) {
            $queryParams['sort[id]'] = $this->apiClient->getSerializer()->toQueryValue($sort_id);
        }
        // query params
        if ($sort_start_time !== null) {
            $queryParams['sort[start_time]'] = $this->apiClient->getSerializer()->toQueryValue($sort_start_time);
        }
        // query params
        if ($sort_created_at !== null) {
            $queryParams['sort[created_at]'] = $this->apiClient->getSerializer()->toQueryValue($sort_created_at);
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
                '\Swagger\Client\Model\ListCallLogs',
                '/accounts/{account_id}/call-logs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ListCallLogs', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ListCallLogs', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
