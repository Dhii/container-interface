<?php

namespace Dhii\Data\Container;

/**
 * Something that can have a container retrieved.
 *
 * @since 0.1
 */
interface ContainerAwareInterface
{
    /**
     * Retrieves the container associated with this instance.
     *
     * @since 0.1
     *
     * @return ContainerInterface|null The container, if any.
     */
    public function getContainer();
}
