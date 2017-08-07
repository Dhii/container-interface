<?php

namespace Dhii\Data\Container\Exception\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Container\Exception\ContainerExceptionInterface}.
 *
 * @since [*next-version*]
 */
class ContainerExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Container\\Exception\\ContainerExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Container\Exception\ContainerExceptionInterface The new instance.
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->getContainer()
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
        $this->assertInstanceOf('Dhii\\Data\\Container\\ContainerAwareInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Psr\\Container\\ContainerExceptionInterface', $subject, 'Subject does not implement required interface');
    }
}
