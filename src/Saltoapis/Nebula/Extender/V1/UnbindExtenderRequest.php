<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/extender/v1/extender.proto

namespace Saltoapis\Nebula\Extender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`UnbindExtender`][salto.nebula.extender.v1.ExtenderService.UnbindExtender]
 *
 * Generated from protobuf message <code>salto.nebula.extender.v1.UnbindExtenderRequest</code>
 */
class UnbindExtenderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the gateway to be unbound. For example:
     * `installations/surelock-homes-hq/extenders/baker-street-entrance`.
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
     *           The resource name of the gateway to be unbound. For example:
     *           `installations/surelock-homes-hq/extenders/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Extender\V1\Extender::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the gateway to be unbound. For example:
     * `installations/surelock-homes-hq/extenders/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the gateway to be unbound. For example:
     * `installations/surelock-homes-hq/extenders/baker-street-entrance`.
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

