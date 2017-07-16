<?php

namespace Dhii\Data\Container;

/**
 * Something that can have a container retrieved.
 *
 * @since [*next-version*]
 */
interface ContainerAwareInterface
{
    /**
     * Retrieves the container associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ContainerInterface|null The container, if any.
     */
    public function getContainer();
}
