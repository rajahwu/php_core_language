<?php
$message = '';
foreach($_POST as $name => $value) {
    if ( 'submit' != $name) {
        if(is_array($value)) {
            $value = implode('. ', $value);
        }
        $message .=  ucfirst($name) . " is $value.\n\n";
    }
}

$to = "Vincent Radford<vmradford@gmail.com>";
$from = $_POST['name'] . '<' . $_POST['email'] . '>';
$subject = "Reason for Contact " . $_POST['reason'];

$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' .  $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if ( mail($to, $subject, $message, $headers)) {
    echo "<h3>Your message has been sent.</h3>";
} else {
    echo "<h3>Your message was <b>NOT</b> sent.</h3>";
    echo '<pre>';
    echo '<b>to -></b> ';
    var_dump($to);
    echo 'from -> ';
    var_dump($from);
    echo 'subject -> ';
    var_dump($subject);
    echo 'message -> ';
    var_dump($message);
    echo 'headers -> ';
    var_dump($headers);
    echo '</pre>';

}