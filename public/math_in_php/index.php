<?php include_once('../../private/initialize.php'); ?>
<?php      include(SHARED_PATH . '/header.php'); 

?>

<div id="page-content">
  <h1 id="top">Control Structures</h1>
  <p>Learning PHP</p>
  <div>
    <a href="./challenge/">Challenge</a>
    <a href="./quiz/">Quiz</a>
    <a href="./examples/">Examples</a>
  </div>
  <ol>
    <li><a href="#arithmetic_operators">arithmetic_operators</a></li>
    <li><a href="#modulus">modulus</a></li>
    <li><a href="#incrementing_decrementing">incrementing_decrementing</a></li>
  </ol>
  <hr>
  <ul>

    
    <li>
      <h2 id="arithmetic_operators">arithmetic_operators</h2>
      <p>
        <?php echo md('notes/arithmetic_operators.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="modulus">modulus</h2>
      <p>
        <?php echo md('notes/modulus.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="incrementing_decrementing">incrementing_decrementing</h2>
      <p>
        <?php echo md('notes/incrementing_decrementing.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>