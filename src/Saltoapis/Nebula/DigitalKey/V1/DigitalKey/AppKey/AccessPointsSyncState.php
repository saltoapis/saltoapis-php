<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/digitalkey/v1/digital_key.proto

namespace Saltoapis\Nebula\DigitalKey\V1\DigitalKey\AppKey;

use UnexpectedValueException;

/**
 * Sync state of the digital key's access points.
 *
 * Protobuf type <code>salto.nebula.digitalkey.v1.DigitalKey.AppKey.AccessPointsSyncState</code>
 */
class AccessPointsSyncState
{
    /**
     * Sentinel value used to indicate that the state is unknown, omitted,
     * or is not applicable.
     *
     * Generated from protobuf enum <code>ACCESS_POINTS_SYNC_STATE_UNSPECIFIED = 0;</code>
     */
    const ACCESS_POINTS_SYNC_STATE_UNSPECIFIED = 0;
    /**
     * The digital key's access points are invalidated.
     *
     * Generated from protobuf enum <code>INVALIDATED = 3;</code>
     */
    const INVALIDATED = 3;
    /**
     * The digital key's access points are being synced.
     *
     * Generated from protobuf enum <code>SYNCING = 1;</code>
     */
    const SYNCING = 1;
    /**
     * The digital key's access points are synced.
     *
     * Generated from protobuf enum <code>SYNCED = 2;</code>
     */
    const SYNCED = 2;
    /**
     * The digital key's access points are not supported on the digital key's installation.
     *
     * Generated from protobuf enum <code>NOT_SUPPORTED = 4;</code>
     */
    const NOT_SUPPORTED = 4;
    /**
     * The digital key's access points synchronization is skipped because the
     * number of access points associated with this digital key
     * exceeds the system's maximum allowed limit.
     *
     * Generated from protobuf enum <code>LIMIT_EXCEEDED = 5;</code>
     */
    const LIMIT_EXCEEDED = 5;

    private static $valueToName = [
        self::ACCESS_POINTS_SYNC_STATE_UNSPECIFIED => 'ACCESS_POINTS_SYNC_STATE_UNSPECIFIED',
        self::INVALIDATED => 'INVALIDATED',
        self::SYNCING => 'SYNCING',
        self::SYNCED => 'SYNCED',
        self::NOT_SUPPORTED => 'NOT_SUPPORTED',
        self::LIMIT_EXCEEDED => 'LIMIT_EXCEEDED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

