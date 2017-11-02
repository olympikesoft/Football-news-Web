<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');


ini_set('display_errors', 1);
/*
if ($_SESSION['admin_id'])
{
    header("Location: dashboard.php");
}
*/

echo 'Current PHP version: ' . phpversion();


?>


<script type="text/javascript">
$(function() 
{
$(".search_button").click(function() 
{
var search_word = $("#search_box").val();
var dataString = 'search_word='+ search_word;

if(search_word=='')
{
}
else
{
$.ajax({
type: "GET",
url: "searchnews.php",
data: dataString,
cache: false,
beforeSend: function(html) 
{
document.getElementById("insert_search").innerHTML = ''; 
$("#flash").show();
$("#searchword").show();
$(".searchword").html(search_word);
$("#flash").html('<img src="ajax-loader.gif" /> Loading Results...');
},

success: function(html){
$("#insert_search").show();
$("#insert_search").append(html);
$("#flash").hide();
}

});

}
return false;
});
});
</script>



<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title> Futegolo - Teu Site de Not?cias</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

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
	
	<style>
	
.flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}

.row1{
    padding-top: 10px;
}

.row2 {
    padding-bottom: 20px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}

.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0;
}

.links {
    color: #fff;
    text-decoration: none;
}

.links:hover {
    color: #fff;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}

.profile-li{
    padding-top: 2px;
}	
	
body { padding-top: 50px; }
/*#####################
Additional Styles (required)
#####################*/
#myCarousel .carousel-caption {
    left:0;
	right:0;
	bottom:0;
	text-align:center;
	padding:10px;
	
	background:rgba(0,0,0,0.6);
	text-shadow:yes;
	
}

 
#myCarousel .list-group {
	position:absolute;
	
	top:0;
	right:0;
}
#myCarousel .list-group-item {
	border-radius:0px;
	
	cursor:pointer;
}

@media (min-width: 992px) { 
	#myCarousel {padding-right:33.3333%;}
	#myCarousel .carousel-controls {display:none;} 
	
}

.carousel-inner > .item > img{
       width:890px;
       height:400px;
	   
     }
@media (max-width: 991px) { 
	.carousel-caption p,
	#myCarousel .list-group {display:none;} 
}

.diver {
    text-align: justify;
    -moz-text-align-last: right; /* Code for Firefox */
    text-align-last: left;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.diver h2 {
  color: white;
  font-size: 14px;
}
.diver h2 a:link {
  color: pink;
  font-size: 14px;   
}
</style>

<script>
/*#####################
Additional jQuery (required)
#####################*/
    var boxheight = $('.carousel-inner').height();
	var itemlength = $('.item').length;
	var triggerheight = Math.round(boxheight/itemlength+1);
	$('.list-group-item').height(triggerheight);
	
	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   4000	
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});



</script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <div class="left-menu hidden-sm hidden-md hidden-xs">
        <ul class="dm-social">
            <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right" title="Facebook">Facebook</a></li>
            <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right" title="Google+">Google+</a></li>
            <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right" title="Twitter">Twitter</a></li>
            <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right" title="Pinterest">Pinterest</a></li>
            <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right" title="Linkedin">Linkedin</a></li>
            <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a></li>
            <li class="share">
                <a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>
            </li>
        </ul>
    </div>


     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <div class="flipkart-navbar">
        <div class="container">
            <div class="row row1">
                <ul class="pull-right">
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 1</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 2</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 3</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 4</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 5</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 6</a></li>
                    <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a></li>
                    <li class="upper-links dropdown"><a class="links" href="https://github.com/chawlaaditya8/snippets">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                            <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row row2">
                <div class="col-md-2"><h1 style="margin:0px;">Brand</h1></div>
                <div class="flipkart-navbar-search col-md-8">
                   <form action="search.php" method="get">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
		
            <input class="form-control" name="search_word" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
			<span><input type="submit" class="form-control" name="send" value="Procurar" id="login"/></span>
					
          </div>
        </div>
      </form></li>
                </div>
                <!--<div class="cart col-md-2">
                    <a class="cart-button">
                        <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                            <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                        </svg> Link
                        <span class="item-number ">0</span>
                    </a>
                </div>--->

            </div>
        </div>
    </div>
      
    <!-- ORIGINAL MENU   
        <li><a href="about.html">About</a></li>
        <li id="userPage">
          <a href="#@userpage"><i class="icon-user"></i> My Page</a>
        </li>
        <li><a href="#logout" data-prevent="">Logout</a></li> -->
             <!--- <li class="dropdown-active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>    ---->  
   <!--   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>--->
	   <!-- <ul class="dropdown-menu">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      </ul>---->
    
	  
	  
	  
	  
	  
	  
	  
		  
	  
	 <!--  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      </ul>--->
     
     
     

    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- end col -->
                    <div class="col-md-9 col-sm-12">
                        <div class="ads-widget clearfix">
                            <a href="#"><img src="upload/banner_03.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <!-- end ads-widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end logo-wrapper -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-full">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                             <!----   <li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Homepage Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->
