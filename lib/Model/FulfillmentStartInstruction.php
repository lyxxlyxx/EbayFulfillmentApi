<?php
/**
 * FulfillmentStartInstruction
 *
 * PHP version 5
 *
 * @category Class
 * @package  EbayFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.13.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EbayFulfillmentApi\Model;

use \ArrayAccess;
use \EbayFulfillmentApi\ObjectSerializer;

/**
 * FulfillmentStartInstruction Class Doc Comment
 *
 * @category Class
 * @description This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer&#39;s and seller&#39;s eBay account preferences, the listing parameters, and the buyer&#39;s checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.
 * @package  EbayFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentStartInstruction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentStartInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ebay_supported_fulfillment' => 'bool',
        'final_destination_address' => '\EbayFulfillmentApi\Model\Address',
        'fulfillment_instructions_type' => 'string',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'pickup_step' => '\EbayFulfillmentApi\Model\PickupStep',
        'shipping_step' => '\EbayFulfillmentApi\Model\ShippingStep'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ebay_supported_fulfillment' => null,
        'final_destination_address' => null,
        'fulfillment_instructions_type' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'pickup_step' => null,
        'shipping_step' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ebay_supported_fulfillment' => 'ebaySupportedFulfillment',
        'final_destination_address' => 'finalDestinationAddress',
        'fulfillment_instructions_type' => 'fulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'pickup_step' => 'pickupStep',
        'shipping_step' => 'shippingStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ebay_supported_fulfillment' => 'setEbaySupportedFulfillment',
        'final_destination_address' => 'setFinalDestinationAddress',
        'fulfillment_instructions_type' => 'setFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'pickup_step' => 'setPickupStep',
        'shipping_step' => 'setShippingStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ebay_supported_fulfillment' => 'getEbaySupportedFulfillment',
        'final_destination_address' => 'getFinalDestinationAddress',
        'fulfillment_instructions_type' => 'getFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'pickup_step' => 'getPickupStep',
        'shipping_step' => 'getShippingStep'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['ebay_supported_fulfillment'] = isset($data['ebay_supported_fulfillment']) ? $data['ebay_supported_fulfillment'] : null;
        $this->container['final_destination_address'] = isset($data['final_destination_address']) ? $data['final_destination_address'] : null;
        $this->container['fulfillment_instructions_type'] = isset($data['fulfillment_instructions_type']) ? $data['fulfillment_instructions_type'] : null;
        $this->container['max_estimated_delivery_date'] = isset($data['max_estimated_delivery_date']) ? $data['max_estimated_delivery_date'] : null;
        $this->container['min_estimated_delivery_date'] = isset($data['min_estimated_delivery_date']) ? $data['min_estimated_delivery_date'] : null;
        $this->container['pickup_step'] = isset($data['pickup_step']) ? $data['pickup_step'] : null;
        $this->container['shipping_step'] = isset($data['shipping_step']) ? $data['shipping_step'] : null;
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
     * Gets ebay_supported_fulfillment
     *
     * @return bool|null
     */
    public function getEbaySupportedFulfillment()
    {
        return $this->container['ebay_supported_fulfillment'];
    }

    /**
     * Sets ebay_supported_fulfillment
     *
     * @param bool|null $ebay_supported_fulfillment This field is only returned if its value is true and indicates that the fulfillment will be shipped via eBay's Global Shipping Program. For more information, see the Global Shipping Program help topic.
     *
     * @return $this
     */
    public function setEbaySupportedFulfillment($ebay_supported_fulfillment)
    {
        $this->container['ebay_supported_fulfillment'] = $ebay_supported_fulfillment;

        return $this;
    }

    /**
     * Gets final_destination_address
     *
     * @return \EbayFulfillmentApi\Model\Address|null
     */
    public function getFinalDestinationAddress()
    {
        return $this->container['final_destination_address'];
    }

    /**
     * Sets final_destination_address
     *
     * @param \EbayFulfillmentApi\Model\Address|null $final_destination_address final_destination_address
     *
     * @return $this
     */
    public function setFinalDestinationAddress($final_destination_address)
    {
        $this->container['final_destination_address'] = $final_destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_instructions_type
     *
     * @return string|null
     */
    public function getFulfillmentInstructionsType()
    {
        return $this->container['fulfillment_instructions_type'];
    }

    /**
     * Sets fulfillment_instructions_type
     *
     * @param string|null $fulfillment_instructions_type The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of SHIP_TO if the ebaySupportedFulfillment field is returned with a value of true. See the FulfillmentInstructionsType definition for more information about different fulfillment types. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/FulfillmentInstructionsType.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFulfillmentInstructionsType($fulfillment_instructions_type)
    {
        $this->container['fulfillment_instructions_type'] = $fulfillment_instructions_type;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the fulfillmentInstructionsType field is DIGITAL or PREPARE_FOR_PICKUP. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if the value of the fulfillmentInstructionsType field is DIGITAL or PREPARE_FOR_PICKUP. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets pickup_step
     *
     * @return \EbayFulfillmentApi\Model\PickupStep|null
     */
    public function getPickupStep()
    {
        return $this->container['pickup_step'];
    }

    /**
     * Sets pickup_step
     *
     * @param \EbayFulfillmentApi\Model\PickupStep|null $pickup_step pickup_step
     *
     * @return $this
     */
    public function setPickupStep($pickup_step)
    {
        $this->container['pickup_step'] = $pickup_step;

        return $this;
    }

    /**
     * Gets shipping_step
     *
     * @return \EbayFulfillmentApi\Model\ShippingStep|null
     */
    public function getShippingStep()
    {
        return $this->container['shipping_step'];
    }

    /**
     * Sets shipping_step
     *
     * @param \EbayFulfillmentApi\Model\ShippingStep|null $shipping_step shipping_step
     *
     * @return $this
     */
    public function setShippingStep($shipping_step)
    {
        $this->container['shipping_step'] = $shipping_step;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


