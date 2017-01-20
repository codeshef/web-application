<?php
 //connect to database
   $db = mysqli_connect("localhost","root","","apply");
   if(isset($_POST['submit'])!='')
   {     session_start();  
  
	   $username = mysql_real_escape_string($_POST['username']);
	   $password = mysql_real_escape_string($_POST['password']);
	   
          
		  // create user
			 $password = md5($password); //hash password before storing
			 $sql = "SELECT* FROM user WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$sql);
			$rows = mysqli_num_rows($result);
			if($rows==1)
			{echo "Congratulations! you have successfully logged in!<br>";
			echo $username;
			header("Location:home.php");}
			else
			{
				echo "Invalid username and password";
			}
	} 
			
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id ="frm">
<h2>Sign in</h2>
<form action="login.php" method="POST">
<p>
<p><label>Username</label></p>
<input type ="text"  name="username" class="textInput"/>
</p>
<p>
<p><label>Password</label></p>
<input type ="password"  name="password" class="textInput"/>
</p>
<p>
<input type ="submit"  name="submit" value="submit" id="btn"/>
</p>
</form>
</body>
</html>