<!----
                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="index-1.html">Home Version 1</a></li>
                                                                    <li><a href="index-2.html">Home Version 2</a></li>
                                                                    <li><a href="index-3.html">Home Version 3</a></li>
                                                                    <li><a href="index-4.html">Home Version 4</a></li>
                                                                    <li><a href="index-5.html">Home Version 5</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                       <!---                 </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Post Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->
                                               <!--             <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="single.html">Single Post Sidebar</a></li>
                                                                    <li><a href="single-1.html">Single Post Fullwidth</a></li>
                                                                    <li><a href="single-review.html">Single Review</a></li>
                                                                    <li><a href="single-job.html">Single Job</a></li>
                                                                    <li><a href="single-forum.html">Single Forum</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                      <!---                  </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Other Post Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                               <!---             <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="category.html">Category Version 1</a></li>
                                                                    <li><a href="category-1.html">Category Version 2</a></li>
                                                                    <li><a href="category-2.html">Category Version 3</a></li>
                                                                    <li><a href="search.html">Search Results</a></li>
                                                                    <li><a href="authors.html">Contributors</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                                 <!--       </div>
                                                        <!-- end widget -->
                                                 <!--   </div>
                                                    <!-- end col -->

                            <!---                        <div class="col-md-3">
                                                        <div class="widget">
                                <                            <div class="widget-title">
                                                                <h4>Default Pages</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->
                              <!---                              <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="page.html">Standard Page</a></li>
                                                                    <li><a href="page-1.html">Fullwidth Page</a></li>
                                                                    <li><a href="sitemap.html">Archives & Sitemap</a></li>
                                                                    <li><a href="404.html">Page Not Found</a></li>
                                                                    <li><a href="shortcodes.html">Shortcodes & Elements</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                               <!---                         </div>
                                                        <!-- end widget 
                                                    </div>
                                                    <!-- end col 
                                                </div>
                                            </div>
                                            <!-- end ttmenu-content 
                                        </li>
                                    </ul>
                                </li>----->
                              
                                   
									<?php  
									
									
										$mostranoticias = "Select * from category";
										$resnoticias =  mysqli_query($link, $mostranoticias);
										
										while($ig =  mysqli_fetch_array($resnoticias))
										{
                                      


?>										
									  <li><a href="category.php?id=<?php echo $ig['id'];?>"><?php echo $ig['name'];?></a></li>
										
									  <?php
										}
                                    ?>
                                  	  <li class="dropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clubes <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
    
                               <?php
							   
							   $selectteams =  "Select * from league";
							   $resq = mysqli_query($link, $selectteams);
							   
							   while($rr = mysqli_fetch_array($resq))
							   {
								   ?>
								   	
                              
                               
								     <li><a href="league.php?id=<?php echo $rr['id'];?>"><?php echo $rr['name'];?></a></li>
								     
									 
							<?php	   
							   }
							   

							   
							   ?>
							     </ul>
								 </li>
                                <li><a href="contact.html">Contactar</a></li>
											<!---<li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
             <form method="post" action="" accept-charset="UTF-8">
                <input style="margin-bottom: 15px;" type="text" required placeholder="Enter Username" id="username" name="username">
                <input style="margin-bottom: 15px;" type="password" required placeholder="Enter Password" id="password" name="password">
                <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                <label class="string optional" for="user_remember_me"> Remember me</label>
                <input name="login" class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                <label style="text-align:center;margin-top:5px">Welcome Back!</label>
               	<a href="register.php" class="btn btn-primary">Regista-te j?</a>
              </form>
            </div>
          </li> ---->
								
							</ul>	
								
							
				
														 
                            
							
							
							
							
						
                            
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
            </div>
            <!-- end container -->
        </header>
        <!-- end header -->
        
        <div class="container sitecontainer bgw">
            <div class="row hidden-xs">
                <div class="col-md-12">
                    <div class="news-ticker clearfix">
                        <div class="news-title">
                            <h3>Noticias em Destaque</h3>
                        </div>
                        <ul id="ticker">
							<?php 
							$selenew = "Select * from news ORDER BY date
