<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentContext
 *
 * @description Controls some payment details
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class PaymentContext implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'PaymentContext';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'auto_capture' => 'bool',
        'payment_methods' => 'string[]',
        'merchant_initiated' => 'bool',
        'creditcard_schemes' => 'string[]',
        'accrual' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'auto_capture' => null,
        'payment_methods' => null,
        'merchant_initiated' => null,
        'creditcard_schemes' => null,
        'accrual' => null
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
        'auto_capture' => 'auto_capture',
        'payment_methods' => 'payment_methods',
        'merchant_initiated' => 'merchant_initiated',
        'creditcard_schemes' => 'creditcard_schemes',
        'accrual' => 'accrual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'auto_capture' => 'setAutoCapture',
        'payment_methods' => 'setPaymentMethods',
        'merchant_initiated' => 'setMerchantInitiated',
        'creditcard_schemes' => 'setCreditcardSchemes',
        'accrual' => 'setAccrual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'auto_capture' => 'getAutoCapture',
        'payment_methods' => 'getPaymentMethods',
        'merchant_initiated' => 'getMerchantInitiated',
        'creditcard_schemes' => 'getCreditcardSchemes',
        'accrual' => 'getAccrual'
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
        $this->container['auto_capture'] = isset($data['auto_capture']) ? $data['auto_capture'] : false;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['merchant_initiated'] = isset($data['merchant_initiated']) ? $data['merchant_initiated'] : false;
        $this->container['creditcard_schemes'] = isset($data['creditcard_schemes']) ? $data['creditcard_schemes'] : null;
        $this->container['accrual'] = isset($data['accrual']) ? $data['accrual'] : false;
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
     * Gets auto_capture
     * @return bool
     */
    public function getAutoCapture()
    {
        return $this->container['auto_capture'];
    }

    /**
     * Sets auto_capture
     * @param bool $auto_capture Whether the Smart Transation is executed automatically after successful authorisation; this can save the extra call to `/start`
     * @return $this
     */
    public function setAutoCapture($auto_capture)
    {
        $this->container['auto_capture'] = $auto_capture;

        return $this;
    }

    /**
     * Gets payment_methods
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     * @param string[] $payment_methods Wanted payment methods:  - `\"creditcard\"` - `\"debit\"` - `\"easycredit\"` - `\"giropay\"` - `\"invoice\"` - `\"paypal\"` - `\"prepaid\"` - `\"sofort\"`
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets merchant_initiated
     * @return bool
     */
    public function getMerchantInitiated()
    {
        return $this->container['merchant_initiated'];
    }

    /**
     * Sets merchant_initiated
     * @param bool $merchant_initiated Whether this is a merchant initiated transaction (MIT), created without customer interaction
     * @return $this
     */
    public function setMerchantInitiated($merchant_initiated)
    {
        $this->container['merchant_initiated'] = $merchant_initiated;

        return $this;
    }

    /**
     * Gets creditcard_schemes
     * @return string[]
     */
    public function getCreditcardSchemes()
    {
        return $this->container['creditcard_schemes'];
    }

    /**
     * Sets creditcard_schemes
     * @param string[] $creditcard_schemes Supported credit card networks of the given contract
     * @return $this
     */
    public function setCreditcardSchemes($creditcard_schemes)
    {
        $this->container['creditcard_schemes'] = $creditcard_schemes;

        return $this;
    }

    /**
     * Gets accrual
     * @return bool
     */
    public function getAccrual()
    {
        return $this->container['accrual'];
    }

    /**
     * Sets accrual
     * @param bool $accrual Whether to set the accrual flag, when the Payment Transaction is created. The payment will not be executed until the accrual flag of the Payment Transaction is removed.
     * @return $this
     */
    public function setAccrual($accrual)
    {
        $this->container['accrual'] = $accrual;

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

