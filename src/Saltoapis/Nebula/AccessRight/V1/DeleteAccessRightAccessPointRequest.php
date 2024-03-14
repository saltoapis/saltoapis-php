<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`DeleteAccessRightAccessPoint`][salto.nebula.accessright.v1.AccessRightService.DeleteAccessRightAccessPoint]
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.DeleteAccessRightAccessPointRequest</code>
 */
class DeleteAccessRightAccessPointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the access right's access point association to be
     * deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-points/baker-street-entrance`.
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
     *           The resource name of the access right's access point association to be
     *           deleted. For example:
     *           `installations/surelock-homes-hq/access-rights/baskerville/access-points/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the access right's access point association to be
     * deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-points/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the access right's access point association to be
     * deleted. For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/access-points/baker-street-entrance`.
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

