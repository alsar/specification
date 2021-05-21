<?php

declare(strict_types=1);

namespace Alsar\Specification;

interface Specification
{
    public function isSatisfiedBy(object $candidate): bool;

    public function and(Specification $other): Specification;

    public function or(Specification $other): Specification;

    public function not(): Specification;
}
