# match_expression

## switch vs. match

* Compares values strictly (===) instead of loosely (==) as the
    switch statement does
* A match expresion returns a value
* Do not fall-through to later cases the way
    switch statements do
* A match expression must be exhaustive
* The conditons "=>" are called matach arms
* Require semicolon after closing bracket
* Cleaner method for variable assignment versus switch statement
* Match add with php 8

## syntax

```php
    $x = 0;
    function add_to_x($x) {
        return $x + 5;
    }


    $result = match($x) {

        -2, -1, 0 => add_to_x($x),
        1 => '$x is 1',
        2 => '$x is 2',
        defalult => '$x is neither 1 nor 2',
    };


    $result = match(true) {
        $x <= 0 => '$x is not positive',
        $x == 1 => '$x is 1',
        $x == 2 => '$x is 2',
        defalult => '$x is neither 1 nor 2',
    };

    echo $result;
```
