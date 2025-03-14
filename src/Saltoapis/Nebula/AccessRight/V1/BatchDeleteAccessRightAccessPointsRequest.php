<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`BatchDeleteAccessRightAccessPoints`][salto.nebula.accessright.v1.AccessRightService.BatchDeleteAccessRightAccessPoints]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.BatchDeleteAccessRightAccessPointsRequest</code>
 */
class BatchDeleteAccessRightAccessPointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the access point's access right relation to be deleted.
     * For example: `installations/surelock-homes-hq/access-rights/baskerville`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The request message specifying the resources to delete.
     * A maximum of 100 access point's access rights associations can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.DeleteAccessRightAccessPointRequest requests = 2;</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the access point's access right relation to be deleted.
     *           For example: `installations/surelock-homes-hq/access-rights/baskerville`.
     *     @type array<\Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointRequest>|\Google\Protobuf\Internal\RepeatedField $requests
     *           The request message specifying the resources to delete.
     *           A maximum of 100 access point's access rights associations can be deleted in a batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the access point's access right relation to be deleted.
     * For example: `installations/surelock-homes-hq/access-rights/baskerville`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the access point's access right relation to be deleted.
     * For example: `installations/surelock-homes-hq/access-rights/baskerville`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The request message specifying the resources to delete.
     * A maximum of 100 access point's access rights associations can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.DeleteAccessRightAccessPointRequest requests = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * The request message specifying the resources to delete.
     * A maximum of 100 access point's access rights associations can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.accessright.v1.DeleteAccessRightAccessPointRequest requests = 2;</code>
     * @param array<\Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\AccessRight\V1\DeleteAccessRightAccessPointRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

