<?php
/**
 * PaymentDisputeSummary
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
 * The version of the OpenAPI document: v1.15.0
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
 * PaymentDisputeSummary Class Doc Comment
 *
 * @category Class
 * @description This type is used by each payment dispute that is returned with the getPaymentDisputeSummaries method.
 * @package  EbayFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDisputeSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDisputeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\EbayFulfillmentApi\Model\SimpleAmount',
        'buyer_username' => 'string',
        'closed_date' => 'string',
        'open_date' => 'string',
        'order_id' => 'string',
        'payment_dispute_id' => 'string',
        'payment_dispute_status' => 'string',
        'reason' => 'string',
        'respond_by_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'buyer_username' => null,
        'closed_date' => null,
        'open_date' => null,
        'order_id' => null,
        'payment_dispute_id' => null,
        'payment_dispute_status' => null,
        'reason' => null,
        'respond_by_date' => null
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
        'amount' => 'amount',
        'buyer_username' => 'buyerUsername',
        'closed_date' => 'closedDate',
        'open_date' => 'openDate',
        'order_id' => 'orderId',
        'payment_dispute_id' => 'paymentDisputeId',
        'payment_dispute_status' => 'paymentDisputeStatus',
        'reason' => 'reason',
        'respond_by_date' => 'respondByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'buyer_username' => 'setBuyerUsername',
        'closed_date' => 'setClosedDate',
        'open_date' => 'setOpenDate',
        'order_id' => 'setOrderId',
        'payment_dispute_id' => 'setPaymentDisputeId',
        'payment_dispute_status' => 'setPaymentDisputeStatus',
        'reason' => 'setReason',
        'respond_by_date' => 'setRespondByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'buyer_username' => 'getBuyerUsername',
        'closed_date' => 'getClosedDate',
        'open_date' => 'getOpenDate',
        'order_id' => 'getOrderId',
        'payment_dispute_id' => 'getPaymentDisputeId',
        'payment_dispute_status' => 'getPaymentDisputeStatus',
        'reason' => 'getReason',
        'respond_by_date' => 'getRespondByDate'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['buyer_username'] = isset($data['buyer_username']) ? $data['buyer_username'] : null;
        $this->container['closed_date'] = isset($data['closed_date']) ? $data['closed_date'] : null;
        $this->container['open_date'] = isset($data['open_date']) ? $data['open_date'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['payment_dispute_id'] = isset($data['payment_dispute_id']) ? $data['payment_dispute_id'] : null;
        $this->container['payment_dispute_status'] = isset($data['payment_dispute_status']) ? $data['payment_dispute_status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['respond_by_date'] = isset($data['respond_by_date']) ? $data['respond_by_date'] : null;
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
     * Gets amount
     *
     * @return \EbayFulfillmentApi\Model\SimpleAmount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \EbayFulfillmentApi\Model\SimpleAmount|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets buyer_username
     *
     * @return string|null
     */
    public function getBuyerUsername()
    {
        return $this->container['buyer_username'];
    }

    /**
     * Sets buyer_username
     *
     * @param string|null $buyer_username This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.
     *
     * @return $this
     */
    public function setBuyerUsername($buyer_username)
    {
        $this->container['buyer_username'] = $buyer_username;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return string|null
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param string|null $closed_date The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the CLOSED state. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string|null $open_date The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setOpenDate($open_date)
    {
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id This is the unique identifier of the order involved in the payment dispute. Note: eBay rolled out a new Order ID format in June 2019. The legacy APIs still support the old and new order ID format to identify orders, but only the new order ID format is supported in REST-based APIs.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets payment_dispute_id
     *
     * @return string|null
     */
    public function getPaymentDisputeId()
    {
        return $this->container['payment_dispute_id'];
    }

    /**
     * Sets payment_dispute_id
     *
     * @param string|null $payment_dispute_id This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay Managed Payments system. This identifier is passed in at the end of the getPaymentDispute call URI to retrieve a specific payment dispute. The getPaymentDispute method returns more details about a payment dispute than the getPaymentDisputeSummaries method.
     *
     * @return $this
     */
    public function setPaymentDisputeId($payment_dispute_id)
    {
        $this->container['payment_dispute_id'] = $payment_dispute_id;

        return $this;
    }

    /**
     * Gets payment_dispute_status
     *
     * @return string|null
     */
    public function getPaymentDisputeStatus()
    {
        return $this->container['payment_dispute_status'];
    }

    /**
     * Sets payment_dispute_status
     *
     * @param string|null $payment_dispute_status The enumeration value in this field gives the current status of the payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/DisputeStateEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPaymentDisputeStatus($payment_dispute_status)
    {
        $this->container['payment_dispute_status'] = $payment_dispute_status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See DisputeReasonEnum type for a description of the supported reasons that buyers can give for initiating a payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/DisputeReasonEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets respond_by_date
     *
     * @return string|null
     */
    public function getRespondByDate()
    {
        return $this->container['respond_by_date'];
    }

    /**
     * Sets respond_by_date
     *
     * @param string|null $respond_by_date The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the ACTION_NEEDED state. For payment disputes that require action by the seller, that same seller must call getPaymentDispute to see the next action(s) that they can take against the payment dispute. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setRespondByDate($respond_by_date)
    {
        $this->container['respond_by_date'] = $respond_by_date;

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


