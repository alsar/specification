<?php
namespace Alsar\Specification;

use Alsar\Specification\Specification;
use \PHPUnit_Framework_TestCase as TestCase;

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

        $this->assertTrue($notSpecification->isSatisfiedBy('abc'));
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

        $this->assertFalse($notSpecification->isSatisfiedBy('abc'));
    }
}