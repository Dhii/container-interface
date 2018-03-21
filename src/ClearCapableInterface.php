<?php

namespace Dhii\Data\Container;

use Psr\Container\ContainerExceptionInterface;

/**
 * Exposes means of clearing the members of the container.
 *
 * @since [*next-version*]
 */
interface ClearCapableInterface
{
    /**
     * Clears the members.
     *
     * @since [*next-version*]
     *
     * @throws ContainerExceptionInterface If problem clearing.
     */
    public function clear();
}
