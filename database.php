<?php
$db_server = "localhost";

$db_user = "root";

$db_password = "";

$db_name = "firstform";

$mysqli = "";

$mysqli = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if ($mysqli) {
    echo "You are connected to the database";
} else {
    echo "You are not connected to the database";
}

try {
    $mysqli = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "You are not connected";
}