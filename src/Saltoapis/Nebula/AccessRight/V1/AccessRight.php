<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The access right object
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.AccessRight</code>
 */
class AccessRight extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the access right. It must have the format
     * of `installations/&#42;&#47;access-rights/&#42;`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Display name of the access right.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Activation time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activate_time = 3;</code>
     */
    protected $activate_time = null;
    /**
     * Expiration time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4;</code>
     */
    protected $expire_time = null;
    /**
     * Schedules in which this access right is applied.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.Schedule schedules = 5;</code>
     */
    private $schedules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the access right. It must have the format
     *           of `installations/&#42;&#47;access-rights/&#42;`. For example:
     *           `installations/surelock-homes-hq/access-rights/baskerville`.
     *     @type string $display_name
     *           Display name of the access right.
     *     @type \Google\Protobuf\Timestamp $activate_time
     *           Activation time independent of any time zone or calendar.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Expiration time independent of any time zone or calendar.
     *     @type array<\Saltoapis\Nebula\Type\Schedule>|\Google\Protobuf\Internal\RepeatedField $schedules
     *           Schedules in which this access right is applied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the access right. It must have the format
     * of `installations/&#42;&#47;access-rights/&#42;`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the access right. It must have the format
     * of `installations/&#42;&#47;access-rights/&#42;`. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville`.
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
     * Display name of the access right.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the access right.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Activation time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activate_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getActivateTime()
    {
        return $this->activate_time;
    }

    public function hasActivateTime()
    {
        return isset($this->activate_time);
    }

    public function clearActivateTime()
    {
        unset($this->activate_time);
    }

    /**
     * Activation time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activate_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActivateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activate_time = $var;

        return $this;
    }

    /**
     * Expiration time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4;</code>
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
     * Expiration time independent of any time zone or calendar.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Schedules in which this access right is applied.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.Schedule schedules = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * Schedules in which this access right is applied.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.type.Schedule schedules = 5;</code>
     * @param array<\Saltoapis\Nebula\Type\Schedule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\Type\Schedule::class);
        $this->schedules = $arr;

        return $this;
    }

}

