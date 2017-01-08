<?php
namespace Alsar\Specification;

interface Specification
{
    /**
     * @param object $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate): bool;

    /**
     * @param Specification $other
     *
     * @return Specification
     */
    public function andx(Specification $other): Specification;

    /**
     * @param Specification $other
     *
     * @return Specification
     */
    public function orx(Specification $other): Specification;

    /**
     * @return Specification
     */
    public function not(): Specification;
}
