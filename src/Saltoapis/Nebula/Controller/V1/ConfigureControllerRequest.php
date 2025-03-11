<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ConfigureController`][salto.nebula.controller.v1.ControllerService.ConfigureController]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.ConfigureControllerRequest</code>
 */
class ConfigureControllerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the controller to be configured. For example:
     * `installations/surelock-homes-hq/controllers/main-controller`.
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
     *           The resource name of the controller to be configured. For example:
     *           `installations/surelock-homes-hq/controllers/main-controller`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the controller to be configured. For example:
     * `installations/surelock-homes-hq/controllers/main-controller`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the controller to be configured. For example:
     * `installations/surelock-homes-hq/controllers/main-controller`.
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

