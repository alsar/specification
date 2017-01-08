<?php

declare(strict_types=1);

namespace Alsar\Specification;

abstract class CompositeSpecification implements Specification
{
    /**
     * {@inheritdoc}
     */
    public function andx(Specification $other): Specification
    {
        return new AndSpecification($this, $other);
    }

    /**
     * {@inheritdoc}
     */
    public function orx(Specification $other): Specification
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
