<?php

namespace Alsar\Specification;

use PHPUnit\Framework\TestCase;

class OrSpecificationTest extends TestCase
{
    /**
     * @test
     */
    public function bothParametersTrue()
    {
        $stub1 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub1->expects($this->any())
             ->method('isSatisfiedBy')
             ->will($this->returnValue(true));

        $stub2 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub2->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(true));

        $andSpecification = new OrSpecification($stub1, $stub2);

        $this->assertTrue($andSpecification->isSatisfiedBy(new class(){}));
    }

    /**
     * @test
     */
    public function secondParameterFalse()
    {
        $stub1 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub1->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(true));

        $stub2 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub2->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(false));

        $andSpecification = new OrSpecification($stub1, $stub2);

        $this->assertTrue($andSpecification->isSatisfiedBy(new class(){}));
    }

    /**
     * @test
     */
    public function firstParameterFalse()
    {
        $stub1 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub1->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(false));

        $stub2 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub2->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(true));

        $andSpecification = new OrSpecification($stub1, $stub2);

        $this->assertTrue($andSpecification->isSatisfiedBy(new class(){}));
    }

    /**
     * @test
     */
    public function bothParametersFalse()
    {
        $stub1 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub1->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(false));

        $stub2 = $this->getMockForAbstractClass(CompositeSpecification::class);
        $stub2->expects($this->any())
              ->method('isSatisfiedBy')
              ->will($this->returnValue(false));

        $andSpecification = new OrSpecification($stub1, $stub2);

        $this->assertFalse($andSpecification->isSatisfiedBy(new class(){}));
    }
}
