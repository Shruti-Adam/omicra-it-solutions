<?php
define("server", "localhost");
define("username", "root");
define("password", "");
define("dbname", "startup");

$con = mysqli_connect(server, username, password, dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>