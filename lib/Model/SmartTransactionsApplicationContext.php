<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * SmartTransactionsApplicationContext
 *
 * @description Controls the integration between Smart Checkout and the shop.
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class SmartTransactionsApplicationContext implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'SmartTransactionsApplicationContext';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'locks' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks',
        'return_urls' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls',
        'iframe_opts' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts',
        'shop_details' => '\Secuconnect\Client\Model\SmartTransactionsApplicationContextShopDetails',
        'checkout_template' => 'string',
        'language' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'locks' => null,
        'return_urls' => null,
        'iframe_opts' => null,
        'shop_details' => null,
        'checkout_template' => null,
        'language' => null
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
        'locks' => 'locks',
        'return_urls' => 'return_urls',
        'iframe_opts' => 'iframe_opts',
        'shop_details' => 'shop_details',
        'checkout_template' => 'checkout_template',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'locks' => 'setLocks',
        'return_urls' => 'setReturnUrls',
        'iframe_opts' => 'setIframeOpts',
        'shop_details' => 'setShopDetails',
        'checkout_template' => 'setCheckoutTemplate',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'locks' => 'getLocks',
        'return_urls' => 'getReturnUrls',
        'iframe_opts' => 'getIframeOpts',
        'shop_details' => 'getShopDetails',
        'checkout_template' => 'getCheckoutTemplate',
        'language' => 'getLanguage'
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
        $this->container['locks'] = isset($data['locks']) ? $data['locks'] : null;
        $this->container['return_urls'] = isset($data['return_urls']) ? $data['return_urls'] : null;
        $this->container['iframe_opts'] = isset($data['iframe_opts']) ? $data['iframe_opts'] : null;
        $this->container['shop_details'] = isset($data['shop_details']) ? $data['shop_details'] : null;
        $this->container['checkout_template'] = isset($data['checkout_template']) ? $data['checkout_template'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
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
     * Gets locks
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks
     */
    public function getLocks()
    {
        return $this->container['locks'];
    }

    /**
     * Sets locks
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextLocks $locks locks
     * @return $this
     */
    public function setLocks($locks)
    {
        $this->container['locks'] = $locks;

        return $this;
    }

    /**
     * Gets return_urls
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->container['return_urls'];
    }

    /**
     * Sets return_urls
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextReturnUrls $return_urls return_urls
     * @return $this
     */
    public function setReturnUrls($return_urls)
    {
        $this->container['return_urls'] = $return_urls;

        return $this;
    }

    /**
     * Gets iframe_opts
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts
     */
    public function getIframeOpts()
    {
        return $this->container['iframe_opts'];
    }

    /**
     * Sets iframe_opts
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextIframeOpts $iframe_opts iframe_opts
     * @return $this
     */
    public function setIframeOpts($iframe_opts)
    {
        $this->container['iframe_opts'] = $iframe_opts;

        return $this;
    }

    /**
     * Gets shop_details
     * @return \Secuconnect\Client\Model\SmartTransactionsApplicationContextShopDetails
     */
    public function getShopDetails()
    {
        return $this->container['shop_details'];
    }

    /**
     * Sets shop_details
     * @param \Secuconnect\Client\Model\SmartTransactionsApplicationContextShopDetails $shop_details shop_details
     * @return $this
     */
    public function setShopDetails($shop_details)
    {
        $this->container['shop_details'] = $shop_details;

        return $this;
    }

    /**
     * Gets checkout_template
     * @return string
     */
    public function getCheckoutTemplate()
    {
        return $this->container['checkout_template'];
    }

    /**
     * Sets checkout_template
     * @param string $checkout_template Smart Checkout Template ID  Default templates:  - `\"COT_WD0DE66HN2XWJHW8JM88003YG0NEA2\"` for checkout - `\"COT_QV85D3F542XWFFJYCSWG00W400YWAT\"` for subscriptions
     * @return $this
     */
    public function setCheckoutTemplate($checkout_template)
    {
        $this->container['checkout_template'] = $checkout_template;

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
     * @param string $language Language Smart Checkout is starting with:  - `\"de\"` - `\"en\"`
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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

