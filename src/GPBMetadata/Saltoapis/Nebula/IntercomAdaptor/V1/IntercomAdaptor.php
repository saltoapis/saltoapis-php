<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/intercomadaptor/v1/intercom_adaptor.proto

namespace GPBMetadata\Saltoapis\Nebula\IntercomAdaptor\V1;

class IntercomAdaptor
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
            "\x0A\xEE#\x0A6salto/nebula/intercomadaptor/v1/intercom_adaptor.proto\x12\x1Fsalto.nebula.intercomadaptor.v1\x1A google/protobuf/field_mask.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A\$salto/longrunning/v1/operation.proto\"\xC5\x03\x0A\x0FIntercomAdaptor\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cdisplay_name\x18\x02 \x01(\x09\x12\x16\x0A\x09device_id\x18\x03 \x01(\x09H\x01\x88\x01\x01\x12\x11\x0A\x07gateway\x18\x04 \x01(\x09H\x00\x12\x12\x0A\x08extender\x18\x05 \x01(\x09H\x00\x12R\x0A\x0Daccess_points\x18\x06 \x03(\x0B2;.salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint\x12\x13\x0A\x0Binitialized\x18\x07 \x01(\x08\x12\x10\x0A\x08outdated\x18\x08 \x01(\x08\x12\x11\x0A\x09connected\x18\x09 \x01(\x08\x12\x13\x0A\x0Blow_battery\x18\x0A \x01(\x08\x123\x0A\x0Flast_event_time\x18\x0B \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x15\x0A\x08intercom\x18\x0C \x01(\x09H\x02\x88\x01\x01\x12\x0E\x0A\x06photos\x18\x0D \x03(\x09\x12\x12\x0A\x0Aphoto_uris\x18\x0E \x03(\x09\x12\x10\x0A\x08readings\x18\x0F \x03(\x09B\x0F\x0A\x0Dparent_deviceB\x0C\x0A\x0A_device_idB\x0B\x0A\x09_intercom\"b\x0A\x1AIntercomAdaptorAccessPoint\x12\x14\x0A\x0Caccess_point\x18\x01 \x01(\x09\x12\x1B\x0A\x0Eframe_settings\x18\x02 \x01(\x0CH\x00\x88\x01\x01B\x11\x0A\x0F_frame_settings\"\xB4\x01\x0A\x1CCreateIntercomAdaptorRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12 \x0A\x13intercom_adaptor_id\x18\x02 \x01(\x09H\x00\x88\x01\x01\x12J\x0A\x10intercom_adaptor\x18\x03 \x01(\x0B20.salto.nebula.intercomadaptor.v1.IntercomAdaptorB\x16\x0A\x14_intercom_adaptor_id\")\x0A\x19GetIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"v\x0A\x1BListIntercomAdaptorsRequest\x12\x0E\x0A\x06parent\x18\x01 \x01(\x09\x12\x11\x0A\x09page_size\x18\x02 \x01(\x05\x12\x12\x0A\x0Apage_token\x18\x03 \x01(\x09\x12\x0E\x0A\x06filter\x18\x04 \x01(\x09\x12\x10\x0A\x08order_by\x18\x05 \x01(\x09\"\x84\x01\x0A\x1CListIntercomAdaptorsResponse\x12K\x0A\x11intercom_adaptors\x18\x01 \x03(\x0B20.salto.nebula.intercomadaptor.v1.IntercomAdaptor\x12\x17\x0A\x0Fnext_page_token\x18\x02 \x01(\x09\"\x9B\x01\x0A\x1CUpdateIntercomAdaptorRequest\x12J\x0A\x10intercom_adaptor\x18\x01 \x01(\x0B20.salto.nebula.intercomadaptor.v1.IntercomAdaptor\x12/\x0A\x0Bupdate_mask\x18\x02 \x01(\x0B2\x1A.google.protobuf.FieldMask\",\x0A\x1CDeleteIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"=\x0A\x1ABindIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x11\x0A\x09device_id\x18\x02 \x01(\x09\"\x1D\x0A\x1BBindIntercomAdaptorResponse\";\x0A\x1CUnbindIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x05force\x18\x02 \x01(\x08\"\x1F\x0A\x1DUnbindIntercomAdaptorResponse\"0\x0A InitializeIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"#\x0A!InitializeIntercomAdaptorResponse\"=\x0A!InitializeIntercomAdaptorMetadata\x12\x18\x0A\x10progress_percent\x18\x01 \x01(\x05\"/\x0A\x1FConfigureIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\"\x0A ConfigureIntercomAdaptorResponse\"\"\x0A ConfigureIntercomAdaptorMetadata\"+\x0A\x1BResetIntercomAdaptorRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x1E\x0A\x1CResetIntercomAdaptorResponse\"\x1E\x0A\x1CResetIntercomAdaptorMetadata\"@\x0A\$UpdateIntercomAdaptorFirmwareRequest\x12\x18\x0A\x10intercom_adaptor\x18\x01 \x01(\x09\"'\x0A%UpdateIntercomAdaptorFirmwareResponse\"A\x0A%UpdateIntercomAdaptorFirmwareMetadata\x12\x18\x0A\x10progress_percent\x18\x01 \x01(\x05\"=\x0A!GenerateAuthorizationTokenRequest\x12\x18\x0A\x10intercom_adaptor\x18\x01 \x01(\x09\"A\x0A\"GenerateAuthorizationTokenResponse\x12\x1B\x0A\x13authorization_token\x18\x01 \x01(\x0C\">\x0A\"GenerateFirmwareDownloadUriRequest\x12\x18\x0A\x10intercom_adaptor\x18\x01 \x01(\x09\"K\x0A#GenerateFirmwareDownloadUriResponse\x12\x14\x0A\x0Cdownload_uri\x18\x01 \x01(\x09\x12\x0E\x0A\x06digest\x18\x02 \x01(\x09\"%\x0A#GenerateFirmwareDownloadUriMetadata2\x94\x0E\x0A\x16IntercomAdaptorService\x12\x88\x01\x0A\x15CreateIntercomAdaptor\x12=.salto.nebula.intercomadaptor.v1.CreateIntercomAdaptorRequest\x1A0.salto.nebula.intercomadaptor.v1.IntercomAdaptor\x12\x82\x01\x0A\x12GetIntercomAdaptor\x12:.salto.nebula.intercomadaptor.v1.GetIntercomAdaptorRequest\x1A0.salto.nebula.intercomadaptor.v1.IntercomAdaptor\x12\x93\x01\x0A\x14ListIntercomAdaptors\x12<.salto.nebula.intercomadaptor.v1.ListIntercomAdaptorsRequest\x1A=.salto.nebula.intercomadaptor.v1.ListIntercomAdaptorsResponse\x12\x88\x01\x0A\x15UpdateIntercomAdaptor\x12=.salto.nebula.intercomadaptor.v1.UpdateIntercomAdaptorRequest\x1A0.salto.nebula.intercomadaptor.v1.IntercomAdaptor\x12n\x0A\x15DeleteIntercomAdaptor\x12=.salto.nebula.intercomadaptor.v1.DeleteIntercomAdaptorRequest\x1A\x16.google.protobuf.Empty\x12\x90\x01\x0A\x13BindIntercomAdaptor\x12;.salto.nebula.intercomadaptor.v1.BindIntercomAdaptorRequest\x1A<.salto.nebula.intercomadaptor.v1.BindIntercomAdaptorResponse\x12\x96\x01\x0A\x15UnbindIntercomAdaptor\x12=.salto.nebula.intercomadaptor.v1.UnbindIntercomAdaptorRequest\x1A>.salto.nebula.intercomadaptor.v1.UnbindIntercomAdaptorResponse\x12\x7F\x0A\x19InitializeIntercomAdaptor\x12A.salto.nebula.intercomadaptor.v1.InitializeIntercomAdaptorRequest\x1A\x1F.salto.longrunning.v1.Operation\x12}\x0A\x18ConfigureIntercomAdaptor\x12@.salto.nebula.intercomadaptor.v1.ConfigureIntercomAdaptorRequest\x1A\x1F.salto.longrunning.v1.Operation\x12u\x0A\x14ResetIntercomAdaptor\x12<.salto.nebula.intercomadaptor.v1.ResetIntercomAdaptorRequest\x1A\x1F.salto.longrunning.v1.Operation\x12\x87\x01\x0A\x1DUpdateIntercomAdaptorFirmware\x12E.salto.nebula.intercomadaptor.v1.UpdateIntercomAdaptorFirmwareRequest\x1A\x1F.salto.longrunning.v1.Operation\x12\xA5\x01\x0A\x1AGenerateAuthorizationToken\x12B.salto.nebula.intercomadaptor.v1.GenerateAuthorizationTokenRequest\x1AC.salto.nebula.intercomadaptor.v1.GenerateAuthorizationTokenResponse\x12\x83\x01\x0A\x1BGenerateFirmwareDownloadUri\x12C.salto.nebula.intercomadaptor.v1.GenerateFirmwareDownloadUriRequest\x1A\x1F.salto.longrunning.v1.OperationB\x95\x02\x0A'com.saltoapis.nebula.intercomadaptor.v1B\x14IntercomAdaptorProtoP\x01ZTgithub.com/saltoapis-internal/saltoapis-go/nebula/intercomadaptor/v1;intercomadaptor\xAA\x02#Saltoapis.Nebula.IntercomAdaptor.V1\xCA\x02#Saltoapis\\Nebula\\IntercomAdaptor\\V1\xE2\x02/GPBMetadata\\Saltoapis\\Nebula\\IntercomAdaptor\\V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

