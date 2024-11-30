<?php
session_start();
$SESSION['isloggedin']=0;
session_destroy();
header('location:mainpage.php');
?>