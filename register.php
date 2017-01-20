<?php
     
   //connect to database
   $db = mysqli_connect("localhost","root","","apply");
   if(isset($_POST['submit'])!='')
   {     session_start();  
  
	   $username = mysql_real_escape_string($_POST['username']);
	   $email = mysql_real_escape_string($_POST['email']);
	   $password = mysql_real_escape_string($_POST['password']);
	   $password2 = mysql_real_escape_string($_POST['password2']);
          if($password == $password2) 
		  {// create user
			 $password = md5($password); //hash password before storing
			 $sql = "INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";
			 mysqli_query($db,$sql);
			 echo "Congratulations! you have successfully registered!<br>";
			 echo $username;
			 header("Location:login.php");
			 
		  }
		  else
		  {
			//failed  
			echo "The two passwords do not match";
			}
			} 
			

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id ="frm">
<h2>Create account</h2>
<form action="register.php" method="POST">
<p>
<p><label>Username</label></p>
<input type ="text"  name="username" class="textInput"/>
</p>
<p>
<p><label>Email</label></p>
<input type ="email"  name="email" class="textInput"/>
</p>
<p>
<p><label>Password</label></p>
<input type ="password"  name="password" class="textInput"/>
</p>
<p>
<p><label>Password again</label></p>
<input type ="password" name="password2" class="textInput"/>
</p>
<p>
<input type ="submit"  name="submit" value="submit" id="btn"/>
<input type ="submit"  name="submit" value="login" id="btn"/>
</p>
</form>
</body>
</html>