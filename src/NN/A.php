<?php

namespace NN;

class A
{
    public function staticA($a)
    {
        return B::staticB() + $a;
    }

    public function newA($a)
    {
        return (new B())->newB() + $a;
    }
}
