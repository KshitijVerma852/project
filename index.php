<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Who Wants to be a millionaire?</title>
</head>
<body">
<h1>Who Wants to be a millionaire?</h1>
<?php
include "questions.php";

$questions = fetchAllQuestions();
$alive = true;
$questionNumber = 1;
$money = [100, 200, 300, 500, 1000, 2000, 4000, 8000, 16000, 32000, 64000, 125000, 250000, 500000, 1000000];

while ($alive) {
    $currentQuestion = fetchQuestion($questions, $questionNumber);
    echo "<form method='post' action=''><h1>" . $currentQuestion[1] . "</h1>";
    echo "<input type='radio' name='userAnswer' value='1'><h4 style='display: inline;'>" . $currentQuestion[2] . "</h4>";
    echo "<input type='radio' name='userAnswer' value='2'><h4 style='display: inline;'>" . $currentQuestion[3] . "</h4>";
    echo "<input type='radio' name='userAnswer' value='3'><h4 style='display: inline;'>" . $currentQuestion[4] . "</h4>";
    echo "<input type='radio' name='userAnswer' value='4'><h4 style='display: inline;'>" . $currentQuestion[5] . "</h4>";
    echo "<br><br><button type='submit'>Submit</button></form>";

    if (isset($_POST["userAnswer"])) {
        $index = (int)$_POST["userAnswer"];
        if ($currentQuestion[$index + 1] == $currentQuestion[6]) {
            echo "Correct";
            $questionNumber++;
        } else {
            echo "Incorrect";
            $alive = false;
        }
    }
}


?>
</body>
</html>