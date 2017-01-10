<?php

declare(strict_types=1);

namespace Alsar\Specification;

abstract class CompositeSpecification implements Specification
{
    /**
     * {@inheritdoc}
     */
    public function and(Specification $other): Specification
    {
        return new AndSpecification($this, $other);
    }

    /**
     * {@inheritdoc}
     */
    public function or(Specification $other): Specification
    {
        return new OrSpecification($this, $other);
    }

    /**
     * {@inheritdoc}
     */
    public function not(): Specification
    {
        return new NotSpecification($this);
    }
}
