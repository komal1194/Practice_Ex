<html>
<body>
<form method=post action="drop_down_demo_cookie.php">
	<select name="color">
		<option>Red</option>
		<option>Green</option>
		<option>Yellow</option>
		<option>Pink</option>
	</select>
</form>
</body>
</html>

<?php
$name=$_REQUEST['name'];
setcookie($name,time()+(86400*30));
echo " ".$_COOKIE['name'];

setcookie('color1',1,time()+(86400*30));
setcookie('color2',1,time()+(86400*30));
setcookie('color3',1,time()+(86400*30));


?>