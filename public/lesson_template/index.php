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
    <li><a href="#note_title">Note Title</a></li>
  </ol>
  <hr>
  <ul>


    <li>
      <h2 id="note_title">Note Title</h2>
      <p>
        <?php echo md('notes/note.md'); ?>
      </p>
      <a href="#top">--top--</a>
      <hr />
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>