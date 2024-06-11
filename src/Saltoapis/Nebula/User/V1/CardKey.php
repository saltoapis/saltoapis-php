<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a card key, belonging to a user
 *
 * Generated from protobuf message <code>salto.nebula.user.v1.CardKey</code>
 */
class CardKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the user's card key. It must have the
     * format of `installations/&#42;&#47;users/&#42;&#47;card-key`. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Unique identifier of the physical card. Length dependent of technology.
     * Max length for ISO14443-3 is 10 bytes.
     * (-- api-linter: salto::9001::internal-annotation=disabled --)
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     */
    protected $uid = '';
    /**
     * Indicates whether this card key has been assigned, not assigned or is
     * active and ready for use. This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`EncodeCardKey`][salto.nebula.user.v1.UserService.EncodeCardKey].
     * If the value is `NOT_ASSIGNED` it also applies to cases where the
     * assignation process has been initiated, but not completed.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey.State state = 3;</code>
     */
    protected $state = 0;
    /**
     * Indicates whether this card key has pending updates or not.
     * This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`OutdateCardKey`][salto.nebula.user.v1.UserService.OutdateCardKey].
     *
     * Generated from protobuf field <code>bool outdated = 4;</code>
     */
    protected $outdated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the user's card key. It must have the
     *           format of `installations/&#42;&#47;users/&#42;&#47;card-key`. For example:
     *           `installations/surelock-homes-hq/users/john-watson/card-key`.
     *     @type string $uid
     *           Unique identifier of the physical card. Length dependent of technology.
     *           Max length for ISO14443-3 is 10 bytes.
     *           (-- api-linter: salto::9001::internal-annotation=disabled --)
     *     @type int $state
     *           Indicates whether this card key has been assigned, not assigned or is
     *           active and ready for use. This field cannot be modified using a standard
     *           [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     *           operation. To change the value of this field, you must call
     *           [`EncodeCardKey`][salto.nebula.user.v1.UserService.EncodeCardKey].
     *           If the value is `NOT_ASSIGNED` it also applies to cases where the
     *           assignation process has been initiated, but not completed.
     *     @type bool $outdated
     *           Indicates whether this card key has pending updates or not.
     *           This field cannot be modified using a standard
     *           [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     *           operation. To change the value of this field, you must call
     *           [`OutdateCardKey`][salto.nebula.user.v1.UserService.OutdateCardKey].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the user's card key. It must have the
     * format of `installations/&#42;&#47;users/&#42;&#47;card-key`. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the user's card key. It must have the
     * format of `installations/&#42;&#47;users/&#42;&#47;card-key`. For example:
     * `installations/surelock-homes-hq/users/john-watson/card-key`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Unique identifier of the physical card. Length dependent of technology.
     * Max length for ISO14443-3 is 10 bytes.
     * (-- api-linter: salto::9001::internal-annotation=disabled --)
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Unique identifier of the physical card. Length dependent of technology.
     * Max length for ISO14443-3 is 10 bytes.
     * (-- api-linter: salto::9001::internal-annotation=disabled --)
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Indicates whether this card key has been assigned, not assigned or is
     * active and ready for use. This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`EncodeCardKey`][salto.nebula.user.v1.UserService.EncodeCardKey].
     * If the value is `NOT_ASSIGNED` it also applies to cases where the
     * assignation process has been initiated, but not completed.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Indicates whether this card key has been assigned, not assigned or is
     * active and ready for use. This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`EncodeCardKey`][salto.nebula.user.v1.UserService.EncodeCardKey].
     * If the value is `NOT_ASSIGNED` it also applies to cases where the
     * assignation process has been initiated, but not completed.
     *
     * Generated from protobuf field <code>.salto.nebula.user.v1.CardKey.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Saltoapis\Nebula\User\V1\CardKey\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Indicates whether this card key has pending updates or not.
     * This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`OutdateCardKey`][salto.nebula.user.v1.UserService.OutdateCardKey].
     *
     * Generated from protobuf field <code>bool outdated = 4;</code>
     * @return bool
     */
    public function getOutdated()
    {
        return $this->outdated;
    }

    /**
     * Indicates whether this card key has pending updates or not.
     * This field cannot be modified using a standard
     * [`UpdateCardKey`][salto.nebula.user.v1.UserService.UpdateCardKey]
     * operation. To change the value of this field, you must call
     * [`OutdateCardKey`][salto.nebula.user.v1.UserService.OutdateCardKey].
     *
     * Generated from protobuf field <code>bool outdated = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setOutdated($var)
    {
        GPBUtil::checkBool($var);
        $this->outdated = $var;

        return $this;
    }

}

