<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * SmartTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTransactionsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct(ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return SmartTransactionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAll
     *
     * Find Smart Transactions
     *
     * @param int $count The maximum number of items to return 
     * @param int $offset The position within the whole result set to start returning items (zero-based) 
     * @param string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param \Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param string $meta return field definitions 
     * @param float $validate Check syntax of a query string 
     * @param string $scroll_expire How long it should keep the “search context” alive? 
     * @param string $scroll_id Identifier of a previous search context. 
     * @param string $preset Query presets 
     * @param string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsList
     */
    public function getAll($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null, $expand = null)
    {
        list($response) = $this->getAllWithHttpInfo($count, $offset, $fields, $q, $sort, $aggregate, $meta, $validate, $scroll_expire, $scroll_id, $preset, $expand);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * Find Smart Transactions
     *
     * @param null|int $count The maximum number of items to return 
     * @param null|int $offset The position within the whole result set to start returning items (zero-based) 
     * @param null|string $fields List of fields to include in the result, all others will be filtered out. Nested properties can be accessed with this notation: &#x60;prop1.prop2&#x60;. 
     * @param null|string $q A query string to restrict the returned items to given conditions. The query string must consist of any combination of single expressions in the form &#x60;property:condition&#x60;. Property names can be nested like &#x60;property.property&#x60;.  Example: &#x60;customer.name:Meier&#x60;  A condition may contain:  * &#x60;?&#x60; as wildcard for one character;  * &#x60;*&#x60; as wildcard for any number of characters.  You can also use value ranges in the form &#x60;[min TO max]&#x60;.  Example: &#x60;customer.age:[30 TO 40]&#x60;  You can combine expressions logically by &#x60;expr AND expr&#x60; and &#x60;{expr} OR {expr}&#x60;. You can also negate an expression using &#x60;NOT {expr}&#x60;. Parenthesis &#x60;(...)&#x60; can be used to control precedence.  Example: &#x60;(NOT customer.name:meier*) AND (customer.age:[30 TO 40] OR customer.age:[50 TO 60])&#x60; 
     * @param null|string $sort String with comma separated pairs of &#x60;field:order&#x60;.  Options for order:  * &#x60;asc&#x60; ascending;  * &#x60;desc&#x60; descending. 
     * @param null|\Secuconnect\Client\Model\Aggregate $aggregate Aggregation summarizes your data. 
     * @param null|string $meta return field definitions 
     * @param null|float $validate Check syntax of a query string 
     * @param null|string $scroll_expire How long it should keep the “search context” alive? 
     * @param null|string $scroll_id Identifier of a previous search context. 
     * @param null|string $preset Query presets 
     * @param null|string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\SmartTransactionsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($count = null, $offset = null, $fields = null, $q = null, $sort = null, $aggregate = null, $meta = null, $validate = null, $scroll_expire = null, $scroll_id = null, $preset = null, $expand = null)
    {
        // parse inputs
        $resourcePath = "/Smart/Transactions";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
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
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($aggregate !== null) {
            $queryParams['aggregate'] = $this->apiClient->getSerializer()->toQueryValue($aggregate);
        }
        // query params
        if ($meta !== null) {
            $queryParams['meta'] = $this->apiClient->getSerializer()->toQueryValue($meta);
        }
        // query params
        if ($validate !== null) {
            $queryParams['validate'] = $this->apiClient->getSerializer()->toQueryValue($validate);
        }
        // query params
        if ($scroll_expire !== null) {
            $queryParams['scroll_expire'] = $this->apiClient->getSerializer()->toQueryValue($scroll_expire);
        }
        // query params
        if ($scroll_id !== null) {
            $queryParams['scroll_id'] = $this->apiClient->getSerializer()->toQueryValue($scroll_id);
        }
        // query params
        if ($preset !== null) {
            $queryParams['preset'] = $this->apiClient->getSerializer()->toQueryValue($preset);
        }
        // query params
        if ($expand !== null) {
            $queryParams['expand'] = $this->apiClient->getSerializer()->toQueryValue($expand);
        }

        for ($retries = 0; ; $retries++) {

            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartTransactionsList',
                    '/Smart/Transactions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsList', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsList', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation getOne
     *
     * Read Smart Transaction
     *
     * @param string $smart_transaction_id Smart Transaction ID (required)
     * @param string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function getOne($smart_transaction_id, $expand = null)
    {
        list($response) = $this->getOneWithHttpInfo($smart_transaction_id, $expand);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * Read Smart Transaction
     *
     * @param null|string $smart_transaction_id Smart Transaction ID (required)
     * @param null|string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($smart_transaction_id, $expand = null)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($expand !== null) {
            $queryParams['expand'] = $this->apiClient->getSerializer()->toQueryValue($expand);
        }
        // path params

        for ($retries = 0; ; $retries++) {

            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'GET',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation prepare
     *
     * Authorize payment (”prepare”)
     *
     * @param string $smart_transaction_id Smart Transaction ID (required)
     * @param string $payment_method Payment method:  - &#x60;\&quot;creditcard\&quot;&#x60; (also for Google Pay and Apple Pay) - &#x60;\&quot;debit\&quot;&#x60; - &#x60;\&quot;eps\&quot;&#x60; (deprecated) - &#x60;\&quot;easycredit\&quot;&#x60; - &#x60;\&quot;giropay\&quot;&#x60; (deprecated) - &#x60;\&quot;invoice\&quot;&#x60; - &#x60;\&quot;paypal\&quot;&#x60; - &#x60;\&quot;prepaid\&quot;&#x60; - &#x60;\&quot;sofort\&quot;&#x60; (deprecated) (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsPrepare $body Optional customer and/or payment details 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function prepare($smart_transaction_id, $payment_method, $body)
    {
        list($response) = $this->prepareWithHttpInfo($smart_transaction_id, $payment_method, $body);
        return $response;
    }

    /**
     * Operation prepareWithHttpInfo
     *
     * Authorize payment (”prepare”)
     *
     * @param null|string $smart_transaction_id Smart Transaction ID (required)
     * @param null|string $payment_method Payment method:  - &#x60;\&quot;creditcard\&quot;&#x60; (also for Google Pay and Apple Pay) - &#x60;\&quot;debit\&quot;&#x60; - &#x60;\&quot;eps\&quot;&#x60; (deprecated) - &#x60;\&quot;easycredit\&quot;&#x60; - &#x60;\&quot;giropay\&quot;&#x60; (deprecated) - &#x60;\&quot;invoice\&quot;&#x60; - &#x60;\&quot;paypal\&quot;&#x60; - &#x60;\&quot;prepaid\&quot;&#x60; - &#x60;\&quot;sofort\&quot;&#x60; (deprecated) (required)
     * @param null|\Secuconnect\Client\Model\SmartTransactionsPrepare $body Optional customer and/or payment details 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function prepareWithHttpInfo($smart_transaction_id, $payment_method, $body)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling prepare'
            );
        }
        // verify the required parameter 'payment_method' is set
        if ($payment_method === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method when calling prepare'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}/prepare/{paymentMethod}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        // path params

        for ($retries = 0; ; $retries++) {

            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}/prepare/{paymentMethod}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }

    /**
     * Operation updateTransaction
     *
     * Update Smart Transaction
     *
     * @param string $smart_transaction_id Smart Transaction ID (required)
     * @param \Secuconnect\Client\Model\SmartTransactionsDTO $body Transaction details 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SmartTransactionsProductModel
     */
    public function updateTransaction($smart_transaction_id, $body)
    {
        list($response) = $this->updateTransactionWithHttpInfo($smart_transaction_id, $body);
        return $response;
    }

    /**
     * Operation updateTransactionWithHttpInfo
     *
     * Update Smart Transaction
     *
     * @param null|string $smart_transaction_id Smart Transaction ID (required)
     * @param null|\Secuconnect\Client\Model\SmartTransactionsDTO $body Transaction details 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\SmartTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTransactionWithHttpInfo($smart_transaction_id, $body)
    {
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling updateTransaction'
            );
        }
        // parse inputs
        $resourcePath = "/Smart/Transactions/{smartTransactionId}";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params

        for ($retries = 0; ; $retries++) {

            // this endpoint requires OAuth (access token)
            if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
                $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
            }

            // make the API Call
            try {
                list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                    $resourcePath,
                    'PUT',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\SmartTransactionsProductModel',
                    '/Smart/Transactions/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SmartTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SmartTransactionsProductModel', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                    case 401:
                        if ($retries < 1) {
                            Authenticator::reauthenticate();
                            continue 2;
                        }
                    default:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                        $e->setResponseObject($data);
                        break;
                }

                throw $e;
            }
        }
    }
}
