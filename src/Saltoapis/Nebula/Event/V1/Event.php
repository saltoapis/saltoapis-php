<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/event/v1/event.proto

namespace Saltoapis\Nebula\Event\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The event object
 *
 * Generated from protobuf message <code>salto.nebula.event.v1.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     *  Resource name of the event. It must have the format
     * `installations/{@*}events/*`. For example:
     * `installations/surelock-homes-hq/events/01ARZ3NDEKTSV4RRFFQ69G5FAV`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Type of occurrence which has taken place. Often this attribute is used
     * for routing, observability, policy enforcement, etc.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * This describes the event producer.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     */
    protected $resource = '';
    /**
     * Timestamp of when the event has been created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    protected $create_time = null;
    /**
     * Timestamp of when the occurrence took place. If the time of the
     * occurrence cannot be determined then this attribute is set to the current
     * time by the producer. All producers for the type of event are consistent
     * in this respect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp occur_time = 5;</code>
     */
    protected $occur_time = null;
    /**
     * The event entry payload, represented as a structure that is
     * expressed as a JSON object.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *            Resource name of the event. It must have the format
     *           `installations/{@*}events/*`. For example:
     *           `installations/surelock-homes-hq/events/01ARZ3NDEKTSV4RRFFQ69G5FAV`.
     *     @type string $type
     *           Type of occurrence which has taken place. Often this attribute is used
     *           for routing, observability, policy enforcement, etc.
     *     @type string $resource
     *           This describes the event producer.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Timestamp of when the event has been created.
     *     @type \Google\Protobuf\Timestamp $occur_time
     *           Timestamp of when the occurrence took place. If the time of the
     *           occurrence cannot be determined then this attribute is set to the current
     *           time by the producer. All producers for the type of event are consistent
     *           in this respect.
     *     @type \Google\Protobuf\Struct $data
     *           The event entry payload, represented as a structure that is
     *           expressed as a JSON object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Event\V1\Event::initOnce();
        parent::__construct($data);
    }

    /**
     *  Resource name of the event. It must have the format
     * `installations/{@*}events/*`. For example:
     * `installations/surelock-homes-hq/events/01ARZ3NDEKTSV4RRFFQ69G5FAV`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *  Resource name of the event. It must have the format
     * `installations/{@*}events/*`. For example:
     * `installations/surelock-homes-hq/events/01ARZ3NDEKTSV4RRFFQ69G5FAV`.
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
     * Type of occurrence which has taken place. Often this attribute is used
     * for routing, observability, policy enforcement, etc.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of occurrence which has taken place. Often this attribute is used
     * for routing, observability, policy enforcement, etc.
     *
     * Generated from protobuf field <code>string type = 2;</code>
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
     * This describes the event producer.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * This describes the event producer.
     *
     * Generated from protobuf field <code>string resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Timestamp of when the event has been created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Timestamp of when the event has been created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Timestamp of when the occurrence took place. If the time of the
     * occurrence cannot be determined then this attribute is set to the current
     * time by the producer. All producers for the type of event are consistent
     * in this respect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp occur_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOccurTime()
    {
        return $this->occur_time;
    }

    public function hasOccurTime()
    {
        return isset($this->occur_time);
    }

    public function clearOccurTime()
    {
        unset($this->occur_time);
    }

    /**
     * Timestamp of when the occurrence took place. If the time of the
     * occurrence cannot be determined then this attribute is set to the current
     * time by the producer. All producers for the type of event are consistent
     * in this respect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp occur_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOccurTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->occur_time = $var;

        return $this;
    }

    /**
     * The event entry payload, represented as a structure that is
     * expressed as a JSON object.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * The event entry payload, represented as a structure that is
     * expressed as a JSON object.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->data = $var;

        return $this;
    }

}

