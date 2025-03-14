<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/user/v1/user.proto

namespace Saltoapis\Nebula\User\V1\WalletKey;

use UnexpectedValueException;

/**
 * State for a wallet key.
 *
 * Protobuf type <code>salto.nebula.user.v1.WalletKey.State</code>
 */
class State
{
    /**
     * Sentinel value used to indicate that the state is unknown, omitted,
     * or is not applicable.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The wallet key is not assigned.
     *
     * Generated from protobuf enum <code>NOT_ASSIGNED = 1;</code>
     */
    const NOT_ASSIGNED = 1;
    /**
     * The wallet key is pending activation.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * The wallet key is active and ready to be used.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::NOT_ASSIGNED => 'NOT_ASSIGNED',
        self::PENDING => 'PENDING',
        self::ACTIVE => 'ACTIVE',
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

