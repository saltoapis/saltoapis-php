<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/gateway/v1/gateway.proto

namespace Saltoapis\Nebula\Gateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`InitializeGateway`][salto.nebula.gateway.v1.GatewayService.InitializeGateway]
 *
 * Generated from protobuf message <code>salto.nebula.gateway.v1.InitializeGatewayRequest</code>
 */
class InitializeGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the gateway to be initialized. For example:
     * `installations/surelock-homes-hq/gateways/conan-doyle`.
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
     *           The resource name of the gateway to be initialized. For example:
     *           `installations/surelock-homes-hq/gateways/conan-doyle`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Gateway\V1\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the gateway to be initialized. For example:
     * `installations/surelock-homes-hq/gateways/conan-doyle`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the gateway to be initialized. For example:
     * `installations/surelock-homes-hq/gateways/conan-doyle`.
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

