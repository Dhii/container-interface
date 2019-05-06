<?php

namespace Dhii\Data\Container;

use Psr\Container\ContainerInterface;

/**
 * A container that can have values set.
 */
interface SetCapableContainerInterface extends
    ContainerInterface,
    SetCapableInterface
{
}
