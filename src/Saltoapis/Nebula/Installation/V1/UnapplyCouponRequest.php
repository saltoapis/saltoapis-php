<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UnapplyCoupon`][salto.nebula.installation.v1.InstallationService.UnapplyCoupon]
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.UnapplyCouponRequest</code>
 */
class UnapplyCouponRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the subscription for which the coupon is being
     * requested to be unapplied. For example:
     * `installations/surelock-homes-hq/subscription`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    protected $subscription = '';
    /**
     * The resource name of the coupon that is requested to be unapplied.
     * For example: `installations/surelock-homes-hq/subscription/coupons/01HCD0YB`.
     *
     * Generated from protobuf field <code>string coupon = 2;</code>
     */
    protected $coupon = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           The resource name of the subscription for which the coupon is being
     *           requested to be unapplied. For example:
     *           `installations/surelock-homes-hq/subscription`.
     *     @type string $coupon
     *           The resource name of the coupon that is requested to be unapplied.
     *           For example: `installations/surelock-homes-hq/subscription/coupons/01HCD0YB`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the subscription for which the coupon is being
     * requested to be unapplied. For example:
     * `installations/surelock-homes-hq/subscription`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The resource name of the subscription for which the coupon is being
     * requested to be unapplied. For example:
     * `installations/surelock-homes-hq/subscription`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * The resource name of the coupon that is requested to be unapplied.
     * For example: `installations/surelock-homes-hq/subscription/coupons/01HCD0YB`.
     *
     * Generated from protobuf field <code>string coupon = 2;</code>
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * The resource name of the coupon that is requested to be unapplied.
     * For example: `installations/surelock-homes-hq/subscription/coupons/01HCD0YB`.
     *
     * Generated from protobuf field <code>string coupon = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCoupon($var)
    {
        GPBUtil::checkString($var, True);
        $this->coupon = $var;

        return $this;
    }

}

