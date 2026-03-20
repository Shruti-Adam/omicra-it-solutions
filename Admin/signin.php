<?php
error_reporting(0);
session_start();
require_once("config.php");
if(isset($_SESSION['login_user']))
{
	header("location:index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$mycontact=$_POST['contact'];
	$mypassword=$_POST['password'];
	$password=md5($mypassword);
	
	$sql=("SELECT a_id FROM admin WHERE a_contact='$mycontact' AND a_password='$password' ");
	
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	
	if($count==1)
	{
		$_SESSION['login_user'] = $mycontact;
		header("location:index.php");
	}
	else
	{
		echo "Your login name or password incorrect.Check it once?";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #2320e6;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #2320e6;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #2320e6;
}

form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #2320e6;
  cursor: pointer;
}

.input-box.button input:hover{
  background: #2320e6;
}
form .text h5{
 color: #333;
 width: 100%;
 text-align: center;
 color: #707070;
 font-size: 14px;
 font-weight: 500;
 margin-left: 10px;
 margin-top: 5px;
}
form .text h5 a{
  color: #2320e6;
  text-decoration: none;
}
form .text h5 a:hover{
  text-decoration: underline;
}
</style>
</head>
<body>
	<div class="wrapper">
	<h2>Admin Login</h2>
        
            <form id="reg" action="" method="POST" >
             <div class="input-box"> 
             <input type="tel" name="contact" id="contact" value="" placeholder="Contact" required>
			 </div> 
			 <div class="input-box"> 
			 <input type="password" name="password" id="password" value="" placeholder="Enter password" required>
			 </div>
			 <div class="policy">
             <input type="checkbox" id="rememberMe" name="rememberMe" required>
             <h3>Remember me</h3>
             </div>
			 <div class="input-box button"> 
                <input type="submit" value="Sign In">
			 </div>	
			 
</form>
</div>
</body>
</html>



























