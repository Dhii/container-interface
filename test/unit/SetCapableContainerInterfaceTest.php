<?php

namespace Dhii\Data\Container\UnitTest;

use Xpmock\TestCase;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use Dhii\Data\Container\SetCapableContainerInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class SetCapableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Container\SetCapableContainerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject|MockObject The new instance.
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(self::TEST_SUBJECT_CLASSNAME)
            ->getMock();

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
        $this->assertInstanceOf('Dhii\Data\Container\ContainerInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Data\Container\SetCapableInterface', $subject, 'Subject does not implement required interface');
    }
}
