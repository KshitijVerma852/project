<?php
function connectToDB()
{
    $config = [
        "serverName" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "project"
    ];
    return mysqli_connect($config["serverName"], $config["username"], $config["password"], $config["database"]);
}