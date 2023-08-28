# Functions

Resuable snippets of code that can be called multiple times
Functions are like variable for lines of code

## Functions Can

* Return a variable
* Print something out

```php
function hello_world() {
    echo "Hello World";
}

<p><?php hello_world(); ?></p>

function hello_world() {
    return "Hello World";
}

echo '<p>' . hello_world() . '</p>' ?>;

```

## Using Functions

```php
function is_bigger() {
    return 10 >= 5;
}

$bigger = is_bigger();
if($bigger) {
    echo "The function returned true.";
} else {
    echo "The function returned false.";
}

if(is_bigger()) {
    echo "The function returned true.";
} else {
    echo "The function returned false.";
}
```

## Passing Arguments

```php
function is_bigger($a, $b) {
    return $a >= $b;
}

$bigger = is_bigger(10,5);

```