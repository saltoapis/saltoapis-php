<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`DeleteAccessRightAccessPointGroup`][salto.nebula.accessright.v1.AccessRightService.DeleteAccessRightAccessPointGroup]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.DeleteAccessRightAccessPointGroupRequest</code>
 */
class DeleteAccessRightAccessPointGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the access right's access point group association to
     * be deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the access right's access point group association to
     *           be deleted. For example:
     *           `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the access right's access point group association to
     * be deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the access right's access point group association to
     * be deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-point-groups/common-accesses`.
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

}

