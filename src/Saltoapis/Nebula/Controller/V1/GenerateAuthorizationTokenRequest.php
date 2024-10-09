<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/controller/v1/controller.proto

namespace Saltoapis\Nebula\Controller\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`GenerateAuthorizationToken`][salto.nebula.controller.v1.ControllerService.GenerateAuthorizationToken]
 *
 * Generated from protobuf message <code>salto.nebula.controller.v1.GenerateAuthorizationTokenRequest</code>
 */
class GenerateAuthorizationTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the controller that the authorization token is
     * generated for. For example:
     * `installations/surelock-homes-hq/controllers/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string controller = 1;</code>
     */
    protected $controller = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $controller
     *           The resource name of the controller that the authorization token is
     *           generated for. For example:
     *           `installations/surelock-homes-hq/controllers/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Controller\V1\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the controller that the authorization token is
     * generated for. For example:
     * `installations/surelock-homes-hq/controllers/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string controller = 1;</code>
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * The resource name of the controller that the authorization token is
     * generated for. For example:
     * `installations/surelock-homes-hq/controllers/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string controller = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setController($var)
    {
        GPBUtil::checkString($var, True);
        $this->controller = $var;

        return $this;
    }

}

