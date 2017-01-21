<?php
  
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel = "stylesheet" type="text/css" href="style1.css">
<body>
<?php
 if(isset($_SESSION['message']))
 {
	 echo "<div id = 'frm'>".$_SESSION['message']."</div>";
	 unset($_SESSION['message']);
 }
?>
<div id ="frm">
<center><h1>Welcome</h1>
<?php
 echo $_SESSION['username'];
?>
<p>
<a href="logout.php">Logout</a></p></center>

</div>
 
</body>
</head>
</html>
