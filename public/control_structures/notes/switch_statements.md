# switch_statement

Allow you to clearly make decisions based on the value of
    a single variable

## Notes on Switch Statement

* Unlike if statements, they don't terminate upon finding a true statement
* Default serves as the catchall
* You can group cases together

## Syntax

```php
$total = 10;
switch($total) {
    case 1:
        echo '$total is 1';
        break;
    case 2:
    case 3:
        echo '$total > 2';
        break;
    default:
        echo '$total is more than 2 or less than 1';
}

// Alternative Syntax

$total = 10;
switch($total) :
    case 1:
        echo '$total is 1';
        break;
    // cases can be grouped to gether
    case 2:
    case 3:
        echo '$total > 2';
        break;
    default:
        echo '$total is more than 2 or less than 1';
    endswitch;

```
