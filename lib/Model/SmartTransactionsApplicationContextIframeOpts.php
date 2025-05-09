<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsApplicationContextIframeOpts
 *
 * @description Iframe options
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class SmartTransactionsApplicationContextIframeOpts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'SmartTransactionsApplicationContextIframeOpts';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'payment_hint_title' => 'string',
        'payment_hint' => '\Secuconnect\Client\Model\SmartTransactionsReceipt[]',
        'project_title' => 'string',
        'submit_button_title' => 'string',
        'cancel_button_title' => 'string',
        'language' => 'string',
        'basket_title' => 'string',
        'hide_disclaimer' => 'bool',
        'has_accepted_disclaimer' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'payment_hint_title' => null,
        'payment_hint' => null,
        'project_title' => null,
        'submit_button_title' => null,
        'cancel_button_title' => null,
        'language' => null,
        'basket_title' => null,
        'hide_disclaimer' => null,
        'has_accepted_disclaimer' => null
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
        'payment_hint_title' => 'payment_hint_title',
        'payment_hint' => 'payment_hint',
        'project_title' => 'project_title',
        'submit_button_title' => 'submit_button_title',
        'cancel_button_title' => 'cancel_button_title',
        'language' => 'language',
        'basket_title' => 'basket_title',
        'hide_disclaimer' => 'hide_disclaimer',
        'has_accepted_disclaimer' => 'has_accepted_disclaimer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'payment_hint_title' => 'setPaymentHintTitle',
        'payment_hint' => 'setPaymentHint',
        'project_title' => 'setProjectTitle',
        'submit_button_title' => 'setSubmitButtonTitle',
        'cancel_button_title' => 'setCancelButtonTitle',
        'language' => 'setLanguage',
        'basket_title' => 'setBasketTitle',
        'hide_disclaimer' => 'setHideDisclaimer',
        'has_accepted_disclaimer' => 'setHasAcceptedDisclaimer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'payment_hint_title' => 'getPaymentHintTitle',
        'payment_hint' => 'getPaymentHint',
        'project_title' => 'getProjectTitle',
        'submit_button_title' => 'getSubmitButtonTitle',
        'cancel_button_title' => 'getCancelButtonTitle',
        'language' => 'getLanguage',
        'basket_title' => 'getBasketTitle',
        'hide_disclaimer' => 'getHideDisclaimer',
        'has_accepted_disclaimer' => 'getHasAcceptedDisclaimer'
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
        $this->container['payment_hint_title'] = isset($data['payment_hint_title']) ? $data['payment_hint_title'] : null;
        $this->container['payment_hint'] = isset($data['payment_hint']) ? $data['payment_hint'] : null;
        $this->container['project_title'] = isset($data['project_title']) ? $data['project_title'] : null;
        $this->container['submit_button_title'] = isset($data['submit_button_title']) ? $data['submit_button_title'] : null;
        $this->container['cancel_button_title'] = isset($data['cancel_button_title']) ? $data['cancel_button_title'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : 'de_DE';
        $this->container['basket_title'] = isset($data['basket_title']) ? $data['basket_title'] : null;
        $this->container['hide_disclaimer'] = isset($data['hide_disclaimer']) ? $data['hide_disclaimer'] : false;
        $this->container['has_accepted_disclaimer'] = isset($data['has_accepted_disclaimer']) ? $data['has_accepted_disclaimer'] : false;
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
     * Gets payment_hint_title
     * @return string
     */
    public function getPaymentHintTitle()
    {
        return $this->container['payment_hint_title'];
    }

    /**
     * Sets payment_hint_title
     * @param string $payment_hint_title Payment hint title
     * @return $this
     */
    public function setPaymentHintTitle($payment_hint_title)
    {
        $this->container['payment_hint_title'] = $payment_hint_title;

        return $this;
    }

    /**
     * Gets payment_hint
     * @return \Secuconnect\Client\Model\SmartTransactionsReceipt[]
     */
    public function getPaymentHint()
    {
        return $this->container['payment_hint'];
    }

    /**
     * Sets payment_hint
     * @param \Secuconnect\Client\Model\SmartTransactionsReceipt[] $payment_hint Payment hint
     * @return $this
     */
    public function setPaymentHint($payment_hint)
    {
        $this->container['payment_hint'] = $payment_hint;

        return $this;
    }

    /**
     * Gets project_title
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->container['project_title'];
    }

    /**
     * Sets project_title
     * @param string $project_title Project name
     * @return $this
     */
    public function setProjectTitle($project_title)
    {
        $this->container['project_title'] = $project_title;

        return $this;
    }

    /**
     * Gets submit_button_title
     * @return string
     */
    public function getSubmitButtonTitle()
    {
        return $this->container['submit_button_title'];
    }

    /**
     * Sets submit_button_title
     * @param string $submit_button_title Submit button text
     * @return $this
     */
    public function setSubmitButtonTitle($submit_button_title)
    {
        $this->container['submit_button_title'] = $submit_button_title;

        return $this;
    }

    /**
     * Gets cancel_button_title
     * @return string
     */
    public function getCancelButtonTitle()
    {
        return $this->container['cancel_button_title'];
    }

    /**
     * Sets cancel_button_title
     * @param string $cancel_button_title Cancel button text
     * @return $this
     */
    public function setCancelButtonTitle($cancel_button_title)
    {
        $this->container['cancel_button_title'] = $cancel_button_title;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language Language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets basket_title
     * @return string
     */
    public function getBasketTitle()
    {
        return $this->container['basket_title'];
    }

    /**
     * Sets basket_title
     * @param string $basket_title Basket title
     * @return $this
     */
    public function setBasketTitle($basket_title)
    {
        $this->container['basket_title'] = $basket_title;

        return $this;
    }

    /**
     * Gets hide_disclaimer
     * @return bool
     */
    public function getHideDisclaimer()
    {
        return $this->container['hide_disclaimer'];
    }

    /**
     * Sets hide_disclaimer
     * @param bool $hide_disclaimer Whether to hide the disclaimer  _Note: Needs `has_accepted_disclaimer` to be `true` to be effective._
     * @return $this
     */
    public function setHideDisclaimer($hide_disclaimer)
    {
        $this->container['hide_disclaimer'] = $hide_disclaimer;

        return $this;
    }

    /**
     * Gets has_accepted_disclaimer
     * @return bool
     */
    public function getHasAcceptedDisclaimer()
    {
        return $this->container['has_accepted_disclaimer'];
    }

    /**
     * Sets has_accepted_disclaimer
     * @param bool $has_accepted_disclaimer Whether the buyer has already accepted the disclaimer
     * @return $this
     */
    public function setHasAcceptedDisclaimer($has_accepted_disclaimer)
    {
        $this->container['has_accepted_disclaimer'] = $has_accepted_disclaimer;

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

