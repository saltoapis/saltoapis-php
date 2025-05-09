<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/event/v1/types.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event representing the deletion of multiple access right's access point association.
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.AccessRightAccessPointsBatchDeleted</code>
 */
class AccessRightAccessPointsBatchDeleted extends \Google\Protobuf\Internal\Message
{
    /**
     * The access right to which the access points have been removed.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 1;</code>
     */
    protected $access_right = null;
    /**
     * The access points removed from the access right.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspoint.v1.AccessPoint access_points = 2;</code>
     */
    private $access_points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\AccessRight\V1\AccessRight $access_right
     *           The access right to which the access points have been removed.
     *     @type array<\Saltoapis\Nebula\AccessPoint\V1\AccessPoint>|\Google\Protobuf\Internal\RepeatedField $access_points
     *           The access points removed from the access right.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * The access right to which the access points have been removed.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 1;</code>
     * @return \Saltoapis\Nebula\AccessRight\V1\AccessRight|null
     */
    public function getAccessRight()
    {
        return $this->access_right;
    }

    public function hasAccessRight()
    {
        return isset($this->access_right);
    }

    public function clearAccessRight()
    {
        unset($this->access_right);
    }

    /**
     * The access right to which the access points have been removed.
     *
     * Generated from protobuf field <code>.salto.nebula.accessright.v1.AccessRight access_right = 1;</code>
     * @param \Saltoapis\Nebula\AccessRight\V1\AccessRight $var
     * @return $this
     */
    public function setAccessRight($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\AccessRight\V1\AccessRight::class);
        $this->access_right = $var;

        return $this;
    }

    /**
     * The access points removed from the access right.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspoint.v1.AccessPoint access_points = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessPoints()
    {
        return $this->access_points;
    }

    /**
     * The access points removed from the access right.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accesspoint.v1.AccessPoint access_points = 2;</code>
     * @param array<\Saltoapis\Nebula\AccessPoint\V1\AccessPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessPoint\V1\AccessPoint::class);
        $this->access_points = $arr;

        return $this;
    }

}

