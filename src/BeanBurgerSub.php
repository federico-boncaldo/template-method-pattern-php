<?php

namespace App;

class BeanBurgerSub extends Sub
{
    public function addBeanBurger()
    {
        var_dump("add bean burger");

        return $this;
    }
}
