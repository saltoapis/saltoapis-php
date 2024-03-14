<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\File\V1;

/**
 * A file represents an object that serves as a reference for files
 * stored elsewhere. This service is responsible for managing file resources.
 */
class FileServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a file
     *
     * Creates a new file.
     * @param \Saltoapis\Nebula\File\V1\CreateFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateFile(\Saltoapis\Nebula\File\V1\CreateFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.file.v1.FileService/CreateFile',
        $argument,
        ['\Saltoapis\Nebula\File\V1\File', 'decode'],
        $metadata, $options);
    }

}
