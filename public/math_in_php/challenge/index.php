<h1>Challenge</h1>
<p>Perform the following arithmetic operations in PHP and store them in an array. Then output all the results.</p>
<ol>
    <li>(14 + 82 - 32/2)^2</li>
    <li>18 x (3 / 6- 9 ) x 10</li>
    <li>5 x (12 / 2 - 8 x 4 + 12 x 6)</li>
</ol>

<?php 
    $results = array();
    $results[] = ((14 + 82 - (32 /2)) ** 2);
    $results[] = 180 * ((3/6) - 9);
    $results[] = 5 * ((12 / 2) - (8 * 4) + (12 * 6));

    echo '<pre>';
    print_r($results);
    echo '</pre>';
    ?>