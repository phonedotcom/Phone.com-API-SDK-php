<?php
/**
 * NumberregionsApi
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
 * NumberregionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NumberregionsApi
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
     * @return NumberregionsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation listAvailablePhoneNumberRegions
     *
     * 
     *
     * @param string[] $filters_country_code Country Code filter (optional)
     * @param string[] $filters_npa Area Code filter (North America only) (optional)
     * @param string[] $filters_nxx 2nd set of 3 digits filter (North America only) (optional)
     * @param string[] $filters_is_toll_free Toll-free status filter (optional)
     * @param string[] $filters_city City filter (optional)
     * @param string[] $filters_province_postal_code State or Province filter (optional)
     * @param string[] $filters_country_postal_code Country filter (optional)
     * @param string $sort_country_code International calling code sorting (optional)
     * @param string $sort_npa Area Code sorting (North America only) (optional)
     * @param string $sort_nxx 2nd set of 3 digits sorting (North America) (optional)
     * @param string $sort_is_toll_free Toll Free status sorting (optional)
     * @param string $sort_city City sorting (optional)
     * @param string $sort_province_postal_code State or Province sorting (optional)
     * @param string $sort_country_postal_code Country sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @param string[] $group_by Fields to group by (supports the same set of fields as the filters and sorting) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ListPhoneNumbersRegions
     */
    public function listAvailablePhoneNumberRegions($filters_country_code = null, $filters_npa = null, $filters_nxx = null, $filters_is_toll_free = null, $filters_city = null, $filters_province_postal_code = null, $filters_country_postal_code = null, $sort_country_code = null, $sort_npa = null, $sort_nxx = null, $sort_is_toll_free = null, $sort_city = null, $sort_province_postal_code = null, $sort_country_postal_code = null, $limit = null, $offset = null, $fields = null, $group_by = null)
    {
        list($response) = $this->listAvailablePhoneNumberRegionsWithHttpInfo($filters_country_code, $filters_npa, $filters_nxx, $filters_is_toll_free, $filters_city, $filters_province_postal_code, $filters_country_postal_code, $sort_country_code, $sort_npa, $sort_nxx, $sort_is_toll_free, $sort_city, $sort_province_postal_code, $sort_country_postal_code, $limit, $offset, $fields, $group_by);
        return $response;
    }

    /**
     * Operation listAvailablePhoneNumberRegionsWithHttpInfo
     *
     * 
     *
     * @param string[] $filters_country_code Country Code filter (optional)
     * @param string[] $filters_npa Area Code filter (North America only) (optional)
     * @param string[] $filters_nxx 2nd set of 3 digits filter (North America only) (optional)
     * @param string[] $filters_is_toll_free Toll-free status filter (optional)
     * @param string[] $filters_city City filter (optional)
     * @param string[] $filters_province_postal_code State or Province filter (optional)
     * @param string[] $filters_country_postal_code Country filter (optional)
     * @param string $sort_country_code International calling code sorting (optional)
     * @param string $sort_npa Area Code sorting (North America only) (optional)
     * @param string $sort_nxx 2nd set of 3 digits sorting (North America) (optional)
     * @param string $sort_is_toll_free Toll Free status sorting (optional)
     * @param string $sort_city City sorting (optional)
     * @param string $sort_province_postal_code State or Province sorting (optional)
     * @param string $sort_country_postal_code Country sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @param string[] $group_by Fields to group by (supports the same set of fields as the filters and sorting) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ListPhoneNumbersRegions, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAvailablePhoneNumberRegionsWithHttpInfo($filters_country_code = null, $filters_npa = null, $filters_nxx = null, $filters_is_toll_free = null, $filters_city = null, $filters_province_postal_code = null, $filters_country_postal_code = null, $sort_country_code = null, $sort_npa = null, $sort_nxx = null, $sort_is_toll_free = null, $sort_city = null, $sort_province_postal_code = null, $sort_country_postal_code = null, $limit = null, $offset = null, $fields = null, $group_by = null)
    {
        if (!is_null($sort_npa) && !preg_match("/asc|desc/", $sort_npa)) {
            throw new \InvalidArgumentException("invalid value for \"sort_npa\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_nxx) && !preg_match("/asc|desc/", $sort_nxx)) {
            throw new \InvalidArgumentException("invalid value for \"sort_nxx\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_is_toll_free) && !preg_match("/asc|desc/", $sort_is_toll_free)) {
            throw new \InvalidArgumentException("invalid value for \"sort_is_toll_free\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_city) && !preg_match("/asc|desc/", $sort_city)) {
            throw new \InvalidArgumentException("invalid value for \"sort_city\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_province_postal_code) && !preg_match("/asc|desc/", $sort_province_postal_code)) {
            throw new \InvalidArgumentException("invalid value for \"sort_province_postal_code\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_country_postal_code) && !preg_match("/asc|desc/", $sort_country_postal_code)) {
            throw new \InvalidArgumentException("invalid value for \"sort_country_postal_code\" when calling NumberregionsApi.listAvailablePhoneNumberRegions, must conform to the pattern /asc|desc/.");
        }

        // parse inputs
        $resourcePath = "/phone-numbers/available/regions";
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
        if (is_array($filters_country_code)) {
            $filters_country_code = $this->apiClient->getSerializer()->serializeCollection($filters_country_code, 'multi', true);
        }
        if ($filters_country_code !== null) {
            $queryParams['filters[country_code]'] = $this->apiClient->getSerializer()->toQueryValue($filters_country_code);
        }
        // query params
        if (is_array($filters_npa)) {
            $filters_npa = $this->apiClient->getSerializer()->serializeCollection($filters_npa, 'multi', true);
        }
        if ($filters_npa !== null) {
            $queryParams['filters[npa]'] = $this->apiClient->getSerializer()->toQueryValue($filters_npa);
        }
        // query params
        if (is_array($filters_nxx)) {
            $filters_nxx = $this->apiClient->getSerializer()->serializeCollection($filters_nxx, 'multi', true);
        }
        if ($filters_nxx !== null) {
            $queryParams['filters[nxx]'] = $this->apiClient->getSerializer()->toQueryValue($filters_nxx);
        }
        // query params
        if (is_array($filters_is_toll_free)) {
            $filters_is_toll_free = $this->apiClient->getSerializer()->serializeCollection($filters_is_toll_free, 'multi', true);
        }
        if ($filters_is_toll_free !== null) {
            $queryParams['filters[is_toll_free]'] = $this->apiClient->getSerializer()->toQueryValue($filters_is_toll_free);
        }
        // query params
        if (is_array($filters_city)) {
            $filters_city = $this->apiClient->getSerializer()->serializeCollection($filters_city, 'multi', true);
        }
        if ($filters_city !== null) {
            $queryParams['filters[city]'] = $this->apiClient->getSerializer()->toQueryValue($filters_city);
        }
        // query params
        if (is_array($filters_province_postal_code)) {
            $filters_province_postal_code = $this->apiClient->getSerializer()->serializeCollection($filters_province_postal_code, 'multi', true);
        }
        if ($filters_province_postal_code !== null) {
            $queryParams['filters[province_postal_code]'] = $this->apiClient->getSerializer()->toQueryValue($filters_province_postal_code);
        }
        // query params
        if (is_array($filters_country_postal_code)) {
            $filters_country_postal_code = $this->apiClient->getSerializer()->serializeCollection($filters_country_postal_code, 'csv', true);
        }
        if ($filters_country_postal_code !== null) {
            $queryParams['filters[country_postal_code]'] = $this->apiClient->getSerializer()->toQueryValue($filters_country_postal_code);
        }
        // query params
        if ($sort_country_code !== null) {
            $queryParams['sort[country_code]'] = $this->apiClient->getSerializer()->toQueryValue($sort_country_code);
        }
        // query params
        if ($sort_npa !== null) {
            $queryParams['sort[npa]'] = $this->apiClient->getSerializer()->toQueryValue($sort_npa);
        }
        // query params
        if ($sort_nxx !== null) {
            $queryParams['sort[nxx]'] = $this->apiClient->getSerializer()->toQueryValue($sort_nxx);
        }
        // query params
        if ($sort_is_toll_free !== null) {
            $queryParams['sort[is_toll_free]'] = $this->apiClient->getSerializer()->toQueryValue($sort_is_toll_free);
        }
        // query params
        if ($sort_city !== null) {
            $queryParams['sort[city]'] = $this->apiClient->getSerializer()->toQueryValue($sort_city);
        }
        // query params
        if ($sort_province_postal_code !== null) {
            $queryParams['sort[province_postal_code]'] = $this->apiClient->getSerializer()->toQueryValue($sort_province_postal_code);
        }
        // query params
        if ($sort_country_postal_code !== null) {
            $queryParams['sort[country_postal_code]'] = $this->apiClient->getSerializer()->toQueryValue($sort_country_postal_code);
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
        // query params
        if (is_array($group_by)) {
            $group_by = $this->apiClient->getSerializer()->serializeCollection($group_by, 'csv', true);
        }
        if ($group_by !== null) {
            $queryParams['group_by'] = $this->apiClient->getSerializer()->toQueryValue($group_by);
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
                '\Swagger\Client\Model\ListPhoneNumbersRegions',
                '/phone-numbers/available/regions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ListPhoneNumbersRegions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ListPhoneNumbersRegions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
