<?php

namespace App;

class BeanBurgerSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump("add bean burger");

        return $this;
    }
}
