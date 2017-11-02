<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');
//$ip=$_SERVER['REMOTE_ADDR']; 



$id_user = $_SESSION['admin_id'];




if($_POST['id'])
{

$id = mysqli_real_escape_string($link,$id);
//Verify IP address in Voting_IP table
$ip_sql=mysqli_query($link,"select id from rate where news_id='$id' and user_id='$id_user'");
 //echo $ip_sql;

	if(!$ip_sql)
	{
		mysqli_error($link);
	}
$count=mysqli_num_rows($ip_sql);

if($count==0)
{
// Update Vote.
$sql = "update news_id set up=up+1 where id='$id'";
$query_up = mysqli_query($link, $sql);
		if(!$query_up){
		mysqli_error($link);
		}
// Insert IP address and Message Id in Voting_IP table.
$sql_in = "insert into rate (news_id,user_id,state) values ('$id','$id_user','1')";
$query = mysqli_query( $link,$sql_in);
		if(!$query){
			mysqli_error($link);
		}
echo "<script>alert('Thanks for the vote');</script>";
}
else
{
echo "<script>alert('You have already voted');</script>";
}

$result=mysqli_query($link,"select up from news where id='$id'");
		
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$up_value=$row['up'];
echo $up_value;

}
?>