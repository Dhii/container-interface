<?php

namespace Dhii\Data\Container;

use \Util\String\StringableInterface as Stringable;

/**
 * Something that can have a data key retrieved from it.
 *
 * @since [*next-version*]
 */
interface DataKeyAwareInterface
{
    /**
     * Retrieves the key that is associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable|null The key, if any.
     */
    public function getDataKey();
}
