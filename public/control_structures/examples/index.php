<a href="..">&lt; &lt; back</a>

<h2>Logical operators example</h2>
<code>
    <pre>
    $a = 9 > 5; // true
    $b = 10 != 10; // false 
    $c = $a && $b; // false
    $d = $a || $b; // true
    $e = $b && $c; // false
    $f = $a || $d; // true
    
    $logic = array ($a,$b,$c,$d,$e,$f); 
    </pre>
</code>
<?php 
    $a = 9 > 5; // true
    $b = 10 != 10; // false 
    $c = $a && $b; // false
    $d = $a || $b; // true
    $e = $b && $c; // false
    $f = $a || $d; // true
    
    $logic = array ($a,$b,$c,$d,$e,$f);

    echo '<pre>';
    var_dump($logic);
    echo '</pre>'; 
    

    ?>

<h2>If/Else Statement example</h2>

<code></code>
    <pre>
    if ( 10 < 1 ) {
	echo '<p>we stopped at if</p>';
} else if ( 10 < 4 ) {
	echo '<p>we stopped at the first else if.</p>';
} else if ( 10 < 11 ) {
	echo	'<p>we stopped at the second else if</p>';
} else if ( 10 < 20 ) {
	echo '<p>we stopped at the 3rd else if</p>';
} else {
	echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

$i = 10;

if ( 11 == $i ) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}
    </pre>
</code>

<?php
if ( 10 < 1 ) {
	echo '<p>we stopped at if</p>';
} else if ( 10 < 4 ) {
	echo '<p>we stopped at the first else if.</p>';
} else if ( 10 < 11 ) {
	echo	'<p>we stopped at the second else if</p>';
} else if ( 10 < 20 ) {
	echo '<p>we stopped at the 3rd else if</p>';
} else {
	echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

$i = 10;

if ( 11 == $i ) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}

?>

<h2>Switch Statemets</h2>

<code>
    <pre>
    $turtle = 'Leo';
$bandana = '';
switch( $turtle ) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'orange';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
}
    </pre>
</code>

<?php
$turtle = 'Leo';
$bandana = '';
switch( $turtle ) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'orange';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
}

echo "<p>$bandana</p>";
?>
<code>
    <pre>
    $turtle = 'Don';
    $bandana = match($turtle) {
    'Leo' => 'blue',
    'Raph' => 'red',
    'Mikey' => 'orange',
    'Don' => 'purple',
    default => 'red',
};
    </pre>
</code>

<?php
$turtle = 'Don';
$bandana = match($turtle) {
    'Leo' => 'blue',
    'Raph' => 'red',
    'Mikey' => 'orange',
    'Don' => 'purple',
    default => 'red',
};

echo $bandana;
?>