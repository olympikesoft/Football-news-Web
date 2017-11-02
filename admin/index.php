<?php
require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');


 
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Admin code" name="code" type="text" value="">
							</div>
						
							
						</fieldset>
					<input type="submit" class="button button-primary" value="Log In" id="login"/>
					<div id="error"></div> 
					</div>
					</form> 
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		<?php

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['code']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($link,$_POST['email']); 

//Here converting passsword into MD5 encryption. 
$password=mysqli_real_escape_string($link,$_POST['password']);

$code=mysqli_real_escape_string($link,$_POST['code']);



//$enc_password = md5($password);


$result= mysqli_query($link,"SELECT id FROM user WHERE email='$username' and password='$password' and code='$code'");


if($result){
	/*
	
$count=mysqli_num_rows($result);
if($count == 1)
{
	*/
	$gol = 0;
	if(mysqli_num_rows($result) == 1)
    { 
      $row = mysqli_fetch_assoc($result);
      $_SESSION['admin_id'] = $row['id'];
      // $_SESSION['a_nome'] = $row['nick'];
     
	  $gol = 1;
	  if($gol == 1)
	  {
		header("location:dashboard.php");
	  }
    }

}
else
{
	echo "You don´t have permitions to acess to Dashboard.";
}
if (!$result) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
}


?>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
