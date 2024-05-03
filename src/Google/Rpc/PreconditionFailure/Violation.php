<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc\PreconditionFailure;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message type used to describe a single precondition failure.
 *
 * Generated from protobuf message <code>google.rpc.PreconditionFailure.Violation</code>
 */
class Violation extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of PreconditionFailure. We recommend using a service-specific
     * enum type to define the supported precondition violation subjects. For
     * example, "TOS" for "Terms of Service violation".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * The subject, relative to the type, that failed.
     * For example, "google.com/cloud" relative to the "TOS" type would indicate
     * which terms of service is being referenced.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    protected $subject = '';
    /**
     * A description of how the precondition failed. Developers can use this
     * description to understand how to fix the failure.
     * For example: "Terms of service not accepted".
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The type of PreconditionFailure. We recommend using a service-specific
     *           enum type to define the supported precondition violation subjects. For
     *           example, "TOS" for "Terms of Service violation".
     *     @type string $subject
     *           The subject, relative to the type, that failed.
     *           For example, "google.com/cloud" relative to the "TOS" type would indicate
     *           which terms of service is being referenced.
     *     @type string $description
     *           A description of how the precondition failed. Developers can use this
     *           description to understand how to fix the failure.
     *           For example: "Terms of service not accepted".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of PreconditionFailure. We recommend using a service-specific
     * enum type to define the supported precondition violation subjects. For
     * example, "TOS" for "Terms of Service violation".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of PreconditionFailure. We recommend using a service-specific
     * enum type to define the supported precondition violation subjects. For
     * example, "TOS" for "Terms of Service violation".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The subject, relative to the type, that failed.
     * For example, "google.com/cloud" relative to the "TOS" type would indicate
     * which terms of service is being referenced.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject, relative to the type, that failed.
     * For example, "google.com/cloud" relative to the "TOS" type would indicate
     * which terms of service is being referenced.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * A description of how the precondition failed. Developers can use this
     * description to understand how to fix the failure.
     * For example: "Terms of service not accepted".
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of how the precondition failed. Developers can use this
     * description to understand how to fix the failure.
     * For example: "Terms of service not accepted".
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

