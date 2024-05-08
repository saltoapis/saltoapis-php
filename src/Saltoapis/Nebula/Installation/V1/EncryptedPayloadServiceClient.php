<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Saltoapis\Nebula\Installation\V1;

/**
 * This service is responsible for the ingestion of encrypted payloads.
 */
class EncryptedPayloadServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Ingest encrypted payloads
     *
     * Ingests encrypted payload for a given installation.
     * @param \Saltoapis\Nebula\Installation\V1\IngestEncryptedPayloadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IngestEncryptedPayloads(\Saltoapis\Nebula\Installation\V1\IngestEncryptedPayloadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salto.nebula.installation.v1.EncryptedPayloadService/IngestEncryptedPayloads',
        $argument,
        ['\Saltoapis\Nebula\Installation\V1\IngestEncryptedPayloadsResponse', 'decode'],
        $metadata, $options);
    }

}
