<?php

namespace App;

class BeanBurgerSub
{
    public function make()
    {
    	$this
    		->layBread()
    		->addLettuce()
    		->addBeanBurger()
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

    public function addBeanBurger()
    {
    	var_dump("add bean burger");

    	return $this;
    }

    public function addSauces()
    {
    	var_dump("add sauces");

    	return $this;
    }
}
