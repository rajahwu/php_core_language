<?php include_once('../../private/initialize.php'); 
      include(SHARED_PATH . '/header.php'); 
?>

<div id="page-content" class="flex flex-col">
  <div class="bg-red-200">
    <h1 id="top">The Basics</h1>
    <p>Learning PHP</p>
    <nav>
      <ul>
        <li>
          <a href="./challenge">Challenge</a>
        </li>
        <li>
          <a href="./quiz">Quiz</a>
        </li>
      </ul>
    </nav>
  </div>
<div class="bg-yellow-200">
  <ol>
    <?php
    render_lesson_content('printing', true);
    render_lesson_content('variables', true);
    render_lesson_content('quotes', true);
    render_lesson_content('arrays', true);
    render_lesson_content('defining_arrays', true);
    ?>
  </ol>
</div>
<div class="bg-blue-200">
  <ul>
    <?php render_lesson_content('how_it_works');
          render_lesson_content('printing'); 
          render_lesson_content('variables'); 
          render_lesson_content('quotes'); 
          render_lesson_content('arrays'); 
          render_lesson_content('defining_arrays'); 
    ?>
  </ul>
</div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>