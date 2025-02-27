<?php

namespace Secuconnect\Client\Api;

use Secuconnect\Client\ApiClient;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Authentication\Authenticator;

/**
 * PaymentContainersApi
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentContainersApi
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
     * @return PaymentContainersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentContainersGetById
     *
     * Read Payment Containers
     *
     * @param string $payment_container_id Payment Container ID (required)
     * @param string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\PaymentContainersProductModel
     */
    public function paymentContainersGetById($payment_container_id, $expand = null)
    {
        list($response) = $this->paymentContainersGetByIdWithHttpInfo($payment_container_id, $expand);
        return $response;
    }

    /**
     * Operation paymentContainersGetByIdWithHttpInfo
     *
     * Read Payment Containers
     *
     * @param null|string $payment_container_id Payment Container ID (required)
     * @param null|string $expand Expand fields (all or a specific one) 
     * @throws ApiException on non-2xx response
     * @return array<int, mixed> of \Secuconnect\Client\Model\PaymentContainersProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentContainersGetByIdWithHttpInfo($payment_container_id, $expand = null)
    {
        // verify the required parameter 'payment_container_id' is set
        if ($payment_container_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_container_id when calling paymentContainersGetById'
            );
        }
        // parse inputs
        $resourcePath = "/Payment/Containers/{paymentContainerId}";
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
                    '\Secuconnect\Client\Model\PaymentContainersProductModel',
                    '/Payment/Containers/{paymentContainerId}'
                );

                return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\PaymentContainersProductModel', $httpHeader), $statusCode, $httpHeader];
            } catch (ApiException $e) {
                switch ($e->getCode()) {
                    case 200:
                        $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\PaymentContainersProductModel', $e->getResponseHeaders());
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
