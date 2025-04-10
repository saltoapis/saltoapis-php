<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/event/v1/types.proto

namespace GPBMetadata\Saltoapis\Nebula\Event\V1;

class Types
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Saltoapis\Nebula\AccessPoint\V1\AccessPoint::initOnce();
        \GPBMetadata\Saltoapis\Nebula\AccessRight\V1\AccessRight::initOnce();
        \GPBMetadata\Saltoapis\Nebula\EmergencyKey\V1\EmergencyKey::initOnce();
        \GPBMetadata\Saltoapis\Nebula\Unit\V1\Unit::initOnce();
        \GPBMetadata\Saltoapis\Nebula\User\V1\User::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x8B%\x0A!salto/nebula/event/v1/types.proto\x12\x15salto.nebula.event.v1\x1A.salto/nebula/accessright/v1/access_right.proto\x1A0salto/nebula/emergencykey/v1/emergency_key.proto\x1A\x1Fsalto/nebula/unit/v1/unit.proto\x1A\x1Fsalto/nebula/user/v1/user.proto\"T\x0A\x12AccessPointCreated\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"T\x0A\x12AccessPointUpdated\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"T\x0A\x12AccessPointDeleted\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"\xA1\x03\x0A\x13AccessPointUnlocked\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\x12(\x0A\x04user\x18\x02 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12C\x0A\x0Demergency_key\x18\x03 \x01(\x0B2*.salto.nebula.emergencykey.v1.EmergencyKeyH\x00\x121\x0A\x08card_key\x18\x04 \x01(\x0B2\x1D.salto.nebula.user.v1.CardKeyH\x00\x12/\x0A\x07app_key\x18\x05 \x01(\x0B2\x1C.salto.nebula.user.v1.AppKeyH\x00\x125\x0A\x0Awallet_key\x18\x06 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKeyH\x00\x122\x0A\x08passcode\x18\x07 \x01(\x0B2\x1E.salto.nebula.user.v1.PasscodeH\x00B\x0C\x0A\x0Acredential\"\x9F\x03\x0A\x11AccessPointLocked\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\x12(\x0A\x04user\x18\x02 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12C\x0A\x0Demergency_key\x18\x03 \x01(\x0B2*.salto.nebula.emergencykey.v1.EmergencyKeyH\x00\x121\x0A\x08card_key\x18\x04 \x01(\x0B2\x1D.salto.nebula.user.v1.CardKeyH\x00\x12/\x0A\x07app_key\x18\x05 \x01(\x0B2\x1C.salto.nebula.user.v1.AppKeyH\x00\x125\x0A\x0Awallet_key\x18\x06 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKeyH\x00\x122\x0A\x08passcode\x18\x07 \x01(\x0B2\x1E.salto.nebula.user.v1.PasscodeH\x00B\x0C\x0A\x0Acredential\"W\x0A\x15AccessPointForcedOpen\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"S\x0A\x11AccessPointClosed\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"x\x0A\x0CAccessDenied\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\x12(\x0A\x04user\x18\x02 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"U\x0A\x13AccessPointLeftOpen\x12>\x0A\x0Caccess_point\x18\x01 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"T\x0A\x12AccessRightCreated\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"T\x0A\x12AccessRightUpdated\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"T\x0A\x12AccessRightDeleted\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"\x9F\x01\x0A\x1DAccessRightAccessPointCreated\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\x12>\x0A\x0Caccess_point\x18\x02 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"\xA6\x01\x0A#AccessRightAccessPointsBatchCreated\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\x12?\x0A\x0Daccess_points\x18\x02 \x03(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"\x9F\x01\x0A\x1DAccessRightAccessPointDeleted\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\x12>\x0A\x0Caccess_point\x18\x02 \x01(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"\xA6\x01\x0A#AccessRightAccessPointsBatchDeleted\x12>\x0A\x0Caccess_right\x18\x01 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\x12?\x0A\x0Daccess_points\x18\x02 \x03(\x0B2(.salto.nebula.accesspoint.v1.AccessPoint\"7\x0A\x0BUserCreated\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"7\x0A\x0BUserUpdated\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"7\x0A\x0BUserBlocked\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"9\x0A\x0DUserUnblocked\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"7\x0A\x0BUserDeleted\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\"\x82\x01\x0A\x16UserAccessRightCreated\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12>\x0A\x0Caccess_right\x18\x02 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"\x82\x01\x0A\x16UserAccessRightUpdated\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12>\x0A\x0Caccess_right\x18\x02 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"\x82\x01\x0A\x16UserAccessRightDeleted\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12>\x0A\x0Caccess_right\x18\x02 \x01(\x0B2(.salto.nebula.accessright.v1.AccessRight\"l\x0A\x0FCardKeyAssigned\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12/\x0A\x08card_key\x18\x02 \x01(\x0B2\x1D.salto.nebula.user.v1.CardKey\"l\x0A\x0FCardKeyCanceled\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12/\x0A\x08card_key\x18\x02 \x01(\x0B2\x1D.salto.nebula.user.v1.CardKey\"i\x0A\x0EAppKeyAssigned\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12-\x0A\x07app_key\x18\x02 \x01(\x0B2\x1C.salto.nebula.user.v1.AppKey\"i\x0A\x0EAppKeyCanceled\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12-\x0A\x07app_key\x18\x02 \x01(\x0B2\x1C.salto.nebula.user.v1.AppKey\"r\x0A\x11WalletKeyAssigned\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x123\x0A\x0Awallet_key\x18\x02 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKey\"r\x0A\x11WalletKeyCanceled\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x123\x0A\x0Awallet_key\x18\x02 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKey\"7\x0A\x0BUnitMovedIn\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\"8\x0A\x0CUnitMovedOut\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\"7\x0A\x0BUnitCreated\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\"7\x0A\x0BUnitUpdated\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\"7\x0A\x0BUnitDeleted\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\"X\x0A\x13EmergencyKeyCreated\x12A\x0A\x0Demergency_key\x18\x01 \x01(\x0B2*.salto.nebula.emergencykey.v1.EmergencyKey\"X\x0A\x13EmergencyKeyUpdated\x12A\x0A\x0Demergency_key\x18\x01 \x01(\x0B2*.salto.nebula.emergencykey.v1.EmergencyKey\"X\x0A\x13EmergencyKeyDeleted\x12A\x0A\x0Demergency_key\x18\x01 \x01(\x0B2*.salto.nebula.emergencykey.v1.EmergencyKeyB\xCF\x01\x0A\x1Dcom.saltoapis.nebula.event.v1B\x0ATypesProtoP\x01Z@github.com/saltoapis-internal/saltoapis-go/nebula/event/v1;event\xAA\x02\x19Saltoapis.Nebula.Event.V1\xCA\x02\x19Saltoapis\\Nebula\\Event\\V1\xE2\x02%GPBMetadata\\Saltoapis\\Nebula\\Event\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

