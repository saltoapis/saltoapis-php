<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1\Installation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the current state of the ownership transfer.
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.Installation.TransferOwnershipState</code>
 */
class TransferOwnershipState extends \Google\Protobuf\Internal\Message
{
    /**
     * Email address for the proposed installation owner.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * Expiration time of the transfer proposal.
     * (-- api-linter: core::0214::resource-expiry=disabled  --)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     */
    protected $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           Email address for the proposed installation owner.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Expiration time of the transfer proposal.
     *           (-- api-linter: core::0214::resource-expiry=disabled  --)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * Email address for the proposed installation owner.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email address for the proposed installation owner.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Expiration time of the transfer proposal.
     * (-- api-linter: core::0214::resource-expiry=disabled  --)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Expiration time of the transfer proposal.
     * (-- api-linter: core::0214::resource-expiry=disabled  --)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferOwnershipState::class, \Saltoapis\Nebula\Installation\V1\Installation_TransferOwnershipState::class);

