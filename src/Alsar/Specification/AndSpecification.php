<?php
namespace Alsar\Specification;

class AndSpecification extends CompositeSpecification
{
    /**
     * @var Specification
     */
    protected $one;

    /**
     * @var Specification
     */
    protected $other;

    /**
     * @param Specification $x
     * @param Specification $y
     */
    public function __construct(Specification $x, Specification $y)
    {
        $this->one   = $x;
        $this->other = $y;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate)
    {
        return $this->one->isSatisfiedBy($candidate) && $this->other->isSatisfiedBy($candidate);
    }
}