LIMIT 6";
							$ress = mysqli_query($link, $selenew);
							
							while($road = mysqli_fetch_array($ress))
							{
								$ids = $road['id'];
                            ?>
							<li><a href="news.php?id=<?php
													echo $ids
													?>" title=""><?php echo $road['title'];?> - <span><?php  echo $road['date'];?> </span></a></li>
                            <?php
							}
							?>
							</ul>
                       <!--- <div class="random clearfix">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Random">
                            <span class="random-article">
                                <i class="fa fa-random"></i>
                            </span>
                            </a>
                        </div><!-- end random -->
                    </div><!-- end news-ticker -->
					<!------ publicidade -------->
                </div><!-- end col -->
				<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
		<?php 
		$title_benfica = '';
					$select_benfica = "Select * from news where category_id='9' order by date desc limit 1";
					$rl = mysqli_query($link, $select_benfica);
					
					while($roa = mysqli_fetch_array($rl))
					{
					$id_news_benfica = $roa['id'];
					$title_benfica = $roa['title'];
					
					$select_imags = "Select * from photos where news_id='$id_news_benfica'";
					
					$rld = mysqli_query($link, $select_imags);
					
									if(!$rld)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
		
					while($rowf = mysqli_fetch_array($rld))
					{
						$imagers = $rowf['path'];
						
						
						?>
         <img src="admin/news/<?php
										
							
												echo $imagers;
												
												
													?>" class="img-responsive">
													
           <div class="carousel-caption">
		   
         <diver class="h2"><a href="news.php?id=<?php echo $id_news_benfica; ?>"><font color="white"><?php echo $title_benfica?></font></a></diver>
            </div><?php
					}
				}	
				?>
        </div><!-- End Item -->
		
 <!----- ## ---->
           <div class="item">
		<?php 
		$title_porto = '';
					$select_porto = "Select * from news where category_id='11' order by date desc limit 1";
					$escolhe_porto = mysqli_query($link, $select_porto);
					
					while($roag = mysqli_fetch_array($escolhe_porto))
					{
					$id_news_porto = $roag['id'];
					$title_porto = $roag['title'];
					
					$select_imagsg = "Select * from photos where news_id='$id_news_porto'";
					
					$rldg = mysqli_query($link, $select_imagsg);
					
									if(!$rld)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
		
					while($rowfg = mysqli_fetch_array($rldg))
					{
						$imagersg = $rowfg['path'];
						
						
						?>
         <img src="admin/news/<?php
										
							
												echo $imagersg;
												
												
													?>" class="img-responsive">
													
           <div class="carousel-caption">
		   
         <diver class="h2"><a href="news.php?id=<?php echo $id_news_porto;?>"><font color="white"><?php echo $title_porto?></font></a></diver>
            </div><?php
					}
				}	
				?>
        </div>
 <!---  ## ------>    
     	
 <!----- ## ---->
           <div class="item">
		<?php 
		$title_sporting = '';
					$select_sporting = "Select * from news where category_id='10' order by date desc limit 1 ";
					$escolhe_sporting = mysqli_query($link, $select_sporting);
					
					while($roda = mysqli_fetch_array($escolhe_sporting))
					{
					$id_news_sporting = $roda['id'];
					$title_sporting = $roda['title'];
					
					$select_i = "Select * from photos where news_id='$id_news_sporting'";
					
					$ri = mysqli_query($link, $select_i);
					
									if(!$ri)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
		
					while($rodas = mysqli_fetch_array($ri))
					{
						$imagesd = $rodas['path'];
						
						
						?>
         <img src="admin/news/<?php
										
							
												echo $imagesd;
												
												
													?>" class="img-responsive">
													
           <div class="carousel-caption">
		   
         <diver class="h2"><a href="news.php?id=<?php echo $id_news_sporting; ?>"><font color="white"><?php echo $title_sporting?></font></a></diver>
            </div><?php
					}
				}	
				?>
        </div>
 <!---  ## ------>    
           <!----- ## ---->
           <div class="item">
		<?php 
		$title_internacional = '';
					$select_inter = "Select * from news where category_id='12' order by date desc limit 1";
					$escolhe_inter = mysqli_query($link, $select_inter);
					
									if(!$escolhe_inter)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
					
					while($rodai = mysqli_fetch_array($escolhe_inter))
					{
					$id_news_inter = $rodai['id'];
					$title_internacional = $rodai['title'];
					
					$select_in = "Select * from photos where news_id='$id_news_inter'";
					
					$rin = mysqli_query($link, $select_in);
					
									if(!$rin)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
		
					while($rodasn = mysqli_fetch_array($rin))
					{
						$imagesdn = $rodasn['path'];
						
						
						?>
         <img src="admin/news/<?php
										
							
												echo $imagesdn;
												
												
													?>"/>
													
           <div class="carousel-caption">
		   
         <diver class="h2"><a href="news.php?id=<?php echo $id_news_inter;?>"><font color="white"><?php echo $title_internacional?></font></a></diver>
            </div><?php
					}
				}	
				?>
        </div>

     
 
         <div class="item">
		<?php 
		$title_ronaldo = '';
					$select_ronaldo = "Select * from news where category_id='13' order by date desc limit 1";
					$escolhe_ronal = mysqli_query($link, $select_ronaldo);
					
									if(!$escolhe_ronal)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
					
					while($rodaf = mysqli_fetch_array($escolhe_ronal))
					{
					$id_news_ronaldo = $rodaf['id'];
					$title_ronaldo = $rodaf['title'];
					
					$select_inf = "Select * from photos where news_id='$id_news_ronaldo'";
					
					$rinf = mysqli_query($link, $select_inf);
					
									if(!$rinf)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
		
					while($rodasnf = mysqli_fetch_array($rinf))
					{
						$imagesdnf = $rodasnf['path'];
						
						
						?>
         <img src="admin/news/<?php
										
							
												echo $imagesdnf;
												
												
													?>"/>
													
           <div class="carousel-caption">
		   
         <diver class="h2"><a href="news.php?id=<?php echo $id_news_ronaldo;?>"><font color="white"><?php echo $title_ronaldo?></font></a></diver>
            </div><?php
					}
				}	
				?>
        </div>

                
      </div><!-- End Carousel Inner -->
 
 
    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4><?php echo $title_benfica?> </h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4><?php echo $title_porto?> </h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4><?php echo $title_sporting?></h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4><?php echo $title_internacional?></h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4><?php echo $title_ronaldo;?></h4></li>
    </ul>
 
      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
 
    </div><!-- End Carousel -->
