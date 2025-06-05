<?php

declare(strict_types=1);

namespace NoCompromises\PhpCsFixer\Config;

use NoCompromises\PhpCsFixer\Config\RuleSet\Sets\NoCompromisesSet;
use PhpCsFixer\Config;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

class Factory
{
    public static function create(string $projectRoot): Config
    {
        $defaultRuleSet = new NoCompromisesSet();

        $config = new Config($defaultRuleSet->getName());

        $config->setRiskyAllowed(true);
        $config->setRules($defaultRuleSet->getRules());

        $config->getFinder()
            ->in($projectRoot)
            ->exclude([
                'bootstrap/cache',
                'node_modules',
                'storage',
            ])
            ->notPath([
                '_ide_helper.php',
            ]);

        $config->setParallelConfig(ParallelConfigFactory::detect());

        return $config;
    }
}
