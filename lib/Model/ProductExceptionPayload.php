<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * ProductExceptionPayload
 *
 * @description Detailed error information
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class ProductExceptionPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'ProductExceptionPayload';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status' => 'string',
        'error' => 'string',
        'error_details' => 'string',
        'error_user' => 'string',
        'code' => 'string',
        'support_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'status' => null,
        'error' => null,
        'error_details' => null,
        'error_user' => null,
        'code' => null,
        'support_id' => null
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
        'status' => 'status',
        'error' => 'error',
        'error_details' => 'error_details',
        'error_user' => 'error_user',
        'code' => 'code',
        'support_id' => 'supportId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'error' => 'setError',
        'error_details' => 'setErrorDetails',
        'error_user' => 'setErrorUser',
        'code' => 'setCode',
        'support_id' => 'setSupportId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'error' => 'getError',
        'error_details' => 'getErrorDetails',
        'error_user' => 'getErrorUser',
        'code' => 'getCode',
        'support_id' => 'getSupportId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['error_user'] = isset($data['error_user']) ? $data['error_user'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['support_id'] = isset($data['support_id']) ? $data['support_id'] : null;
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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Request status (always `\"error\"`)
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string $error Error type identifier
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets error_details
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     * @param string $error_details Error details
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets error_user
     * @return string
     */
    public function getErrorUser()
    {
        return $this->container['error_user'];
    }

    /**
     * Sets error_user
     * @param string $error_user Error details in German
     * @return $this
     */
    public function setErrorUser($error_user)
    {
        $this->container['error_user'] = $error_user;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code HTTP code corresponding to error
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets support_id
     * @return string
     */
    public function getSupportId()
    {
        return $this->container['support_id'];
    }

    /**
     * Sets support_id
     * @param string $support_id Support ID to be communicated to our help desk for problem analysis
     * @return $this
     */
    public function setSupportId($support_id)
    {
        $this->container['support_id'] = $support_id;

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

