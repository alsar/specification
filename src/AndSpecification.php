<?php

declare(strict_types=1);

namespace Alsar\Specification;

class AndSpecification extends CompositeSpecification
{
    protected Specification $one;
    protected Specification $other;

    public function __construct(Specification $x, Specification $y)
    {
        $this->one = $x;
        $this->other = $y;
    }

    public function isSatisfiedBy(object $candidate): bool
    {
        return $this->one->isSatisfiedBy($candidate) && $this->other->isSatisfiedBy($candidate);
    }
}
