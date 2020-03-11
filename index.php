<?php

require 'vendor/autoload.php';

echo "Veggie Sub";
(new App\VeggieSub)->make();
echo "\n\n";

echo "Bean Burger Sub";
(new App\BeanBurgerSub)->make();
echo "\n\n";
