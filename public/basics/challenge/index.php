<?php include_once('../../private/initialize.php'); 
    $name= "Teresa"; // Heading 1
    $city = "NYC";
    $movie = "Star Wars"; //Italics
    $friend = "George"; //Bold
    $candy = "Sour Patch Kids";

?>


<h1>Display basic information on an HTML Page</h1>
<hr />

<?php 
    $msg = $name . ' went to go see ' . $movie . ' ';
    $msg .= 'with ' . $friend . ".";
    echo '<p>'. $msg . '</p>';
    echo '<p>' . $name . ' got ' . $candy . '.';

    ?>


<?php include(SHARED_PATH . '/footer.php'); ?>

