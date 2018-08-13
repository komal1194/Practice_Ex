<?php
session_start();
?>

<?php
if(isset($_SESSION['KEY'])) 
{
	echo "Welcome to account";
	echo "<br><br>To logout click here????<a href='logout.php'>LogOut</a>";
}
else
{
echo "You are not logged in";
echo "<br><br>To relogin again click here<a href='login.html'>Re-Login</a>";
}
?>