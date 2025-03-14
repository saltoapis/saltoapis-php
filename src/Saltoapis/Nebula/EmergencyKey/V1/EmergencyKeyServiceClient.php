<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\EmergencyKey\V1;

/**
 * Emergency keys are a credential type in Nebula, based on allowlisting,
 * that grant access to designated access points within an installation.
 * They do not expire and do not require any form of revalidation.
 * This service is responsible for managing Emergency Key resources.
 */
class EmergencyKeyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an emergency key
     *
     * Creates a new emergency key.
     * @param \Saltoapis\Nebula\EmergencyKey\V1\CreateEmergencyKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateEmergencyKey(\Saltoapis\Nebula\EmergencyKey\V1\CreateEmergencyKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.emergencykey.v1.EmergencyKeyService/CreateEmergencyKey',
        $argument,
        ['\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an emergency key
     *
     * Retrieves an existing emergency key.
     * @param \Saltoapis\Nebula\EmergencyKey\V1\GetEmergencyKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEmergencyKey(\Saltoapis\Nebula\EmergencyKey\V1\GetEmergencyKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.emergencykey.v1.EmergencyKeyService/GetEmergencyKey',
        $argument,
        ['\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey', 'decode'],
        $metadata, $options);
    }

    /**
     * List emergency keys
     *
     * Returns a list of emergency keys that have been previously created.
     * @param \Saltoapis\Nebula\EmergencyKey\V1\ListEmergencyKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEmergencyKeys(\Saltoapis\Nebula\EmergencyKey\V1\ListEmergencyKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.emergencykey.v1.EmergencyKeyService/ListEmergencyKeys',
        $argument,
        ['\Saltoapis\Nebula\EmergencyKey\V1\ListEmergencyKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an emergency key
     *
     * Updates an existing emergency key.
     * @param \Saltoapis\Nebula\EmergencyKey\V1\UpdateEmergencyKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmergencyKey(\Saltoapis\Nebula\EmergencyKey\V1\UpdateEmergencyKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.emergencykey.v1.EmergencyKeyService/UpdateEmergencyKey',
        $argument,
        ['\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an emergency key
     *
     * Deletes an existing emergency key.
     * @param \Saltoapis\Nebula\EmergencyKey\V1\DeleteEmergencyKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteEmergencyKey(\Saltoapis\Nebula\EmergencyKey\V1\DeleteEmergencyKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.emergencykey.v1.EmergencyKeyService/DeleteEmergencyKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
