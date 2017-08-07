<?php

namespace Dhii\Data\Container\Exception;

use Dhii\Data\Container\ContainerAwareInterface;
use Psr\Container\ContainerExceptionInterface as BaseContainerExceptionInterface;

/**
 * An exception that occurs in relation to a container.
 *
 * @since [*next-version*]
 */
interface ContainerExceptionInterface extends
        ContainerAwareInterface,
        BaseContainerExceptionInterface
{
}
