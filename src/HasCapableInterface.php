<?php

namespace Dhii\Data\Container;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Data\Container\Exception\ContainerExceptionInterface;

/**
 * Represents something that can have data checked for by key.
 *
 * @since [*next-version*]
 */
interface HasCapableInterface
{
    /**
     * Checks whether this instance has data for a key.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $key The key to check for.
     *
     * @throws ContainerExceptionInterface If a problem occurs while checking.
     *
     * @return bool True if data exists for the key; otherwise false.
     */
    public function has($key);
}
