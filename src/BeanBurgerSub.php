<?php

namespace App;

class BeanBurgerSub extends Sub
{
    public function make()
    {
    	$this
    		->layBread()
    		->addLettuce()
    		->addBeanBurger()
    		->addSauces();
    }

    public function addBeanBurger()
    {
    	var_dump("add bean burger");

    	return $this;
    }

}
