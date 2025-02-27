<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * GeneralContractsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralContractsApi
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
     * @return GeneralContractsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAvailablePaymentMethods
     *
     * Get payment methods
     *
     * @param string $general_contract_id General Contract ID (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body Request details 
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function getAvailablePaymentMethods($general_contract_id, $body)
    {
        list($response) = $this->getAvailablePaymentMethodsWithHttpInfo($general_contract_id, $body);
        return $response;
    }

    /**
     * Operation getAvailablePaymentMethodsWithHttpInfo
     *
     * Get payment methods
     *
     * @param null|string $general_contract_id General Contract ID (required)
     * @param null|\Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body Request details 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailablePaymentMethodsWithHttpInfo($general_contract_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailablePaymentMethods'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/getAvailablePaymentMethods";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    'string[]',
                    '/General/Contracts/{generalContractId}/getAvailablePaymentMethods'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getAvailablePaymentMethodsForTransaction
     *
     * Get available payment methods for Smart Transaction
     *
     * @param string $general_contract_id General Contract ID (required)
     * @param string $smart_transaction_id Smart Transaction ID (required)
     * @param \Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body Request details 
     * @throws ApiException on non-2xx response
     * @return string[]
     */
    public function getAvailablePaymentMethodsForTransaction($general_contract_id, $smart_transaction_id, $body)
    {
        list($response) = $this->getAvailablePaymentMethodsForTransactionWithHttpInfo($general_contract_id, $smart_transaction_id, $body);
        return $response;
    }

    /**
     * Operation getAvailablePaymentMethodsForTransactionWithHttpInfo
     *
     * Get available payment methods for Smart Transaction
     *
     * @param null|string $general_contract_id General Contract ID (required)
     * @param null|string $smart_transaction_id Smart Transaction ID (required)
     * @param null|\Secuconnect\Client\Model\GetAvailablePaymentMethodsDTO $body Request details 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailablePaymentMethodsForTransactionWithHttpInfo($general_contract_id, $smart_transaction_id, $body)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getAvailablePaymentMethodsForTransaction'
            );
        }
        // verify the required parameter 'smart_transaction_id' is set
        if ($smart_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $smart_transaction_id when calling getAvailablePaymentMethodsForTransaction'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/getAvailablePaymentMethods/{smartTransactionId}";
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
                    'string[]',
                    '/General/Contracts/{generalContractId}/getAvailablePaymentMethods/{smartTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getIframeOptions
     *
     * Get iframe options
     *
     * @param string $general_contract_id General Contract ID (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\IframeOptions
     */
    public function getIframeOptions($general_contract_id)
    {
        list($response) = $this->getIframeOptionsWithHttpInfo($general_contract_id);
        return $response;
    }

    /**
     * Operation getIframeOptionsWithHttpInfo
     *
     * Get iframe options
     *
     * @param null|string $general_contract_id General Contract ID (required)
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\IframeOptions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIframeOptionsWithHttpInfo($general_contract_id)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getIframeOptions'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}/IframeOptions";
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
                    '\Secuconnect\Client\Model\IframeOptions',
                    '/General/Contracts/{generalContractId}/IframeOptions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\IframeOptions', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\IframeOptions', $e->getResponseHeaders());
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
     * Read General Contract
     *
     * @param string $general_contract_id General Contract ID (required)
     * @param string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\GeneralContractsProductModel
     */
    public function getOne($general_contract_id, $expand = null)
    {
        list($response) = $this->getOneWithHttpInfo($general_contract_id, $expand);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * Read General Contract
     *
     * @param null|string $general_contract_id General Contract ID (required)
     * @param null|string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\GeneralContractsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($general_contract_id, $expand = null)
    {
        // verify the required parameter 'general_contract_id' is set
        if ($general_contract_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $general_contract_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/General/Contracts/{generalContractId}";
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
                    '\Secuconnect\Client\Model\GeneralContractsProductModel',
                    '/General/Contracts/{generalContractId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\GeneralContractsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\GeneralContractsProductModel', $e->getResponseHeaders());
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
