<?php
include "dbConnection.php";
include "Question.php";

$connection = connectToDB();
function fetchAllQuestions()
{
    global $connection;
    $sql = "SELECT * FROM questions";
    $result = mysqli_query($connection, $sql);
    $questions = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $miniArr = array($row["id"], $row["questionName"], $row["option1"], $row["option2"], $row["option3"], $row["option4"], $row["answer"]);
            $questions[] = $miniArr;
        }
    }
    return $questions;
}

$questions = fetchAllQuestions();

function sortQuestions($questions)
{
    for ($x = 0; $x < 15; $x++) {
        for ($y = 0; $y < $x; $y++) {
            if ($questions[$x][0] > $questions[$y][0]) {
                $temp = $questions[$x];
                $questions[$x] = $questions[$y];
                $questions[$y] = $temp;
            }
        }
    }
    return $questions;
}

$sortedQuestions = sortQuestions($questions);

function fetchQuestion($questions, $id)
{
    return $questions[$id - 1];
}

