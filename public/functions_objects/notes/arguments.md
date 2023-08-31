# Arguments

```php
function math($a, $b = 2, $op = 'multiply' ) {
    if( 'add' == $op ) {
        return $a + $b;
    } else if ('sub' == $op) {
        return $a - $b;
    } else if ('divide' == $op) {
        retrun $a / $b;
    }

    return $a * $b;
}

// named argument
math(2, op: 'add');

```