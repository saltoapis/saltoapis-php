<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/electroniclock/v1/electronic_lock.proto

namespace GPBMetadata\Saltoapis\Nebula\ElectronicLock\V1;

class ElectronicLock
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Saltoapis\Longrunning\V1\Operation::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xEE\x1F\x0A4salto/nebula/electroniclock/v1/electronic_lock.proto\x12\x1Esalto.nebula.electroniclock.v1\x1A google/protobuf/field_mask.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A\$salto/longrunning/v1/operation.proto\"\xC1\x03\x0A\x0EElectronicLock\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x02 \x01(\x09\x12\x16\x0A\x09device_id\x18\x03 \x01(\x09H\x01\x88\x01\x01\x12\x11\x0A\x07gateway\x18\x04 \x01(\x09H\x00\x12\x12\x0A\x08extender\x18\x05 \x01(\x09H\x00\x12\x14\x0A\x0Caccess_point\x18\x06 \x01(\x09\x12\x13\x0A\x0Binitialized\x18\x07 \x01(\x08\x12\x10\x0A\x08outdated\x18\x08 \x01(\x08\x12\x16\x0A\x09connected\x18\x09 \x01(\x08H\x02\x88\x01\x01\x12\x13\x0A\x0Blow_battery\x18\x0A \x01(\x08\x123\x0A\x0Flast_event_time\x18\x0B \x01(\x0B2\x1A.google.protobuf.Timestamp\x12!\x0A\x14calibration_settings\x18\x0C \x01(\x0CH\x03\x88\x01\x01\x12&\x0A\x19force_rotate_carriage_end\x18\x0D \x01(\x08H\x04\x88\x01\x01B\x0F\x0A\x0Dparent_deviceB\x0C\x0A\x0A_device_idB\x0C\x0A\x0A_connectedB\x17\x0A\x15_calibration_settingsB\x1C\x0A\x1A_force_rotate_carriage_end\"\xAE\x01\x0A\x1BCreateElectronicLockRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x1F\x0A\x12electronic_lock_id\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12G\x0A\x0Felectronic_lock\x18\x03 \x01(\x0B2..salto.nebula.electroniclock.v1.ElectronicLockB\x15\x0A\x13_electronic_lock_id\"(\x0A\x18GetElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"u\x0A\x1AListElectronicLocksRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"\x80\x01\x0A\x1BListElectronicLocksResponse\x12H\x0A\x10electronic_locks\x18\x01 \x03(\x0B2..salto.nebula.electroniclock.v1.ElectronicLock\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"\x97\x01\x0A\x1BUpdateElectronicLockRequest\x12G\x0A\x0Felectronic_lock\x18\x01 \x01(\x0B2..salto.nebula.electroniclock.v1.ElectronicLock\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"+\x0A\x1BDeleteElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"<\x0A\x19BindElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x11\x0A\x09device_id\x18\x02 \x01(\x09\"\x1C\x0A\x1ABindElectronicLockResponse\":\x0A\x1BUnbindElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x05force\x18\x02 \x01(\x08\"\x1E\x0A\x1CUnbindElectronicLockResponse\"/\x0A\x1FInitializeElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\"\x0A InitializeElectronicLockResponse\"<\x0A InitializeElectronicLockMetadata\x12\x18\x0A\x10progress_percent\x18\x01 \x01(\x05\".\x0A\x1EConfigureElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"!\x0A\x1FConfigureElectronicLockResponse\"!\x0A\x1FConfigureElectronicLockMetadata\"*\x0A\x1AResetElectronicLockRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x1D\x0A\x1BResetElectronicLockResponse\"\x1D\x0A\x1BResetElectronicLockMetadata\">\x0A#UpdateElectronicLockFirmwareRequest\x12\x17\x0A\x0Felectronic_lock\x18\x01 \x01(\x09\"&\x0A\$UpdateElectronicLockFirmwareResponse\"@\x0A\$UpdateElectronicLockFirmwareMetadata\x12\x18\x0A\x10progress_percent\x18\x01 \x01(\x05\"<\x0A!GenerateAuthorizationTokenRequest\x12\x17\x0A\x0Felectronic_lock\x18\x01 \x01(\x09\"A\x0A\"GenerateAuthorizationTokenResponse\x12\x1B\x0A\x13authorization_token\x18\x01 \x01(\x0C2\xDD\x0C\x0A\x15ElectronicLockService\x12\x83\x01\x0A\x14CreateElectronicLock\x12;.salto.nebula.electroniclock.v1.CreateElectronicLockRequest\x1A..salto.nebula.electroniclock.v1.ElectronicLock\x12}\x0A\x11GetElectronicLock\x128.salto.nebula.electroniclock.v1.GetElectronicLockRequest\x1A..salto.nebula.electroniclock.v1.ElectronicLock\x12\x8E\x01\x0A\x13ListElectronicLocks\x12:.salto.nebula.electroniclock.v1.ListElectronicLocksRequest\x1A;.salto.nebula.electroniclock.v1.ListElectronicLocksResponse\x12\x83\x01\x0A\x14UpdateElectronicLock\x12;.salto.nebula.electroniclock.v1.UpdateElectronicLockRequest\x1A..salto.nebula.electroniclock.v1.ElectronicLock\x12k\x0A\x14DeleteElectronicLock\x12;.salto.nebula.electroniclock.v1.DeleteElectronicLockRequest\x1A\x16.google.protobuf.Empty\x12\x8B\x01\x0A\x12BindElectronicLock\x129.salto.nebula.electroniclock.v1.BindElectronicLockRequest\x1A:.salto.nebula.electroniclock.v1.BindElectronicLockResponse\x12\x91\x01\x0A\x14UnbindElectronicLock\x12;.salto.nebula.electroniclock.v1.UnbindElectronicLockRequest\x1A<.salto.nebula.electroniclock.v1.UnbindElectronicLockResponse\x12|\x0A\x18InitializeElectronicLock\x12?.salto.nebula.electroniclock.v1.InitializeElectronicLockRequest\x1A\x1F.salto.longrunning.v1.Operation\x12z\x0A\x17ConfigureElectronicLock\x12>.salto.nebula.electroniclock.v1.ConfigureElectronicLockRequest\x1A\x1F.salto.longrunning.v1.Operation\x12r\x0A\x13ResetElectronicLock\x12:.salto.nebula.electroniclock.v1.ResetElectronicLockRequest\x1A\x1F.salto.longrunning.v1.Operation\x12\x84\x01\x0A\x1CUpdateElectronicLockFirmware\x12C.salto.nebula.electroniclock.v1.UpdateElectronicLockFirmwareRequest\x1A\x1F.salto.longrunning.v1.Operation\x12\xA3\x01\x0A\x1AGenerateAuthorizationToken\x12A.salto.nebula.electroniclock.v1.GenerateAuthorizationTokenRequest\x1AB.salto.nebula.electroniclock.v1.GenerateAuthorizationTokenResponseB\x8E\x02\x0A&com.saltoapis.nebula.electroniclock.v1B\x13ElectronicLockProtoP\x01ZRgithub.com/saltoapis-internal/saltoapis-go/nebula/electroniclock/v1;electroniclock\xAA\x02\"Saltoapis.Nebula.ElectronicLock.V1\xCA\x02\"Saltoapis\\Nebula\\ElectronicLock\\V1\xE2\x02.GPBMetadata\\Saltoapis\\Nebula\\ElectronicLock\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

