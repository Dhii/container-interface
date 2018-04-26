<?php

namespace Dhii\Data\Container;

use Dhii\Factory\FactoryInterface;
use Psr\Container\ContainerInterface as BaseContainerInterface;

/**
 * Something that can create new container instances.
 *
 * @since [*next-version*]
 */
interface ContainerFactoryInterface extends FactoryInterface
{
    /**
     * The key in the factory config for container data.
     *
     * @since [*next-version*]
     */
    const K_DATA = 'data';

    /**
     * The key in the factory config for service definitions.
     *
     * @since [*next-version*]
     * @deprecated
     */
    const K_CFG_DEFINITIONS = self::K_DATA;

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BaseContainerInterface The created container instance.
     */
    public function make($config = null);
}
