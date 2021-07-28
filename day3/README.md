# PHP OOP Exercise - ESDM

Run `composer install`.

Run `php ./vendor/bin/phpunit` to run the tests.

## Exercise

### Basket Ball

```php
<?php

$games = new BasketBall('Chicago Bulls', 'Miami Heat');

$games->home();            // Chicago Bulls
$games->homeScore();       // 0
$games->homeThreePoints();
$games->homeScore();       // 3

$games->away();            // Miami Heat
$games->awayScore();       // 0
$games->awayTwoPoints();
$games->awayScore();       // 2
$games->awayOnePoint();
$games->awayScore();       // 3

$games->homeOnePoint();
$games->homeScore();       // 4
```

### Numerica

```php
<?php

$numbers = new Numerica([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);

$numbers->first();             // 3

$numbers->last();              // 2

$numbers->min();               // 1

$numbers->max();               // 10

$numbers->sum();               // 55

$numbers->rsort();             // 10, 9, 8, 7, 6, 5, 4, 3, 2, 1

$numbers->sort();              // 1, 2, 3, 4, 5, 6, 7, 8, 9, 10

$numbers->odd();               // 1, 3, 5, 7, 9

$numbers->even();              // 2, 4, 6, 8, 10

$numbers->greaterThan(5)       // 6, 7, 8, 9, 10

$numbers->greaterThanEqual(5)  // 5, 6, 7, 8, 9, 10

$numbers->lessThan(5)          // 1, 2, 3, 4

$numbers->lessThanEqual(5)     // 1, 2, 3, 4, 5

$numbers->primes();            // 2, 3, 5, 7
```

### Cart

```php
<?php

$cart = new Cart();

$martabak = new Item('SKU-1100', 'Martabak', 22000);
$roti = new Item('SKU-2200', 'Roti Bakar', 14000);

$cart->count();        // 0


$cart->add($martabak);

$cart->list();         // ['id' => 'SKU-1100', 'name' => 'Martabak', 'price' => 22000, 'qty' => 1],

$cart->count();        // 1


$cart->add($roti);
$cart->add($roti);
$cart->add($roti);

$cart->list();         // ['id' => 'SKU-1100', 'name' => 'Martabak', 'price' => 22000, 'qty' => 1],
                       // ['id' => 'SKU-2200', 'name' => 'Roti', 'price' => 14000, 'qty' => 3],

$cart->count();        // 4

$cart->total();       // 64000



$cart->remove('SKU-2200');


$cart->list();         // ['id' => 'SKU-1100', 'name' => 'Martabak', 'price' => 22000, 'qty' => 1],
                       

$cart->increase('SKU-1100');

$cart->list();         // ['id' => 'SKU-1100', 'name' => 'Martabak', 'price' => 22000, 'qty' => 2],

$cart->decrease('SKU-1100');

$cart->list();         // ['id' => 'SKU-1100', 'name' => 'Martabak', 'price' => 22000, 'qty' => 1],

$cart->clear();

$cart->list();         // []
```
