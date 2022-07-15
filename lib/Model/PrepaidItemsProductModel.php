<?php

namespace Secuconnect\Client\Model;

/**
 * PrepaidItemsProductModel
 *
 * @category Class
 * @description PrepaidItemsProductModel
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaidItemsProductModel extends PrepaidItemsBaseProductModel
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PrepaidItemsProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commission' => 'int',
        'vtc_id' => 'string',
        'itemgroup' => '\Secuconnect\Client\Model\ItemGroup',
        'stock_limit_max' => 'int',
        'stock_limit_min' => 'int',
        'taxable' => 'bool',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commission' => null,
        'vtc_id' => null,
        'itemgroup' => null,
        'stock_limit_max' => null,
        'stock_limit_min' => null,
        'taxable' => null,
        'enabled' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'commission' => 'commission',
        'vtc_id' => 'vtc_id',
        'itemgroup' => 'itemgroup',
        'stock_limit_max' => 'stock_limit_max',
        'stock_limit_min' => 'stock_limit_min',
        'taxable' => 'taxable',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'commission' => 'setCommission',
        'vtc_id' => 'setVtcId',
        'itemgroup' => 'setItemgroup',
        'stock_limit_max' => 'setStockLimitMax',
        'stock_limit_min' => 'setStockLimitMin',
        'taxable' => 'setTaxable',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'commission' => 'getCommission',
        'vtc_id' => 'getVtcId',
        'itemgroup' => 'getItemgroup',
        'stock_limit_max' => 'getStockLimitMax',
        'stock_limit_min' => 'getStockLimitMin',
        'taxable' => 'getTaxable',
        'enabled' => 'getEnabled'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['vtc_id'] = isset($data['vtc_id']) ? $data['vtc_id'] : null;
        $this->container['itemgroup'] = isset($data['itemgroup']) ? $data['itemgroup'] : null;
        $this->container['stock_limit_max'] = isset($data['stock_limit_max']) ? $data['stock_limit_max'] : null;
        $this->container['stock_limit_min'] = isset($data['stock_limit_min']) ? $data['stock_limit_min'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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
     * Gets commission
     * @return int
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     * @param int $commission Commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets vtc_id
     * @return string
     */
    public function getVtcId()
    {
        return $this->container['vtc_id'];
    }

    /**
     * Sets vtc_id
     * @param string $vtc_id Vtc id
     * @return $this
     */
    public function setVtcId($vtc_id)
    {
        $this->container['vtc_id'] = $vtc_id;

        return $this;
    }

    /**
     * Gets itemgroup
     * @return \Secuconnect\Client\Model\ItemGroup
     */
    public function getItemgroup()
    {
        return $this->container['itemgroup'];
    }

    /**
     * Sets itemgroup
     * @param \Secuconnect\Client\Model\ItemGroup $itemgroup itemgroup
     * @return $this
     */
    public function setItemgroup($itemgroup)
    {
        $this->container['itemgroup'] = $itemgroup;

        return $this;
    }

    /**
     * Gets stock_limit_max
     * @return int
     */
    public function getStockLimitMax()
    {
        return $this->container['stock_limit_max'];
    }

    /**
     * Sets stock_limit_max
     * @param int $stock_limit_max Stock limit max
     * @return $this
     */
    public function setStockLimitMax($stock_limit_max)
    {
        $this->container['stock_limit_max'] = $stock_limit_max;

        return $this;
    }

    /**
     * Gets stock_limit_min
     * @return int
     */
    public function getStockLimitMin()
    {
        return $this->container['stock_limit_min'];
    }

    /**
     * Sets stock_limit_min
     * @param int $stock_limit_min Stock limit min
     * @return $this
     */
    public function setStockLimitMin($stock_limit_min)
    {
        $this->container['stock_limit_min'] = $stock_limit_min;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable Taxable
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     * @return void
     */
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
     * @param integer $offset Offset
     * @return void
     */
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
            return json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Secuconnect\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

