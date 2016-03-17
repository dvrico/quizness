<?php
  echo <<<_END
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quizness</title>
  </head>
  <body>
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
    </form>
  </body>
</html>
_END


?>
