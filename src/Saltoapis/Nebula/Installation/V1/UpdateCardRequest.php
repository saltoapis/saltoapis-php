<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UpdateCard`][salto.nebula.installation.v1.InstallationService.UpdateCard]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.UpdateCardRequest</code>
 */
class UpdateCardRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the subscription's payment method for which the card is being
     * requested to be updated. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
     *
     * Generated from protobuf field <code>string payment_method = 1;</code>
     */
    protected $payment_method = '';
    /**
     * The token provided for the operation.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payment_method
     *           The resource name of the subscription's payment method for which the card is being
     *           requested to be updated. For example:
     *           `installations/surelock-homes-hq/subscription/payment-method`.
     *     @type string $token
     *           The token provided for the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the subscription's payment method for which the card is being
     * requested to be updated. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
     *
     * Generated from protobuf field <code>string payment_method = 1;</code>
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * The resource name of the subscription's payment method for which the card is being
     * requested to be updated. For example:
     * `installations/surelock-homes-hq/subscription/payment-method`.
     *
     * Generated from protobuf field <code>string payment_method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_method = $var;

        return $this;
    }

    /**
     * The token provided for the operation.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * The token provided for the operation.
     *
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

