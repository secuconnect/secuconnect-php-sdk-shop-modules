<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentTransactionCancelDTO
 *
 * @description PaymentTransactionCancelDTO
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class PaymentTransactionCancelDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'PaymentTransactionCancelDTO';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'reason' => 'string',
        'amount' => 'int',
        'reduce_amount_by' => 'int',
        'reduce_stakeholder_payment' => 'bool',
        'container_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'reason' => '[0-9a-zA-Z .,+\-:?()\/\']+',
        'amount' => null,
        'reduce_amount_by' => null,
        'reduce_stakeholder_payment' => null,
        'container_id' => null
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
        'reason' => 'reason',
        'amount' => 'amount',
        'reduce_amount_by' => 'reduce_amount_by',
        'reduce_stakeholder_payment' => 'reduce_stakeholder_payment',
        'container_id' => 'container_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'amount' => 'setAmount',
        'reduce_amount_by' => 'setReduceAmountBy',
        'reduce_stakeholder_payment' => 'setReduceStakeholderPayment',
        'container_id' => 'setContainerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'amount' => 'getAmount',
        'reduce_amount_by' => 'getReduceAmountBy',
        'reduce_stakeholder_payment' => 'getReduceStakeholderPayment',
        'container_id' => 'getContainerId'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['reduce_amount_by'] = isset($data['reduce_amount_by']) ? $data['reduce_amount_by'] : null;
        $this->container['reduce_stakeholder_payment'] = isset($data['reduce_stakeholder_payment']) ? $data['reduce_stakeholder_payment'] : false;
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
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
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason of this cancel or refund
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Amount in smallest currency unit (e. g. Euro Cent)
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reduce_amount_by
     * @return int
     */
    public function getReduceAmountBy()
    {
        return $this->container['reduce_amount_by'];
    }

    /**
     * Sets reduce_amount_by
     * @param int $reduce_amount_by reduce_amount_by
     * @return $this
     */
    public function setReduceAmountBy($reduce_amount_by)
    {
        $this->container['reduce_amount_by'] = $reduce_amount_by;

        return $this;
    }

    /**
     * Gets reduce_stakeholder_payment
     * @return bool
     */
    public function getReduceStakeholderPayment()
    {
        return $this->container['reduce_stakeholder_payment'];
    }

    /**
     * Sets reduce_stakeholder_payment
     * @param bool $reduce_stakeholder_payment Only for the mixed basket. Reduces stakeholder shares proportionately.
     * @return $this
     */
    public function setReduceStakeholderPayment($reduce_stakeholder_payment)
    {
        $this->container['reduce_stakeholder_payment'] = $reduce_stakeholder_payment;

        return $this;
    }

    /**
     * Gets container_id
     * @return string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     * @param string $container_id Payment Container ID
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

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

