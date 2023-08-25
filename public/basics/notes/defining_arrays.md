# Defining Arrays

[watch the video](https://www.linkedin.com/learning/learning-php-4/defining-arrays?autoSkip=true&contextUrn=urn%3Ali%3AlyndaLearningPath%3A57bdd8a292015ae4c0cb990f&resume=false)

[example](examples/defining_arrays.php)

```php
<?php 
   // Indexable Array
    Scolors = array('red', 'blue', 'green');

    print_r($colors); // Array ([0]=>red[1]=>blue[2]=>green)

    echo '<p>' . $colors[1] . '</p>'; // blue

    $colors[] = 'yellow';

    print_r($colors); // Array ([0]=>red[1]=>blue[2]=>green[3]=>)

    // Associative Arrays
    $home_towns = array(
        'Joe' => 'Middletown, NY',
        'Erin' => 'West Chester, PA',
        'Dave' => 'Exton, PA,',
        'Brian' => 'Grand Rapids, MI',
    );

    print_r($home_towns); 
    // Array ( [Joe] => Middletown, NY [Erin] => West Chester, PA [Dave] => Exton, PA, [Brian] => Grand Rapids, MI )

    echo '<p>' . $home_town['Erin'] . '</p>';

      $brothers = array( 
        'Joe' => array( 
            'age' => 34,
            'job' => 'teacher',
            'state' => 'PA',
        ),
        'Phil' => array( 
            'age' => 33,
            'job' => 'photographer',
            'state' => 'NY',
        ),
        'Mike' => array( 
            'age' => 32,
            'job' => 'logistics',
            'state' => 'NY',
        ),
        'Rob' => array( 
            'age' => 29,
            'job' => 'manager',
            'state' => 'FL',
        ),
    );

    print_r( $brothers );

    echo '<p>'. $brothers['Rob']['state'] . '</p>';
   
?>
```
