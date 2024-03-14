<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/intercomadaptor/v1/intercom_adaptor.proto

namespace Saltoapis\Nebula\IntercomAdaptor\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [`ConfigureIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.ConfigureIntercomAdaptor]
 *
 * Generated from protobuf message <code>salto.nebula.intercomadaptor.v1.ConfigureIntercomAdaptorRequest</code>
 */
class ConfigureIntercomAdaptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the intercom adaptor to be configured. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/baker-street-entrance`.
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
     *           The resource name of the intercom adaptor to be configured. For example:
     *           `installations/surelock-homes-hq/intercom-adaptors/baker-street-entrance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the intercom adaptor to be configured. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the intercom adaptor to be configured. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/baker-street-entrance`.
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

