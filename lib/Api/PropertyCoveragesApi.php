<?php
/**
 * PropertyCoveragesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One Customer Api
 *
 * The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.
 *
 * OpenAPI spec version: 0.1.7
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * PropertyCoveragesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyCoveragesApi
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
     * Operation projectsPoliciesCoveragesAdditionalCoveragesGET
     *
     * Property policy additional coverages
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PropertyCoverageAdditionalCoverages
     */
    public function projectsPoliciesCoveragesAdditionalCoveragesGET($coverage_id, $accept_language = null)
    {
        list($response) = $this->projectsPoliciesCoveragesAdditionalCoveragesGETWithHttpInfo($coverage_id, $accept_language);
        return $response;
    }

    /**
     * Operation projectsPoliciesCoveragesAdditionalCoveragesGETWithHttpInfo
     *
     * Property policy additional coverages
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PropertyCoverageAdditionalCoverages, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsPoliciesCoveragesAdditionalCoveragesGETWithHttpInfo($coverage_id, $accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverageAdditionalCoverages';
        $request = $this->projectsPoliciesCoveragesAdditionalCoveragesGETRequest($coverage_id, $accept_language);

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
                if ($returnType !== 'string') {
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
                        '\Swagger\Client\Model\PropertyCoverageAdditionalCoverages',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation projectsPoliciesCoveragesAdditionalCoveragesGETAsync
     *
     * Property policy additional coverages
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesAdditionalCoveragesGETAsync($coverage_id, $accept_language = null)
    {
        return $this->projectsPoliciesCoveragesAdditionalCoveragesGETAsyncWithHttpInfo($coverage_id, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsPoliciesCoveragesAdditionalCoveragesGETAsyncWithHttpInfo
     *
     * Property policy additional coverages
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesAdditionalCoveragesGETAsyncWithHttpInfo($coverage_id, $accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverageAdditionalCoverages';
        $request = $this->projectsPoliciesCoveragesAdditionalCoveragesGETRequest($coverage_id, $accept_language);

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
     * Create request for operation 'projectsPoliciesCoveragesAdditionalCoveragesGET'
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsPoliciesCoveragesAdditionalCoveragesGETRequest($coverage_id, $accept_language = null)
    {
        // verify the required parameter 'coverage_id' is set
        if ($coverage_id === null || (is_array($coverage_id) && count($coverage_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coverage_id when calling projectsPoliciesCoveragesAdditionalCoveragesGET'
            );
        }

        $resourcePath = '/property/policies/coverages/{coverage-id}/additional-coverages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept_language !== null) {
            $headerParams['accept-language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($coverage_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coverage-id' . '}',
                ObjectSerializer::toPathValue($coverage_id),
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
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
     * Operation projectsPoliciesCoveragesGET
     *
     * Property policy coverages
     *
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PropertyCoverages
     */
    public function projectsPoliciesCoveragesGET($accept_language = null)
    {
        list($response) = $this->projectsPoliciesCoveragesGETWithHttpInfo($accept_language);
        return $response;
    }

    /**
     * Operation projectsPoliciesCoveragesGETWithHttpInfo
     *
     * Property policy coverages
     *
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PropertyCoverages, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsPoliciesCoveragesGETWithHttpInfo($accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverages';
        $request = $this->projectsPoliciesCoveragesGETRequest($accept_language);

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
                if ($returnType !== 'string') {
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
                        '\Swagger\Client\Model\PropertyCoverages',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation projectsPoliciesCoveragesGETAsync
     *
     * Property policy coverages
     *
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesGETAsync($accept_language = null)
    {
        return $this->projectsPoliciesCoveragesGETAsyncWithHttpInfo($accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsPoliciesCoveragesGETAsyncWithHttpInfo
     *
     * Property policy coverages
     *
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesGETAsyncWithHttpInfo($accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverages';
        $request = $this->projectsPoliciesCoveragesGETRequest($accept_language);

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
     * Create request for operation 'projectsPoliciesCoveragesGET'
     *
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsPoliciesCoveragesGETRequest($accept_language = null)
    {

        $resourcePath = '/property/policies/coverages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept_language !== null) {
            $headerParams['accept-language'] = ObjectSerializer::toHeaderValue($accept_language);
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
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
     * Operation projectsPoliciesCoveragesSublimitsGET
     *
     * Property policy sublimits
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PropertyCoverageSublimits
     */
    public function projectsPoliciesCoveragesSublimitsGET($coverage_id, $accept_language = null)
    {
        list($response) = $this->projectsPoliciesCoveragesSublimitsGETWithHttpInfo($coverage_id, $accept_language);
        return $response;
    }

    /**
     * Operation projectsPoliciesCoveragesSublimitsGETWithHttpInfo
     *
     * Property policy sublimits
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PropertyCoverageSublimits, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsPoliciesCoveragesSublimitsGETWithHttpInfo($coverage_id, $accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverageSublimits';
        $request = $this->projectsPoliciesCoveragesSublimitsGETRequest($coverage_id, $accept_language);

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
                if ($returnType !== 'string') {
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
                        '\Swagger\Client\Model\PropertyCoverageSublimits',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation projectsPoliciesCoveragesSublimitsGETAsync
     *
     * Property policy sublimits
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesSublimitsGETAsync($coverage_id, $accept_language = null)
    {
        return $this->projectsPoliciesCoveragesSublimitsGETAsyncWithHttpInfo($coverage_id, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsPoliciesCoveragesSublimitsGETAsyncWithHttpInfo
     *
     * Property policy sublimits
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsPoliciesCoveragesSublimitsGETAsyncWithHttpInfo($coverage_id, $accept_language = null)
    {
        $returnType = '\Swagger\Client\Model\PropertyCoverageSublimits';
        $request = $this->projectsPoliciesCoveragesSublimitsGETRequest($coverage_id, $accept_language);

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
     * Create request for operation 'projectsPoliciesCoveragesSublimitsGET'
     *
     * @param  string $coverage_id The coverage id (required)
     * @param  string $accept_language The culture to request resources for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsPoliciesCoveragesSublimitsGETRequest($coverage_id, $accept_language = null)
    {
        // verify the required parameter 'coverage_id' is set
        if ($coverage_id === null || (is_array($coverage_id) && count($coverage_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coverage_id when calling projectsPoliciesCoveragesSublimitsGET'
            );
        }

        $resourcePath = '/property/policies/coverages/{coverage-id}/sublimits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept_language !== null) {
            $headerParams['accept-language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($coverage_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coverage-id' . '}',
                ObjectSerializer::toPathValue($coverage_id),
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
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
