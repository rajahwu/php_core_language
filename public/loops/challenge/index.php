<h1>Calculate the Fibonacci Sequence</h1>
<p>Fibonacci sequence is a series of numbers in which the next number is
calculated by adding the two previous numbers.
</p>
<p>1,1,2,3,5,8,etc.</p>

<?php 
    $lst = array(0,1);
    $i = 1;
    while($lst[$i] < 200) {
        echo "<span>$lst[$i], </span>";
        $lst[] = $lst[$i - 1] + $lst[$i];
        $i++;
    }
?>