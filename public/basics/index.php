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
    <li><a href="#printing">Printing</a></li>
    <li><a href="#variables">Variables</a></li>
    <li><a href="#quotes">Quotes</a></li>
    <li><a href="#arrays">Arrays</a></li>
    <li><a href="#defining_arrays">Defining arrays</a></li>
  </ol>
  <hr />
  <ul>
   <?php echo render_lesson_content('how_it_works');
         echo render_lesson_content('printing'); 
         echo render_lesson_content('variables'); 
         echo render_lesson_content('quotes'); 
         echo render_lesson_content('arrays'); 
         echo render_lesson_content('defining_arrays'); ?>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>