<?php

namespace App;

abstract class Sub
{
    public function make()
    {
        $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    public function layBread()
    {
        var_dump("laying down the bread");

        return $this;
    }

    public function addLettuce()
    {
        var_dump("add some lettuce");

        return $this;
    }

    public function addSauces()
    {
        var_dump("add sauces");

        return $this;
    }
}
