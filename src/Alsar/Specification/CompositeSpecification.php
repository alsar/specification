<?php
namespace Alsar\Specification;

abstract class CompositeSpecification implements Specification
{
    /**
     * {@inheritdoc}
     */
    public function andx(Specification $other)
    {
        return new AndSpecification($this, $other);
    }

    /**
     * {@inheritdoc}
     */
    public function orx(Specification $other)
    {
        return new OrSpecification($this, $other);
    }

    /**
     * {@inheritdoc}
     */
    public function not()
    {
        return new NotSpecification($this);
    }
}