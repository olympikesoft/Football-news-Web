<?php
session_start();
if(!empty($_SESSION['admin_id']))
{
$_SESSION['admin_id']='';
}
header("Location:index.php");

?>
