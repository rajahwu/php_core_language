# Namespacing

Creating a separate scope for a set of functions or classes

```php
function double($a) {
    return $a * 2;
}

<?php 
namespace learningPHP;
function double($a) {
    return $a * 2;

?>

<?php 
include 'learningphp.php';


learningPHP\double();
?>

```