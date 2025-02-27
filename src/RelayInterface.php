<?php

declare (strict_types=1);
namespace KCTLD\Spiral\Goridge;

use KCTLD\Spiral\Goridge\Exception\RelayException;
/**
 * Blocking, duplex relay.
 */
interface RelayInterface
{
    /**
     * @return Frame
     * @throws RelayException
     */
    public function waitFrame() : Frame;
    /**
     * @param Frame $frame
     */
    public function send(Frame $frame) : void;
}
