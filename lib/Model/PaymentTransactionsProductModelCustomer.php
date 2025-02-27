<?php

namespace Secuconnect\Client\Model;

use \ArrayAccess;

/**
 * PaymentTransactionsProductModelCustomer
 *
 * @package  Secuconnect\Client
 * @implements ArrayAccess<string, mixed>
 */
class PaymentTransactionsProductModelCustomer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'PaymentTransactionsProductModelCustomer';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'companyname' => 'string',
        'salutation' => 'string',
        'title' => 'string',
        'forename' => 'string',
        'surname' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @var array<string, mixed>
     */
    protected static $swaggerFormats = [
        'companyname' => null,
        'salutation' => null,
        'title' => null,
        'forename' => null,
        'surname' => null
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
        'companyname' => 'companyname',
        'salutation' => 'salutation',
        'title' => 'title',
        'forename' => 'forename',
        'surname' => 'surname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'companyname' => 'setCompanyname',
        'salutation' => 'setSalutation',
        'title' => 'setTitle',
        'forename' => 'setForename',
        'surname' => 'setSurname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'companyname' => 'getCompanyname',
        'salutation' => 'getSalutation',
        'title' => 'getTitle',
        'forename' => 'getForename',
        'surname' => 'getSurname'
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
        $this->container['companyname'] = isset($data['companyname']) ? $data['companyname'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['forename'] = isset($data['forename']) ? $data['forename'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
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
     * Gets companyname
     * @return string
     */
    public function getCompanyname()
    {
        return $this->container['companyname'];
    }

    /**
     * Sets companyname
     * @param string $companyname Customer company name
     * @return $this
     */
    public function setCompanyname($companyname)
    {
        $this->container['companyname'] = $companyname;

        return $this;
    }

    /**
     * Gets salutation
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string $salutation Customer salutation
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Customer title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets forename
     * @return string
     */
    public function getForename()
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     * @param string $forename Customer forename
     * @return $this
     */
    public function setForename($forename)
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     * @param string $surname Customer surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

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

