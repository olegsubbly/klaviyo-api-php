<?php
/**
 * PushTokenCreateQueryResourceObjectAttributes
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
 * The version of the OpenAPI document: 2024-05-15
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
 * PushTokenCreateQueryResourceObjectAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PushTokenCreateQueryResourceObjectAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PushTokenCreateQueryResourceObject_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token' => 'string',
        'platform' => 'string',
        'enablement_status' => 'string',
        'vendor' => 'string',
        'background' => 'string',
        'device_metadata' => '\KlaviyoAPI\Model\DeviceMetadata',
        'profile' => '\KlaviyoAPI\Model\PushTokenCreateQueryResourceObjectAttributesProfile'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token' => null,
        'platform' => null,
        'enablement_status' => null,
        'vendor' => null,
        'background' => null,
        'device_metadata' => null,
        'profile' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'token' => false,
		'platform' => false,
		'enablement_status' => true,
		'vendor' => false,
		'background' => true,
		'device_metadata' => false,
		'profile' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'token' => 'token',
        'platform' => 'platform',
        'enablement_status' => 'enablement_status',
        'vendor' => 'vendor',
        'background' => 'background',
        'device_metadata' => 'device_metadata',
        'profile' => 'profile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'platform' => 'setPlatform',
        'enablement_status' => 'setEnablementStatus',
        'vendor' => 'setVendor',
        'background' => 'setBackground',
        'device_metadata' => 'setDeviceMetadata',
        'profile' => 'setProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'platform' => 'getPlatform',
        'enablement_status' => 'getEnablementStatus',
        'vendor' => 'getVendor',
        'background' => 'getBackground',
        'device_metadata' => 'getDeviceMetadata',
        'profile' => 'getProfile'
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

    public const PLATFORM_ANDROID = 'android';
    public const PLATFORM_IOS = 'ios';
    public const ENABLEMENT_STATUS_AUTHORIZED = 'AUTHORIZED';
    public const ENABLEMENT_STATUS_DENIED = 'DENIED';
    public const ENABLEMENT_STATUS_NOT_DETERMINED = 'NOT_DETERMINED';
    public const ENABLEMENT_STATUS_PROVISIONAL = 'PROVISIONAL';
    public const ENABLEMENT_STATUS_UNAUTHORIZED = 'UNAUTHORIZED';
    public const VENDOR_APNS = 'apns';
    public const VENDOR_FCM = 'fcm';
    public const BACKGROUND_AVAILABLE = 'AVAILABLE';
    public const BACKGROUND_DENIED = 'DENIED';
    public const BACKGROUND_RESTRICTED = 'RESTRICTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_ANDROID,
            self::PLATFORM_IOS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnablementStatusAllowableValues()
    {
        return [
            self::ENABLEMENT_STATUS_AUTHORIZED,
            self::ENABLEMENT_STATUS_DENIED,
            self::ENABLEMENT_STATUS_NOT_DETERMINED,
            self::ENABLEMENT_STATUS_PROVISIONAL,
            self::ENABLEMENT_STATUS_UNAUTHORIZED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVendorAllowableValues()
    {
        return [
            self::VENDOR_APNS,
            self::VENDOR_FCM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBackgroundAllowableValues()
    {
        return [
            self::BACKGROUND_AVAILABLE,
            self::BACKGROUND_DENIED,
            self::BACKGROUND_RESTRICTED,
        ];
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
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('platform', $data ?? [], null);
        $this->setIfExists('enablement_status', $data ?? [], 'AUTHORIZED');
        $this->setIfExists('vendor', $data ?? [], null);
        $this->setIfExists('background', $data ?? [], 'AVAILABLE');
        $this->setIfExists('device_metadata', $data ?? [], null);
        $this->setIfExists('profile', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'platform', must be one of '%s'",
                $this->container['platform'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEnablementStatusAllowableValues();
        if (!is_null($this->container['enablement_status']) && !in_array($this->container['enablement_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'enablement_status', must be one of '%s'",
                $this->container['enablement_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
        $allowedValues = $this->getVendorAllowableValues();
        if (!is_null($this->container['vendor']) && !in_array($this->container['vendor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vendor', must be one of '%s'",
                $this->container['vendor'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBackgroundAllowableValues();
        if (!is_null($this->container['background']) && !in_array($this->container['background'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'background', must be one of '%s'",
                $this->container['background'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['profile'] === null) {
            $invalidProperties[] = "'profile' can't be null";
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token A push token from APNS or FCM.
     *
     * @return self
     */
    public function setToken($token)
    {

        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform The platform on which the push token was created.
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!in_array($platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'platform', must be one of '%s'",
                    $platform,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($platform)) {
            throw new \InvalidArgumentException('non-nullable platform cannot be null');
        }

        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets enablement_status
     *
     * @return string|null
     */
    public function getEnablementStatus()
    {
        return $this->container['enablement_status'];
    }

    /**
     * Sets enablement_status
     *
     * @param string|null $enablement_status This is the enablement status for the individual push token.
     *
     * @return self
     */
    public function setEnablementStatus($enablement_status)
    {
        $allowedValues = $this->getEnablementStatusAllowableValues();
        if (!is_null($enablement_status) && !in_array($enablement_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'enablement_status', must be one of '%s'",
                    $enablement_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($enablement_status)) {
            array_push($this->openAPINullablesSetToNull, 'enablement_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enablement_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enablement_status'] = $enablement_status;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor The vendor of the push token.
     *
     * @return self
     */
    public function setVendor($vendor)
    {
        $allowedValues = $this->getVendorAllowableValues();
        if (!in_array($vendor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vendor', must be one of '%s'",
                    $vendor,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($vendor)) {
            throw new \InvalidArgumentException('non-nullable vendor cannot be null');
        }

        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string|null $background The background state of the push token.
     *
     * @return self
     */
    public function setBackground($background)
    {
        $allowedValues = $this->getBackgroundAllowableValues();
        if (!is_null($background) && !in_array($background, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'background', must be one of '%s'",
                    $background,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($background)) {
            array_push($this->openAPINullablesSetToNull, 'background');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('background', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets device_metadata
     *
     * @return \KlaviyoAPI\Model\DeviceMetadata|null
     */
    public function getDeviceMetadata()
    {
        return $this->container['device_metadata'];
    }

    /**
     * Sets device_metadata
     *
     * @param \KlaviyoAPI\Model\DeviceMetadata|null $device_metadata device_metadata
     *
     * @return self
     */
    public function setDeviceMetadata($device_metadata)
    {

        if (is_null($device_metadata)) {
            throw new \InvalidArgumentException('non-nullable device_metadata cannot be null');
        }

        $this->container['device_metadata'] = $device_metadata;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \KlaviyoAPI\Model\PushTokenCreateQueryResourceObjectAttributesProfile
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \KlaviyoAPI\Model\PushTokenCreateQueryResourceObjectAttributesProfile $profile profile
     *
     * @return self
     */
    public function setProfile($profile)
    {

        if (is_null($profile)) {
            throw new \InvalidArgumentException('non-nullable profile cannot be null');
        }

        $this->container['profile'] = $profile;

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


