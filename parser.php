<?php
echo <<<_END
<html>
  <head>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
_END;
//-------Parse and display uploaded file------//
  if($_FILES) {
    $name = $_FILES['filename']['name'];

    if($_FILES['filename']['type'] == 'text/plain') { $ext = 'txt'; }
    else { $ext = ''; }

    if($ext) {
      //Parser
      $file = file($_FILES['filename']['tmp_name']);
      for($i=0; $i < count($file); $i++) {
        //Convert data into 'flashcards' here
        //$question# = new Flashcard[question, answer];...?
        echo $file[$i] . '<br>';
      }
    } else {
      echo $name . ' is not an accepted file type.';
    }
  }

//-------Or display input from second form-----//
  if(isset($_POST['question1']) AND isset($_POST['answer1'])) {
    echo "Question 1: <br>" . $_POST['question1'] . "<br>";
    echo "Answer to 1: " . $_POST['answer1'] . "<br>";
    echo "Question 2: <br>" . $_POST['question2'] . "<br>";
    echo "Answer to 2: " . $_POST['answer2'] . "<br>";
    echo "Question 3: <br>" . $_POST['question3'] . "<br>";
    echo "Answer to 3: " . $_POST['answer3'] . "<br>";
  }

echo <<<_END
  </body>
</html>
_END;
?>
