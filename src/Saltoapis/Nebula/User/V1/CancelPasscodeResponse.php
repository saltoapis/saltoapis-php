<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`CancelPasscode`][salto.nebula.user.v1.UserService.CancelPasscode]
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.CancelPasscodeResponse</code>
 */
class CancelPasscodeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The canceled passcode.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.Passcode passcode = 1;</code>
     */
    protected $passcode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\User\V1\Passcode $passcode
     *           The canceled passcode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * The canceled passcode.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.Passcode passcode = 1;</code>
     * @return \Saltoapis\Nebula\User\V1\Passcode|null
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    public function hasPasscode()
    {
        return isset($this->passcode);
    }

    public function clearPasscode()
    {
        unset($this->passcode);
    }

    /**
     * The canceled passcode.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.Passcode passcode = 1;</code>
     * @param \Saltoapis\Nebula\User\V1\Passcode $var
     * @return $this
     */
    public function setPasscode($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\Passcode::class);
        $this->passcode = $var;

        return $this;
    }

}

