<?php

declare(strict_types=1);

namespace Alsar\Specification;

class NotSpecification extends CompositeSpecification
{
    /**
     * @var Specification
     */
    protected $specification;

    /**
     * @param Specification $specification
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
