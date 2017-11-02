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

        <div class="container sitecontainer single-wrapper bgw">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post clearfix">

                                <div class="title-area">
                                    <div class="bread">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="">Blog</li>
                                            <li class="active">Single Blog</li>
                                        </ol>
                                    </div><!-- end bread -->
                                    <div class="colorfulcats">
                                        <?php
											if(isset($_GET['id'])){
				
				
				$product_id = $_GET['id'];
				
											$selec =  "Select * from news where id='$product_id'";
											$res = mysqli_query($link, $selec);
											
											if (!$selec) {
                                        die("Query error #10 " . mysqli_error($link));
                                       
		 } 
											
											while($row = mysqli_fetch_array($res))
											{

											$id = $row['id'];
											$title = $row['title'];
											$text = $row['text'];
											$date = $row['date'];
											$category_id = $row['category_id'];
											$user_id = $row['user_id'];
										
												
											echo $date;
										
										
										?>
                                        <a href="#"><span class="label label-warning">Web Design</span></a>
                                    </div>
                                    <h3>How ThePhone thriller will change the way film directors & details about the Phone</h3>

                                    <div class="large-post-meta">
                                        <span class="avatar"><a href="author.html"><img src="upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>
                                        <small>&#124;</small>
                                        <span><a href="category.html"><i class="fa fa-clock-o"></i> 21 March 2016</a></span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><a href="single.html#comments"><i class="fa fa-comments-o"></i> 92</a></span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> 1223</a></span>
                                    </div><!-- end meta -->

                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                </div><!-- /.pull-right -->

                                <div class="post-media">
                                    <a href="single.html">
                                        <img alt="" src="upload/single.jpg" class="img-responsive">
                                    </a>
                                </div>

                            </div><!-- end post -->

                            <div class="post-desc">
                              <?php
									echo $text;
											}
											
											
											}
						
						?>
								
								
								
                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end post-desc -->

                            <div class="post-bottom">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="tags">
                                            <h4>Tags</h4>
                                            <a href="#">cinema</a>
                                            <a href="#">club</a>
                                            <a href="#">html5</a>
                                            <a href="#">css3</a>
                                            <a href="#">web design</a>
                                        </div><!-- end tags -->
                                    </div><!-- end col -->

                                    <div class="col-md-4 hidden-xs">
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
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end bottom -->

                            <div class="post-pager clearfix hidden-xs">
                                <ul class="pager row">
                                    <li class="previous col-md-6 col-sm-12 text-left">
                                        <div class="post">
                                            <div class="mini-widget-thumb">
                                                <a href="single.html">
                                                    <img alt="" src="upload/carrer_04.jpg" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="mini-widget-title">
                                                <a href="single.html"> Looking Logo Designer ($15 Budget) </a>
                                                <small>Previous Post</small>
                                            </div>
                                        </div>     
                                    </li>
                                    <li class="next col-md-6 col-sm-12 text-right">
                                        <div class="post">
                                            <div class="mini-widget-thumb">
                                                <a href="single.html">
                                                    <img alt="" src="upload/carrer_01.jpg" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="mini-widget-title">
                                                <a href="single.html"> How to Make a Logo like Professional </a>
                                                <small>Next Post</small>
                                            </div>
                                        </div>  
                                    </li>
                                </ul>   
                            </div><!-- end post-pager -->

                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="post clearfix">
                                            <div class="avatar-author">
                                                <a href="author.html">
                                                    <img alt="" src="upload/avatar_02.png" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <a href="single.html">Roy DOE</a>
                                                <a class="authorlink" href="">http://templatevisual.com</a>
                                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel ntium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p>
                                                <ul class="list-inline authorsocial">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
                            </div><!-- end authorbox -->

                            <div class="row m22 related-posts">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>You May Also Like <span><a href="#">View all</a></span></h4>
                                            <hr>
                                        </div><!-- end widget-title -->

                                        <div class="review-posts row m30">
                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_01.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">TechMag's all the details of the March 21 event at Apple!</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->

                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_02.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">Say Hello to Apple Titan Automative News Released</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->

                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_03.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 12 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">Starts over the world travel to Mars in March 2017</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->

                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_04.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 13 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">Supported Uber for next month, last time to change anything</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->

                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_05.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">Freddie Mac Die time 2016 News and Updates</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->

                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="upload/news_06.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                                        </div><!-- end title -->
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="single.html">Bloomberg Has been released new site called Name..</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->
                                        </div><!-- end review-post -->
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div id="comments" class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>What other's say about : How ThePhone thriller..</h4>
                                            <hr>
                                        </div><!-- end widget-title -->

                                        <div class="comments">
                                            <div class="well">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                          <img class="media-object img-circle" src="upload/avatar_02.png" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">John DOE</h4>
                                                        <div class="time-comment clearfix">
                                                            <small class="pull-left">21 Jun 2015</small>
                                                            <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                        </div><!-- end time-comment -->
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div><!-- end media -->

                                                <div class="media comment-reply">
                                                    <div class="media-left">
                                                        <a href="#">
                                                          <img class="media-object img-circle" src="upload/avatar_01.png" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Amanda FOX</h4>
                                                        <div class="time-comment clearfix">
                                                            <small class="pull-left">21 Jun 2015</small>
                                                            <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                        </div><!-- end time-comment -->
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div><!-- end media -->

                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                          <img class="media-object img-circle" src="images/avatar.png" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Mark BOBS</h4>
                                                        <div class="time-comment clearfix">
                                                            <small class="pull-left">21 Jun 2015</small>
                                                            <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                        </div><!-- end time-comment -->
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end well -->
                                        </div><!-- end collapse -->
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Leave a Comment</h4>
                                            <hr>
                                        </div><!-- end widget-title -->

                                       <div class="commentform">
                                            <form class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>Comment <span class="required">*</span></label>
                                                    <textarea class="form-control" placeholder=""></textarea>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email" class="form-control" placeholder="">
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <label>Website</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <input type="submit" value="Send Comment" class="btn btn-primary" />
                                                </div>
                                            </form>
                                        </div><!-- end newsletter -->
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
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
                            <h4>Carrier</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget carrier-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_01.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> We are looking a team member</a>
                                    <span class="label label-primary">Full time</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_02.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Looking for support members (15-25 mails)</a>
                                    <span class="label label-danger">Part time</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_03.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Who fix my PHP problem?</a>
                                    <span class="label label-info">Freelancer</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Looking Logo Designer ($15 Budget) </a>
                                    <span class="label label-info">Freelancer</span>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->
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

