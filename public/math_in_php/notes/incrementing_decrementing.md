# Incrementing and Decrementing

```php
    $a = $a + 1;

    $a++;

    $b = $b - 1;

    $b--;
```

## pre and post increment actions

```php
<?php 
$a = 5;
//this will be 6
echo 'The value of $a is ' . --$a . '<br/>'; 
//This will still be 6
echo 'Now $a is ' . $a . '<br/>'; 


$a = 5;
//this will still be 5
echo 'The value of $a is ' . $a-- . '<br/>'; 
//This will be 6
echo 'Now $a is ' . $a . '<br/>'; 

$a = 1;

$a /= 5;
echo $a;
```

## Letter have numeric values in php

```php
$a = 'A';
echo '$a is ' . ++$a . '<br/>';
// print $a is B
```
