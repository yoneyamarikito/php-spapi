<?php
/**
 * RegulatedOrderVerificationStatus
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
 * RegulatedOrderVerificationStatus Class Doc Comment
 *
 * @category Class
 * @description The verification status of the order along with associated approval or rejection metadata.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegulatedOrderVerificationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegulatedOrderVerificationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\Popsicle\Amazon\Model\Orders\VerificationStatus',
'requires_merchant_action' => 'bool',
'valid_rejection_reasons' => '\Popsicle\Amazon\Model\Orders\RejectionReason[]',
'rejection_reason' => '\Popsicle\Amazon\Model\Orders\RejectionReason',
'review_date' => 'string',
'external_reviewer_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
'requires_merchant_action' => null,
'valid_rejection_reasons' => null,
'rejection_reason' => null,
'review_date' => null,
'external_reviewer_id' => null    ];

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
        'status' => 'Status',
'requires_merchant_action' => 'RequiresMerchantAction',
'valid_rejection_reasons' => 'ValidRejectionReasons',
'rejection_reason' => 'RejectionReason',
'review_date' => 'ReviewDate',
'external_reviewer_id' => 'ExternalReviewerId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'requires_merchant_action' => 'setRequiresMerchantAction',
'valid_rejection_reasons' => 'setValidRejectionReasons',
'rejection_reason' => 'setRejectionReason',
'review_date' => 'setReviewDate',
'external_reviewer_id' => 'setExternalReviewerId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'requires_merchant_action' => 'getRequiresMerchantAction',
'valid_rejection_reasons' => 'getValidRejectionReasons',
'rejection_reason' => 'getRejectionReason',
'review_date' => 'getReviewDate',
'external_reviewer_id' => 'getExternalReviewerId'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['requires_merchant_action'] = isset($data['requires_merchant_action']) ? $data['requires_merchant_action'] : null;
        $this->container['valid_rejection_reasons'] = isset($data['valid_rejection_reasons']) ? $data['valid_rejection_reasons'] : null;
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
        $this->container['review_date'] = isset($data['review_date']) ? $data['review_date'] : null;
        $this->container['external_reviewer_id'] = isset($data['external_reviewer_id']) ? $data['external_reviewer_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requires_merchant_action'] === null) {
            $invalidProperties[] = "'requires_merchant_action' can't be null";
        }
        if ($this->container['valid_rejection_reasons'] === null) {
            $invalidProperties[] = "'valid_rejection_reasons' can't be null";
        }
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
     * Gets status
     *
     * @return \Popsicle\Amazon\Model\Orders\VerificationStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Popsicle\Amazon\Model\Orders\VerificationStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requires_merchant_action
     *
     * @return bool
     */
    public function getRequiresMerchantAction()
    {
        return $this->container['requires_merchant_action'];
    }

    /**
     * Sets requires_merchant_action
     *
     * @param bool $requires_merchant_action When true, the regulated information provided in the order requires a review by the merchant.
     *
     * @return $this
     */
    public function setRequiresMerchantAction($requires_merchant_action)
    {
        $this->container['requires_merchant_action'] = $requires_merchant_action;

        return $this;
    }

    /**
     * Gets valid_rejection_reasons
     *
     * @return \Popsicle\Amazon\Model\Orders\RejectionReason[]
     */
    public function getValidRejectionReasons()
    {
        return $this->container['valid_rejection_reasons'];
    }

    /**
     * Sets valid_rejection_reasons
     *
     * @param \Popsicle\Amazon\Model\Orders\RejectionReason[] $valid_rejection_reasons A list of valid rejection reasons that may be used to reject the order's regulated information.
     *
     * @return $this
     */
    public function setValidRejectionReasons($valid_rejection_reasons)
    {
        $this->container['valid_rejection_reasons'] = $valid_rejection_reasons;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return \Popsicle\Amazon\Model\Orders\RejectionReason
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param \Popsicle\Amazon\Model\Orders\RejectionReason $rejection_reason rejection_reason
     *
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets review_date
     *
     * @return string
     */
    public function getReviewDate()
    {
        return $this->container['review_date'];
    }

    /**
     * Sets review_date
     *
     * @param string $review_date The date the order was reviewed. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setReviewDate($review_date)
    {
        $this->container['review_date'] = $review_date;

        return $this;
    }

    /**
     * Gets external_reviewer_id
     *
     * @return string
     */
    public function getExternalReviewerId()
    {
        return $this->container['external_reviewer_id'];
    }

    /**
     * Sets external_reviewer_id
     *
     * @param string $external_reviewer_id The identifier for the order's regulated information reviewer.
     *
     * @return $this
     */
    public function setExternalReviewerId($external_reviewer_id)
    {
        $this->container['external_reviewer_id'] = $external_reviewer_id;

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
