<?php

/*
 * This file is part of Contao demo bundle.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoFormconfirmation\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Jrockenbauer\ContaoFormconfirmation\ContaoFormconfirmation;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoFormconfirmation::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
