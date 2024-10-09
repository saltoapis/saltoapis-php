<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [`BatchCreateAccessRightAccessPoints`][salto.nebula.user.v1.AccessRightService.BatchCreateAccessRightAccessPoints]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.BatchCreateAccessRightAccessPointsResponse</code>
 */
class BatchCreateAccessRightAccessPointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Access right access points created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPoint access_right_access_points = 1;</code>
     */
    private $access_right_access_points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint>|\Google\Protobuf\Internal\RepeatedField $access_right_access_points
     *           Access right access points created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Access right access points created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPoint access_right_access_points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessRightAccessPoints()
    {
        return $this->access_right_access_points;
    }

    /**
     * Access right access points created.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.AccessRightAccessPoint access_right_access_points = 1;</code>
     * @param array<\Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessRightAccessPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessRight\V1\AccessRightAccessPoint::class);
        $this->access_right_access_points = $arr;

        return $this;
    }

}

