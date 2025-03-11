<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/accesspointgroup/v1/access_point_group.proto

namespace GPBMetadata\Saltoapis\Nebula\AccessPointGroup\V1;

class AccessPointGroup
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
            "\x0A\x99\$\x0A9salto/nebula/accesspointgroup/v1/access_point_group.proto\x12 salto.nebula.accesspointgroup.v1\x1A google/protobuf/field_mask.proto\"6\x0A\x10AccessPointGroup\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x03 \x01(\x09\"W\x0A\x1BAccessPointGroupAccessPoint\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Caccess_point\x18\x02 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x03 \x01(\x09\"\xBD\x01\x0A\x1DCreateAccessPointGroupRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\"\x0A\x15access_point_group_id\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12N\x0A\x12access_point_group\x18\x03 \x01(\x0B22.salto.nebula.accesspointgroup.v1.AccessPointGroupB\x18\x0A\x16_access_point_group_id\"*\x0A\x1AGetAccessPointGroupRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x8D\x01\x0A\x1CListAccessPointGroupsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\x12\x14\x0A\x0Cshow_deleted\x18\x06 \x01(\x08\"\x89\x01\x0A\x1DListAccessPointGroupsResponse\x12O\x0A\x13access_point_groups\x18\x01 \x03(\x0B22.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"\xA0\x01\x0A\x1DUpdateAccessPointGroupRequest\x12N\x0A\x12access_point_group\x18\x01 \x01(\x0B22.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"-\x0A\x1DDeleteAccessPointGroupRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\xA2\x01\x0A(CreateAccessPointGroupAccessPointRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12f\x0A\x1Faccess_point_group_access_point\x18\x02 \x01(\x0B2=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\"\x9E\x01\x0A.BatchCreateAccessPointGroupAccessPointsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\\\x0A\x08requests\x18\x02 \x03(\x0B2J.salto.nebula.accesspointgroup.v1.CreateAccessPointGroupAccessPointRequest\"\x9A\x01\x0A/BatchCreateAccessPointGroupAccessPointsResponse\x12g\x0A access_point_group_access_points\x18\x01 \x03(\x0B2=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\"5\x0A%GetAccessPointGroupAccessPointRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x82\x01\x0A'ListAccessPointGroupAccessPointsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"\xAC\x01\x0A(ListAccessPointGroupAccessPointsResponse\x12g\x0A access_point_group_access_points\x18\x01 \x03(\x0B2=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"\xC3\x01\x0A(UpdateAccessPointGroupAccessPointRequest\x12f\x0A\x1Faccess_point_group_access_point\x18\x01 \x01(\x0B2=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\"8\x0A(DeleteAccessPointGroupAccessPointRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x9E\x01\x0A.BatchDeleteAccessPointGroupAccessPointsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\\\x0A\x08requests\x18\x02 \x03(\x0B2J.salto.nebula.accesspointgroup.v1.DeleteAccessPointGroupAccessPointRequest\"1\x0A/BatchDeleteAccessPointGroupAccessPointsResponse2\xE3\x0F\x0A\x17AccessPointGroupService\x12\x8D\x01\x0A\x16CreateAccessPointGroup\x12?.salto.nebula.accesspointgroup.v1.CreateAccessPointGroupRequest\x1A2.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12\x87\x01\x0A\x13GetAccessPointGroup\x12<.salto.nebula.accesspointgroup.v1.GetAccessPointGroupRequest\x1A2.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12\x98\x01\x0A\x15ListAccessPointGroups\x12>.salto.nebula.accesspointgroup.v1.ListAccessPointGroupsRequest\x1A?.salto.nebula.accesspointgroup.v1.ListAccessPointGroupsResponse\x12\x8D\x01\x0A\x16UpdateAccessPointGroup\x12?.salto.nebula.accesspointgroup.v1.UpdateAccessPointGroupRequest\x1A2.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12\x8D\x01\x0A\x16DeleteAccessPointGroup\x12?.salto.nebula.accesspointgroup.v1.DeleteAccessPointGroupRequest\x1A2.salto.nebula.accesspointgroup.v1.AccessPointGroup\x12\xAE\x01\x0A!CreateAccessPointGroupAccessPoint\x12J.salto.nebula.accesspointgroup.v1.CreateAccessPointGroupAccessPointRequest\x1A=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\x12\xCE\x01\x0A'BatchCreateAccessPointGroupAccessPoints\x12P.salto.nebula.accesspointgroup.v1.BatchCreateAccessPointGroupAccessPointsRequest\x1AQ.salto.nebula.accesspointgroup.v1.BatchCreateAccessPointGroupAccessPointsResponse\x12\xA8\x01\x0A\x1EGetAccessPointGroupAccessPoint\x12G.salto.nebula.accesspointgroup.v1.GetAccessPointGroupAccessPointRequest\x1A=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\x12\xB9\x01\x0A ListAccessPointGroupAccessPoints\x12I.salto.nebula.accesspointgroup.v1.ListAccessPointGroupAccessPointsRequest\x1AJ.salto.nebula.accesspointgroup.v1.ListAccessPointGroupAccessPointsResponse\x12\xAE\x01\x0A!UpdateAccessPointGroupAccessPoint\x12J.salto.nebula.accesspointgroup.v1.UpdateAccessPointGroupAccessPointRequest\x1A=.salto.nebula.accesspointgroup.v1.AccessPointGroupAccessPoint\x12\x87\x01\x0A!DeleteAccessPointGroupAccessPoint\x12J.salto.nebula.accesspointgroup.v1.DeleteAccessPointGroupAccessPointRequest\x1A\x16.google.protobuf.Empty\x12\xCE\x01\x0A'BatchDeleteAccessPointGroupAccessPoints\x12P.salto.nebula.accesspointgroup.v1.BatchDeleteAccessPointGroupAccessPointsRequest\x1AQ.salto.nebula.accesspointgroup.v1.BatchDeleteAccessPointGroupAccessPointsResponseB\x9C\x02\x0A(com.saltoapis.nebula.accesspointgroup.v1B\x15AccessPointGroupProtoP\x01ZVgithub.com/saltoapis-internal/saltoapis-go/nebula/accesspointgroup/v1;accesspointgroup\xAA\x02\$Saltoapis.Nebula.AccessPointGroup.V1\xCA\x02\$Saltoapis\\Nebula\\AccessPointGroup\\V1\xE2\x020GPBMetadata\\Saltoapis\\Nebula\\AccessPointGroup\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

