<?php

namespace Dhii\Data\Container\UnitTest;

use Xpmock\TestCase;
use Dhii\Data\Container\DataKeyAwareInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class DataKeyAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Container\DataKeyAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return TestSubject The new instance.
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->getDataKey()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a correct instance of a descendant can be created.
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(self::TEST_SUBJECT_CLASSNAME, $subject, 'A correct instance of the test subject could not be created');
    }
}
