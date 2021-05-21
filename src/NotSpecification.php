<?php

declare(strict_types=1);

namespace Alsar\Specification;

class NotSpecification extends CompositeSpecification
{
    protected Specification $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(object $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
