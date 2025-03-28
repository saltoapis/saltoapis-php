<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace GPBMetadata\Saltoapis\Nebula\DigitalKey\V1;

class DigitalKey
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Saltoapis\Longrunning\V1\Operation::initOnce();
        \GPBMetadata\Saltoapis\Type\Color::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA3\x19\x0A,salto/nebula/digitalkey/v1/digital_key.proto\x12\x1Asalto.nebula.digitalkey.v1\x1A\$salto/longrunning/v1/operation.proto\x1A\x16salto/type/color.proto\"\xF6\x08\x0A\x0ADigitalKey\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12@\x0A\x07app_key\x18\x02 \x01(\x0B2-.salto.nebula.digitalkey.v1.DigitalKey.AppKeyH\x00\x12F\x0A\x0Awallet_key\x18\x03 \x01(\x0B20.salto.nebula.digitalkey.v1.DigitalKey.WalletKeyH\x00\x1Av\x0A\x08Metadata\x12\x0D\x0A\x05title\x18\x01 \x01(\x09\x12\x10\x0A\x08subtitle\x18\x02 \x01(\x09\x12\x11\x0A\x09photo_uri\x18\x03 \x01(\x09\x12\x0F\x0A\x07address\x18\x04 \x01(\x09\x12%\x0A\x0Atext_color\x18\x05 \x01(\x0B2\x11.salto.type.Color\x1A\xFF\x03\x0A\x06AppKey\x12A\x0A\x08metadata\x18\x01 \x01(\x0B2/.salto.nebula.digitalkey.v1.DigitalKey.Metadata\x12\x0C\x0A\x04data\x18\x02 \x01(\x0C\x12\x14\x0A\x0Cinstallation\x18\x05 \x01(\x09\x12\x11\x0A\x04unit\x18\x06 \x01(\x09H\x00\x88\x01\x01\x12\x17\x0A\x0Finstallation_id\x18\x03 \x01(\x09\x12\x14\x0A\x07unit_id\x18\x04 \x01(\x09H\x01\x88\x01\x01\x12;\x0A\x17access_points_sync_time\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12e\x0A\x18access_points_sync_state\x18\x08 \x01(\x0E2C.salto.nebula.digitalkey.v1.DigitalKey.AppKey.AccessPointsSyncState\"\x92\x01\x0A\x15AccessPointsSyncState\x12(\x0A\$ACCESS_POINTS_SYNC_STATE_UNSPECIFIED\x10\x00\x12\x0F\x0A\x0BINVALIDATED\x10\x03\x12\x0B\x0A\x07SYNCING\x10\x01\x12\x0A\x0A\x06SYNCED\x10\x02\x12\x11\x0A\x0DNOT_SUPPORTED\x10\x04\x12\x12\x0A\x0ELIMIT_EXCEEDED\x10\x05B\x07\x0A\x05_unitB\x0A\x0A\x08_unit_id\x1A\xCD\x02\x0A\x09WalletKey\x12A\x0A\x08metadata\x18\x01 \x01(\x0B2/.salto.nebula.digitalkey.v1.DigitalKey.Metadata\x12Z\x0A\x10hydra_credential\x18\x02 \x01(\x0B2@.salto.nebula.digitalkey.v1.DigitalKey.WalletKey.HydraCredential\x1A\xA0\x01\x0A\x0FHydraCredential\x12\x15\x0A\x0Dcredential_id\x18\x01 \x01(\x09\x12\x1B\x0A\x13sharing_instance_id\x18\x02 \x01(\x09\x12\x14\x0A\x0Caccount_hash\x18\x03 \x01(\x09\x12\x13\x0A\x0Btemplate_id\x18\x04 \x01(\x09\x12\x18\x0A\x10relying_party_id\x18\x05 \x01(\x09\x12\x14\x0A\x0Creference_id\x18\x06 \x01(\x09B\x06\x0A\x04type\"\$\x0A\x14GetDigitalKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"a\x0A\x16ListDigitalKeysRequest\x12\x11\x0A\x09page_size\x18\x01 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x02 \x01(\x09\x12\x0E\x0A\x06filter\x18\x03 \x01(\x09\x12\x10\x0A\x08order_by\x18\x04 \x01(\x09\"p\x0A\x17ListDigitalKeysResponse\x12<\x0A\x0Cdigital_keys\x18\x01 \x03(\x0B2&.salto.nebula.digitalkey.v1.DigitalKey\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"N\x0A\x15DigitalKeyAccessPoint\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x02 \x01(\x09\x12\x11\x0A\x09device_id\x18\x03 \x01(\x09\"/\x0A\x1FGetDigitalKeyAccessPointRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"j\x0A!ListDigitalKeyAccessPointsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x0E\x0A\x06filter\x18\x02 \x01(\x09\x12\x11\x0A\x09page_size\x18\x03 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x04 \x01(\x09\"\x93\x01\x0A\"ListDigitalKeyAccessPointsResponse\x12T\x0A\x19digital_key_access_points\x18\x01 \x03(\x0B21.salto.nebula.digitalkey.v1.DigitalKeyAccessPoint\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"1\x0A!SyncDigitalKeyAccessPointsRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\$\x0A\"SyncDigitalKeyAccessPointsResponse\"\$\x0A\"SyncDigitalKeyAccessPointsMetadata\"2\x0A\"UnlockDigitalKeyAccessPointRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"%\x0A#UnlockDigitalKeyAccessPointResponse\"%\x0A#UnlockDigitalKeyAccessPointMetadata2\xA3\x06\x0A\x11DigitalKeyService\x12i\x0A\x0DGetDigitalKey\x120.salto.nebula.digitalkey.v1.GetDigitalKeyRequest\x1A&.salto.nebula.digitalkey.v1.DigitalKey\x12z\x0A\x0FListDigitalKeys\x122.salto.nebula.digitalkey.v1.ListDigitalKeysRequest\x1A3.salto.nebula.digitalkey.v1.ListDigitalKeysResponse\x12\x8A\x01\x0A\x18GetDigitalKeyAccessPoint\x12;.salto.nebula.digitalkey.v1.GetDigitalKeyAccessPointRequest\x1A1.salto.nebula.digitalkey.v1.DigitalKeyAccessPoint\x12\x9B\x01\x0A\x1AListDigitalKeyAccessPoints\x12=.salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsRequest\x1A>.salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsResponse\x12|\x0A\x1ASyncDigitalKeyAccessPoints\x12=.salto.nebula.digitalkey.v1.SyncDigitalKeyAccessPointsRequest\x1A\x1F.salto.longrunning.v1.Operation\x12~\x0A\x1BUnlockDigitalKeyAccessPoint\x12>.salto.nebula.digitalkey.v1.UnlockDigitalKeyAccessPointRequest\x1A\x1F.salto.longrunning.v1.OperationB\xF2\x01\x0A\"com.saltoapis.nebula.digitalkey.v1B\x0FDigitalKeyProtoP\x01ZJgithub.com/saltoapis-internal/saltoapis-go/nebula/digitalkey/v1;digitalkey\xAA\x02\x1ESaltoapis.Nebula.DigitalKey.V1\xCA\x02\x1ESaltoapis\\Nebula\\DigitalKey\\V1\xE2\x02*GPBMetadata\\Saltoapis\\Nebula\\DigitalKey\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

