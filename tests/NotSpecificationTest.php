<?php

namespace Alsar\Specification;

use PHPUnit\Framework\TestCase;

class NotSpecificationTest extends TestCase
{
    /**
     * @test
     */
    public function isValidTrue()
    {
        $stub = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub->expects($this->any())
             ->method('isSatisfiedBy')
             ->will($this->returnValue(false));

        $notSpecification = new NotSpecification($stub);

        $this->assertTrue($notSpecification->isSatisfiedBy(new class(){}));
    }

    /**
     * @test
     */
    public function isValidFalse()
    {
        $stub = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub->expects($this->any())
             ->method('isSatisfiedBy')
             ->will($this->returnValue(true));

        $notSpecification = new NotSpecification($stub);

        $this->assertFalse($notSpecification->isSatisfiedBy(new class(){}));
    }
}
