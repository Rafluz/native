<?php 
session_start();
$_SESSION['user']='';
echo "<script>window.location = 
    'http://localhost/site/login.php'</script>";
?>