</div>
            </div><!-- end row -->
			
			
 
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Sondagens</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="review-posts m30">
                            <div class="post-review">
                                <div class="post-title">
                                  <!---  <h3><a href="single-review.html">MyWatch Review - Its work perfect on mobile?</a></h3>--->
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->
                        </div><!-- end review-posts -->
                    </div><!-- end widget -->   
					
					
<!--------
                    <div class="widget">
                        <div class="widget-title">
                            <h4>The Interviews</h4>
                            <hr>
                        </div><!-- end widget-title

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_01.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Jessica and Martin talking about...</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_02.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> ShowWP team moved to a new office </a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_03.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> How do web design? If no information</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> A good strategy is to create 5 rule </a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_05.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Google material design, colors</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_06.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="#"> The best desk and office designs for ever!</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                  <!---  </div><!-- end widget -->   
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12 m22">
                    <div class="widget">
					
					
                        <div class="large-widget m30">
						<?php
						
						
						
						
						
						
					
							$new = "Select * from news order by date desc limit 6 ";
							$resnew = mysqli_query($link, $new);
							
						while($rowa =  mysqli_fetch_array($resnew))
						
						{
							$user_id = 	$rowa['user_id'];
							$idnews = $rowa['id'];
							
						$images = "Select * from photos where news_id='$idnews'";
							
							
							$resultimages = mysqli_query($link, $images);
							
						if(!$resultimages)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		
							
							
							
							
							
							while($aff =  mysqli_fetch_array($resultimages))
							{
								$imagepath = $aff['path'];
								
								
														
							$user_creator = "Select * from user where id='$user_id'";
							$ruser = mysqli_query($link, $user_creator);
							
						while($rod =  mysqli_fetch_array($ruser))
						{
							$idcreator = $rod['id'];
							$namecreator = $rod['nick'];
							
							$sqlcomment = "select count(distinct id) as number from comment where news_id='$idnews'";
							$rescomment = mysqli_query($link, $sqlcomment);
							
						while($count = mysqli_fetch_array($rescomment))
						{
							
						
						
						?>

						  <div class="large-widget-title">
                                    <a href="news.php?id=
									<?php 
									echo $idnews
									?>"> <?php echo  $rowa['title'];?> </a>
                                </div>
                            <div class="post clearfix">
                                <div class="post-media">
                                    <a href="single.html">
                                        <img alt="" src="
										admin/news/<?php
										
							
													echo $imagepath;
												
												
												?>
										
										
									" class="img-responsive">
                                    </a>
                                </div>
                                <div class="large-post-meta">
                                    <span class="avatar"><a href="author.php?id=<?php echo $idcreator;?>"><img src="upload/avatar_02.png" alt="" class="img-circle"> <?php echo $namecreator ?></a></span>
                                    <small>&#124;</small>
                                   
                                    <small>&#124;</small>
                                    <span><a href="single.html#comments"><?php echo $count['number'];?> Comments</a></span>
                                </div><!-- end meta -->
                              
                                <div class="post-share">
                                    <div class="customshare">
                                         <span class="list">
                                            <strong><i class="fa fa-share-alt"></i> 980
                                            <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                                            </strong>
                                        </span>
                                    </div>
                                </div><!-- end share -->
                            </div><!-- end post -->
							<?php 
						}
							}
						
						
						
											}
						}
							
							
							?>
                            <hr>
                           
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Media</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="social-media-widget m30">
                            <ul class="list-social clearfix">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>
                                <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>
                                <li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>
                            </ul>
                        </div><!-- end social -->
                    </div>

                    <div class="widget hidden-xs">
                        <div class="widget-title">
                            <h4>Advertising</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="ads-widget m30">
                            <a href="#"><img src="upload/banner_01.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <div class="widget-title">
                            <h4><?php echo "Mais vistas";?></h4>
                            <hr>
                        </div><!-- end widget-title -->
						
                        <div class="mini-widget carrier-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
								<?php 
								   $select_must = "Select * from news where views= (Select MAX(views) from news)";
								   

								   $resql = mysqli_query($link, $select_must);
								   
								   while($rows = mysqli_fetch_array($resql))
								   {
									   $idr = $rows['id'];
									   $titler = $rows['title'];
									   $select_image = "Select * from photos where News_id='$idr'";
								   $resqls = mysqli_query($link, $select_image);
								   
								   if(!$resqls)
		{
			  die("Query error 10: " . mysqli_error($link));
		}
								   
								   while($roff = mysqli_fetch_array(  $resqls))
								   {
									   ?>
                                    <a href="single.html">
                                        <img alt="" src="admin/news/<?php echo  $roff['path'];     ?>" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="news.php?id=<?php echo $idr?>"><?php echo $titler;?></a>
                                 
                                </div>
                            </div>
								   <?php 			}
								   }
						#end ?>
                         
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="ads-widget">
                            <a href="#"><img src="upload/banner_02.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->

			<div class="container-fluid text-center">
  <h2>Mercado</h2>
  
