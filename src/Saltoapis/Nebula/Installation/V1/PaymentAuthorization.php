<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payment authorization for the subscription.
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.PaymentAuthorization</code>
 */
class PaymentAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the payment authorization. It must have the format of
     * `installations/{@*}subscription/payment-authorizations/*`. For example:
     * `installations/salto-hq/subscription/payment-authorizations/01HCD0YB`.
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
     *           Resource name of the payment authorization. It must have the format of
     *           `installations/{@*}subscription/payment-authorizations/*`. For example:
     *           `installations/salto-hq/subscription/payment-authorizations/01HCD0YB`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the payment authorization. It must have the format of
     * `installations/{@*}subscription/payment-authorizations/*`. For example:
     * `installations/salto-hq/subscription/payment-authorizations/01HCD0YB`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the payment authorization. It must have the format of
     * `installations/{@*}subscription/payment-authorizations/*`. For example:
     * `installations/salto-hq/subscription/payment-authorizations/01HCD0YB`.
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

