<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/event/v1/types.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event representing the locking of an access point.
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.AccessPointLocked</code>
 */
class AccessPointLocked extends \Google\Protobuf\Internal\Message
{
    /**
     * The access point that's been locked.
     *
     * Generated from protobuf field <code>.salto.nebula.accesspoint.v1.AccessPoint access_point = 1;</code>
     */
    protected $access_point = null;
    /**
     * The user who locked the access point, if any.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.User user = 2;</code>
     */
    protected $user = null;
    protected $credential;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\AccessPoint\V1\AccessPoint $access_point
     *           The access point that's been locked.
     *     @type \Saltoapis\Nebula\User\V1\User $user
     *           The user who locked the access point, if any.
     *     @type \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey $emergency_key
     *           The emergency key used to lock the access point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * The access point that's been locked.
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
     * The access point that's been locked.
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
     * The user who locked the access point, if any.
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
     * The user who locked the access point, if any.
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

    /**
     * The emergency key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.emergencykey.v1.EmergencyKey emergency_key = 3;</code>
     * @return \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey|null
     */
    public function getEmergencyKey()
    {
        return $this->readOneof(3);
    }

    public function hasEmergencyKey()
    {
        return $this->hasOneof(3);
    }

    /**
     * The emergency key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.emergencykey.v1.EmergencyKey emergency_key = 3;</code>
     * @param \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey $var
     * @return $this
     */
    public function setEmergencyKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->whichOneof("credential");
    }

}

