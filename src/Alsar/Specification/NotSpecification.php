<?php
namespace Alsar\Specification;

class NotSpecification extends CompositeSpecification
{
    /**
     * @var Specification
     */
    protected $specification;

    /**
     * @param Specification $one
     * @param Specification $other
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate)
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}