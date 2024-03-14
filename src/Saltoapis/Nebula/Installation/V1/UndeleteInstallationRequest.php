<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UndeleteInstallation`][salto.nebula.installation.v1.InstallationService.UndeleteInstallation]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.UndeleteInstallationRequest</code>
 */
class UndeleteInstallationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the installation to be undeleted. For example:
     * `installations/surelock-homes-hq`.
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
     *           The resource name of the installation to be undeleted. For example:
     *           `installations/surelock-homes-hq`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the installation to be undeleted. For example:
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
     * The resource name of the installation to be undeleted. For example:
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

}

