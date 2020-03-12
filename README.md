# Template Method Design Pattern in PHP

The code of this example is based on the [Laracasts](https://laracasts.com/) lesson on the [Template Method Pattern](https://laracasts.com/series/design-patterns-in-php/episodes/3).

The pattern is used to avoid duplications among classes which share similar functionalities by moving all functionalities and algorithms in a parent class which usually is declared abstract.

An abstract method is used inside the parent class to allow the subclasses to define behaviours that are specific of each class.

## Info

You could run the code in your local environment by cloning the repo:

`git clone https://github.com/federico-boncaldo/template-method-pattern-php.git`

and from command line running:

`php index.php`

## Requirements

PHP 5 or greater