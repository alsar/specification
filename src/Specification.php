<?php

declare(strict_types=1);

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
    public function and(Specification $other): Specification;

    /**
     * @param Specification $other
     *
     * @return Specification
     */
    public function or(Specification $other): Specification;

    /**
     * @return Specification
     */
    public function not(): Specification;
}
