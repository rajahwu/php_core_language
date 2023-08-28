<h1>Calculate the Fibonacci Sequence</h1>
<p>Fibonacci sequence is a series of numbers in which the next number is
calculated by adding the two previous numbers.
</p>
<p>1,1,2,3,5,8,etc.</p>
<code>
    <pre>  
    $lst = array(0,1);
    $i = 1;
    while($lst[$i] < 200) {
        echo "<span>$lst[$i], </span>";
        $lst[] = $lst[$i - 1] + $lst[$i];
        $i++;
    }
</pre>
</code>
    <?php 
    $lst = array(0,1);
    $i = 1;
    while($lst[$i] < 200) {
        echo "<span>$lst[$i], </span>";
        $lst[] = $lst[$i - 1] + $lst[$i];
        $i++;
    }
?>
    <hr />

<code>
    <pre>
    $current = 1;
    $previous = 0;
    $next = null;
    $limit = 200;
    $sequence = '';

    while($current < $limit) {
        $sequence .= $current . ', ';
        $next = $current + $previous;
        $previous = $current;
        $current = $next;
    }

    $sequence = trim($sequence);
    $sequence = substr($sequence, 0, strlen($sequence) -1);
    echo $sequence;
    </pre>
</code>

<?php
    $current = 1;
    $previous = 0;
    $next = null;
    $limit = 200;
    $sequence = '';

    while($current < $limit) {
        $sequence .= $current . ', ';
        $next = $current + $previous;
        $previous = $current;
        $current = $next;
    }
    
    $sequence = trim($sequence);
    $sequence = substr($sequence, 0, strlen($sequence) -1);
    echo $sequence;
    ?>
    <hr />