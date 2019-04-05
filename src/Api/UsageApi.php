<?php
/**
 * UsageApi
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.20.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Killbill\Client\ApiException;
use Killbill\Client\Configuration;
use Killbill\Client\HeaderSelector;
use Killbill\Client\ObjectSerializer;

/**
 * UsageApi Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsageApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAllUsage
     *
     * Retrieve usage for a subscription
     *
     * @param  string $subscriptionId subscriptionId (required)
     * @param  \DateTime $startDate startDate (optional)
     * @param  \DateTime $endDate endDate (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Killbill\Client\Model\RolledUpUsage
     */
    public function getAllUsage($subscriptionId, $startDate = null, $endDate = null)
    {
        list($response) = $this->getAllUsageWithHttpInfo($subscriptionId, $startDate, $endDate);
        return $response;
    }

    /**
     * Operation getAllUsageWithHttpInfo
     *
     * Retrieve usage for a subscription
     *
     * @param  string $subscriptionId (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Killbill\Client\Model\RolledUpUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllUsageWithHttpInfo($subscriptionId, $startDate = null, $endDate = null)
    {
        $returnType = '\Killbill\Client\Model\RolledUpUsage';
        $request = $this->getAllUsageRequest($subscriptionId, $startDate, $endDate);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Killbill\Client\Model\RolledUpUsage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllUsageAsync
     *
     * Retrieve usage for a subscription
     *
     * @param  string $subscriptionId (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllUsageAsync($subscriptionId, $startDate = null, $endDate = null)
    {
        return $this->getAllUsageAsyncWithHttpInfo($subscriptionId, $startDate, $endDate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllUsageAsyncWithHttpInfo
     *
     * Retrieve usage for a subscription
     *
     * @param  string $subscriptionId (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllUsageAsyncWithHttpInfo($subscriptionId, $startDate = null, $endDate = null)
    {
        $returnType = '\Killbill\Client\Model\RolledUpUsage';
        $request = $this->getAllUsageRequest($subscriptionId, $startDate, $endDate);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllUsage'
     *
     * @param  string $subscriptionId (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllUsageRequest($subscriptionId, $startDate = null, $endDate = null)
    {
        // verify the required parameter 'subscriptionId' is set
        if ($subscriptionId === null || (is_array($subscriptionId) && count($subscriptionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subscriptionId when calling getAllUsage'
            );
        }

        $resourcePath = '/1.0/kb/usages/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = ObjectSerializer::toQueryValue($endDate);
        }

        // path params
        if ($subscriptionId !== null) {
            $resourcePath = str_replace(
                '{' . 'subscriptionId' . '}',
                ObjectSerializer::toPathValue($subscriptionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiKey');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiSecret');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiSecret'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getUsage
     *
     * Retrieve usage for a subscription and unit type
     *
     * @param  string $subscriptionId subscriptionId (required)
     * @param  string $unitType unitType (required)
     * @param  \DateTime $startDate startDate (optional)
     * @param  \DateTime $endDate endDate (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Killbill\Client\Model\RolledUpUsage
     */
    public function getUsage($subscriptionId, $unitType, $startDate = null, $endDate = null)
    {
        list($response) = $this->getUsageWithHttpInfo($subscriptionId, $unitType, $startDate, $endDate);
        return $response;
    }

    /**
     * Operation getUsageWithHttpInfo
     *
     * Retrieve usage for a subscription and unit type
     *
     * @param  string $subscriptionId (required)
     * @param  string $unitType (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Killbill\Client\Model\RolledUpUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsageWithHttpInfo($subscriptionId, $unitType, $startDate = null, $endDate = null)
    {
        $returnType = '\Killbill\Client\Model\RolledUpUsage';
        $request = $this->getUsageRequest($subscriptionId, $unitType, $startDate, $endDate);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Killbill\Client\Model\RolledUpUsage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsageAsync
     *
     * Retrieve usage for a subscription and unit type
     *
     * @param  string $subscriptionId (required)
     * @param  string $unitType (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageAsync($subscriptionId, $unitType, $startDate = null, $endDate = null)
    {
        return $this->getUsageAsyncWithHttpInfo($subscriptionId, $unitType, $startDate, $endDate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsageAsyncWithHttpInfo
     *
     * Retrieve usage for a subscription and unit type
     *
     * @param  string $subscriptionId (required)
     * @param  string $unitType (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageAsyncWithHttpInfo($subscriptionId, $unitType, $startDate = null, $endDate = null)
    {
        $returnType = '\Killbill\Client\Model\RolledUpUsage';
        $request = $this->getUsageRequest($subscriptionId, $unitType, $startDate, $endDate);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getUsage'
     *
     * @param  string $subscriptionId (required)
     * @param  string $unitType (required)
     * @param  \DateTime $startDate (optional)
     * @param  \DateTime $endDate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUsageRequest($subscriptionId, $unitType, $startDate = null, $endDate = null)
    {
        // verify the required parameter 'subscriptionId' is set
        if ($subscriptionId === null || (is_array($subscriptionId) && count($subscriptionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subscriptionId when calling getUsage'
            );
        }
        // verify the required parameter 'unitType' is set
        if ($unitType === null || (is_array($unitType) && count($unitType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $unitType when calling getUsage'
            );
        }

        $resourcePath = '/1.0/kb/usages/{subscriptionId}/{unitType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = ObjectSerializer::toQueryValue($endDate);
        }

        // path params
        if ($subscriptionId !== null) {
            $resourcePath = str_replace(
                '{' . 'subscriptionId' . '}',
                ObjectSerializer::toPathValue($subscriptionId),
                $resourcePath
            );
        }
        // path params
        if ($unitType !== null) {
            $resourcePath = str_replace(
                '{' . 'unitType' . '}',
                ObjectSerializer::toPathValue($unitType),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiKey');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiSecret');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiSecret'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation recordUsage
     *
     * Record usage for a subscription
     *
     * @param  \Killbill\Client\Model\SubscriptionUsageRecord $body body (required)
     * @param  string $xKillbillCreatedBy xKillbillCreatedBy (required)
     * @param  string $xKillbillReason xKillbillReason (optional)
     * @param  string $xKillbillComment xKillbillComment (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function recordUsage($body, $xKillbillCreatedBy, $xKillbillReason = null, $xKillbillComment = null)
    {
        $this->recordUsageWithHttpInfo($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment);
    }

    /**
     * Operation recordUsageWithHttpInfo
     *
     * Record usage for a subscription
     *
     * @param  \Killbill\Client\Model\SubscriptionUsageRecord $body (required)
     * @param  string $xKillbillCreatedBy (required)
     * @param  string $xKillbillReason (optional)
     * @param  string $xKillbillComment (optional)
     *
     * @throws \Killbill\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function recordUsageWithHttpInfo($body, $xKillbillCreatedBy, $xKillbillReason = null, $xKillbillComment = null)
    {
        $returnType = '';
        $request = $this->recordUsageRequest($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation recordUsageAsync
     *
     * Record usage for a subscription
     *
     * @param  \Killbill\Client\Model\SubscriptionUsageRecord $body (required)
     * @param  string $xKillbillCreatedBy (required)
     * @param  string $xKillbillReason (optional)
     * @param  string $xKillbillComment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recordUsageAsync($body, $xKillbillCreatedBy, $xKillbillReason = null, $xKillbillComment = null)
    {
        return $this->recordUsageAsyncWithHttpInfo($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation recordUsageAsyncWithHttpInfo
     *
     * Record usage for a subscription
     *
     * @param  \Killbill\Client\Model\SubscriptionUsageRecord $body (required)
     * @param  string $xKillbillCreatedBy (required)
     * @param  string $xKillbillReason (optional)
     * @param  string $xKillbillComment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recordUsageAsyncWithHttpInfo($body, $xKillbillCreatedBy, $xKillbillReason = null, $xKillbillComment = null)
    {
        $returnType = '';
        $request = $this->recordUsageRequest($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'recordUsage'
     *
     * @param  \Killbill\Client\Model\SubscriptionUsageRecord $body (required)
     * @param  string $xKillbillCreatedBy (required)
     * @param  string $xKillbillReason (optional)
     * @param  string $xKillbillComment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function recordUsageRequest($body, $xKillbillCreatedBy, $xKillbillReason = null, $xKillbillComment = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling recordUsage'
            );
        }
        // verify the required parameter 'xKillbillCreatedBy' is set
        if ($xKillbillCreatedBy === null || (is_array($xKillbillCreatedBy) && count($xKillbillCreatedBy) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xKillbillCreatedBy when calling recordUsage'
            );
        }

        $resourcePath = '/1.0/kb/usages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xKillbillCreatedBy !== null) {
            $headerParams['X-Killbill-CreatedBy'] = ObjectSerializer::toHeaderValue($xKillbillCreatedBy);
        }
        // header params
        if ($xKillbillReason !== null) {
            $headerParams['X-Killbill-Reason'] = ObjectSerializer::toHeaderValue($xKillbillReason);
        }
        // header params
        if ($xKillbillComment !== null) {
            $headerParams['X-Killbill-Comment'] = ObjectSerializer::toHeaderValue($xKillbillComment);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiKey');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Killbill-ApiSecret');
        if ($apiKey !== null) {
            $headers['X-Killbill-ApiSecret'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
