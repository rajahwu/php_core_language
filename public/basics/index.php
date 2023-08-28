<?php include_once('../../private/initialize.php'); ?>
<?php      include(SHARED_PATH . '/header.php'); 

      function parse_lesson_content_title($content_title) {

      }
?>

<div id="page-content">
  <h1 id="top">The Basics</h1>
  <p>Learning PHP</p>
  <div>
    <a href="./challenge/">Challenge</a>
    <a href="./quiz/">Quiz</a>
  </div>
  <ol>
    <?php
    render_lesson_content('printing', true);
    render_lesson_content('variables', true);
    render_lesson_content('quotes', true);
    render_lesson_content('arrays', true);
    render_lesson_content('defining_arrays', true);
    ?>
  </ol>
  <hr />
  <ul>
    
    <?php render_lesson_content('how_it_works');
         render_lesson_content('printing'); 
         render_lesson_content('variables'); 
         render_lesson_content('quotes'); 
         render_lesson_content('arrays'); 
         render_lesson_content('defining_arrays'); ?>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>