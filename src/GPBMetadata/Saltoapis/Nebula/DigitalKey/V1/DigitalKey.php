<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
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
        \GPBMetadata\Saltoapis\Type\Color::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,salto/nebula/digitalkey/v1/digital_key.protosalto.nebula.digitalkey.v1"�

DigitalKey
name (	@
app_key (2-.salto.nebula.digitalkey.v1.DigitalKey.AppKeyH F

wallet_key (20.salto.nebula.digitalkey.v1.DigitalKey.WalletKeyH v
Metadata
title (	
subtitle (	
	photo_uri (	
address (	%

text_color (2.salto.type.Color�
AppKeyA
metadata (2/.salto.nebula.digitalkey.v1.DigitalKey.Metadata
data (
installation (	
unit (	H �
installation_id (	
unit_id (	H�B
_unitB

_unit_id�
	WalletKeyA
metadata (2/.salto.nebula.digitalkey.v1.DigitalKey.MetadataZ
hydra_credential (2@.salto.nebula.digitalkey.v1.DigitalKey.WalletKey.HydraCredential�
HydraCredential
credential_id (	
sharing_instance_id (	
account_hash (	
template_id (	
relying_party_id (	
reference_id (	B
type"$
GetDigitalKeyRequest
name (	"a
ListDigitalKeysRequest
	page_size (

page_token (	
filter (	
order_by (	"p
ListDigitalKeysResponse<
digital_keys (2&.salto.nebula.digitalkey.v1.DigitalKey
next_page_token (	"N
DigitalKeyAccessPoint
name (	
display_name (	
	device_id (	"/
GetDigitalKeyAccessPointRequest
name (	"j
!ListDigitalKeyAccessPointsRequest
parent (	
filter (	
	page_size (

page_token (	"�
"ListDigitalKeyAccessPointsResponseT
digital_key_access_points (21.salto.nebula.digitalkey.v1.DigitalKeyAccessPoint
next_page_token (	2�
DigitalKeyServicei
GetDigitalKey0.salto.nebula.digitalkey.v1.GetDigitalKeyRequest&.salto.nebula.digitalkey.v1.DigitalKeyz
ListDigitalKeys2.salto.nebula.digitalkey.v1.ListDigitalKeysRequest3.salto.nebula.digitalkey.v1.ListDigitalKeysResponse�
GetDigitalKeyAccessPoint;.salto.nebula.digitalkey.v1.GetDigitalKeyAccessPointRequest1.salto.nebula.digitalkey.v1.DigitalKeyAccessPoint�
ListDigitalKeyAccessPoints=.salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsRequest>.salto.nebula.digitalkey.v1.ListDigitalKeyAccessPointsResponseB�
"com.saltoapis.nebula.digitalkey.v1BDigitalKeyProtoPZDgithub.com/saltosystems/saltoapis-go/nebula/digitalkey/v1;digitalkey�Saltoapis.Nebula.DigitalKey.V1�Saltoapis\\Nebula\\DigitalKey\\V1�*GPBMetadata\\Saltoapis\\Nebula\\DigitalKey\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

