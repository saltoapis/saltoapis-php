<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/event/v1/types.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event representing a denied access to a user by an access point.
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.AccessDenied</code>
 */
class AccessDenied extends \Google\Protobuf\Internal\Message
{
    /**
     * Access denied by the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     */
    protected $access_point = null;
    /**
     * The user whose access was rejected.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 2;</code>
     */
    protected $user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\AccessPoint\V1\AccessPoint $access_point
     *           Access denied by the access point.
     *     @type \Saltoapis\Nebula\User\V1\User $user
     *           The user whose access was rejected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Access denied by the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     * @return \Saltoapis\Nebula\AccessPoint\V1\AccessPoint|null
     */
    public function getAccessPoint()
    {
        return $this->access_point;
    }

    public function hasAccessPoint()
    {
        return isset($this->access_point);
    }

    public function clearAccessPoint()
    {
        unset($this->access_point);
    }

    /**
     * Access denied by the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     * @param \Saltoapis\Nebula\AccessPoint\V1\AccessPoint $var
     * @return $this
     */
    public function setAccessPoint($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\AccessPoint\V1\AccessPoint::class);
        $this->access_point = $var;

        return $this;
    }

    /**
     * The user whose access was rejected.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 2;</code>
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
     * The user whose access was rejected.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 2;</code>
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

