<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace spec\BitBag\SyliusQuadPayPlugin\Validator\Constraints;

use BitBag\SyliusQuadPayPlugin\Validator\Constraints\OrderAmount;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Validator\Constraint;

final class OrderAmountSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(OrderAmount::class);
    }

    function it_extends_constraint_class(): void
    {
        $this->shouldHaveType(Constraint::class);
    }

    function it_has_a_message(): void
    {
        $this->maximumAmountMessage->shouldReturn(null);
        $this->minimumAmountMessage->shouldReturn(null);
    }

    function it_is_validate_by_unique_user_email_validator(): void
    {
        $this->validatedBy()->shouldReturn('bitbag_sylius_quadpay_plugin_order_amount');
    }

    function it_has_targets(): void
    {
        $this->getTargets()->shouldReturn(Constraint::CLASS_CONSTRAINT);
    }
}
