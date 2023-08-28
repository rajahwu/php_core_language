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
    <?php render_lesson_content('loops', true); ?>
  </ol>
  <hr>
  <ul>
    <?php render_lesson_content('loops'); ?>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>