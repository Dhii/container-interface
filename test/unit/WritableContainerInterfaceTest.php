<?php

namespace Dhii\Data\Container\UnitTest;

use Xpmock\TestCase;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use Dhii\Data\Container\WritableContainerInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class WritableContainerInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Container\WritableContainerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return TestSubject|MockObject The new instance.
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(self::TEST_SUBJECT_CLASSNAME)
            ->setMethods(array('get', 'has', 'set', 'delete'))
            ->getMock();

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
        $this->assertInstanceOf('Dhii\Data\Container\SetCapableContainerInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Data\Container\DeleteCapableContainerInterface', $subject, 'Subject does not implement required interface');
    }
}
