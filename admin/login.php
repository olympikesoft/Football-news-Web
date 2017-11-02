<?php
require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');

/*
if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_code']))
{
    header("Location: login.php");
}*/

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Login | Bootstrap HTML5 Classified Template</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="css/custom.css">
  </head>

  <body>  
    <!-- Header Section Start -->
   
    <!-- Header Section End -->

    <!-- Page Header Start -->
    
    <!-- Page Header End --> 

    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
            <div class="page-login-form box">
              <h3>
                Login
              </h3>
             <form action="#" method="POST" class="pure-form pure-form-aligned">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="email" id="sender-email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div> 
				 <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="code" placeholder="Code">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>                  
         
                <input type="submit" name="login" class="btn btn-common log-btn" value="Login"/>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
	
<?php 
if(isset($_POST['login'])){
			
				$smail = mysqli_real_escape_string($link, $_POST['email']);
				$spassword = mysqli_real_escape_string($link, $_POST['password']);
				$scode = mysqli_real_escape_string($link, $_POST['code']);
				
				$secure = md5($spassword);
				
				$checkmail="Select * from user where email='$smail' and password='$secure' and code='$scode'";
				$resmail = mysqli_query($link, $checkmail);
				
				if (!$resmail) {
                                        die("Query error #1: " . mysqli_error($link));                             
		 }

				
				if($resmail)
				{
								
	if(mysqli_num_rows($resmail) == 1)
    { 
      $row = mysqli_fetch_assoc($resmail);
      $_SESSION['admin_id'] = $row['id'];
     $_SESSION['admin_code'] = $row['code'];
	 $id =   $_SESSION['admin_id'];
	 $coder = $_SESSION['admin_code'];
	 $gol = 0;
    	  
		  
		  $updatelastlogin = "UPDATE user
SET login_time=NOW()
WHERE id='$id'";
     $reslogin = mysqli_query($link, $updatelastlogin);
	 
	 if (!$reslogin) {
                                        die("Query error: #2 " . mysqli_error($link));
                                       
		 }
}

	if($reslogin)
	{
	 
	 
	
				  	echo '<script>window.location = "dashboard.php"</script>'; 

	
	  }
	}else{
	echo "Password ou email incorrecto, tente novamente";
}
			}

	?>
    
    <footer>
    	
    	<!-- Footer area End -->
    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
  
              </div>    					
           
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>  
      
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    
  </body>
</html>