<?php include_once('../../../private/initialize.php'); ?>
<?php      include(SHARED_PATH . '/header.php'); ?>

<?php 
   // Indexable Array
    $colors = array('red', 'blue', 'green');

    print_r($colors); 
    // Array ([0]=>red[1]=>blue[2]=>green)

    echo '<p>' . $colors[1] . '</p>'; 
    // blue

    $colors[] = 'yellow';

    print_r($colors); 
    // Array ([0]=>red[1]=>blue[2]=>green[3]=>)

     // Associative Arrays
     $home_towns = array(
        'Joe' => 'Middletown, NY',
        'Erin' => 'West Chester, PA',
        'Dave' => 'Exton, PA,',
        'Brian' => 'Grand Rapids, MI',
    );

    echo '<pre>';
    print_r($home_towns); // Array ( [Joe] => Middletown, NY [Erin] => West Chester, PA [Dave] => Exton, PA, [Brian] => Grand Rapids, MI )
    echo '</pre>';

    echo '<p>' . $home_towns['Erin'] . '</p>';

?>

<?php
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

    echo '<pre>';
    print_r( $brothers );
    echo '</pre>';

    echo '<p>'. $brothers['Rob']['state'] . '</p>'; ?>


<?php include(SHARED_PATH . '/footer.php'); ?>
