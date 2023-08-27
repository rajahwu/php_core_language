# logical_operators

* Combine comparison statement and evaluate the overall truthfulness
* Will always evaluate to TRUE or FALSE
* Used to check the state of a website and control the flow of the code

## && is AND

* (true && true) is true
* (true && false) is false
* (false && false) is false

## || is OR

* (true || true) is true
* (true || false) is true
* (false || false) is false

```php
$a = 9 > 5; // true
$b = 10 != 10; // false 
$c = $a && $b; // false
$d = $a || $b; // true
$e = $b && $c; // true
$f = $a || $d; // true

$logic = array ($a,$b,$c,$d,$e,$f);
```

## ^ is XOR

one statement is true but not all

* (true ^ true) is false
* (true ^ false) is true
* (false ^ false) is false
