<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accessright/v1/access_right.proto

namespace Saltoapis\Nebula\AccessRight\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The access right's destination association
 *
 * Generated from protobuf message <code>salto.nebula.accessright.v1.AccessRightDestination</code>
 */
class AccessRightDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the access right's destination association. It must
     * have the format of `installations/{@*}access-rights/{@*}destinations/*`.
     * For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/destinations/elevator-floor-5`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The destination resource name to bind as an association to the parent
     * access right. For example:
     * `installations/surelock-homes-hq/destinations/elevator-floor-5`.
     *
     * Generated from protobuf field <code>string destination = 2;</code>
     */
    protected $destination = '';
    /**
     * Display name of the associated entity. In this case a destination.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the access right's destination association. It must
     *           have the format of `installations/{@*}access-rights/{@*}destinations/*`.
     *           For example:
     *           `installations/surelock-homes-hq/access-rights/baskerville/destinations/elevator-floor-5`.
     *     @type string $destination
     *           The destination resource name to bind as an association to the parent
     *           access right. For example:
     *           `installations/surelock-homes-hq/destinations/elevator-floor-5`.
     *     @type string $display_name
     *           Display name of the associated entity. In this case a destination.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the access right's destination association. It must
     * have the format of `installations/{@*}access-rights/{@*}destinations/*`.
     * For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/destinations/elevator-floor-5`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the access right's destination association. It must
     * have the format of `installations/{@*}access-rights/{@*}destinations/*`.
     * For example:
     * `installations/surelock-homes-hq/access-rights/baskerville/destinations/elevator-floor-5`.
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
     * The destination resource name to bind as an association to the parent
     * access right. For example:
     * `installations/surelock-homes-hq/destinations/elevator-floor-5`.
     *
     * Generated from protobuf field <code>string destination = 2;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The destination resource name to bind as an association to the parent
     * access right. For example:
     * `installations/surelock-homes-hq/destinations/elevator-floor-5`.
     *
     * Generated from protobuf field <code>string destination = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Display name of the associated entity. In this case a destination.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the associated entity. In this case a destination.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

