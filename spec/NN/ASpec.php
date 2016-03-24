<?php

namespace spec\NN;

use PhpSpec\ObjectBehavior;

class ASpec extends ObjectBehavior
{
    public function it_tests_static()
    {
        $this->staticA(4)->shouldReturn(8);
    }

    public function it_tests_new()
    {
        $this->newA(4)->shouldReturn(8);
    }
}
