<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/user/v1/user.proto

namespace GPBMetadata\Saltoapis\Nebula\User\V1;

class User
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
        \GPBMetadata\Saltoapis\Nebula\Type\Schedule::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA91\x0A\x1Fsalto/nebula/user/v1/user.proto\x12\x14salto.nebula.user.v1\x1A google/protobuf/field_mask.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A\$salto/longrunning/v1/operation.proto\x1A salto/nebula/type/schedule.proto\"\x93\x04\x0A\x04User\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x13\x0A\x06parent\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12\x12\x0A\x0Agiven_name\x18\x03 \x01(\x09\x12\x18\x0A\x0Bfamily_name\x18\x04 \x01(\x09H\x01\x88\x01\x01\x12\x14\x0A\x0Cdisplay_name\x18\x05 \x01(\x09\x12\x12\x0A\x05email\x18\x06 \x01(\x09H\x02\x88\x01\x01\x121\x0A\x0Dactivate_time\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12/\x0A\x0Bexpire_time\x18\x08 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x12\x0A\x05photo\x18\x09 \x01(\x09H\x03\x88\x01\x01\x12\x11\x0A\x09photo_uri\x18\x0A \x01(\x09\x12/\x0A\x08card_key\x18\x0B \x01(\x0B2\x1D.salto.nebula.user.v1.CardKey\x12-\x0A\x07app_key\x18\x0C \x01(\x0B2\x1C.salto.nebula.user.v1.AppKey\x123\x0A\x0Awallet_key\x18\x0D \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKey\x120\x0A\x08passcode\x18\x0F \x01(\x0B2\x1E.salto.nebula.user.v1.Passcode\x12\x0F\x0A\x07blocked\x18\x0E \x01(\x08B\x09\x0A\x07_parentB\x0E\x0A\x0C_family_nameB\x08\x0A\x06_emailB\x08\x0A\x06_photo\"\xC5\x02\x0A\x0FUserAccessRight\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Caccess_right\x18\x02 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x03 \x01(\x09\x12.\x0A\x09schedules\x18\x04 \x03(\x0B2\x1B.salto.nebula.type.Schedule\x128\x0A\x13effective_schedules\x18\x05 \x03(\x0B2\x1B.salto.nebula.type.Schedule\x126\x0A\x0Dactivate_time\x18\x06 \x01(\x0B2\x1A.google.protobuf.TimestampH\x00\x88\x01\x01\x124\x0A\x0Bexpire_time\x18\x07 \x01(\x0B2\x1A.google.protobuf.TimestampH\x01\x88\x01\x01B\x10\x0A\x0E_activate_timeB\x0E\x0A\x0C_expire_time\"\xC2\x01\x0A\x07CardKey\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x03uid\x18\x02 \x01(\x09H\x00\x122\x0A\x05state\x18\x03 \x01(\x0E2#.salto.nebula.user.v1.CardKey.State\x12\x10\x0A\x08outdated\x18\x04 \x01(\x08\"I\x0A\x05State\x12\x15\x0A\x11STATE_UNSPECIFIED\x10\x00\x12\x10\x0A\x0CNOT_ASSIGNED\x10\x01\x12\x0B\x0A\x07PENDING\x10\x02\x12\x0A\x0A\x06ACTIVE\x10\x03B\x09\x0A\x07card_id\"\xA6\x01\x0A\x06AppKey\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x121\x0A\x05state\x18\x02 \x01(\x0E2\".salto.nebula.user.v1.AppKey.State\x12\x10\x0A\x08outdated\x18\x03 \x01(\x08\"I\x0A\x05State\x12\x15\x0A\x11STATE_UNSPECIFIED\x10\x00\x12\x10\x0A\x0CNOT_ASSIGNED\x10\x01\x12\x0B\x0A\x07PENDING\x10\x02\x12\x0A\x0A\x06ACTIVE\x10\x03\"\xAC\x01\x0A\x09WalletKey\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x124\x0A\x05state\x18\x02 \x01(\x0E2%.salto.nebula.user.v1.WalletKey.State\x12\x10\x0A\x08outdated\x18\x03 \x01(\x08\"I\x0A\x05State\x12\x15\x0A\x11STATE_UNSPECIFIED\x10\x00\x12\x10\x0A\x0CNOT_ASSIGNED\x10\x01\x12\x0B\x0A\x07PENDING\x10\x02\x12\x0A\x0A\x06ACTIVE\x10\x03\"\x8B\x01\x0A\x08Passcode\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x123\x0A\x05state\x18\x02 \x01(\x0E2\$.salto.nebula.user.v1.Passcode.State\"<\x0A\x05State\x12\x15\x0A\x11STATE_UNSPECIFIED\x10\x00\x12\x10\x0A\x0CNOT_ASSIGNED\x10\x01\x12\x0A\x0A\x06ACTIVE\x10\x02\"o\x0A\x11CreateUserRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x14\x0A\x07user_id\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12(\x0A\x04user\x18\x03 \x01(\x0B2\x1A.salto.nebula.user.v1.UserB\x0A\x0A\x08_user_id\"\x1E\x0A\x0EGetUserRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"k\x0A\x10ListUsersRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"k\x0A\x11ListUsersResponse\x12)\x0A\x05users\x18\x01 \x03(\x0B2\x1A.salto.nebula.user.v1.User\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\x12\x12\x0A\x0Atotal_size\x18\x03 \x01(\x05\"n\x0A\x11UpdateUserRequest\x12(\x0A\x04user\x18\x01 \x01(\x0B2\x1A.salto.nebula.user.v1.User\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"!\x0A\x11DeleteUserRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\" \x0A\x10BlockUserRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x13\x0A\x11BlockUserResponse\"\"\x0A\x12UnblockUserRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x15\x0A\x13UnblockUserResponse\"p\x0A\x1CCreateUserAccessRightRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12@\x0A\x11user_access_right\x18\x02 \x01(\x0B2%.salto.nebula.user.v1.UserAccessRight\")\x0A\x19GetUserAccessRightRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"v\x0A\x1BListUserAccessRightsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"z\x0A\x1CListUserAccessRightsResponse\x12A\x0A\x12user_access_rights\x18\x01 \x03(\x0B2%.salto.nebula.user.v1.UserAccessRight\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"\x91\x01\x0A\x1CUpdateUserAccessRightRequest\x12@\x0A\x11user_access_right\x18\x01 \x01(\x0B2%.salto.nebula.user.v1.UserAccessRight\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\",\x0A\x1CDeleteUserAccessRightRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\">\x0A\x14AssignCardKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x03uid\x18\x02 \x01(\x09H\x00B\x09\x0A\x07card_id\"\$\x0A\x14CancelCardKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"r\x0A\x14EncodeCardKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x11\x0A\x07encoder\x18\x02 \x01(\x09H\x00\x12\x19\x0A\x0Felectronic_lock\x18\x03 \x01(\x09H\x00\x12\x14\x0A\x0Acontroller\x18\x04 \x01(\x09H\x00B\x08\x0A\x06device\"\x17\x0A\x15EncodeCardKeyResponse\"\x17\x0A\x15EncodeCardKeyMetadata\"#\x0A\x13AssignAppKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"#\x0A\x13CancelAppKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"(\x0A\x18ComputeAppKeyDataRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\")\x0A\x19ComputeAppKeyDataResponse\x12\x0C\x0A\x04data\x18\x01 \x01(\x0C\"&\x0A\x16AssignWalletKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"b\x0A\x17AssignWalletKeyResponse\x123\x0A\x0Awallet_key\x18\x01 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKey\x12\x12\x0A\x0Aaccess_uri\x18\x02 \x01(\x09\"&\x0A\x16CancelWalletKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"N\x0A\x17CancelWalletKeyResponse\x123\x0A\x0Awallet_key\x18\x01 \x01(\x0B2\x1F.salto.nebula.user.v1.WalletKey\"%\x0A\x15AssignPasscodeRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"Y\x0A\x16AssignPasscodeResponse\x120\x0A\x08passcode\x18\x01 \x01(\x0B2\x1E.salto.nebula.user.v1.Passcode\x12\x0D\x0A\x05value\x18\x02 \x01(\x09\"%\x0A\x15CancelPasscodeRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"J\x0A\x16CancelPasscodeResponse\x120\x0A\x08passcode\x18\x01 \x01(\x0B2\x1E.salto.nebula.user.v1.Passcode2\xA1\x11\x0A\x0BUserService\x12Q\x0A\x0ACreateUser\x12'.salto.nebula.user.v1.CreateUserRequest\x1A\x1A.salto.nebula.user.v1.User\x12K\x0A\x07GetUser\x12\$.salto.nebula.user.v1.GetUserRequest\x1A\x1A.salto.nebula.user.v1.User\x12\\\x0A\x09ListUsers\x12&.salto.nebula.user.v1.ListUsersRequest\x1A'.salto.nebula.user.v1.ListUsersResponse\x12Q\x0A\x0AUpdateUser\x12'.salto.nebula.user.v1.UpdateUserRequest\x1A\x1A.salto.nebula.user.v1.User\x12M\x0A\x0ADeleteUser\x12'.salto.nebula.user.v1.DeleteUserRequest\x1A\x16.google.protobuf.Empty\x12\\\x0A\x09BlockUser\x12&.salto.nebula.user.v1.BlockUserRequest\x1A'.salto.nebula.user.v1.BlockUserResponse\x12b\x0A\x0BUnblockUser\x12(.salto.nebula.user.v1.UnblockUserRequest\x1A).salto.nebula.user.v1.UnblockUserResponse\x12r\x0A\x15CreateUserAccessRight\x122.salto.nebula.user.v1.CreateUserAccessRightRequest\x1A%.salto.nebula.user.v1.UserAccessRight\x12l\x0A\x12GetUserAccessRight\x12/.salto.nebula.user.v1.GetUserAccessRightRequest\x1A%.salto.nebula.user.v1.UserAccessRight\x12}\x0A\x14ListUserAccessRights\x121.salto.nebula.user.v1.ListUserAccessRightsRequest\x1A2.salto.nebula.user.v1.ListUserAccessRightsResponse\x12r\x0A\x15UpdateUserAccessRight\x122.salto.nebula.user.v1.UpdateUserAccessRightRequest\x1A%.salto.nebula.user.v1.UserAccessRight\x12c\x0A\x15DeleteUserAccessRight\x122.salto.nebula.user.v1.DeleteUserAccessRightRequest\x1A\x16.google.protobuf.Empty\x12Z\x0A\x0DAssignCardKey\x12*.salto.nebula.user.v1.AssignCardKeyRequest\x1A\x1D.salto.nebula.user.v1.CardKey\x12Z\x0A\x0DCancelCardKey\x12*.salto.nebula.user.v1.CancelCardKeyRequest\x1A\x1D.salto.nebula.user.v1.CardKey\x12\\\x0A\x0DEncodeCardKey\x12*.salto.nebula.user.v1.EncodeCardKeyRequest\x1A\x1F.salto.longrunning.v1.Operation\x12W\x0A\x0CAssignAppKey\x12).salto.nebula.user.v1.AssignAppKeyRequest\x1A\x1C.salto.nebula.user.v1.AppKey\x12W\x0A\x0CCancelAppKey\x12).salto.nebula.user.v1.CancelAppKeyRequest\x1A\x1C.salto.nebula.user.v1.AppKey\x12t\x0A\x11ComputeAppKeyData\x12..salto.nebula.user.v1.ComputeAppKeyDataRequest\x1A/.salto.nebula.user.v1.ComputeAppKeyDataResponse\x12n\x0A\x0FAssignWalletKey\x12,.salto.nebula.user.v1.AssignWalletKeyRequest\x1A-.salto.nebula.user.v1.AssignWalletKeyResponse\x12n\x0A\x0FCancelWalletKey\x12,.salto.nebula.user.v1.CancelWalletKeyRequest\x1A-.salto.nebula.user.v1.CancelWalletKeyResponse\x12k\x0A\x0EAssignPasscode\x12+.salto.nebula.user.v1.AssignPasscodeRequest\x1A,.salto.nebula.user.v1.AssignPasscodeResponse\x12k\x0A\x0ECancelPasscode\x12+.salto.nebula.user.v1.CancelPasscodeRequest\x1A,.salto.nebula.user.v1.CancelPasscodeResponseB\xC8\x01\x0A\x1Ccom.saltoapis.nebula.user.v1B\x09UserProtoP\x01Z>github.com/saltoapis-internal/saltoapis-go/nebula/user/v1;user\xAA\x02\x18Saltoapis.Nebula.User.V1\xCA\x02\x18Saltoapis\\Nebula\\User\\V1\xE2\x02\$GPBMetadata\\Saltoapis\\Nebula\\User\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

