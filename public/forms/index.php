<?php include_once('../../private/initialize.php'); 
      include(SHARED_PATH . '/header.php'); 

      $topics = array(
        'requests',
        'processing',
        'validations',
        'sending'
      )
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
  <hr>
  <ul>


    <li>
      <h2 id="note_title">Forms</h2>
      <p>
      <?php foreach($topics as $topic) { render_lesson_content($topic);} ?>

      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>