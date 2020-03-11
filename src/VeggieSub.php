<?php

namespace App;

class VeggieSub extends Sub
{
    protected function addPrimaryToppings()
    {
        var_dump("add bean veggies");

        return $this;
    }
}
