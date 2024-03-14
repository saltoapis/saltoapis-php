<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/event/v1/types.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event representing the block of a user.
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.UserBlocked</code>
 */
class UserBlocked extends \Google\Protobuf\Internal\Message
{
    /**
     * User blocked.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     */
    protected $user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\User\V1\User $user
     *           User blocked.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * User blocked.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     * @return \Saltoapis\Nebula\User\V1\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * User blocked.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 1;</code>
     * @param \Saltoapis\Nebula\User\V1\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\User::class);
        $this->user = $var;

        return $this;
    }

}

