<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        'combine_consecutive_unsets' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'psr4' => true,
        'strict_comparison' => true,
        'strict_param' => true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
    )
;
