<?php include_once('../../private/initialize.php');?>
<?php include(SHARED_PATH . '/header.php'); ?>

  <div id="page-content">
    <h1>The Basics</h1>
    <p>Learning PHP</p>
    <ol>
      <li><a href="">Printing</a></li>
      <li><a href="">Variables</a></li>
      <li><a href="">Quotes</a></li>
      <li><a href="">Arrays</a></li>
      <li><a href="">Defining arrays</a></li>
    </ol>
    <hr>
    <ul>
    </ul>
    <h2>How it Works</h2>
    <?php echo md('notes/how_it_works.md'); ?>
  </div>

<?php include(SHARED_PATH . '/footer.php'); ?>
