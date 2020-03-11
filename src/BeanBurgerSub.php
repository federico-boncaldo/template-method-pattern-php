<?php

namespace App;

class BeanBurgerSub extends Sub
{
    protected function addPrimaryToppings()
    {
        var_dump("add bean burger");

        return $this;
    }
}
