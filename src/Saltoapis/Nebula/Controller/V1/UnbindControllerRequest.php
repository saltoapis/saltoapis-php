<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UnbindController`][salto.nebula.controller.v1.ControllerService.UnbindController]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.UnbindControllerRequest</code>
 */
class UnbindControllerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the controller to be bound. For example:
     * `installations/surelock-homes-hq/controllers/main-controller`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * If set to true, the device identifier is removed (unbound) from the
     * controller. Otherwise, the request will only work if the controller
     * isn't bound to any previous device identifier.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the controller to be bound. For example:
     *           `installations/surelock-homes-hq/controllers/main-controller`.
     *     @type bool $force
     *           If set to true, the device identifier is removed (unbound) from the
     *           controller. Otherwise, the request will only work if the controller
     *           isn't bound to any previous device identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the controller to be bound. For example:
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
     * The resource name of the controller to be bound. For example:
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

    /**
     * If set to true, the device identifier is removed (unbound) from the
     * controller. Otherwise, the request will only work if the controller
     * isn't bound to any previous device identifier.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, the device identifier is removed (unbound) from the
     * controller. Otherwise, the request will only work if the controller
     * isn't bound to any previous device identifier.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

