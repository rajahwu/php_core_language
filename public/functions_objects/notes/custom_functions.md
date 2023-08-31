# Custom Functions

## Is Palindrome

```php
function is_palindrome( $string ) {
    $string = str_replace(' ', '', strtolower( $string ));
    return ( $string == strrev( $string ) );  
}


$check_string = 'wow'
if(is_palindrome( 'wow' )) {
    echo "<p>$check_stirng is a palindrome</p>";
}

```