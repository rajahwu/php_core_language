# Validations

Back in validations

## Regular Expressions

(RegEx)
A set of characters that describe what specific strings should look like

```js
/^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^/

```

## Sanitizing input

```php
// trim
if (! empty( $_POST )) {
    foreach ($_POST as &$value) {
        $value = trim($value);
    }

    var_dump(($_POST));

// html 
    $_POST['message'] = htmlentities($_POST['message']);
```

### [Sanitize filters](https://www.php.net/manual/en/filter.filters.sanitize.php)


```php

```