<?php

namespace App;

class VeggieSub extends Sub
{
    public function make()
    {
        $this
            ->layBread()
            ->addLettuce()
            ->addVeggies()
            ->addSauces();
    }

    public function addVeggies()
    {
        var_dump("add bean veggies");

        return $this;
    }

}
