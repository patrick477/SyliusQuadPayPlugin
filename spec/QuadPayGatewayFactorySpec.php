<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace spec\BitBag\SyliusQuadPayPlugin;

use BitBag\SyliusQuadPayPlugin\QuadPayGatewayFactory;
use Payum\Core\GatewayFactory;
use PhpSpec\ObjectBehavior;

final class QuadPayGatewayFactorySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(QuadPayGatewayFactory::class);
        $this->shouldHaveType(GatewayFactory::class);
    }

    function it_populates_config_run(): void
    {
        $this->createConfig([]);
    }
}
