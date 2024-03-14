<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\DigitalKey\V1;

/**
 * DigitalKeyService is the service responsible for managing digital key
 * resources. This service manages resources for the different types of keys
 * that exist on mobile devices, such as app keys or wallet keys.
 */
class DigitalKeyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a digital key
     *
     * Gets an existing digital key.
     * @param \Saltoapis\Nebula\DigitalKey\V1\GetDigitalKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDigitalKey(\Saltoapis\Nebula\DigitalKey\V1\GetDigitalKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.digitalkey.v1.DigitalKeyService/GetDigitalKey',
        $argument,
        ['\Saltoapis\Nebula\DigitalKey\V1\DigitalKey', 'decode'],
        $metadata, $options);
    }

    /**
     * List digital keys
     *
     * Returns a list of digital keys that have been previously created.
     * @param \Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDigitalKeys(\Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.digitalkey.v1.DigitalKeyService/ListDigitalKeys',
        $argument,
        ['\Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an access point
     *
     * Gets an existing digital key's access point association.
     * @param \Saltoapis\Nebula\DigitalKey\V1\GetDigitalKeyAccessPointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDigitalKeyAccessPoint(\Saltoapis\Nebula\DigitalKey\V1\GetDigitalKeyAccessPointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.digitalkey.v1.DigitalKeyService/GetDigitalKeyAccessPoint',
        $argument,
        ['\Saltoapis\Nebula\DigitalKey\V1\DigitalKeyAccessPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * List access points
     *
     * Lists an existing digital key's access point associations.
     * @param \Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeyAccessPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDigitalKeyAccessPoints(\Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeyAccessPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.digitalkey.v1.DigitalKeyService/ListDigitalKeyAccessPoints',
        $argument,
        ['\Saltoapis\Nebula\DigitalKey\V1\ListDigitalKeyAccessPointsResponse', 'decode'],
        $metadata, $options);
    }

}
