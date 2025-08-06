<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Destination\V1;

/**
 * DestinationService is the service responsible for managing destination resources.
 * Destinations refer to feature where a controller with multiple relays can activate
 * different outputs based on keys and schedules. The primary use case is elevator control,
 * where presenting a credential at a reader would activate only the buttons for floors
 * the user has access to.
 */
class DestinationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a destination
     *
     * Creates a new destination.
     * @param \Saltoapis\Nebula\Destination\V1\CreateDestinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateDestination(\Saltoapis\Nebula\Destination\V1\CreateDestinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/CreateDestination',
        $argument,
        ['\Saltoapis\Nebula\Destination\V1\Destination', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an existing destination
     *
     * Retrieves an existing destination.
     * @param \Saltoapis\Nebula\Destination\V1\GetDestinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDestination(\Saltoapis\Nebula\Destination\V1\GetDestinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/GetDestination',
        $argument,
        ['\Saltoapis\Nebula\Destination\V1\Destination', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a batch of destinations
     *
     * Retrieves a batch of existing destinations.
     * @param \Saltoapis\Nebula\Destination\V1\BatchGetDestinationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchGetDestinations(\Saltoapis\Nebula\Destination\V1\BatchGetDestinationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/BatchGetDestinations',
        $argument,
        ['\Saltoapis\Nebula\Destination\V1\BatchGetDestinationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing destination
     *
     * Updates an existing destination.
     * @param \Saltoapis\Nebula\Destination\V1\UpdateDestinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateDestination(\Saltoapis\Nebula\Destination\V1\UpdateDestinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/UpdateDestination',
        $argument,
        ['\Saltoapis\Nebula\Destination\V1\Destination', 'decode'],
        $metadata, $options);
    }

    /**
     * List destinations
     *
     * Returns a list of destinations that have been previously created.
     * @param \Saltoapis\Nebula\Destination\V1\ListDestinationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDestinations(\Saltoapis\Nebula\Destination\V1\ListDestinationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/ListDestinations',
        $argument,
        ['\Saltoapis\Nebula\Destination\V1\ListDestinationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a destination
     *
     * Permanently deletes a destination. This cannot be undone.
     * @param \Saltoapis\Nebula\Destination\V1\DeleteDestinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDestination(\Saltoapis\Nebula\Destination\V1\DeleteDestinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.destination.v1.DestinationService/DeleteDestination',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
