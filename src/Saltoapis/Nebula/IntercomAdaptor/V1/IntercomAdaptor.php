<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/intercomadaptor/v1/intercom_adaptor.proto

namespace Saltoapis\Nebula\IntercomAdaptor\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The intercom adaptor object
 *
 * Generated from protobuf message <code>salto.nebula.intercomadaptor.v1.IntercomAdaptor</code>
 */
class IntercomAdaptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the intercom adaptor. It must have the format of
     * `installations/{@*}intercom-adaptors/*`. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/dancing-men`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Display name of the intercom adaptor.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, intercom adaptors and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 3;</code>
     */
    protected $device_id = null;
    /**
     * The access points that the intercom adaptor gives coverage to.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint access_points = 6;</code>
     */
    private $access_points;
    /**
     * Indicates whether this intercom adaptor has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.UpdateIntercomAdaptor]
     * operation. To change the value of this field, you must call
     * [`InitializeIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.InitializeIntercomAdaptor].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 7;</code>
     */
    protected $initialized = false;
    /**
     * Indicates whether this intercom adaptor has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 8;</code>
     */
    protected $outdated = false;
    /**
     * Indicates whether this intercom adaptor is connected or not. It's
     * considered connected if there has been at least one communication with it
     * within the last 10 minutes.
     *
     * Generated from protobuf field <code>bool connected = 9;</code>
     */
    protected $connected = false;
    /**
     * Indicates whether the battery of this intercom adaptor is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 10;</code>
     */
    protected $low_battery = false;
    /**
     * The last time an event was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_event_time = 11;</code>
     */
    protected $last_event_time = null;
    /**
     * Reference to intercom system model it is connected to. It will be used to
     * know which parametrization to apply when configuring it.
     *
     * Generated from protobuf field <code>optional string intercom = 12;</code>
     */
    protected $intercom = null;
    /**
     * The file resource names for the intercom adaptor photos. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string photos = 13;</code>
     */
    private $photos;
    /**
     * The URIs to view the intercom adaptor photos.
     *
     * Generated from protobuf field <code>repeated string photo_uris = 14;</code>
     */
    private $photo_uris;
    /**
     * The file resource names for intercom adaptor readings retrieved from the device's bus.
     * It comes into play when the learning process encounters unexpected issues, prompting expert
     * analysis of the readings. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string readings = 15;</code>
     */
    private $readings;
    protected $parent_device;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the intercom adaptor. It must have the format of
     *           `installations/{@*}intercom-adaptors/*`. For example:
     *           `installations/surelock-homes-hq/intercom-adaptors/dancing-men`.
     *     @type string $display_name
     *           Display name of the intercom adaptor.
     *     @type string $device_id
     *           Globally unique identifier that is used across all devices manufactured
     *           by SALTO, including gateways, extenders, intercom adaptors and so on.
     *     @type string $gateway
     *           Parent name, when intercom adaptor is connected to a gateway
     *     @type string $extender
     *           Parent name, when intercom adaptor is connected to an extender
     *     @type array<\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptorAccessPoint>|\Google\Protobuf\Internal\RepeatedField $access_points
     *           The access points that the intercom adaptor gives coverage to.
     *     @type bool $initialized
     *           Indicates whether this intercom adaptor has been initialized or not. This
     *           field cannot be modified using a standard
     *           [`UpdateIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.UpdateIntercomAdaptor]
     *           operation. To change the value of this field, you must call
     *           [`InitializeIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.InitializeIntercomAdaptor].
     *           If the value is `false` also applies to the case where the
     *           initialization process has been initiated but where it has not finished.
     *     @type bool $outdated
     *           Indicates whether this intercom adaptor has pending updates or not. This
     *           could be because there was a pending configuration or a firmware update
     *           and is conditionally set based on the current installation settings.
     *     @type bool $connected
     *           Indicates whether this intercom adaptor is connected or not. It's
     *           considered connected if there has been at least one communication with it
     *           within the last 10 minutes.
     *     @type bool $low_battery
     *           Indicates whether the battery of this intercom adaptor is low, and needs
     *           replacing, or is normal and doesn't need replacing.
     *     @type \Google\Protobuf\Timestamp $last_event_time
     *           The last time an event was received.
     *     @type string $intercom
     *           Reference to intercom system model it is connected to. It will be used to
     *           know which parametrization to apply when configuring it.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $photos
     *           The file resource names for the intercom adaptor photos. It must have the
     *           format of
     *           `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $photo_uris
     *           The URIs to view the intercom adaptor photos.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $readings
     *           The file resource names for intercom adaptor readings retrieved from the device's bus.
     *           It comes into play when the learning process encounters unexpected issues, prompting expert
     *           analysis of the readings. It must have the
     *           format of
     *           `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the intercom adaptor. It must have the format of
     * `installations/{@*}intercom-adaptors/*`. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/dancing-men`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the intercom adaptor. It must have the format of
     * `installations/{@*}intercom-adaptors/*`. For example:
     * `installations/surelock-homes-hq/intercom-adaptors/dancing-men`.
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
     * Display name of the intercom adaptor.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of the intercom adaptor.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, intercom adaptors and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 3;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return isset($this->device_id) ? $this->device_id : '';
    }

    public function hasDeviceId()
    {
        return isset($this->device_id);
    }

    public function clearDeviceId()
    {
        unset($this->device_id);
    }

    /**
     * Globally unique identifier that is used across all devices manufactured
     * by SALTO, including gateways, extenders, intercom adaptors and so on.
     *
     * Generated from protobuf field <code>optional string device_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Parent name, when intercom adaptor is connected to a gateway
     *
     * Generated from protobuf field <code>string gateway = 4;</code>
     * @return string
     */
    public function getGateway()
    {
        return $this->readOneof(4);
    }

    public function hasGateway()
    {
        return $this->hasOneof(4);
    }

    /**
     * Parent name, when intercom adaptor is connected to a gateway
     *
     * Generated from protobuf field <code>string gateway = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Parent name, when intercom adaptor is connected to an extender
     *
     * Generated from protobuf field <code>string extender = 5;</code>
     * @return string
     */
    public function getExtender()
    {
        return $this->readOneof(5);
    }

    public function hasExtender()
    {
        return $this->hasOneof(5);
    }

    /**
     * Parent name, when intercom adaptor is connected to an extender
     *
     * Generated from protobuf field <code>string extender = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setExtender($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The access points that the intercom adaptor gives coverage to.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint access_points = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessPoints()
    {
        return $this->access_points;
    }

    /**
     * The access points that the intercom adaptor gives coverage to.
     *
     * Generated from protobuf field <code>repeated .salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint access_points = 6;</code>
     * @param array<\Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptorAccessPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Saltoapis\Nebula\IntercomAdaptor\V1\IntercomAdaptorAccessPoint::class);
        $this->access_points = $arr;

        return $this;
    }

    /**
     * Indicates whether this intercom adaptor has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.UpdateIntercomAdaptor]
     * operation. To change the value of this field, you must call
     * [`InitializeIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.InitializeIntercomAdaptor].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 7;</code>
     * @return bool
     */
    public function getInitialized()
    {
        return $this->initialized;
    }

    /**
     * Indicates whether this intercom adaptor has been initialized or not. This
     * field cannot be modified using a standard
     * [`UpdateIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.UpdateIntercomAdaptor]
     * operation. To change the value of this field, you must call
     * [`InitializeIntercomAdaptor`][salto.nebula.intercomadaptor.v1.IntercomAdaptorService.InitializeIntercomAdaptor].
     * If the value is `false` also applies to the case where the
     * initialization process has been initiated but where it has not finished.
     *
     * Generated from protobuf field <code>bool initialized = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setInitialized($var)
    {
        GPBUtil::checkBool($var);
        $this->initialized = $var;

        return $this;
    }

    /**
     * Indicates whether this intercom adaptor has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 8;</code>
     * @return bool
     */
    public function getOutdated()
    {
        return $this->outdated;
    }

    /**
     * Indicates whether this intercom adaptor has pending updates or not. This
     * could be because there was a pending configuration or a firmware update
     * and is conditionally set based on the current installation settings.
     *
     * Generated from protobuf field <code>bool outdated = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setOutdated($var)
    {
        GPBUtil::checkBool($var);
        $this->outdated = $var;

        return $this;
    }

    /**
     * Indicates whether this intercom adaptor is connected or not. It's
     * considered connected if there has been at least one communication with it
     * within the last 10 minutes.
     *
     * Generated from protobuf field <code>bool connected = 9;</code>
     * @return bool
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * Indicates whether this intercom adaptor is connected or not. It's
     * considered connected if there has been at least one communication with it
     * within the last 10 minutes.
     *
     * Generated from protobuf field <code>bool connected = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setConnected($var)
    {
        GPBUtil::checkBool($var);
        $this->connected = $var;

        return $this;
    }

    /**
     * Indicates whether the battery of this intercom adaptor is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 10;</code>
     * @return bool
     */
    public function getLowBattery()
    {
        return $this->low_battery;
    }

    /**
     * Indicates whether the battery of this intercom adaptor is low, and needs
     * replacing, or is normal and doesn't need replacing.
     *
     * Generated from protobuf field <code>bool low_battery = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowBattery($var)
    {
        GPBUtil::checkBool($var);
        $this->low_battery = $var;

        return $this;
    }

    /**
     * The last time an event was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_event_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastEventTime()
    {
        return $this->last_event_time;
    }

    public function hasLastEventTime()
    {
        return isset($this->last_event_time);
    }

    public function clearLastEventTime()
    {
        unset($this->last_event_time);
    }

    /**
     * The last time an event was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_event_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_event_time = $var;

        return $this;
    }

    /**
     * Reference to intercom system model it is connected to. It will be used to
     * know which parametrization to apply when configuring it.
     *
     * Generated from protobuf field <code>optional string intercom = 12;</code>
     * @return string
     */
    public function getIntercom()
    {
        return isset($this->intercom) ? $this->intercom : '';
    }

    public function hasIntercom()
    {
        return isset($this->intercom);
    }

    public function clearIntercom()
    {
        unset($this->intercom);
    }

    /**
     * Reference to intercom system model it is connected to. It will be used to
     * know which parametrization to apply when configuring it.
     *
     * Generated from protobuf field <code>optional string intercom = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setIntercom($var)
    {
        GPBUtil::checkString($var, True);
        $this->intercom = $var;

        return $this;
    }

    /**
     * The file resource names for the intercom adaptor photos. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string photos = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * The file resource names for the intercom adaptor photos. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string photos = 13;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhotos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->photos = $arr;

        return $this;
    }

    /**
     * The URIs to view the intercom adaptor photos.
     *
     * Generated from protobuf field <code>repeated string photo_uris = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhotoUris()
    {
        return $this->photo_uris;
    }

    /**
     * The URIs to view the intercom adaptor photos.
     *
     * Generated from protobuf field <code>repeated string photo_uris = 14;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhotoUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->photo_uris = $arr;

        return $this;
    }

    /**
     * The file resource names for intercom adaptor readings retrieved from the device's bus.
     * It comes into play when the learning process encounters unexpected issues, prompting expert
     * analysis of the readings. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string readings = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReadings()
    {
        return $this->readings;
    }

    /**
     * The file resource names for intercom adaptor readings retrieved from the device's bus.
     * It comes into play when the learning process encounters unexpected issues, prompting expert
     * analysis of the readings. It must have the
     * format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>repeated string readings = 15;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReadings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->readings = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentDevice()
    {
        return $this->whichOneof("parent_device");
    }

}

