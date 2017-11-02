<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');

?>

                                        <?php
											if(isset($_GET['id'])){
				
				 $sesio = $_SESSION['admin_id'];
				$product_id = $_GET['id'];
				
											
									
	$id = mysqli_real_escape_string($link,$product_id);
//Verify IP address in Voting_IP table
$ip_sql=mysqli_query($link,"select count(distinct id) as conta from rate where news_id='$id' and user_id='$sesio'")  or die(mysqli_error($link));
 //echo $ip_sql;
while($rd = mysqli_fetch_array($ip_sql))
{
		$gol = 0;
	if($rd['conta'] == 0)
	{
// Update Vote.
$sql = "update news set up=up+1 where id='$id'";
$query_up = mysqli_query($link, $sql);
		if(!$query_up){
		mysqli_error($link);
		}
// Insert IP address and Message Id in Voting_IP table.
$sql_in = "insert into rate (news_id,user_id,state) values ('$id','$sesio','1')";
$query = mysqli_query( $link,$sql_in);
		if(!$query){
			mysqli_error($link);
		}
		if($query){
echo "<script>alert('Thanks for the vote');</script>";
$gol = 1;
if($gol == 1){
header('Location: news.php?id='.$product_id);
}

	}
	}else{
echo "<script>alert('You have already voted');</script>";
$gol = 1;
if($gol == 1){
header('Location: news.php?id='.$product_id);
}
}

$sel = "select * from news where id='$id'";

$resulta = mysqli_query($link, $sel);

	if(!$resulta ){
			mysqli_error($link);
		}
		
while($row=mysqli_fetch_array($resulta))
{
$up_value=$row['up'];
}
	
	}
											}

	?>


