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

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

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
            <li class="share"><a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a></li>
        </ul>
      </div>

    <!-- START SITE -->

    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
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
                               
                                

                                <li><a href="jobs.html">Jobs</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="community.html">Forums</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right searchandbag">
                                <li class="dropdown searchdropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <section class="section bgg">
            <div class="container">    
                <div class="title-area">
				<?php 
				if(isset($_GET['id'])){
					
					if(isset($_GET['conta'])) {
  $d= $_GET['conta'];
  $controla = 0;
  	$limit = $d - 2;
} else {
	$d = 2;
	if($d == 2)
	{
	$controla = 1;
	}
	$limit = 0;
}
					
					
						/*$d = 2;*/
				
						# limit data per page
							
							
						$ids = $_GET['id'];
						
						
						

						/*$if($io == 2)
						{
						$limit = 0;
						
						}else{
							$d= $_GET['conta'];
							$limit = $io - 2;
						}*/
						
						
						
						
				
						
						
						
						
						$select = "Select *  from category where id='$ids'";
						$ms = mysqli_query($link, $select);
						
							if(!$ms)
		{
			  die("Query error 7: " . mysqli_error($link));
		}
						
						while($row = mysqli_fetch_array($ms))
						{
							
						
				
						
						$selecmax = "SELECT MAX(id) as max FROM news WHERE category_id='$ids'";
						$o = mysqli_query($link, $selecmax);
						
						if(!$o)
		{
			  die("Query error 7: " . mysqli_error($link));
		}
						
						while($rd = mysqli_fetch_array($o))
						{
							$maxs = $rd['max'];
							
						}
							
					
							
						
				?>
                    <h2><?php echo $row['name'];?> 
					<div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"><?php echo $row['name'];?></li>
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div><!-- end container -->
        </section>
	

        <div class="container sitecontainer single-wrapper bgw">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 m22">
                    <div class="widget">
                        <div class="large-widget m30">

                           
						  <div class="widget">
                       

                          <div class="widget hidden-xs">
                       

                        <div class="ads-widget m30">
                            <a href="#"><img src="upload/banner_01.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->

                    </div>
					
	
                            

                            <div class="post clearfix">
                                <div class="post-media">
							<?php 
							
				$ocupation  = 0;
				
		
				if($maxs < $ids)
				{
					"echo error";
				}else{
		
				$selectn = "Select count(distinct id) as conta from news where category_id='$ids'";
				$nn =  mysqli_query($link, $selectn);
				
				while($contas = mysqli_fetch_array($nn))
				{
				$t = $contas['conta'];
				if($t >= $d)
				{
					
					$selected = "Select * from news where category_id = '$ids' limit $limit,$d";
					$go = mysqli_query($link, $selected);
					
							
						if(!$go)
		{
			  die("Query error #2: " . mysqli_error($link));
		}
						
				
				
				while($ro = mysqli_fetch_array($go))
				{
					
				?>
                                    <a href="single.html">
                                        <img alt="" src="upload/big_news_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="large-post-meta">
                                    <span class="avatar"><a href="author.html"><img src="upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>
                                    <small>&#124;</small>
                                    
                                </div><!-- end meta -->
                                <div class="large-widget-title">
                                    <a href="single.html"> <?php echo $ro['title'];?></a>
									
                                </div>
								
							
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
				
						else
						{
							echo "Dont have any news to show with this category";
						}
						}
				}
						}
						
						?>

                         
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->

<!-----------  ################ ADS ###########################
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

                    <div class="pagination-wrapper">
                        <nav>
                          <ul class="pagination">
						  <?php 
						  	$total = $maxs / 4;
						  
						  
						  if($d > 2 || $controla == 1){
							  ?>
                            <li>
							
                              <a href="category.php?id=<?php echo $ids?>&conta=<?php echo $d=$d-2?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
							<?php 
						  }
						  ?>
						  
						  
							<?php 
							
							$total = $maxs / 2;
							
							
							
								for($i = 1;$i<$total;$i++)
								{
								$d=$d +2;
								
								
								   ?>
								    <!----<a href="category.php?id=<?php //echo $ids?>&conta=<?php //echo $d?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>----->
							  <li><a href="category.php?id=<?php echo $ids?>&conta=<?php echo $d?> "><?php echo $d?></a></li>
								   
								   <?php
								}
							
							
							?>
                            <!---<li><a href="category.php?id=<?php// echo $ids?> ">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>---->
                          </ul>
                        </nav>
                    </div>
                </div><!-- end col -->

              

             
            </div><!-- end row -->
        </div><!-- end container -->
		<?php
		
						}else{
							echo "error";
						}
						
						?>
						

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
                    <p class="copyright-notice"><span class="fa fa-copyright"></span> 2016 Techmag. All Rights Reserved. A <a href="#" title="TemplateVisual" target="_blank">TemplateVisual</a> INC.</p>
                    <p class="footer-links"><a href="#" title="Privacy Policy" rel="nofollow">Privacy Policy</a><span>|</span><a href="#" title="Site Disclosure" rel="nofollow">Site Terms &amp; Disclosures</a><span>|</span><a href="#" title="" rel="nofollow" target="_blank">Powered by Bootstrap</a></p>
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
  
</body>
</html>