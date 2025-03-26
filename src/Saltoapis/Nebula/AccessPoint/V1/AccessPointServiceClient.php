<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\AccessPoint\V1;

/**
 * An access point is a smart electronic locking device capable of granting or
 * denying access to a secured area. This service is responsible for managing
 * access point resources.
 */
class AccessPointServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an access point
     *
     * Creates a new access point.
     * @param \Saltoapis\Nebula\AccessPoint\V1\CreateAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\CreateAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/CreateAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPoint\V1\AccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point
     *
     * Retrieves an existing access point.
     * @param \Saltoapis\Nebula\AccessPoint\V1\GetAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\GetAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/GetAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPoint\V1\AccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * List access points
     *
     * Returns a list of access points that have been previously created.
     * @param \Saltoapis\Nebula\AccessPoint\V1\ListAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAccessPoints(\Saltoapis\Nebula\AccessPoint\V1\ListAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/ListAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\AccessPoint\V1\ListAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an access point
     *
     * Updates an existing access point.
     * @param \Saltoapis\Nebula\AccessPoint\V1\UpdateAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\UpdateAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/UpdateAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\AccessPoint\V1\AccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an access point
     *
     * Permanently deletes an access point. This cannot be undone.
     * @param \Saltoapis\Nebula\AccessPoint\V1\DeleteAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\DeleteAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/DeleteAccessPoint',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Unlock an access point
     *
     * Remotely unlocks an access point. This can be run against those access
     * points where their associated devices are online and connected.
     * @param \Saltoapis\Nebula\AccessPoint\V1\UnlockAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\UnlockAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/UnlockAccessPoint',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lock an access point
     *
     * Remotely locks an access point. This can be run against those access
     * points where their associated devices are online and connected. The lock
     * device type can only be a motorized lock. Attempting to call this method
     * on non-motorized locks will result in an INVALID_ARGUMENT error.
     * @param \Saltoapis\Nebula\AccessPoint\V1\LockAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LockAccessPoint(\Saltoapis\Nebula\AccessPoint\V1\LockAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.accesspoint.v1.AccessPointService/LockAccessPoint',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
