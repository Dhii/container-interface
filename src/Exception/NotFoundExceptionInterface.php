<?php

namespace Dhii\Data\Container\Exception;

use Psr\Container\NotFoundExceptionInterface as BaseNotFoundExceptionInterface;

/**
 * Represents an exception which occurs when data requested for a key is not found.
 *
 * @since 0.1
 */
interface NotFoundExceptionInterface extends
        BaseNotFoundExceptionInterface,
        ContainerExceptionInterface
{
    /**
     * Retrieves the associated key.
     *
     * @since 0.1
     *
     * @return string The key, for which data was requested, if any.
     */
    public function getDataKey();
}
