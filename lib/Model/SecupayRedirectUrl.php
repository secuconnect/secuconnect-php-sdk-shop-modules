<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SecupayRedirectUrl
 *
 * @description SecupayRedirectUrl
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class SecupayRedirectUrl implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'SecupayRedirectUrl';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'iframe_url' => 'string',
        'url_success' => 'string',
        'url_failure' => 'string',
        'url_push' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'iframe_url' => null,
        'url_success' => null,
        'url_failure' => null,
        'url_push' => null
    ];

    /**
     * @return string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * @return array<string, mixed>
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'iframe_url' => 'iframe_url',
        'url_success' => 'url_success',
        'url_failure' => 'url_failure',
        'url_push' => 'url_push'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'iframe_url' => 'setIframeUrl',
        'url_success' => 'setUrlSuccess',
        'url_failure' => 'setUrlFailure',
        'url_push' => 'setUrlPush'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'iframe_url' => 'getIframeUrl',
        'url_success' => 'getUrlSuccess',
        'url_failure' => 'getUrlFailure',
        'url_push' => 'getUrlPush'
    ];

    /**
     * @return string[]
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * @return string[]
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * @return string[]
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['iframe_url'] = isset($data['iframe_url']) ? $data['iframe_url'] : null;
        $this->container['url_success'] = isset($data['url_success']) ? $data['url_success'] : null;
        $this->container['url_failure'] = isset($data['url_failure']) ? $data['url_failure'] : null;
        $this->container['url_push'] = isset($data['url_push']) ? $data['url_push'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets iframe_url
     * @return string
     */
    public function getIframeUrl()
    {
        return $this->container['iframe_url'];
    }

    /**
     * Sets iframe_url
     * @param string $iframe_url URL of the secupay payment iframe.
     * @return $this
     */
    public function setIframeUrl($iframe_url)
    {
        $this->container['iframe_url'] = $iframe_url;

        return $this;
    }

    /**
     * Gets url_success
     * @return string
     */
    public function getUrlSuccess()
    {
        return $this->container['url_success'];
    }

    /**
     * Sets url_success
     * @param string $url_success URL of the shop to receive the payer after successful payment.
     * @return $this
     */
    public function setUrlSuccess($url_success)
    {
        $this->container['url_success'] = $url_success;

        return $this;
    }

    /**
     * Gets url_failure
     * @return string
     */
    public function getUrlFailure()
    {
        return $this->container['url_failure'];
    }

    /**
     * Sets url_failure
     * @param string $url_failure URL of the shop to receive the payer after failed or abandoned payment.
     * @return $this
     */
    public function setUrlFailure($url_failure)
    {
        $this->container['url_failure'] = $url_failure;

        return $this;
    }

    /**
     * Gets url_push
     * @return string
     */
    public function getUrlPush()
    {
        return $this->container['url_push'];
    }

    /**
     * Sets url_push
     * @param string $url_push URL of the shop to receive the push notifications.
     * @return $this
     */
    public function setUrlPush($url_push)
    {
        $this->container['url_push'] = $url_push;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param int|string $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param int|string $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param int|string|null $offset Offset
     * @param mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param int|string $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return (string)json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return (string)json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

