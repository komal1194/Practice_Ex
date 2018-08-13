<?php
session_start();
?>
<?php
session_unset();
session_destroy();
echo "<br><br>You are logged out";
echo "<br><br>To relogin again click here!!!!<a href='login.html'>Login Again</a>";
?>