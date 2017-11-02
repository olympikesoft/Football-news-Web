<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');

?>

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
    <title>Techmag | Responsive Magazine Site Template</title>
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
	
  <link rel="stylesheet" href="css/normalize.css">

  <link rel='stylesheet prefetch' href='http://mustafaismail.co/wp-content/uploads/gothamrnd/gothamrnd.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	
	
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<style>


.navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}

</style>




    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Change the "src" attribute according to your installation path -->


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
            <li class="share"><a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a></li>
        </ul>
      </div>

    <!-- START SITE -->

    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                    </div><!-- end col -->
                    <div class="col-md-9 col-sm-12">
                        <div class="ads-widget clearfix">
                            <a href="#"><img src="upload/banner_03.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->

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
                                <li class=""><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                <li class="dropdown active yamm-fw">
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
                                                            </div><!-- end widget-title -->

                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="index-1.html">Home Version 1</a></li>
                                                                    <li><a href="index-2.html">Home Version 2</a></li>
                                                                    <li><a href="index-3.html">Home Version 3</a></li>
                                                                    <li><a href="index-4.html">Home Version 4</a></li>
                                                                    <li><a href="index-5.html">Home Version 5</a></li>
                                                                </ul>
                                                            </div><!-- end links -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Post Layouts</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="single.html">Single Post Sidebar</a></li>
                                                                    <li><a href="single-1.html">Single Post Fullwidth</a></li>
                                                                    <li><a href="single-review.html">Single Review</a></li>
                                                                    <li><a href="single-job.html">Single Job</a></li>
                                                                    <li><a href="single-forum.html">Single Forum</a></li>
                                                                </ul>
                                                            </div><!-- end links -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Other Post Layouts</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->

                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="category.html">Category Version 1</a></li>
                                                                    <li><a href="category-1.html">Category Version 2</a></li>
                                                                    <li><a href="category-2.html">Category Version 3</a></li>
                                                                    <li><a href="search.html">Search Results</a></li>
                                                                    <li><a href="authors.html">Contributors</a></li>
                                                                </ul>
                                                            </div><!-- end links -->
                                                        </div><!-- end widget -->
                                                    </div><!-- end col -->

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Default Pages</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="page.html">Standard Page</a></li>
                                                                    <li><a href="page-1.html">Fullwidth Page</a></li>
                                                                    <li><a href="sitemap.html">Archives & Sitemap</a></li>
                                                                    <li><a href="404.html">Page Not Found</a></li>
                                                                    <li><a href="shortcodes.html">Shortcodes & Elements</a></li>
                                                                </ul>
                                                            </div><!-- end links -->
                                                         </div><!-- end widget -->
                                                    </div><!-- end col -->
                                                </div>
                                            </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="reviews.html">Item Reviews</a></li>
                                        <li><a href="jobs.html">Career & Jobs</a></li>
                                        <li><a href="category.html">Technology</a></li>
                                        <li><a href="category.html">Gadgets</a></li>
                                        <li><a href="category.html">Software</a></li>
                                        <li><a href="category.html">Development</a></li>
                                        <li><a href="category.html">WordPress</a></li>
                                        <li><a href="category.html">Icons & Fonts</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="jobs.html">Jobs</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="community.html">Forums</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
							
				
                           
                               
                            
							
							
							
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

  <section>
  <?php 
  if(isset($_GET['id'])){
				
				$id = $_GET['id'];
				
				$selec = "Select * from user where id='$id'";
				$go = mysqli_query($link,$selec);
				
				while($rod = mysqli_fetch_array($go))
				{
?>
    <header class="clearfix">

      <div class="liks">
        <i class="icon"></i>
		<?php $numberrates = "Select count(distinct id) as conta from rate where user_id='$id'";
				$rs = mysqli_query($link, $numberrates);
				
				while($ll =  mysqli_fetch_array($rs))
				{
				?>
        <span><?php echo $ll['conta'];?></span>
				<?php }
				?>
      </div>
	  
	    <div class="comment">
        <i class="icona"></i>
		<?php $numberr = "Select count(distinct id) as conta from comment where user_id='$id'";
				$rss = mysqli_query($link, $numberr);
				
				while($dd =  mysqli_fetch_array($rss))
				{
				?>
        <span><?php echo $dd['conta'];?></span>
				<?php }
				?>
      </div>
	  
      <div class="user">
	  <?php
	  
	  
	     echo  "Last Login" . "     ". $rod['login_time'];
	  
	  
	  
	  ?>
        <div class="avatar">
          <img alt="Dwayne Johnson" src="http://i.imgur.com/DmPjhGo.jpg">
        </div>
        <h2><?php echo $rod['nick'];?></h2>
        <p>Actor</p>
       
      </div>

    <?php 
				}
  }
  ?>

    <ul class="menu">
	
      <li><a href="logout.php" class="active profile">Logout</a></li>
      <!---<li><a href="#" class="podcast">Podcast</a></li>---->
	  <li><a href="#" class="active profile">Editar profile</a></li>
	 
    </ul>

  </section>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>