<?php

namespace App;

class VeggieSub
{
    public function make()
    {
        $this
            ->layBread()
            ->addLettuce()
            ->addVeggies()
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

    public function addVeggies()
    {
        var_dump("add bean veggies");

        return $this;
    }

    public function addSauces()
    {
        var_dump("add sauces");

        return $this;
    }
}
