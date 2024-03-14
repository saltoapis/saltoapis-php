<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Extender\V1;

/**
 * An extender allows the distance between the a gateway and an electronic lock
 * to be extended. It forwards signals between an access point (lock) and a
 * gateway. This service is responsible for managing extender resources.
 */
class ExtenderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an extender
     *
     * Creates a new extender
     * @param \Saltoapis\Nebula\Extender\V1\CreateExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateExtender(\Saltoapis\Nebula\Extender\V1\CreateExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/CreateExtender',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\Extender', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an extender
     *
     * Gets an existing extender.
     * @param \Saltoapis\Nebula\Extender\V1\GetExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetExtender(\Saltoapis\Nebula\Extender\V1\GetExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/GetExtender',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\Extender', 'decode'],
        $metadata, $options);
    }

    /**
     * List extenders
     *
     * Returns a list of extenders that have been previously created.
     * @param \Saltoapis\Nebula\Extender\V1\ListExtendersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListExtenders(\Saltoapis\Nebula\Extender\V1\ListExtendersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/ListExtenders',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\ListExtendersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an extender
     *
     * Updates an existing extender.
     * @param \Saltoapis\Nebula\Extender\V1\UpdateExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateExtender(\Saltoapis\Nebula\Extender\V1\UpdateExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/UpdateExtender',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\Extender', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an extender
     *
     * Permanently deletes an extender. This cannot be undone.
     * @param \Saltoapis\Nebula\Extender\V1\DeleteExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteExtender(\Saltoapis\Nebula\Extender\V1\DeleteExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/DeleteExtender',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind an extender
     *
     * Binds an extender. Binding an extender assigns a device
     * identifier to the extender.
     * @param \Saltoapis\Nebula\Extender\V1\BindExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindExtender(\Saltoapis\Nebula\Extender\V1\BindExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/BindExtender',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\BindExtenderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind an extender
     *
     * Unbinds an extender. Unbinding an extender removes the
     * device identifier from the extender.
     * @param \Saltoapis\Nebula\Extender\V1\UnbindExtenderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindExtender(\Saltoapis\Nebula\Extender\V1\UnbindExtenderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/UnbindExtender',
        $argument,
        ['\Saltoapis\Nebula\Extender\V1\UnbindExtenderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update extender firmware
     *
     * Updates an extender's firmware. SALTO provides firmware updates when
     * new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\Extender\V1\UpdateExtenderFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateExtenderFirmware(\Saltoapis\Nebula\Extender\V1\UpdateExtenderFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.extender.v1.ExtenderService/UpdateExtenderFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
