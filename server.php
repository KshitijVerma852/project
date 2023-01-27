<?php
$name = $_POST["name"];
$servername = "localhost";
$username = "root";
$password = "";
$connection = mysqli_connect($servername, $username, $password);

$sql = "SELECT questionName, option1, option2, option3, option4 FROM questions";
$result = mysqli_query($connection, "SELECT * FROM questions");
//echo $result;
//echo mysqli_num_rows($sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $row["questionName"]. "</td><td>". $row["option1"]. "</td></tr></table>";
    }
}
