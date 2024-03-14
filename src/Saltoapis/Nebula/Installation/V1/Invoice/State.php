<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1\Invoice;

use UnexpectedValueException;

/**
 * State for a invoice.
 *
 * Protobuf type <code>salto.nebula.installation.v1.Invoice.State</code>
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
     * The invoice is unpaid.
     *
     * Generated from protobuf enum <code>UNPAID = 1;</code>
     */
    const UNPAID = 1;
    /**
     * The invoice has been paid.
     *
     * Generated from protobuf enum <code>PAID = 2;</code>
     */
    const PAID = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::UNPAID => 'UNPAID',
        self::PAID => 'PAID',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Saltoapis\Nebula\Installation\V1\Invoice_State::class);

