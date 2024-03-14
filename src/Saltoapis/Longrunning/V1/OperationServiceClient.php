<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Longrunning\V1;

/**
 * Manages long-running operations with an API service.
 *
 * When an API method normally takes long time to complete, it can be designed
 * to return [`Operation`][salto.longrunning.v1.Operation] to the client, and the
 * client can use this interface to receive the real response asynchronously by
 * polling the operation resource, or pass the operation resource to another API
 * to receive the response. Any API service that returns long-running operations
 * should implement the `OperationService` interface so developers can have a
 * consistent client experience.
 */
class OperationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a operation
     *
     * Retrieves an existing long-running operation.
     * @param \Saltoapis\Longrunning\V1\GetOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOperation(\Saltoapis\Longrunning\V1\GetOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.longrunning.v1.OperationService/GetOperation',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * List operations
     *
     * Returns a list of long-running operations that have been previously created.
     * @param \Saltoapis\Longrunning\V1\ListOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOperations(\Saltoapis\Longrunning\V1\ListOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.longrunning.v1.OperationService/ListOperations',
        $argument,
        ['\Saltoapis\Longrunning\V1\ListOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an operation
     *
     * Permanently deletes a long-running operation. This cannot be undone.
     * @param \Saltoapis\Longrunning\V1\DeleteOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOperation(\Saltoapis\Longrunning\V1\DeleteOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.longrunning.v1.OperationService/DeleteOperation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel an operation
     *
     * Starts asynchronous cancellation on a long-running operation. The server
     * makes a best effort to cancel the operation, but success is not
     * guaranteed. Clients can use
     * [OperationService.GetOperation][salto.longrunning.v1.OperationService.GetOperation]
     * or other methods to check whether the cancellation succeeded or whether
     * the operation completed despite cancellation. On successful cancellation,
     * the operation is not deleted; instead, it becomes an operation with an
     * [Operation.error][salto.longrunning.v1.Operation.error] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to
     * `Code.CANCELLED`.
     * @param \Saltoapis\Longrunning\V1\CancelOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelOperation(\Saltoapis\Longrunning\V1\CancelOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.longrunning.v1.OperationService/CancelOperation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
