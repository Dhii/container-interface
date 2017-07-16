<?php

namespace Dhii\Data\Container\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Container\ContainerInterface}.
 *
 * @since [*next-version*]
 */
class ContainerInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Container\\ContainerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Container\ContainerInterface The new instance.
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->get()
                ->has()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a correct instance of a descendant can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(self::TEST_SUBJECT_CLASSNAME, $subject, 'A correct instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Data\\Container\\HasCapableInterface', $subject, 'Subject does not implement required interface');
    }
}
