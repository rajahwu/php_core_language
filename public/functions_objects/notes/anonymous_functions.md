# Anonymous Functions

Function that don't get a name, and are created at runtime to
    preform a specific task
Also called "closures" or "callback functions"

## usort

```php
$names = array('Joe', 'Erin', 'Teresa', 'Louis');
usort($names, function($a, $b) {
    // <=> spaceship operation
    return $a[1] <=> $b[1];
});

```
