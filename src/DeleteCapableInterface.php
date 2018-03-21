<?php

namespace Dhii\Data\Container;

use Dhii\Util\String\StringableInterface as Stringable;
use Psr\Container\ContainerExceptionInterface;

/**
 * Exposes means of deleting a data member.
 *
 * @since [*next-version*]
 */
interface DeleteCapableInterface
{
    /**
     * Removes a data member from the object by key.
     *
     * @since [*next-version*]
     *
     * @param string|int|float|bool|Stringable $key The key of the data member to delete.
     *
     * @throws ContainerExceptionInterface If data member could not be deleted.
     */
    public function delete($key);
}
