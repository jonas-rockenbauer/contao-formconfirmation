<?php

/*
 * This file is part of Contao demo bundle.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoFormconfirmation\Tests;

use Jrockenbauer\ContaoFormconfirmation\ContaoFormconfirmation;
use PHPUnit\Framework\TestCase;

class ContaoFormconfirmationTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoFormconfirmation();

        $this->assertInstanceOf('Jrockenbauer\ContaoFormconfirmation\ContaoFormconfirmation', $bundle);
    }
}
