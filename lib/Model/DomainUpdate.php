<?php
/**
 * DomainUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mailu API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DomainUpdate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'max_users' => 'int',
        'max_aliases' => 'int',
        'max_quota_bytes' => 'int',
        'signup_enabled' => 'bool',
        'alternatives' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'max_users' => null,
        'max_aliases' => null,
        'max_quota_bytes' => null,
        'signup_enabled' => null,
        'alternatives' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'comment' => false,
		'max_users' => false,
		'max_aliases' => false,
		'max_quota_bytes' => false,
		'signup_enabled' => false,
		'alternatives' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'comment' => 'comment',
        'max_users' => 'max_users',
        'max_aliases' => 'max_aliases',
        'max_quota_bytes' => 'max_quota_bytes',
        'signup_enabled' => 'signup_enabled',
        'alternatives' => 'alternatives'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'max_users' => 'setMaxUsers',
        'max_aliases' => 'setMaxAliases',
        'max_quota_bytes' => 'setMaxQuotaBytes',
        'signup_enabled' => 'setSignupEnabled',
        'alternatives' => 'setAlternatives'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'max_users' => 'getMaxUsers',
        'max_aliases' => 'getMaxAliases',
        'max_quota_bytes' => 'getMaxQuotaBytes',
        'signup_enabled' => 'getSignupEnabled',
        'alternatives' => 'getAlternatives'
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
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('max_users', $data ?? [], null);
        $this->setIfExists('max_aliases', $data ?? [], null);
        $this->setIfExists('max_quota_bytes', $data ?? [], null);
        $this->setIfExists('signup_enabled', $data ?? [], null);
        $this->setIfExists('alternatives', $data ?? [], null);
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

        if (!is_null($this->container['max_users']) && ($this->container['max_users'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_users', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_aliases']) && ($this->container['max_aliases'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_aliases', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_quota_bytes']) && ($this->container['max_quota_bytes'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_quota_bytes', must be bigger than or equal to 0.";
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment a comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets max_users
     *
     * @return int|null
     */
    public function getMaxUsers()
    {
        return $this->container['max_users'];
    }

    /**
     * Sets max_users
     *
     * @param int|null $max_users maximum number of users
     *
     * @return self
     */
    public function setMaxUsers($max_users)
    {
        if (is_null($max_users)) {
            throw new \InvalidArgumentException('non-nullable max_users cannot be null');
        }

        if (($max_users < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_users when calling DomainUpdate., must be bigger than or equal to -1.');
        }

        $this->container['max_users'] = $max_users;

        return $this;
    }

    /**
     * Gets max_aliases
     *
     * @return int|null
     */
    public function getMaxAliases()
    {
        return $this->container['max_aliases'];
    }

    /**
     * Sets max_aliases
     *
     * @param int|null $max_aliases maximum number of aliases
     *
     * @return self
     */
    public function setMaxAliases($max_aliases)
    {
        if (is_null($max_aliases)) {
            throw new \InvalidArgumentException('non-nullable max_aliases cannot be null');
        }

        if (($max_aliases < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_aliases when calling DomainUpdate., must be bigger than or equal to -1.');
        }

        $this->container['max_aliases'] = $max_aliases;

        return $this;
    }

    /**
     * Gets max_quota_bytes
     *
     * @return int|null
     */
    public function getMaxQuotaBytes()
    {
        return $this->container['max_quota_bytes'];
    }

    /**
     * Sets max_quota_bytes
     *
     * @param int|null $max_quota_bytes maximum quota for mailbox
     *
     * @return self
     */
    public function setMaxQuotaBytes($max_quota_bytes)
    {
        if (is_null($max_quota_bytes)) {
            throw new \InvalidArgumentException('non-nullable max_quota_bytes cannot be null');
        }

        if (($max_quota_bytes < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_quota_bytes when calling DomainUpdate., must be bigger than or equal to 0.');
        }

        $this->container['max_quota_bytes'] = $max_quota_bytes;

        return $this;
    }

    /**
     * Gets signup_enabled
     *
     * @return bool|null
     */
    public function getSignupEnabled()
    {
        return $this->container['signup_enabled'];
    }

    /**
     * Sets signup_enabled
     *
     * @param bool|null $signup_enabled allow signup
     *
     * @return self
     */
    public function setSignupEnabled($signup_enabled)
    {
        if (is_null($signup_enabled)) {
            throw new \InvalidArgumentException('non-nullable signup_enabled cannot be null');
        }
        $this->container['signup_enabled'] = $signup_enabled;

        return $this;
    }

    /**
     * Gets alternatives
     *
     * @return string[]|null
     */
    public function getAlternatives()
    {
        return $this->container['alternatives'];
    }

    /**
     * Sets alternatives
     *
     * @param string[]|null $alternatives alternatives
     *
     * @return self
     */
    public function setAlternatives($alternatives)
    {
        if (is_null($alternatives)) {
            throw new \InvalidArgumentException('non-nullable alternatives cannot be null');
        }
        $this->container['alternatives'] = $alternatives;

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


