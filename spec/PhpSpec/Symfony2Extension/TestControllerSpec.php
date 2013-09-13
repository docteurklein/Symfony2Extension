<?php

namespace spec\PhpSpec\Symfony2Extension;

use PhpSpec\Symfony2Extension\Specification\ControllerBehavior;
use Prophecy\Argument;

class TestControllerSpec extends ControllerBehavior
{
    public function it_generates_url($container, $router)
    {
        $this->setContainer($container);
        $this->generateUrl('homepage')->shouldReturn('test');
    }
}