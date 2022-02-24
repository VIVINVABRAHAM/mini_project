<?php
session_start();
session_destroy();
session_unset();
//echo "location='index.php?show=Loggout..'";

header("location:user_index.php");
?>
