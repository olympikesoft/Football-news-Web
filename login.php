<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');

if ($_SESSION['admin_id'])
{
    header("Location: user.php");
}
 
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

<style>
.logo
{
    width: 138px;
    height: 30px;
    text-align: center;
    margin: 10px 0px 27px 40px;
    background-position: 0px -8px;
    position: relative;
}
</style>
 
<![endif]-->

</head>
<html>
<body>
	
	<div class="row">

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			 
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				 <div align="center">
                    <img src="http://www.iconshock.com/img_vista/IPHONE/education/jpg/ball_football_icon.jpg" alt=""/>
                </div>
				<div class="panel-body">
				</div>
					<!---<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<a href="index.html" class="btn btn-primary">Login</a>
						</fieldset>
					</form>----->
					<div id="box">
					<form action="" method="post">

				<div class="form-group">
					<input class="form-control" placeholder="E-mail" id="email" name="email" type="email" autofocus="">
				</div>
				
				<div class="form-group">
						<input class="form-control" placeholder="Password" name="password" type="password" id="password" value="">
				</div>
					
					<input type="submit" class="button button-primary" value="Log In" id="login"/>
					<div id="error"></div> 
					</div>
					</form> 
					<h3>If you are not registed, Please Sign Up, or <a href="register.php">Register</a></h3>
				</div>
				
			</div>
		</div><!-- /.col-->
	
	
		

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
<?php

if(isset($_POST['email']) && isset($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($link,$_POST['email']); 

//Here converting passsword into MD5 encryption. 
$password=mysqli_real_escape_string($link,$_POST['password']);



//$enc_password = md5($password);


$result= mysqli_query($link,"SELECT id FROM user WHERE email='$username' and password='$password'");


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
      $_SESSION['admin_nome'] = $row['nick'];
	  
	  $id = $_SESSION['admin_id'];
	  
	  $updatelastlogin = "UPDATE user
SET login_time=NOW()
WHERE id='$id'";
     $reslogin = mysqli_query($link, $updatelastlogin);
	 
	 if (!$reslogin) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
}

	if($reslogin)
	{
	 
	 
	  $gol = 1;
	  if($gol == 1)
	  {
		header("location:user.php");
	  }
	}
    }


else
{
	
}
if (!$result) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
}


?>

</html>
