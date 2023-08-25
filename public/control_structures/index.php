<?php include_once('../../private/initialize.php'); ?>
<?php      include(SHARED_PATH . '/header.php'); 

?>

<div id="page-content">
  <h1 id="top">Control Structures</h1>
  <p>Learning PHP</p>
  <div>
    <a href="./challenge/">Challenge</a>
    <a href="./quiz/">Quiz</a>
  </div>
  <ol>
    <li><a href="#boolean_operators">Boolean Operators</a></li>
    <li><a href="#logical_operators">Logical Operators</a></li>
    <li><a href="#if_else_statements">If/Else Statements</a></li>
    <li><a href="#ternary_operations">Ternary Operations</a></li>
    <li><a href="#switch_statements">Switch Statements</a></li>
    <li><a href="#match_expression">Match Expression</a></li>
  </ol>
  <hr>
  <ul>


    <li>
      <h2 id="boolean_operators">Boolean Operators</h2>
      <p>
        <?php echo md('notes/boolean_operators.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="logical_operators">Logical Operators</h2>
      <p>
        <?php echo md('notes/logical_operators.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="if_else_statements">If/Else Statements</h2>
      <p>
        <?php echo md('notes/if_else_statements.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="ternary_operations">Ternary Operations</h2>
      <p>
        <?php echo md('notes/ternary_operations.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="switch_statements">switch_Statements</h2>
      <p>
        <?php echo md('notes/switch_statements.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="match_expression">Match Expression</h2>
      <p>
        <?php echo md('notes/match_expression.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>