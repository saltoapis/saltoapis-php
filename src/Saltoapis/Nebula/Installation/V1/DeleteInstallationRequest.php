<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`DeleteInstallation`][salto.nebula.installation.v1.InstallationService.DeleteInstallation]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.DeleteInstallationRequest</code>
 */
class DeleteInstallationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the installation to be soft deleted. For example:
     * `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * If set, validate the request but do not actually delete the installation.
     *
     * Generated from protobuf field <code>optional bool validate_only = 2;</code>
     */
    protected $validate_only = null;
    /**
     * The number of hours to wait before permanently deleting the installation.
     * If unset, the default is 720 (30 days).
     *
     * Generated from protobuf field <code>optional int32 delay_hours = 3;</code>
     */
    protected $delay_hours = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the installation to be soft deleted. For example:
     *           `installations/surelock-homes-hq`.
     *     @type bool $validate_only
     *           If set, validate the request but do not actually delete the installation.
     *     @type int $delay_hours
     *           The number of hours to wait before permanently deleting the installation.
     *           If unset, the default is 720 (30 days).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the installation to be soft deleted. For example:
     * `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the installation to be soft deleted. For example:
     * `installations/surelock-homes-hq`.
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
     * If set, validate the request but do not actually delete the installation.
     *
     * Generated from protobuf field <code>optional bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return isset($this->validate_only) ? $this->validate_only : false;
    }

    public function hasValidateOnly()
    {
        return isset($this->validate_only);
    }

    public function clearValidateOnly()
    {
        unset($this->validate_only);
    }

    /**
     * If set, validate the request but do not actually delete the installation.
     *
     * Generated from protobuf field <code>optional bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * The number of hours to wait before permanently deleting the installation.
     * If unset, the default is 720 (30 days).
     *
     * Generated from protobuf field <code>optional int32 delay_hours = 3;</code>
     * @return int
     */
    public function getDelayHours()
    {
        return isset($this->delay_hours) ? $this->delay_hours : 0;
    }

    public function hasDelayHours()
    {
        return isset($this->delay_hours);
    }

    public function clearDelayHours()
    {
        unset($this->delay_hours);
    }

    /**
     * The number of hours to wait before permanently deleting the installation.
     * If unset, the default is 720 (30 days).
     *
     * Generated from protobuf field <code>optional int32 delay_hours = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDelayHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->delay_hours = $var;

        return $this;
    }

}

