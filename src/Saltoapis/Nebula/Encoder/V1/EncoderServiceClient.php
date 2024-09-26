<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Encoder\V1;

/**
 * A card encoder is an external device that reads and updates physical card
 * keys with access information. This service is responsible for managing
 * encoder resources.
 */
class EncoderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an encoder
     *
     * Creates a new encoder.
     * @param \Saltoapis\Nebula\Encoder\V1\CreateEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateEncoder(\Saltoapis\Nebula\Encoder\V1\CreateEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/CreateEncoder',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\Encoder', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an encoder
     *
     * Gets an existing encoder.
     * @param \Saltoapis\Nebula\Encoder\V1\GetEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEncoder(\Saltoapis\Nebula\Encoder\V1\GetEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/GetEncoder',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\Encoder', 'decode'],
        $metadata, $options);
    }

    /**
     * List encoders
     *
     * Returns a list of encoders that have been previously created.
     * @param \Saltoapis\Nebula\Encoder\V1\ListEncodersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEncoders(\Saltoapis\Nebula\Encoder\V1\ListEncodersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/ListEncoders',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\ListEncodersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an encoder
     *
     * Updates an existing encoder.
     * @param \Saltoapis\Nebula\Encoder\V1\UpdateEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEncoder(\Saltoapis\Nebula\Encoder\V1\UpdateEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/UpdateEncoder',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\Encoder', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an encoder
     *
     * Permanently deletes an encoder. This cannot be undone.
     * @param \Saltoapis\Nebula\Encoder\V1\DeleteEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteEncoder(\Saltoapis\Nebula\Encoder\V1\DeleteEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/DeleteEncoder',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Initialize an encoder
     *
     * Initializes an encoder. Encoders need to be initialized before
     * you can start to use them.
     * @param \Saltoapis\Nebula\Encoder\V1\InitializeEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitializeEncoder(\Saltoapis\Nebula\Encoder\V1\InitializeEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/InitializeEncoder',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Configure an encoder
     *
     * Configures an encoder. Configuring an encoder implies adding some
     * information to the encoder based on the current settings.
     * @param \Saltoapis\Nebula\Encoder\V1\ConfigureEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureEncoder(\Saltoapis\Nebula\Encoder\V1\ConfigureEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/ConfigureEncoder',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Reset an encoder
     *
     * Resetting a device such as an encoder means returning it to its factory
     * settings. Resetting is the process of removing the identity as
     * well as all the associated information of an already configured device.
     * Once a device has been reset, you need to reconfigure it.
     * @param \Saltoapis\Nebula\Encoder\V1\ResetEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetEncoder(\Saltoapis\Nebula\Encoder\V1\ResetEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/ResetEncoder',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Update encoder firmware
     *
     * Updates an encoder's firmware. SALTO provides firmware updates
     * when new functionality is available or when we fix a bug.
     * @param \Saltoapis\Nebula\Encoder\V1\UpdateEncoderFirmwareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEncoderFirmware(\Saltoapis\Nebula\Encoder\V1\UpdateEncoderFirmwareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/UpdateEncoderFirmware',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Bind an encoder
     *
     * Binds an encoder. Binding an encoder assigns a device
     * identifier to the encoder. After binding, the device can then be
     * initialized or configured.
     * @param \Saltoapis\Nebula\Encoder\V1\BindEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindEncoder(\Saltoapis\Nebula\Encoder\V1\BindEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/BindEncoder',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\BindEncoderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unbind an encoder
     *
     * Unbinds an encoder. Unbinding an encoder removes the
     * device identifier from the encoder. This may be required in some
     * cases where the encoder is not available anymore because, for
     * example, it's broken or damaged. Unbinding allows the initialization of
     * the replacement device without removing it from the installation. It also
     * means the device keeps all the information associated with it, such as
     * events.
     * @param \Saltoapis\Nebula\Encoder\V1\UnbindEncoderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindEncoder(\Saltoapis\Nebula\Encoder\V1\UnbindEncoderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/UnbindEncoder',
        $argument,
        ['\Saltoapis\Nebula\Encoder\V1\UnbindEncoderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Read a key
     *
     * Reads a key presented on an encoder.
     * (-- api-linter: core::0131::synonyms=disabled  --)
     * @param \Saltoapis\Nebula\Encoder\V1\ReadKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReadKey(\Saltoapis\Nebula\Encoder\V1\ReadKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/ReadKey',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Generate encoder firmware download URI
     *
     * Provides the download URI for the latest firmware bundle for the
     * encoder. The returned URI can be used to bring the encoder
     * firmwares up to latest.
     * @param \Saltoapis\Nebula\Encoder\V1\GenerateFirmwareDownloadUriRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateFirmwareDownloadUri(\Saltoapis\Nebula\Encoder\V1\GenerateFirmwareDownloadUriRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.encoder.v1.EncoderService/GenerateFirmwareDownloadUri',
        $argument,
        ['\Saltoapis\Longrunning\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
