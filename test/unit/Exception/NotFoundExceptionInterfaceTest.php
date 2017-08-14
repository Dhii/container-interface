<?php

namespace Dhii\Data\Container\Exception\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Container\Exception\NotFoundExceptionInterface}.
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
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Container\\Exception\\NotFoundExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Data\Container\Exception\NotFoundExceptionInterface The new instance.
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->getContainer()
                ->getDataKey()
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
        $this->assertInstanceOf('Dhii\\Data\\Container\\Exception\\ContainerExceptionInterface', $subject, 'Subject does not implement required interface');
    }
}
