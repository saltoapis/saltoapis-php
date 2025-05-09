<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/intercomadaptor/v1/intercom_adaptor.proto

namespace Saltoapis\Nebula\IntercomAdaptor\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The intercom adaptor's access point association
 *
 * Generated from protobuf message <code>salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint</code>
 */
class IntercomAdaptorAccessPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The access point resource name to bind as an association to the parent
     * intercom adaptor. For example:
     * `installations/surelock-homes-hq/access-points/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string access_point = 1;</code>
     */
    protected $access_point = '';
    /**
     * The set of learnt frames. Left unset for analog intercoms.
     *
     * Generated from protobuf field <code>optional bytes frame_settings = 2;</code>
     */
    protected $frame_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $access_point
     *           The access point resource name to bind as an association to the parent
     *           intercom adaptor. For example:
     *           `installations/surelock-homes-hq/access-points/baker-street-entrance`.
     *     @type string $frame_settings
     *           The set of learnt frames. Left unset for analog intercoms.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor::initOnce();
        parent::__construct($data);
    }

    /**
     * The access point resource name to bind as an association to the parent
     * intercom adaptor. For example:
     * `installations/surelock-homes-hq/access-points/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string access_point = 1;</code>
     * @return string
     */
    public function getAccessPoint()
    {
        return $this->access_point;
    }

    /**
     * The access point resource name to bind as an association to the parent
     * intercom adaptor. For example:
     * `installations/surelock-homes-hq/access-points/baker-street-entrance`.
     *
     * Generated from protobuf field <code>string access_point = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_point = $var;

        return $this;
    }

    /**
     * The set of learnt frames. Left unset for analog intercoms.
     *
     * Generated from protobuf field <code>optional bytes frame_settings = 2;</code>
     * @return string
     */
    public function getFrameSettings()
    {
        return isset($this->frame_settings) ? $this->frame_settings : '';
    }

    public function hasFrameSettings()
    {
        return isset($this->frame_settings);
    }

    public function clearFrameSettings()
    {
        unset($this->frame_settings);
    }

    /**
     * The set of learnt frames. Left unset for analog intercoms.
     *
     * Generated from protobuf field <code>optional bytes frame_settings = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFrameSettings($var)
    {
        GPBUtil::checkString($var, False);
        $this->frame_settings = $var;

        return $this;
    }

}

