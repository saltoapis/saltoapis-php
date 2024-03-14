<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Device\V1;

/**
 * A device could be an electronic lock, gateway, extender or any piece of
 * hardware manufactured by SALTO. This service provides access to an aggregated
 * view of all of them in an eventual consistent way.
 */
class DeviceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a device
     *
     * Gets an existing device.
     * @param \Saltoapis\Nebula\Device\V1\GetDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDevice(\Saltoapis\Nebula\Device\V1\GetDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.device.v1.DeviceService/GetDevice',
        $argument,
        ['\Saltoapis\Nebula\Device\V1\Device', 'decode'],
        $metadata, $options);
    }

    /**
     * List devices
     *
     * Returns a list of devices that have been previously created.
     * @param \Saltoapis\Nebula\Device\V1\ListDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDevices(\Saltoapis\Nebula\Device\V1\ListDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.device.v1.DeviceService/ListDevices',
        $argument,
        ['\Saltoapis\Nebula\Device\V1\ListDevicesResponse', 'decode'],
        $metadata, $options);
    }

}
