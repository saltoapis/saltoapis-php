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
     *     @type \Saltoapis\Nebula\User\V1\CardKey $card_key
     *           The card key used to lock the access point.
     *     @type \Saltoapis\Nebula\User\V1\AppKey $app_key
     *           The app key used to lock the access point.
     *     @type \Saltoapis\Nebula\User\V1\WalletKey $wallet_key
     *           The wallet key used to lock the access point.
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
     * The card key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey card_key = 4;</code>
     * @return \Saltoapis\Nebula\User\V1\CardKey|null
     */
    public function getCardKey()
    {
        return $this->readOneof(4);
    }

    public function hasCardKey()
    {
        return $this->hasOneof(4);
    }

    /**
     * The card key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey card_key = 4;</code>
     * @param \Saltoapis\Nebula\User\V1\CardKey $var
     * @return $this
     */
    public function setCardKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\CardKey::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The app key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.AppKey app_key = 5;</code>
     * @return \Saltoapis\Nebula\User\V1\AppKey|null
     */
    public function getAppKey()
    {
        return $this->readOneof(5);
    }

    public function hasAppKey()
    {
        return $this->hasOneof(5);
    }

    /**
     * The app key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.AppKey app_key = 5;</code>
     * @param \Saltoapis\Nebula\User\V1\AppKey $var
     * @return $this
     */
    public function setAppKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\AppKey::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The wallet key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.WalletKey wallet_key = 6;</code>
     * @return \Saltoapis\Nebula\User\V1\WalletKey|null
     */
    public function getWalletKey()
    {
        return $this->readOneof(6);
    }

    public function hasWalletKey()
    {
        return $this->hasOneof(6);
    }

    /**
     * The wallet key used to lock the access point.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.WalletKey wallet_key = 6;</code>
     * @param \Saltoapis\Nebula\User\V1\WalletKey $var
     * @return $this
     */
    public function setWalletKey($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\User\V1\WalletKey::class);
        $this->writeOneof(6, $var);

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

