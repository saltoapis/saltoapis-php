<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`CreateControllerRelay`][salto.nebula.controller.v1.ControllerService.CreateControllerRelay]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.CreateControllerRelayRequest</code>
 */
class CreateControllerRelayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where the controller relay is to be created. For
     * example: `installations/surelock-homes-hq/controllers/dancing-men`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The controller relay ID to use for this controller relay. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string controller_relay_id = 2;</code>
     */
    protected $controller_relay_id = null;
    /**
     * The controller relay resource to be created. Client must not set the
     * `ControllerRelay.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.ControllerRelay controller_relay = 3;</code>
     */
    protected $controller_relay = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where the controller relay is to be created. For
     *           example: `installations/surelock-homes-hq/controllers/dancing-men`.
     *     @type string $controller_relay_id
     *           The controller relay ID to use for this controller relay. In case it's empty the
     *           server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\Controller\V1\ControllerRelay $controller_relay
     *           The controller relay resource to be created. Client must not set the
     *           `ControllerRelay.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where the controller relay is to be created. For
     * example: `installations/surelock-homes-hq/controllers/dancing-men`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where the controller relay is to be created. For
     * example: `installations/surelock-homes-hq/controllers/dancing-men`.
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
     * The controller relay ID to use for this controller relay. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string controller_relay_id = 2;</code>
     * @return string
     */
    public function getControllerRelayId()
    {
        return isset($this->controller_relay_id) ? $this->controller_relay_id : '';
    }

    public function hasControllerRelayId()
    {
        return isset($this->controller_relay_id);
    }

    public function clearControllerRelayId()
    {
        unset($this->controller_relay_id);
    }

    /**
     * The controller relay ID to use for this controller relay. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string controller_relay_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setControllerRelayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->controller_relay_id = $var;

        return $this;
    }

    /**
     * The controller relay resource to be created. Client must not set the
     * `ControllerRelay.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.ControllerRelay controller_relay = 3;</code>
     * @return \Saltoapis\Nebula\Controller\V1\ControllerRelay|null
     */
    public function getControllerRelay()
    {
        return $this->controller_relay;
    }

    public function hasControllerRelay()
    {
        return isset($this->controller_relay);
    }

    public function clearControllerRelay()
    {
        unset($this->controller_relay);
    }

    /**
     * The controller relay resource to be created. Client must not set the
     * `ControllerRelay.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.ControllerRelay controller_relay = 3;</code>
     * @param \Saltoapis\Nebula\Controller\V1\ControllerRelay $var
     * @return $this
     */
    public function setControllerRelay($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Controller\V1\ControllerRelay::class);
        $this->controller_relay = $var;

        return $this;
    }

}

