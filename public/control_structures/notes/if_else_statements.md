# if_else_statements

If statements are the most common of the control structures

* A single "if" always goes first
* The first conditon to evaluate as true will be the one that runs;
    the rest will be ignored
* The else statement always goes last -- it serves as a catchall
    if none of the conditions are true

## Control Structures

Employ logic to code and execute statements based on specific conditions

## If Statement Syntax

```php
if ( $a > $b ) {

    echo '$a is greater  than $b';

}
```

## If/Else

```php
if ( $a > $b ) {

    echo '$a is greater  than $b';

} else {

    echo '$a is not greater  than $b';

}
```

## If/Else If/Else

```php
if ( $a > $b ) {

    echo '$a is greater  than $b';

} else if ( $a < $b) {

    echo '$a is not greater  than $b';

} else {

    echo '$a and $b appear to be equal;

}
```

## Alternative Syntax

if (conditon to check) :
    // code to execute if the condition is true

elseif (different condition) :
    // different code to execute

else:
    // catch all code

endif;

```php
    <?php if ($home_page) : ?>
    <header>
        <h1>Welcome to the home page of my website!</h1>
        <p?>Have a look around.</p>
    </header>
    <?php endif; ?>

```

## Yoda Conditionals

Place the the variable on the right side of the condition
    to prevent things like accidental assignments

```php
// Good:
    <?php if ( 10 == $i ) { /* do something */ } ?>
// Bad:
    <?php if ( $i == 10 ) { /* do something */ } ?>
```
