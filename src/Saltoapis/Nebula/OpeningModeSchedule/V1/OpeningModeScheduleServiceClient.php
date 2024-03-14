<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\OpeningModeSchedule\V1;

/**
 * An opening mode is a type of behavior which can be applied to a specific
 * access point or collection of access points. For example: Office or Toggle.
 * This service allows you to make a number of different opening modes switch
 * automatically and vary across different time periods.
 */
class OpeningModeScheduleServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an opening mode schedule
     *
     * Creates an opening mode schedule.
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\CreateOpeningModeScheduleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOpeningModeSchedule(\Saltoapis\Nebula\OpeningModeSchedule\V1\CreateOpeningModeScheduleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService/CreateOpeningModeSchedule',
        $argument,
        ['\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an opening mode schedule
     *
     * Gets an existing opening mode schedule.
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\GetOpeningModeScheduleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOpeningModeSchedule(\Saltoapis\Nebula\OpeningModeSchedule\V1\GetOpeningModeScheduleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService/GetOpeningModeSchedule',
        $argument,
        ['\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule', 'decode'],
        $metadata, $options);
    }

    /**
     * List opening mode schedules
     *
     * Returns a list of opening mode schedules that have been previously
     * created.
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\ListOpeningModeSchedulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOpeningModeSchedules(\Saltoapis\Nebula\OpeningModeSchedule\V1\ListOpeningModeSchedulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService/ListOpeningModeSchedules',
        $argument,
        ['\Saltoapis\Nebula\OpeningModeSchedule\V1\ListOpeningModeSchedulesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an opening mode schedule
     *
     * Updates an existing opening mode schedule.
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\UpdateOpeningModeScheduleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOpeningModeSchedule(\Saltoapis\Nebula\OpeningModeSchedule\V1\UpdateOpeningModeScheduleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService/UpdateOpeningModeSchedule',
        $argument,
        ['\Saltoapis\Nebula\OpeningModeSchedule\V1\OpeningModeSchedule', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an opening mode schedule
     *
     * Permanently deletes an opening mode schedule. This cannot be undone.
     * @param \Saltoapis\Nebula\OpeningModeSchedule\V1\DeleteOpeningModeScheduleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOpeningModeSchedule(\Saltoapis\Nebula\OpeningModeSchedule\V1\DeleteOpeningModeScheduleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.openingmodeschedule.v1.OpeningModeScheduleService/DeleteOpeningModeSchedule',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
