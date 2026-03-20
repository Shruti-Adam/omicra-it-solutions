<?php
define("server", "localhost");
define("username", "root");
define("password", "");
define("dbname", "slam_book");

$con=mysql_connect(server,username,password) OR die(mysql_error());
mysql_select_db(startup, $con) OR die(mysql_error());

?>

