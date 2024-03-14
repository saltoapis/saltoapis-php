<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
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
            '
�!
6salto/nebula/intercomadaptor/v1/intercom_adaptor.protosalto.nebula.intercomadaptor.v1 google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto$salto/longrunning/v1/operation.proto"�
IntercomAdaptor
name (	
display_name (	
	device_id (	H�
gateway (	H 
extender (	H R
access_points (2;.salto.nebula.intercomadaptor.v1.IntercomAdaptorAccessPoint
initialized (
outdated (
	connected	 (
low_battery
 (3
last_event_time (2.google.protobuf.Timestamp
intercom (	H�
photos (	

photo_uris (	
readings (	B
parent_deviceB

_device_idB
	_intercom"b
IntercomAdaptorAccessPoint
access_point (	
frame_settings (H �B
_frame_settings"�
CreateIntercomAdaptorRequest
parent (	 
intercom_adaptor_id (	H �J
intercom_adaptor (20.salto.nebula.intercomadaptor.v1.IntercomAdaptorB
_intercom_adaptor_id")
GetIntercomAdaptorRequest
name (	"v
ListIntercomAdaptorsRequest
parent (	
	page_size (

page_token (	
filter (	
order_by (	"�
ListIntercomAdaptorsResponseK
intercom_adaptors (20.salto.nebula.intercomadaptor.v1.IntercomAdaptor
next_page_token (	"�
UpdateIntercomAdaptorRequestJ
intercom_adaptor (20.salto.nebula.intercomadaptor.v1.IntercomAdaptor/
update_mask (2.google.protobuf.FieldMask",
DeleteIntercomAdaptorRequest
name (	"=
BindIntercomAdaptorRequest
name (	
	device_id (	"
BindIntercomAdaptorResponse";
UnbindIntercomAdaptorRequest
name (	
force ("
UnbindIntercomAdaptorResponse"0
 InitializeIntercomAdaptorRequest
name (	"#
!InitializeIntercomAdaptorResponse"=
!InitializeIntercomAdaptorMetadata
progress_percent ("/
ConfigureIntercomAdaptorRequest
name (	""
 ConfigureIntercomAdaptorResponse""
 ConfigureIntercomAdaptorMetadata"+
ResetIntercomAdaptorRequest
name (	"
ResetIntercomAdaptorResponse"
ResetIntercomAdaptorMetadata"@
$UpdateIntercomAdaptorFirmwareRequest
intercom_adaptor (	"\'
%UpdateIntercomAdaptorFirmwareResponse"A
%UpdateIntercomAdaptorFirmwareMetadata
progress_percent ("=
!GenerateAuthorizationTokenRequest
intercom_adaptor (	"A
"GenerateAuthorizationTokenResponse
authorization_token (2�
IntercomAdaptorService�
CreateIntercomAdaptor=.salto.nebula.intercomadaptor.v1.CreateIntercomAdaptorRequest0.salto.nebula.intercomadaptor.v1.IntercomAdaptor�
GetIntercomAdaptor:.salto.nebula.intercomadaptor.v1.GetIntercomAdaptorRequest0.salto.nebula.intercomadaptor.v1.IntercomAdaptor�
ListIntercomAdaptors<.salto.nebula.intercomadaptor.v1.ListIntercomAdaptorsRequest=.salto.nebula.intercomadaptor.v1.ListIntercomAdaptorsResponse�
UpdateIntercomAdaptor=.salto.nebula.intercomadaptor.v1.UpdateIntercomAdaptorRequest0.salto.nebula.intercomadaptor.v1.IntercomAdaptorn
DeleteIntercomAdaptor=.salto.nebula.intercomadaptor.v1.DeleteIntercomAdaptorRequest.google.protobuf.Empty�
BindIntercomAdaptor;.salto.nebula.intercomadaptor.v1.BindIntercomAdaptorRequest<.salto.nebula.intercomadaptor.v1.BindIntercomAdaptorResponse�
UnbindIntercomAdaptor=.salto.nebula.intercomadaptor.v1.UnbindIntercomAdaptorRequest>.salto.nebula.intercomadaptor.v1.UnbindIntercomAdaptorResponse
InitializeIntercomAdaptorA.salto.nebula.intercomadaptor.v1.InitializeIntercomAdaptorRequest.salto.longrunning.v1.Operation}
ConfigureIntercomAdaptor@.salto.nebula.intercomadaptor.v1.ConfigureIntercomAdaptorRequest.salto.longrunning.v1.Operationu
ResetIntercomAdaptor<.salto.nebula.intercomadaptor.v1.ResetIntercomAdaptorRequest.salto.longrunning.v1.Operation�
UpdateIntercomAdaptorFirmwareE.salto.nebula.intercomadaptor.v1.UpdateIntercomAdaptorFirmwareRequest.salto.longrunning.v1.Operation�
GenerateAuthorizationTokenB.salto.nebula.intercomadaptor.v1.GenerateAuthorizationTokenRequestC.salto.nebula.intercomadaptor.v1.GenerateAuthorizationTokenResponseB�
\'com.saltoapis.nebula.intercomadaptor.v1BIntercomAdaptorProtoPZNgithub.com/saltosystems/saltoapis-go/nebula/intercomadaptor/v1;intercomadaptor�#Saltoapis.Nebula.IntercomAdaptor.V1�#Saltoapis\\Nebula\\IntercomAdaptor\\V1�/GPBMetadata\\Saltoapis\\Nebula\\IntercomAdaptor\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

