<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/emergencykey/v1/emergency_key.proto

namespace Saltoapis\Nebula\EmergencyKey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`ListEmergencyKeys`][salto.nebula.emergencykey.v1.EmergencyKeyService.ListEmergencyKeys].
 *
 * Generated from protobuf message <code>salto.nebula.emergencykey.v1.ListEmergencyKeysResponse</code>
 */
class ListEmergencyKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name should match the noun `emergency_keys` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.emergencykey.v1.EmergencyKey emergency_keys = 1;</code>
     */
    private $emergency_keys;
    /**
     * The token to retrieve the next page of emergency keys.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey>|\Google\Protobuf\Internal\RepeatedField $emergency_keys
     *           The field name should match the noun `emergency_keys` in the method name.
     *           There will be a maximum number of items returned based on the `page_size`
     *           field in the request.
     *     @type string $next_page_token
     *           The token to retrieve the next page of emergency keys.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::initOnce();
        parent::__construct($data);
    }

    /**
     * The field name should match the noun `emergency_keys` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.emergencykey.v1.EmergencyKey emergency_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmergencyKeys()
    {
        return $this->emergency_keys;
    }

    /**
     * The field name should match the noun `emergency_keys` in the method name.
     * There will be a maximum number of items returned based on the `page_size`
     * field in the request.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.emergencykey.v1.EmergencyKey emergency_keys = 1;</code>
     * @param array<\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmergencyKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::class);
        $this->emergency_keys = $arr;

        return $this;
    }

    /**
     * The token to retrieve the next page of emergency keys.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token to retrieve the next page of emergency keys.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

