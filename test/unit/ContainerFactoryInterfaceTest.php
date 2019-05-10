<?php

namespace Dhii\Data\Container\UnitTest;

use Dhii\Data\Container\ContainerFactoryInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class ContainerFactoryInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Container\ContainerFactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return TestSubject|MockObject
     */
    public function createInstance()
    {
        return $this->getMockForAbstractClass(static::TEST_SUBJECT_CLASSNAME);
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Dhii\Factory\FactoryInterface',
            $subject,
            'Test subject does not implement expected interface.'
        );
    }
}
