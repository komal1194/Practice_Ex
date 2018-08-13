<?php
session_start();
?>

<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin" && $password=="123456" && strlen($password)==6)
{
	$_SESSION['KEY']=$username;
echo "<br><br>To go to your account????<a href='myaccount.php'>Accoount</a>";
}

else
{
	echo "<br>Login failed";
	echo "<br><br>Password length atleast 6 charatcer";
	echo "<br>To relogin again click here????<a href='login.html'>Re-Login</a>";
}
?>