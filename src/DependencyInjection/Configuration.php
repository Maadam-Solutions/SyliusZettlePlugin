<?php

declare(strict_types=1);

namespace MaadamSolutions\SyliusZettlePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('maadam_solutions_sylius_zettle_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
