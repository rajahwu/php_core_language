# Quotes

Use single quotes in php unless there is a reason to use double quotes
    such as reading a variable or using an escape character.

Single quotes are slightly more efficent because they don't process
    their contents before outputing it's data as double quotes do.

**Double Quotes** :String in double quotes will be processed by PHP before being outputted.

```php
<?php 
    $name = 'Joe';
    echo "Hello, $name";
    // Hello,Joe

    $name = 'Joe';
    echo 'Hello, $name';
    // Hello,Sname

    $name = 'Joe';
    echo 'Hello,' . $name '.';
    // Hello,Joe!

?>
```

## Escape Character

* \n for a new line
* \\ for a backslash
* \$ for a dollar sign
* \t for a tab

[php Manual: escape sequences](https://www.php.net/manual/en/regexp.reference.escape.php)
