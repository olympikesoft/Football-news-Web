<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');


session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($link,$_POST['email']); 

//Here converting passsword into MD5 encryption. 
//ssword=mysqli_real_escape_string($link,$_POST['password']);



//$enc_password = md5($password);


$result= mysqli_query($link,"SELECT id FROM user WHERE email='$username' and password='$password'");


if($result){
	/*
$count=mysqli_num_rows($result);
if($count == 1)
{
	*/
	
	if(mysqli_num_rows($result) == 1)
    { 
      $row = mysqli_fetch_assoc($result);
      $_SESSION['admin_id'] = $row['id'];
      $_SESSION['admin_nome'] = $row['nome'];
      $_SESSION['admin_sobrenome'] = $row['sobrenome'];
    }

}
else
{
	echo "error login";
}
if (!$result) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
}


?>