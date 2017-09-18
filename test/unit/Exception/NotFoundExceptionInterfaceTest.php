<?php

namespace Dhii\Data\Container\Exception\UnitTest;

use Xpmock\TestCase;
use Dhii\Data\Container\Exception\NotFoundExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class NotFoundExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Container\Exception\NotFoundExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->getContainer()
                ->getDataKey()

                // ThrowableInterface
                ->getMessage()
                ->getCode()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->getPrevious()
                ->__toString()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a correct instance of a descendant can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(self::TEST_SUBJECT_CLASSNAME, $subject, 'A correct instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\Data\Container\Exception\ContainerExceptionInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Data\Container\DataKeyAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
