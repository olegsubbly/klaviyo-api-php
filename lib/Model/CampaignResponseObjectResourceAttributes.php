<?php
/**
 * CampaignResponseObjectResourceAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2023-02-22
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * CampaignResponseObjectResourceAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignResponseObjectResourceAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignResponseObjectResource_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'archived' => 'bool',
        'channel' => 'string',
        'audiences' => '\KlaviyoAPI\Model\AudiencesSubObject',
        'send_options' => '\KlaviyoAPI\Model\SendOptionsSubObject',
        'message' => 'string',
        'tracking_options' => '\KlaviyoAPI\Model\TrackingOptionsSubObject',
        'send_strategy' => '\KlaviyoAPI\Model\SendStrategySubObject',
        'created_at' => '\DateTime',
        'scheduled_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'send_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'archived' => null,
        'channel' => null,
        'audiences' => null,
        'send_options' => null,
        'message' => null,
        'tracking_options' => null,
        'send_strategy' => null,
        'created_at' => 'date-time',
        'scheduled_at' => 'date-time',
        'updated_at' => 'date-time',
        'send_time' => 'date-time'
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
        'name' => 'name',
        'status' => 'status',
        'archived' => 'archived',
        'channel' => 'channel',
        'audiences' => 'audiences',
        'send_options' => 'send_options',
        'message' => 'message',
        'tracking_options' => 'tracking_options',
        'send_strategy' => 'send_strategy',
        'created_at' => 'created_at',
        'scheduled_at' => 'scheduled_at',
        'updated_at' => 'updated_at',
        'send_time' => 'send_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'archived' => 'setArchived',
        'channel' => 'setChannel',
        'audiences' => 'setAudiences',
        'send_options' => 'setSendOptions',
        'message' => 'setMessage',
        'tracking_options' => 'setTrackingOptions',
        'send_strategy' => 'setSendStrategy',
        'created_at' => 'setCreatedAt',
        'scheduled_at' => 'setScheduledAt',
        'updated_at' => 'setUpdatedAt',
        'send_time' => 'setSendTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'archived' => 'getArchived',
        'channel' => 'getChannel',
        'audiences' => 'getAudiences',
        'send_options' => 'getSendOptions',
        'message' => 'getMessage',
        'tracking_options' => 'getTrackingOptions',
        'send_strategy' => 'getSendStrategy',
        'created_at' => 'getCreatedAt',
        'scheduled_at' => 'getScheduledAt',
        'updated_at' => 'getUpdatedAt',
        'send_time' => 'getSendTime'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['audiences'] = $data['audiences'] ?? null;
        $this->container['send_options'] = $data['send_options'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['tracking_options'] = $data['tracking_options'] ?? null;
        $this->container['send_strategy'] = $data['send_strategy'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['scheduled_at'] = $data['scheduled_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['send_time'] = $data['send_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['audiences'] === null) {
            $invalidProperties[] = "'audiences' can't be null";
        }
        if ($this->container['send_options'] === null) {
            $invalidProperties[] = "'send_options' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['tracking_options'] === null) {
            $invalidProperties[] = "'tracking_options' can't be null";
        }
        if ($this->container['send_strategy'] === null) {
            $invalidProperties[] = "'send_strategy' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['scheduled_at'] === null) {
            $invalidProperties[] = "'scheduled_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['send_time'] === null) {
            $invalidProperties[] = "'send_time' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The campaign name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the campaign
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived Whether the campaign has been archived or not
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel The type of campaign
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets audiences
     *
     * @return \KlaviyoAPI\Model\AudiencesSubObject
     */
    public function getAudiences()
    {
        return $this->container['audiences'];
    }

    /**
     * Sets audiences
     *
     * @param \KlaviyoAPI\Model\AudiencesSubObject $audiences audiences
     *
     * @return self
     */
    public function setAudiences($audiences)
    {
        $this->container['audiences'] = $audiences;

        return $this;
    }

    /**
     * Gets send_options
     *
     * @return \KlaviyoAPI\Model\SendOptionsSubObject
     */
    public function getSendOptions()
    {
        return $this->container['send_options'];
    }

    /**
     * Sets send_options
     *
     * @param \KlaviyoAPI\Model\SendOptionsSubObject $send_options send_options
     *
     * @return self
     */
    public function setSendOptions($send_options)
    {
        $this->container['send_options'] = $send_options;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The id of the message associated with the campaign
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets tracking_options
     *
     * @return \KlaviyoAPI\Model\TrackingOptionsSubObject
     */
    public function getTrackingOptions()
    {
        return $this->container['tracking_options'];
    }

    /**
     * Sets tracking_options
     *
     * @param \KlaviyoAPI\Model\TrackingOptionsSubObject $tracking_options tracking_options
     *
     * @return self
     */
    public function setTrackingOptions($tracking_options)
    {
        $this->container['tracking_options'] = $tracking_options;

        return $this;
    }

    /**
     * Gets send_strategy
     *
     * @return \KlaviyoAPI\Model\SendStrategySubObject
     */
    public function getSendStrategy()
    {
        return $this->container['send_strategy'];
    }

    /**
     * Sets send_strategy
     *
     * @param \KlaviyoAPI\Model\SendStrategySubObject $send_strategy send_strategy
     *
     * @return self
     */
    public function setSendStrategy($send_strategy)
    {
        $this->container['send_strategy'] = $send_strategy;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The datetime when the campaign was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets scheduled_at
     *
     * @return \DateTime
     */
    public function getScheduledAt()
    {
        return $this->container['scheduled_at'];
    }

    /**
     * Sets scheduled_at
     *
     * @param \DateTime $scheduled_at The datetime when the campaign was scheduled for future sending
     *
     * @return self
     */
    public function setScheduledAt($scheduled_at)
    {
        $this->container['scheduled_at'] = $scheduled_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The datetime when the campaign was last updated by a user or the system
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets send_time
     *
     * @return \DateTime
     */
    public function getSendTime()
    {
        return $this->container['send_time'];
    }

    /**
     * Sets send_time
     *
     * @param \DateTime $send_time The datetime when the campaign will be / was sent or None if not yet scheduled by a send_job.
     *
     * @return self
     */
    public function setSendTime($send_time)
    {
        $this->container['send_time'] = $send_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

