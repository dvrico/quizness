<?php
  echo <<<_END
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quizness</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div>
      <p>Upload a file...</p>
      <form method="post" action="parser.php" enctype="multipart/form-data">
        <p>Select File: </p><input type="file" name="filename" size="3000"><br>
        <input type="submit" value="Upload">
      </form>
    </div>
    <div>
      <p>...or input values directly</p>
      <form class="" action="parser.php" method="post">
        <fieldset id="questions">
          <legend>Questions</legend>
          1.<input type="text" name="question1" value=""><br>
          2.<input type="text" name="question2" value=""><br>
          3.<input type="text" name="question3" value=""><br>
        </fieldset>
        <fieldset id="answers">
          <legend>Answers</legend>
          1.<input type="text" name="answer1" value=""><br>
          2.<input type="text" name="answer2" value=""><br>
          3.<input type="text" name="answer3" value=""><br>
        </fieldset>
        <input type="submit" value="Submit!"><br>
      </form>
    <div>
  </body>
</html>
_END;

?>
