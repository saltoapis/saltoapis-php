<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/rpc/error_details.proto

namespace GPBMetadata\Google\Rpc;

class ErrorDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE6\x08\x0A\x1Egoogle/rpc/error_details.proto\x12\x0Agoogle.rpc\";\x0A\x09RetryInfo\x12.\x0A\x0Bretry_delay\x18\x01 \x01(\x0B2\x19.google.protobuf.Duration\"2\x0A\x09DebugInfo\x12\x15\x0A\x0Dstack_entries\x18\x01 \x03(\x09\x12\x0E\x0A\x06detail\x18\x02 \x01(\x09\"y\x0A\x0CQuotaFailure\x126\x0A\x0Aviolations\x18\x01 \x03(\x0B2\".google.rpc.QuotaFailure.Violation\x1A1\x0A\x09Violation\x12\x0F\x0A\x07subject\x18\x01 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x02 \x01(\x09\"\x8F\x01\x0A\x09ErrorInfo\x12\x0E\x0A\x06reason\x18\x01 \x01(\x09\x12\x0E\x0A\x06domain\x18\x02 \x01(\x09\x125\x0A\x08metadata\x18\x03 \x03(\x0B2#.google.rpc.ErrorInfo.MetadataEntry\x1A+\x0A\x0DMetadataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09\"\x95\x01\x0A\x13PreconditionFailure\x12=\x0A\x0Aviolations\x18\x01 \x03(\x0B2).google.rpc.PreconditionFailure.Violation\x1A?\x0A\x09Violation\x12\x0C\x0A\x04type\x18\x01 \x01(\x09\x12\x0F\x0A\x07subject\x18\x02 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x03 \x01(\x09\"\x83\x01\x0A\x0ABadRequest\x12?\x0A\x10field_violations\x18\x01 \x03(\x0B2%.google.rpc.BadRequest.FieldViolation\x1A4\x0A\x0EFieldViolation\x12\x0D\x0A\x05field\x18\x01 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x02 \x01(\x09\"7\x0A\x0BRequestInfo\x12\x12\x0A\x0Arequest_id\x18\x01 \x01(\x09\x12\x14\x0A\x0Cserving_data\x18\x02 \x01(\x09\"`\x0A\x0CResourceInfo\x12\x15\x0A\x0Dresource_type\x18\x01 \x01(\x09\x12\x15\x0A\x0Dresource_name\x18\x02 \x01(\x09\x12\x0D\x0A\x05owner\x18\x03 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x04 \x01(\x09\"V\x0A\x04Help\x12\$\x0A\x05links\x18\x01 \x03(\x0B2\x15.google.rpc.Help.Link\x1A(\x0A\x04Link\x12\x13\x0A\x0Bdescription\x18\x01 \x01(\x09\x12\x0B\x0A\x03url\x18\x02 \x01(\x09\"3\x0A\x10LocalizedMessage\x12\x0E\x0A\x06locale\x18\x01 \x01(\x09\x12\x0F\x0A\x07message\x18\x02 \x01(\x09Bl\x0A\x0Ecom.google.rpcB\x11ErrorDetailsProtoP\x01Z?google.golang.org/genproto/googleapis/rpc/errdetails;errdetails\xA2\x02\x03RPCb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

