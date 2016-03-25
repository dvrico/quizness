<form class="QA-form" action="" method="post">
  <input type="text" name="title" placeholder="Flashcard Pack Title"><br>
<?php
  if(isset($_POST['flashcards'])) {
    $flashcards = $_POST['flashcards'];
    for($i = 1; $i < $flashcards + 1; $i++) {
      echo "Q" . $i . ": " . "<input type='text' name='question'>";
      echo "A" . $i . ": " . "<input type='text' name='answer'><br>";
    }
  }

  function addMore($number) {
    $flashcards = $_POST['addMore'];
    for($i = 1; $i < $flashcards + 1; $i++) {
      echo "Q" . $i . ": " . "<input type='text' name='question'>";
      echo "A" . $i . ": " . "<input type='text' name='answer'><br>";
    }
  }
?>
</form>

<form onclick="addMore(3)">
  <select name="more">
    <option value="1">One more</option>
    <option value="3">Three more</option>
    <option value="5">Five more</option>
    <option value="10">Ten more</option>
  </select>
  <input type="submit" value="Add more!">
</form>
