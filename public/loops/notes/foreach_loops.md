# Foreach Loops

foreach( array as item) {
    // do something with item
}

foreach( array as key => value) {
    // do something with key and value
}

```php
$colors = array('red', 'blue', 'green', 'yellow');

foreach($colors as $color) {
    echo "<p>$color</p>";
}

$home_towns = array(
        'Joe' => 'Middletown, NY'
        'Erin' => 'West Chester, PA'
        'Dave' => 'Exton, PA'
        'Brian' => 'Grand Rapids, MI'
);

foreach($home_towns as $name => $town) {
    echo "<p>$name lives in $town</p>";
}
```
