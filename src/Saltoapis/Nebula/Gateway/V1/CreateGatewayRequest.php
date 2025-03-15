<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/gateway/v1/gateway.proto

namespace Saltoapis\Nebula\Gateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [CreateGateway][salto.nebula.gateway.v1.GatewayService.CreateGateway]
 *
 * Generated from protobuf message <code>salto.nebula.gateway.v1.CreateGatewayRequest</code>
 */
class CreateGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent resource where to create the gateway. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The gateway ID to use for this gateway. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string gateway_id = 2;</code>
     */
    protected $gateway_id = null;
    /**
     * The gateway resource to be created. Client must not set the
     * `Gateway.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.gateway.v1.Gateway gateway = 3;</code>
     */
    protected $gateway = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent resource where to create the gateway. For
     *           example, `installations/surelock-homes-hq`.
     *     @type string $gateway_id
     *           The gateway ID to use for this gateway. In case it's empty the
     *           server will autogenerate a unique identifier.
     *     @type \Saltoapis\Nebula\Gateway\V1\Gateway $gateway
     *           The gateway resource to be created. Client must not set the
     *           `Gateway.name` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Gateway\V1\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent resource where to create the gateway. For
     * example, `installations/surelock-homes-hq`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent resource where to create the gateway. For
     * example, `installations/surelock-homes-hq`.
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
     * The gateway ID to use for this gateway. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string gateway_id = 2;</code>
     * @return string
     */
    public function getGatewayId()
    {
        return isset($this->gateway_id) ? $this->gateway_id : '';
    }

    public function hasGatewayId()
    {
        return isset($this->gateway_id);
    }

    public function clearGatewayId()
    {
        unset($this->gateway_id);
    }

    /**
     * The gateway ID to use for this gateway. In case it's empty the
     * server will autogenerate a unique identifier.
     *
     * Generated from protobuf field <code>optional string gateway_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_id = $var;

        return $this;
    }

    /**
     * The gateway resource to be created. Client must not set the
     * `Gateway.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.gateway.v1.Gateway gateway = 3;</code>
     * @return \Saltoapis\Nebula\Gateway\V1\Gateway|null
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    public function hasGateway()
    {
        return isset($this->gateway);
    }

    public function clearGateway()
    {
        unset($this->gateway);
    }

    /**
     * The gateway resource to be created. Client must not set the
     * `Gateway.name` field.
     *
     * Generated from protobuf field <code>.salto.nebula.gateway.v1.Gateway gateway = 3;</code>
     * @param \Saltoapis\Nebula\Gateway\V1\Gateway $var
     * @return $this
     */
    public function setGateway($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Gateway\V1\Gateway::class);
        $this->gateway = $var;

        return $this;
    }

}

