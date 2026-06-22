<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Booking\V1;

/**
 * The BookingService manages bookings within an installation.
 *
 * A booking represents the contractual agreement for a stay, including
 * reservation details, dates and guest information. This service handles
 * the lifecycle of bookings independently from the physical access control
 * systems, allowing reservations to be managed separately from device states
 * and access permissions.
 *
 * Use this service to create, retrieve, update and delete bookings as part
 * of property management operations.
 */
class BookingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a booking
     *
     * Creates a new booking in the specified installation.
     * @param \Saltoapis\Nebula\Booking\V1\CreateBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\Booking>
     */
    public function CreateBooking(\Saltoapis\Nebula\Booking\V1\CreateBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/CreateBooking',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\Booking', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a booking
     *
     * Gets an existing booking.
     * @param \Saltoapis\Nebula\Booking\V1\GetBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\Booking>
     */
    public function GetBooking(\Saltoapis\Nebula\Booking\V1\GetBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/GetBooking',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\Booking', 'decode'],
        $metadata, $options);
    }

    /**
     * List bookings
     *
     * Returns a list of bookings that have been previously created.
     * @param \Saltoapis\Nebula\Booking\V1\ListBookingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\ListBookingsResponse>
     */
    public function ListBookings(\Saltoapis\Nebula\Booking\V1\ListBookingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/ListBookings',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\ListBookingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a booking
     *
     * Updates an existing booking.
     * @param \Saltoapis\Nebula\Booking\V1\UpdateBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\Booking>
     */
    public function UpdateBooking(\Saltoapis\Nebula\Booking\V1\UpdateBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/UpdateBooking',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\Booking', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a booking
     *
     * Permanently deletes a booking. This cannot be undone.
     * @param \Saltoapis\Nebula\Booking\V1\DeleteBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteBooking(\Saltoapis\Nebula\Booking\V1\DeleteBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/DeleteBooking',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Check in a booking
     *
     * Performs the check-in process for a booking.
     * @param \Saltoapis\Nebula\Booking\V1\CheckInBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\Booking>
     */
    public function CheckInBooking(\Saltoapis\Nebula\Booking\V1\CheckInBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/CheckInBooking',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\Booking', 'decode'],
        $metadata, $options);
    }

    /**
     * Check out a booking
     *
     * Performs the check-out process for a booking.
     * @param \Saltoapis\Nebula\Booking\V1\CheckOutBookingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\Booking>
     */
    public function CheckOutBooking(\Saltoapis\Nebula\Booking\V1\CheckOutBookingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/CheckOutBooking',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\Booking', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a booking user
     *
     * Creates a booking's user association.
     * @param \Saltoapis\Nebula\Booking\V1\CreateBookingUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\BookingUser>
     */
    public function CreateBookingUser(\Saltoapis\Nebula\Booking\V1\CreateBookingUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/CreateBookingUser',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\BookingUser', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a batch of booking users
     *
     * Creates a batch of booking users. This method allows the creation of
     * multiple booking users in a single operation.
     * @param \Saltoapis\Nebula\Booking\V1\BatchCreateBookingUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\BatchCreateBookingUsersResponse>
     */
    public function BatchCreateBookingUsers(\Saltoapis\Nebula\Booking\V1\BatchCreateBookingUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/BatchCreateBookingUsers',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\BatchCreateBookingUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a booking user
     *
     * Retrieves an existing booking's user association.
     * @param \Saltoapis\Nebula\Booking\V1\GetBookingUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\BookingUser>
     */
    public function GetBookingUser(\Saltoapis\Nebula\Booking\V1\GetBookingUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/GetBookingUser',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\BookingUser', 'decode'],
        $metadata, $options);
    }

    /**
     * List booking users
     *
     * Lists an existing booking's user associations.
     * @param \Saltoapis\Nebula\Booking\V1\ListBookingUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Saltoapis\Nebula\Booking\V1\ListBookingUsersResponse>
     */
    public function ListBookingUsers(\Saltoapis\Nebula\Booking\V1\ListBookingUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/ListBookingUsers',
        $argument,
        ['\Saltoapis\Nebula\Booking\V1\ListBookingUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a booking user
     *
     * Deletes a booking's user association.
     * @param \Saltoapis\Nebula\Booking\V1\DeleteBookingUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteBookingUser(\Saltoapis\Nebula\Booking\V1\DeleteBookingUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.booking.v1.BookingService/DeleteBookingUser',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
