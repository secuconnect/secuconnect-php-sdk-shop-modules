<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * GooglePayDescriptorIntermediateSigningKey
 *
 * @description A object that contains the intermediate signing key from Google. It contains the signedKey with keyValue, keyExpiration, and signatures.
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class GooglePayDescriptorIntermediateSigningKey implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'GooglePayDescriptorIntermediateSigningKey';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'signed_key' => 'string',
        'signatures' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'signed_key' => null,
        'signatures' => null
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
        'signed_key' => 'signedKey',
        'signatures' => 'signatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'signed_key' => 'setSignedKey',
        'signatures' => 'setSignatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'signed_key' => 'getSignedKey',
        'signatures' => 'getSignatures'
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
        $this->container['signed_key'] = isset($data['signed_key']) ? $data['signed_key'] : null;
        $this->container['signatures'] = isset($data['signatures']) ? $data['signatures'] : null;
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
     * Gets signed_key
     * @return string
     */
    public function getSignedKey()
    {
        return $this->container['signed_key'];
    }

    /**
     * Sets signed_key
     * @param string $signed_key A base64-encoded message that contains payment description of the key.
     * @return $this
     */
    public function setSignedKey($signed_key)
    {
        $this->container['signed_key'] = $signed_key;

        return $this;
    }

    /**
     * Gets signatures
     * @return string[]
     */
    public function getSignatures()
    {
        return $this->container['signatures'];
    }

    /**
     * Sets signatures
     * @param string[] $signatures A list of used singing keys from Google.
     * @return $this
     */
    public function setSignatures($signatures)
    {
        $this->container['signatures'] = $signatures;

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