</div>
			
			
			 <div class="container">
    <div class="row">


    <!-- TH1 -->
       
       

      
        <!-- TH4 -->
		<?php 
								   $select_must = "Select * from news where category_id = '5' group by id";
								   

								   $resql = mysqli_query($link, $select_must);
								   
								   while($rows = mysqli_fetch_array($resql))
								   {
									   $idrff= $rows['id'];
									   $titler = $rows['title'];
									   $select_image = "Select * from photos where News_id='$idrff'";
									
								   $resqls = mysqli_query($link, $select_image);
								   
								   if(!$resqls)
		{
			  die("Query error 10: " . mysqli_error($link));
		}
								   
								   while($roff = mysqli_fetch_array($resqls))
								   {
									   ?>
        <div class="col-sm-4">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class=""><?php echo $titler?></h4>

                    <p class="">

<a href="news.php?id=<?php echo $idrff?>" class="label label-default"><?php echo $titler?></a>

</p>
                </div>
                <img src="admin/news/<?php echo  $roff['path'];?>" alt="..." class="img-responsive">
								<?php
								   }
								 ?>
            </div>
        </div>  
		
		<?php 
		
								   }
								   
								   ?>

      


        <!-- TH6 -->


    </div><!--/row -->

</div> <!-- end container -->

                              <!--   ########################### ------>
            

           
        </div><!-- end container -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Site Links</h4>
                                <hr>
                            </div><!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="check">
                                    <li><a href="#">Homepage</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Get In Touch</a></li>
                                    <li><a href="#">Archives</a></li>
                                    <li><a href="#">Subscribe</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Deals & Coupons</a></li>
                                </ul>
                            </div><!-- end links -->
                        </div><!-- end widget -->  
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Community</h4>
                                <hr>
                            </div><!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="check">
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Send us a tip!</a></li>
                                    <li><a href="#">Add to our database</a></li>
                                    <li><a href="#">Write a review</a></li>
                                    <li><a href="#">Report site issue</a></li>
                                    <li><a href="#">Our Authors</a></li>
                                    <li><a href="#">Site Categories</a></li>
                                </ul>
                            </div><!-- end links -->
                        </div><!-- end widget -->  
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Social Profiles</h4>
                                <hr>
                            </div><!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i> Vimeo</a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                                    <li><a href="#"><i class="fa fa-maxcdn"></i> MaxCDN</a></li>
                                </ul>
                            </div><!-- end links -->
                        </div><!-- end widget -->  
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Subscribe & Newsletter</h4>
                                <hr>
                            </div><!-- end widget-title -->

                            <div class="newsletter-widget m30">
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post" role="form">
                                    <div class="input-group form-group">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    </div>
                                    <input type="submit" value="Subscribe" class="btn btn-primary" />
                                </form>

                                <hr> 
                                <h3>
                                    <span>12.441 Members</span>
                                    <span>122.000 Articles</span>
                                </h3>

                            </div><!-- end mini-widget -->
                        </div><!-- end widget -->  
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div id="sitefooter-wrap">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col-md-6 col-sm-12 text-left">
          
                    <p class="footer-links"><a href="#" title="Privacy Policy" rel="nofollow">Privacy Policy</a><span>|</span><a href="#" title="Site Disclosure" rel="nofollow">Site Terms &amp; Disclosures</a><span>|</span><a href="#" title="" rel="nofollow" target="_blank">Powered by </a></p>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <ul class="list-inline text-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a class="topbutton" href="#">Back to top <i class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end wrapper -->
    <!-- END SITE -->
	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
	
			
<script>
 $(document).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
 });
  </script>
	
	

  
</body>
</html>