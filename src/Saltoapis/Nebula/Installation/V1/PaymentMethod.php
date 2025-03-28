<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a payment method, belonging to a subscription
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.PaymentMethod</code>
 */
class PaymentMethod extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the subscription's payment method. It must have the format of
     * `installations/{@*}subscription/payment-method`. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    protected $method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the subscription's payment method. It must have the format of
     *           `installations/{@*}subscription/payment-method`. For example:
     *           `installations/surelock-homes-hq/subscription/payment-method`.
     *     @type \Saltoapis\Nebula\Installation\V1\PaymentMethod\Card $card
     *           Card details.
     *     @type \Saltoapis\Nebula\Installation\V1\PaymentMethod\DirectDebit $direct_debit
     *           Direct debit details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the subscription's payment method. It must have the format of
     * `installations/{@*}subscription/payment-method`. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the subscription's payment method. It must have the format of
     * `installations/{@*}subscription/payment-method`. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
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
     * Card details.
     *
     * Generated from protobuf field <code>.salto.nebula.installation.v1.PaymentMethod.Card card = 2;</code>
     * @return \Saltoapis\Nebula\Installation\V1\PaymentMethod\Card|null
     */
    public function getCard()
    {
        return $this->readOneof(2);
    }

    public function hasCard()
    {
        return $this->hasOneof(2);
    }

    /**
     * Card details.
     *
     * Generated from protobuf field <code>.salto.nebula.installation.v1.PaymentMethod.Card card = 2;</code>
     * @param \Saltoapis\Nebula\Installation\V1\PaymentMethod\Card $var
     * @return $this
     */
    public function setCard($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Installation\V1\PaymentMethod\Card::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Direct debit details.
     *
     * Generated from protobuf field <code>.salto.nebula.installation.v1.PaymentMethod.DirectDebit direct_debit = 3;</code>
     * @return \Saltoapis\Nebula\Installation\V1\PaymentMethod\DirectDebit|null
     */
    public function getDirectDebit()
    {
        return $this->readOneof(3);
    }

    public function hasDirectDebit()
    {
        return $this->hasOneof(3);
    }

    /**
     * Direct debit details.
     *
     * Generated from protobuf field <code>.salto.nebula.installation.v1.PaymentMethod.DirectDebit direct_debit = 3;</code>
     * @param \Saltoapis\Nebula\Installation\V1\PaymentMethod\DirectDebit $var
     * @return $this
     */
    public function setDirectDebit($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Nebula\Installation\V1\PaymentMethod\DirectDebit::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->whichOneof("method");
    }

}

