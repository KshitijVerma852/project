<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Styling the components of the website */
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
    </style>
</head>
<body>
<?php
// Including the required files.
include "dbConnection.php";

// Setting up the database connection.
$connection = connectToDB();

// SQL query to run on the database.
$sql = "SELECT questionName, option1, option2, option3, option4, answer FROM questions";
$result = mysqli_query($connection, $sql);

// Function to display all data fetched from the sql query to a table format.
function showDataInTable($data)
{
    if (mysqli_num_rows($data) > 0) {
        echo "<table class='styled-table'><tr><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th></tr>";
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr><td>" . $row["questionName"] . "</td><td>" . $row["option1"] . "</td><td>" . $row["option2"] . "</td><td>" . $row["option3"] . "</td><td>" . $row["option4"] . "</td><td>" . $row["answer"] . "</td></tr>";
        }
        echo "</table>";
    }
}

showDataInTable($result);

?>

</body>
</html>