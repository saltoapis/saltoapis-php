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
            '
�
salto/nebula/unit/v1/unit.protosalto.nebula.unit.v1 google/protobuf/field_mask.proto"*
Unit
name (	
display_name (	"5
Policy
name (	
member (	
roles (	"o
CreateUnitRequest
parent (	
unit_id (	H �(
unit (2.salto.nebula.unit.v1.UnitB

_unit_id"
GetUnitRequest
name (	"k
ListUnitsRequest
parent (	
	page_size (

page_token (	
filter (	
order_by (	"W
ListUnitsResponse)
units (2.salto.nebula.unit.v1.Unit
next_page_token (	"n
UpdateUnitRequest(
unit (2.salto.nebula.unit.v1.Unit/
update_mask (2.google.protobuf.FieldMask"!
DeleteUnitRequest
name (	"#
CleanOutUnitRequest
name (	"
CleanOutUnitResponse"f
CreatePolicyRequest
parent (	
	policy_id (	,
policy (2.salto.nebula.unit.v1.Policy" 
GetPolicyRequest
name (	"n
ListPoliciesRequest
parent (	
	page_size (

page_token (	
filter (	
order_by (	"_
ListPoliciesResponse.
policies (2.salto.nebula.unit.v1.Policy
next_page_token (	"t
UpdatePolicyRequest,
policy (2.salto.nebula.unit.v1.Policy/
update_mask (2.google.protobuf.FieldMask"#
DeletePolicyRequest
name (	";
TestPermissionsRequest
unit (	
permissions (	".
TestPermissionsResponse
permissions (	2�
UnitServiceQ

CreateUnit\'.salto.nebula.unit.v1.CreateUnitRequest.salto.nebula.unit.v1.UnitK
GetUnit$.salto.nebula.unit.v1.GetUnitRequest.salto.nebula.unit.v1.Unit\\
	ListUnits&.salto.nebula.unit.v1.ListUnitsRequest\'.salto.nebula.unit.v1.ListUnitsResponseQ

UpdateUnit\'.salto.nebula.unit.v1.UpdateUnitRequest.salto.nebula.unit.v1.UnitM

DeleteUnit\'.salto.nebula.unit.v1.DeleteUnitRequest.google.protobuf.Emptye
CleanOutUnit).salto.nebula.unit.v1.CleanOutUnitRequest*.salto.nebula.unit.v1.CleanOutUnitResponseW
CreatePolicy).salto.nebula.unit.v1.CreatePolicyRequest.salto.nebula.unit.v1.PolicyQ
	GetPolicy&.salto.nebula.unit.v1.GetPolicyRequest.salto.nebula.unit.v1.Policye
ListPolicies).salto.nebula.unit.v1.ListPoliciesRequest*.salto.nebula.unit.v1.ListPoliciesResponseW
UpdatePolicy).salto.nebula.unit.v1.UpdatePolicyRequest.salto.nebula.unit.v1.PolicyQ
DeletePolicy).salto.nebula.unit.v1.DeletePolicyRequest.google.protobuf.Emptyn
TestPermissions,.salto.nebula.unit.v1.TestPermissionsRequest-.salto.nebula.unit.v1.TestPermissionsResponseB�
com.saltoapis.nebula.unit.v1B	UnitProtoPZ8github.com/saltosystems/saltoapis-go/nebula/unit/v1;unit�Saltoapis.Nebula.Unit.V1�Saltoapis\\Nebula\\Unit\\V1�$GPBMetadata\\Saltoapis\\Nebula\\Unit\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

