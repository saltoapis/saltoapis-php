<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [GetController][salto.nebula.controller.v1.ControllerService.GetController]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.GetControllerRequest</code>
 */
class GetControllerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested controller resource. For example:
     * `installations/surelock-homes-hq/controllers/dancing-men`.
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
     *           The name of the requested controller resource. For example:
     *           `installations/surelock-homes-hq/controllers/dancing-men`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested controller resource. For example:
     * `installations/surelock-homes-hq/controllers/dancing-men`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the requested controller resource. For example:
     * `installations/surelock-homes-hq/controllers/dancing-men`.
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

