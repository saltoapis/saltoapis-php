<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/encrypted_payload.proto

namespace GPBMetadata\Saltoapis\Nebula\Installation\V1;

class EncryptedPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x8F\x05\x0A4salto/nebula/installation/v1/encrypted_payload.proto\x12\x1Csalto.nebula.installation.v1\"R\x0A\x1EIngestEncryptedPayloadsRequest\x12\x14\x0A\x0Cinstallation\x18\x01 \x01(\x09\x12\x1A\x0A\x12encrypted_payloads\x18\x02 \x03(\x0C\"!\x0A\x1FIngestEncryptedPayloadsResponse2\xB2\x01\x0A\x17EncryptedPayloadService\x12\x96\x01\x0A\x17IngestEncryptedPayloads\x12<.salto.nebula.installation.v1.IngestEncryptedPayloadsRequest\x1A=.salto.nebula.installation.v1.IngestEncryptedPayloadsResponseB\x84\x02\x0A\$com.saltoapis.nebula.installation.v1B\x15EncryptedPayloadProtoP\x01ZNgithub.com/saltoapis-internal/saltoapis-go/nebula/installation/v1;installation\xAA\x02 Saltoapis.Nebula.Installation.V1\xCA\x02 Saltoapis\\Nebula\\Installation\\V1\xE2\x02,GPBMetadata\\Saltoapis\\Nebula\\Installation\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

