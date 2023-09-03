<?php
$message = '';
foreach($_POST as $name => $value) {
    if ( 'submit' != $name) {
        if(is_array($value)) {
            $value = implode('. ', $value);
        } else {
            $value = trim($value);
        }
        $message .=  ucfirst($name) . " is $value.\n\n";
    }
}

$to = '<vmradford@gmail.com>';
$subject = "Reason for Contact " . $_POST['reason'];
$from = '<' . $_POST['email'] . '>';

$headers = 'From: ' . $from . "\r\n" .
    'To: ' .  $to. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    echo '<h3>Post</h3> <pre>';
    var_dump($_POST);
    echo '</pre>';
    echo '<h3>Sending...</h3>';
    echo '<pre>';
    echo '<b>$to -></b>' . " ";
    var_dump($to);
    echo '<b>$from -></b>' . " ";
    var_dump($from);
    echo '<b>$subject -></b>' . " ";
    var_dump($subject);
    echo " " . '<b>$message -></b>' . " ";
    var_dump($message);
    echo '<b>$headers -></b>' . " ";
    var_dump($headers);
    echo '</pre>';

if ( mail($to, $subject, $message, $headers)) {
    echo "<h3>Your message has been sent.</h3>";
} else {
    echo "<h3>Your message was <b>NOT</b> sent.</h3>";
    echo '<pre>';
    echo '<b>$to -></b>' . " ";
    var_dump($to);
    echo '<b>$from -></b>' . " ";
    var_dump($from);
    echo '<b>$subject -></b>' . " ";
    var_dump($subject);
    echo '<b>$message -></b>' . " ";
    var_dump($message);
    echo '<b>$headers -></b>' . " ";
    var_dump($headers);
    echo '</pre>';

}