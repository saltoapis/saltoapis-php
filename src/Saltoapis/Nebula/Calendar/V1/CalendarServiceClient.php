<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Calendar\V1;

/**
 * The calendar functionality defines your organization's working calendar.
 * For example, you can define public holidays, company holidays and company
 * shutdowns. This service is responsible for managing calendar resources.
 */
class CalendarServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a calendar
     *
     * Creates a calendar.
     * @param \Saltoapis\Nebula\Calendar\V1\CreateCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCalendar(\Saltoapis\Nebula\Calendar\V1\CreateCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/CreateCalendar',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Calendar', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a calendar
     *
     * Gets an existing calendar.
     * @param \Saltoapis\Nebula\Calendar\V1\GetCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCalendar(\Saltoapis\Nebula\Calendar\V1\GetCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/GetCalendar',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Calendar', 'decode'],
        $metadata, $options);
    }

    /**
     * List calendars
     *
     * Returns a list of calendars that have been previously created.
     * @param \Saltoapis\Nebula\Calendar\V1\ListCalendarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCalendars(\Saltoapis\Nebula\Calendar\V1\ListCalendarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/ListCalendars',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\ListCalendarsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a calendar
     *
     * Updates an existing calendar.
     * @param \Saltoapis\Nebula\Calendar\V1\UpdateCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCalendar(\Saltoapis\Nebula\Calendar\V1\UpdateCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/UpdateCalendar',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Calendar', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a calendar
     *
     * Permanently deletes a calendar. This cannot be undone.
     * @param \Saltoapis\Nebula\Calendar\V1\DeleteCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCalendar(\Saltoapis\Nebula\Calendar\V1\DeleteCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/DeleteCalendar',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a calendar event
     *
     * Creates a calendar event.
     * @param \Saltoapis\Nebula\Calendar\V1\CreateEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateEvent(\Saltoapis\Nebula\Calendar\V1\CreateEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/CreateEvent',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a calendar event
     *
     * Gets an existing calendar event.
     * @param \Saltoapis\Nebula\Calendar\V1\GetEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEvent(\Saltoapis\Nebula\Calendar\V1\GetEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/GetEvent',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * List calendar events
     *
     * Lists existing calendar events.
     * @param \Saltoapis\Nebula\Calendar\V1\ListEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEvents(\Saltoapis\Nebula\Calendar\V1\ListEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/ListEvents',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\ListEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a calendar event
     *
     * Updates an existing calendar event.
     * @param \Saltoapis\Nebula\Calendar\V1\UpdateEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEvent(\Saltoapis\Nebula\Calendar\V1\UpdateEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/UpdateEvent',
        $argument,
        ['\Saltoapis\Nebula\Calendar\V1\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a calendar event
     *
     * Permanently deletes a calendar event. This cannot be undone.
     * @param \Saltoapis\Nebula\Calendar\V1\DeleteEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteEvent(\Saltoapis\Nebula\Calendar\V1\DeleteEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.calendar.v1.CalendarService/DeleteEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
