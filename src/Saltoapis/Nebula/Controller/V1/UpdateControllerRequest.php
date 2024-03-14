<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [UpdateController][salto.nebula.controller.v1.ControllerService.UpdateController]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.UpdateControllerRequest</code>
 */
class UpdateControllerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The controller resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.Controller controller = 1;</code>
     */
    protected $controller = null;
    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Saltoapis\Nebula\Controller\V1\Controller $controller
     *           The controller resource which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applied to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The controller resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.Controller controller = 1;</code>
     * @return \Saltoapis\Nebula\Controller\V1\Controller|null
     */
    public function getController()
    {
        return $this->controller;
    }

    public function hasController()
    {
        return isset($this->controller);
    }

    public function clearController()
    {
        unset($this->controller);
    }

    /**
     * The controller resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.salto.nebula.controller.v1.Controller controller = 1;</code>
     * @param \Saltoapis\Nebula\Controller\V1\Controller $var
     * @return $this
     */
    public function setController($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Controller\V1\Controller::class);
        $this->controller = $var;

        return $this;
    }

    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applied to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

