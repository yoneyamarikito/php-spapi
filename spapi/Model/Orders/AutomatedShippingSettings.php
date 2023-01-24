<?php
/**
 * AutomatedShippingSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\Orders;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * AutomatedShippingSettings Class Doc Comment
 *
 * @category Class
 * @description Contains information regarding the Shipping Settings Automation program, such as whether the order&#x27;s shipping settings were generated automatically, and what those settings are.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutomatedShippingSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutomatedShippingSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_automated_shipping_settings' => 'bool',
'automated_carrier' => 'string',
'automated_ship_method' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'has_automated_shipping_settings' => null,
'automated_carrier' => null,
'automated_ship_method' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'has_automated_shipping_settings' => 'HasAutomatedShippingSettings',
'automated_carrier' => 'AutomatedCarrier',
'automated_ship_method' => 'AutomatedShipMethod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_automated_shipping_settings' => 'setHasAutomatedShippingSettings',
'automated_carrier' => 'setAutomatedCarrier',
'automated_ship_method' => 'setAutomatedShipMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_automated_shipping_settings' => 'getHasAutomatedShippingSettings',
'automated_carrier' => 'getAutomatedCarrier',
'automated_ship_method' => 'getAutomatedShipMethod'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['has_automated_shipping_settings'] = isset($data['has_automated_shipping_settings']) ? $data['has_automated_shipping_settings'] : null;
        $this->container['automated_carrier'] = isset($data['automated_carrier']) ? $data['automated_carrier'] : null;
        $this->container['automated_ship_method'] = isset($data['automated_ship_method']) ? $data['automated_ship_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets has_automated_shipping_settings
     *
     * @return bool
     */
    public function getHasAutomatedShippingSettings()
    {
        return $this->container['has_automated_shipping_settings'];
    }

    /**
     * Sets has_automated_shipping_settings
     *
     * @param bool $has_automated_shipping_settings When true, this order has automated shipping settings generated by Amazon. This order could be identified as an SSA order.
     *
     * @return $this
     */
    public function setHasAutomatedShippingSettings($has_automated_shipping_settings)
    {
        $this->container['has_automated_shipping_settings'] = $has_automated_shipping_settings;

        return $this;
    }

    /**
     * Gets automated_carrier
     *
     * @return string
     */
    public function getAutomatedCarrier()
    {
        return $this->container['automated_carrier'];
    }

    /**
     * Sets automated_carrier
     *
     * @param string $automated_carrier Auto-generated carrier for SSA orders.
     *
     * @return $this
     */
    public function setAutomatedCarrier($automated_carrier)
    {
        $this->container['automated_carrier'] = $automated_carrier;

        return $this;
    }

    /**
     * Gets automated_ship_method
     *
     * @return string
     */
    public function getAutomatedShipMethod()
    {
        return $this->container['automated_ship_method'];
    }

    /**
     * Sets automated_ship_method
     *
     * @param string $automated_ship_method Auto-generated ship method for SSA orders.
     *
     * @return $this
     */
    public function setAutomatedShipMethod($automated_ship_method)
    {
        $this->container['automated_ship_method'] = $automated_ship_method;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
