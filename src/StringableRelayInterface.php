<?php

declare (strict_types=1);
namespace KCTLD\Spiral\Goridge;

/**
 * @deprecated Please use "$relay instanceof \Stringable" assertion instead.
 */
interface StringableRelayInterface extends \Stringable
{
    /**
     * {@inheritDoc}
     */
    public function __toString() : string;
}
