<?php include_once('../../private/initialize.php'); 
      include(SHARED_PATH . '/header.php');
       
      $topics = array(
        'functions',
        'built-in_functions',
        'custom_functions',
        'union_typing_variables',
        'arguments',
        'anonymous_functions',
        'objects_classes',
        'defining_simple_class',
        'using_simple_class'
      )
?>

<div id="page">

  <div id="title">
    <h1 id="top">Control Structures</h1>
    <p>Learning PHP</p>
  </div>

  <nav>
    <div id="review-links">
      <a href="./challenge/">Challenge</a>
      <a href="./quiz/">Quiz</a>
      <a href="./examples/">Examples</a>
    </div>
    <div id="content-links">
      <ol>
        <?php foreach($topics as $topic) { render_lesson_content($topic, true);} ?>
      </ol>
    </div>
  </nav>

  <hr />

  <div id="content">
    <ul>
      <?php foreach($topics as $topic) { render_lesson_content($topic);} ?>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>