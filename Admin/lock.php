<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["login_user"]))
{
	header("location:signin.php");
}

include("config.php");
$user_check=$_SESSION["login_user"];
$session=mysql_query("SELECT * FROM admin WHERE a_contact='$user_check' ");

$row=mysql_fetch_array($session);

?>