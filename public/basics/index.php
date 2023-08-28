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
  <hr>
  <ul>

   <?php echo render_lesson_content('how_it_works'); ?>

    <li>
      <h2 id="printing">Printing</h2>
      <p>
        <?php echo md('notes/printing.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="variables">Variables</h2>
      <p>
        <?php echo md('notes/variables.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="quotes">Quotes</h2>
      <p>
        <?php echo md('notes/quotes.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="arrays">Arrays</h2>
      <p>
        <?php echo md('notes/arrays.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
    <li>
      <h2 id="defining_arrays">Defining Arrays</h2>
      <p>
        <?php echo md('notes/defining_arrays.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>