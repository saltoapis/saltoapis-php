<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Event\V1;

/**
 * Events allow you to see activity, such as an access point opening, that is
 * taking place within an installation. This service is responsible for managing
 * event resources.
 */
class EventServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get an event
     *
     * Gets an existing event.
     * @param \Saltoapis\Nebula\Event\V1\GetEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEvent(\Saltoapis\Nebula\Event\V1\GetEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.event.v1.EventService/GetEvent',
        $argument,
        ['\Saltoapis\Nebula\Event\V1\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * List events
     *
     * Returns a list of events that have been previously created.
     * @param \Saltoapis\Nebula\Event\V1\ListEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEvents(\Saltoapis\Nebula\Event\V1\ListEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.event.v1.EventService/ListEvents',
        $argument,
        ['\Saltoapis\Nebula\Event\V1\ListEventsResponse', 'decode'],
        $metadata, $options);
    }

}
