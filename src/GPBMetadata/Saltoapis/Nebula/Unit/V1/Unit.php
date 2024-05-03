<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/unit/v1/unit.proto

namespace GPBMetadata\Saltoapis\Nebula\Unit\V1;

class Unit
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xDF\x14\x0A\x1Fsalto/nebula/unit/v1/unit.proto\x12\x14salto.nebula.unit.v1\x1A google/protobuf/field_mask.proto\"*\x0A\x04Unit\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x02 \x01(\x09\"5\x0A\x06Policy\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0E\x0A\x06member\x18\x02 \x01(\x09\x12\x0D\x0A\x05roles\x18\x03 \x03(\x09\"o\x0A\x11CreateUnitRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x14\x0A\x07unit_id\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12(\x0A\x04unit\x18\x03 \x01(\x0B2\x1A.salto.nebula.unit.v1.UnitB\x0A\x0A\x08_unit_id\"\x1E\x0A\x0EGetUnitRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"k\x0A\x10ListUnitsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"W\x0A\x11ListUnitsResponse\x12)\x0A\x05units\x18\x01 \x03(\x0B2\x1A.salto.nebula.unit.v1.Unit\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"n\x0A\x11UpdateUnitRequest\x12(\x0A\x04unit\x18\x01 \x01(\x0B2\x1A.salto.nebula.unit.v1.Unit\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"!\x0A\x11DeleteUnitRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"#\x0A\x13CleanOutUnitRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x16\x0A\x14CleanOutUnitResponse\"f\x0A\x13CreatePolicyRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09policy_id\x18\x02 \x01(\x09\x12,\x0A\x06policy\x18\x03 \x01(\x0B2\x1C.salto.nebula.unit.v1.Policy\" \x0A\x10GetPolicyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"n\x0A\x13ListPoliciesRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"_\x0A\x14ListPoliciesResponse\x12.\x0A\x08policies\x18\x01 \x03(\x0B2\x1C.salto.nebula.unit.v1.Policy\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"t\x0A\x13UpdatePolicyRequest\x12,\x0A\x06policy\x18\x01 \x01(\x0B2\x1C.salto.nebula.unit.v1.Policy\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"#\x0A\x13DeletePolicyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\";\x0A\x16TestPermissionsRequest\x12\x0C\x0A\x04unit\x18\x01 \x01(\x09\x12\x13\x0A\x0Bpermissions\x18\x02 \x03(\x09\".\x0A\x17TestPermissionsResponse\x12\x13\x0A\x0Bpermissions\x18\x01 \x03(\x092\xC3\x08\x0A\x0BUnitService\x12Q\x0A\x0ACreateUnit\x12'.salto.nebula.unit.v1.CreateUnitRequest\x1A\x1A.salto.nebula.unit.v1.Unit\x12K\x0A\x07GetUnit\x12\$.salto.nebula.unit.v1.GetUnitRequest\x1A\x1A.salto.nebula.unit.v1.Unit\x12\\\x0A\x09ListUnits\x12&.salto.nebula.unit.v1.ListUnitsRequest\x1A'.salto.nebula.unit.v1.ListUnitsResponse\x12Q\x0A\x0AUpdateUnit\x12'.salto.nebula.unit.v1.UpdateUnitRequest\x1A\x1A.salto.nebula.unit.v1.Unit\x12M\x0A\x0ADeleteUnit\x12'.salto.nebula.unit.v1.DeleteUnitRequest\x1A\x16.google.protobuf.Empty\x12e\x0A\x0CCleanOutUnit\x12).salto.nebula.unit.v1.CleanOutUnitRequest\x1A*.salto.nebula.unit.v1.CleanOutUnitResponse\x12W\x0A\x0CCreatePolicy\x12).salto.nebula.unit.v1.CreatePolicyRequest\x1A\x1C.salto.nebula.unit.v1.Policy\x12Q\x0A\x09GetPolicy\x12&.salto.nebula.unit.v1.GetPolicyRequest\x1A\x1C.salto.nebula.unit.v1.Policy\x12e\x0A\x0CListPolicies\x12).salto.nebula.unit.v1.ListPoliciesRequest\x1A*.salto.nebula.unit.v1.ListPoliciesResponse\x12W\x0A\x0CUpdatePolicy\x12).salto.nebula.unit.v1.UpdatePolicyRequest\x1A\x1C.salto.nebula.unit.v1.Policy\x12Q\x0A\x0CDeletePolicy\x12).salto.nebula.unit.v1.DeletePolicyRequest\x1A\x16.google.protobuf.Empty\x12n\x0A\x0FTestPermissions\x12,.salto.nebula.unit.v1.TestPermissionsRequest\x1A-.salto.nebula.unit.v1.TestPermissionsResponseB\xC8\x01\x0A\x1Ccom.saltoapis.nebula.unit.v1B\x09UnitProtoP\x01Z>github.com/saltoapis-internal/saltoapis-go/nebula/unit/v1;unit\xAA\x02\x18Saltoapis.Nebula.Unit.V1\xCA\x02\x18Saltoapis\\Nebula\\Unit\\V1\xE2\x02\$GPBMetadata\\Saltoapis\\Nebula\\Unit\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

