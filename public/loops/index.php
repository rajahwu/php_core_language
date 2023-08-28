<?php include_once('../../private/initialize.php'); 
      include(SHARED_PATH . '/header.php');

      $topics = array('loops', 'do_while_loops', 'for_loops', 'foreach_loops');
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
    <?php foreach($topics as $topic) { render_lesson_content($topic, true);} ?>
  </ol>
  <hr />
  <ul>
    <?php foreach($topics as $topic) { render_lesson_content($topic);} ?>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>