<?php
namespace Alsar\Specification;

interface Specification
{
    /**
     * @param object $candidate
     *
     * @return boolean
     */
    public function isSatisfiedBy($candidate);

    /**
     * @param Specification $other
     *
     * @return Specification
     */
    public function andx(Specification $other);

    /**
     * @param Specification $other
     *
     * @return Specification
     */
    public function orx(Specification $other);

    /**
     * @return Specification
     */
    public function not();
}
