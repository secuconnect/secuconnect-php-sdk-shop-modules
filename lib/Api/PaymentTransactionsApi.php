<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentTransactionsApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransactionsApi
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
     * @return PaymentTransactionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancel
     *
     * Cancel or refund
     *
     * @param string $payment_transaction_id Payment Transaction ID (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Amount and reason 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel[]
     */
    public function cancel($payment_transaction_id, $body)
    {
        list($response) = $this->cancelWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation cancelWithHttpInfo
     *
     * Cancel or refund
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (required)
     * @param null|\Secuconnect\Client\Model\PaymentTransactionCancelDTO $body Amount and reason 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentTransactionsProductModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling cancel'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/cancel";
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]',
                    '/Payment/Transactions/{paymentTransactionId}/cancel'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel[]', $e->getResponseHeaders());
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
     * Operation capture
     *
     * Capture
     *
     * @param string $payment_transaction_id Payment Transaction ID (required)
     * @param \Secuconnect\Client\Model\PaymentTransactionsCaptureDTO $body body 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     */
    public function capture($payment_transaction_id, $body)
    {
        list($response) = $this->captureWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation captureWithHttpInfo
     *
     * Capture
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (required)
     * @param null|\Secuconnect\Client\Model\PaymentTransactionsCaptureDTO $body 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function captureWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling capture'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/capture";
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel',
                    '/Payment/Transactions/{paymentTransactionId}/capture'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation checkStatus
     *
     * Check payment status
     *
     * @param string $payment_transaction_id Payment Transaction ID (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsCheckStatus
     */
    public function checkStatus($payment_transaction_id)
    {
        list($response) = $this->checkStatusWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation checkStatusWithHttpInfo
     *
     * Check payment status
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (required)
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentTransactionsCheckStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkStatusWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling checkStatus'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/checkStatus";
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
                    '\Secuconnect\Client\Model\PaymentTransactionsCheckStatus',
                    '/Payment/Transactions/{paymentTransactionId}/checkStatus'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsCheckStatus', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsCheckStatus', $e->getResponseHeaders());
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
     * Read Payment Transaction
     *
     * @param string $payment_transaction_id Payment Transaction ID (required)
     * @param string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsProductModel
     */
    public function getOne($payment_transaction_id, $expand = null)
    {
        list($response) = $this->getOneWithHttpInfo($payment_transaction_id, $expand);
        return $response;
    }

    /**
     * Operation getOneWithHttpInfo
     *
     * Read Payment Transaction
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (required)
     * @param null|string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentTransactionsProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOneWithHttpInfo($payment_transaction_id, $expand = null)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getOne'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}";
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
                    '\Secuconnect\Client\Model\PaymentTransactionsProductModel',
                    '/Payment/Transactions/{paymentTransactionId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsProductModel', $e->getResponseHeaders());
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
     * Operation getPaymentInstructionsForPaymentTransaction
     *
     * Get payment instructions for Payment Transaction
     *
     * @param string $payment_transaction_id Payment Transaction ID (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentTransactionsInstructionsModel
     */
    public function getPaymentInstructionsForPaymentTransaction($payment_transaction_id)
    {
        list($response) = $this->getPaymentInstructionsForPaymentTransactionWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation getPaymentInstructionsForPaymentTransactionWithHttpInfo
     *
     * Get payment instructions for Payment Transaction
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (required)
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentTransactionsInstructionsModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentInstructionsForPaymentTransactionWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getPaymentInstructionsForPaymentTransaction'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/getPaymentInstructions";
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
                    'POST',
                    $queryParams,
                    $httpBody,
                    $headerParams,
                    '\Secuconnect\Client\Model\PaymentTransactionsInstructionsModel',
                    '/Payment/Transactions/{paymentTransactionId}/getPaymentInstructions'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentTransactionsInstructionsModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentTransactionsInstructionsModel', $e->getResponseHeaders());
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
     * Operation getPaymentTransactionsOldFormat
     *
     * Read in old format
     *
     * @param string $payment_transaction_id Payment Transaction ID (PCI_...) or Flex.API transaction hash (required)
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function getPaymentTransactionsOldFormat($payment_transaction_id)
    {
        list($response) = $this->getPaymentTransactionsOldFormatWithHttpInfo($payment_transaction_id);
        return $response;
    }

    /**
     * Operation getPaymentTransactionsOldFormatWithHttpInfo
     *
     * Read in old format
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (PCI_...) or Flex.API transaction hash (required)
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentTransactionsOldFormatWithHttpInfo($payment_transaction_id)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling getPaymentTransactionsOldFormat'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/OldFormat";
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
                    '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                    '/Payment/Transactions/{paymentTransactionId}/OldFormat'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
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
     * Operation updateShippingInformation
     *
     * Add shipping information
     *
     * @param string $payment_transaction_id Payment Transaction ID (PCI_...) or Flex.API transaction hash (required)
     * @param \Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\ResultBoolean
     */
    public function updateShippingInformation($payment_transaction_id, $body)
    {
        list($response) = $this->updateShippingInformationWithHttpInfo($payment_transaction_id, $body);
        return $response;
    }

    /**
     * Operation updateShippingInformationWithHttpInfo
     *
     * Add shipping information
     *
     * @param null|string $payment_transaction_id Payment Transaction ID (PCI_...) or Flex.API transaction hash (required)
     * @param null|\Secuconnect\Client\Model\SecupayTransactionSetShippingInformationDTO $body Shipping information 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\ResultBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateShippingInformationWithHttpInfo($payment_transaction_id, $body)
    {
        // verify the required parameter 'payment_transaction_id' is set
        if ($payment_transaction_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_transaction_id when calling updateShippingInformation'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Transactions/{paymentTransactionId}/ShippingInformation";
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
                    '\Secuconnect\Client\Model\ResultBoolean',
                    '/Payment/Transactions/{paymentTransactionId}/ShippingInformation'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\ResultBoolean', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ResultBoolean', $e->getResponseHeaders());
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
