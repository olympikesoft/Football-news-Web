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
	
	
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<style>

.up 
{
background-image: url("images/soccer.png");
background-size: 100%;
display: block;
height: 40px;
image-rendering: crisp-edges;
line-height: 1;
width: 40px;
cursor: pointer;
font-size:24px;
text-align: center;
}
.up a
{
color:#30a7e8;
text-decoration:none;

}
.up a:hover
{
color:#30a7e8;
text-decoration:none;
}


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

    
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!-- <img src="//placehold.it/192x50" class="img-responsive" href="#">--->
    </div>
    <div class="navbar-collapse collapse" id="searchbar">
     
      <ul class="nav navbar-nav navbar-left">
      
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
 <!---     <li class="dropdown">
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
		<form action="search.php" method="get">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
		  <fieldset>
          
            <input class="form-control" name="search_word" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
			<input type="submit" class="form-control" name="send" value="Procurar" id="login"/>
					</fieldset>
          </div>
        </div>
      </form></li>
      </ul>


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
     
     
     
     

    </div><!--/.nav-collapse -->
  </div>

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
							
							<?php 
							
							if($_SESSION['admin_id'])
							{
								
								$idass = $_SESSION['admin_id'];
								?>
							<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
						<?php $dd = "select * from user where id='$idass'";
						$rdd =  mysqli_query($link, $dd);
						while($ldd =  mysqli_fetch_array($rdd))
						{
							?>
                        <strong><?php echo $ldd['nick'];?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Last login: <?php echo $ldd['login_time'];?></strong></p>
                                        <p class="text-left small"><?php echo $ldd['email'];?></p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="logout.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
						<?php			}
							}
							?>
                           
                              
                                 
                                
                            
							
							
							
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
				
			/*	$sample_rate = 100;
if(mt_rand(1,$sample_rate) == 1) {
    $queryss = " UPDATE news SET views = views + '$sample_rate' WHERE id = '$product_id' ";
	$updateviews = mysqli_query($link, $queryss);
	if($updateviews)
	{
		echo "Update views on page";
	}
    // execute query, etc
}


				$sample_rate = 5;
				$fora = 0;
				$visitante = 0;
				
if(mt_rand(1,$sample_rate) == 1) {
	
	$fora = mt_rand(1,$sample_rate);
	$visitante = mt_rand(1,$sample_rate);
    $queryresultados = " insert fixture (date, state, 	home_team_score	, home_away_score, home_team_id, away_team_id) 
	values (NOW(), '1', '$visitante','$fora','12','13')";
	$insert_resultados = mysqli_query($link,  $queryresultados );
	
		if (!$insert_resultados) {
                                        die("Query error #1 " . mysqli_error($link));
											}
											
											
	if($insert_resultados)
	{
		$selectlastgame = "select max(id) as max from fixture";
		$resultados = mysqli_query($link, $selectlastgame);
		while($rrr = mysqli_fetch_array($resultados))
		{
			$last = $rrr['max'];
			$selectlastgameid = "select * from fixture where id='$last'";
		$resultadosid = mysqli_query($link, $selectlastgameid);
		}
		while($lls = mysqli_fetch_array($resultadosid))
		{
			$foras = $lls['home_team_id'];
			$dentros = $lls['away_team_id'];
			$selectname = "Select * from team where id='$foras'";
			$rl = mysqli_query($link, $selectname);
			
			while($roo = mysqli_fetch_array($rl))
			{
			
		?>
		<tr>
		<td><?php echo $roo['name'];?><td>
			<?php }
			?>
		<td><?php echo $lls ['home_team_score'];?> </td>
		<?php 
		
			$selectvisit =  "Select * from team where id='$dentros'";
			$z = mysqli_query($link, $selectvisit);
			
			while($p = mysqli_fetch_array($z))
			{
				?>
				<td><?php echo $p['name'];?>
			<?php
			}
			?>
			<td><?php echo $lls['home_away_score'];?></td>
			</tr>
		<?php
		}
		}
	}*/

    // e
				
				
				
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
											$category = $row['Category_id'];
											$user_id = $row['user_id'];
											$up = $row['up'];
											
											$sql = "Select * from user where id='$user_id'";
											$resautor = mysqli_query($link, $sql);
											
												if (!$resautor ) {
                                        die("Query error #11 " . mysqli_error($link));
											}
											
											$images = "Select * from photos where news_id='$id'";
											$resultimages = mysqli_query($link, $images);
											
											while($dff = mysqli_fetch_array($resultimages))
											{
											
											
											while($rod =  mysqli_fetch_array($resautor))
											{
												
											
											$categorianome =  "select * from category where id='$category'";
											$rescat = mysqli_query($link, $categorianome);
											
											while($rods = mysqli_fetch_array($rescat))
											{
										
										
										?>
                                        <a href="category.php?id=<?php echo $rods['id']?>"><span class="label label-warning"><?php echo $rods['name'];?></span></a>
                                    </div>
                                    <h3><?php echo $title?></h3>
									<?php 
									
									if($_SESSION['admin_id'])
									{
										$down = 1;
										
										?>
									



<div class='up'>
							<a href="insert_v.php?id=<?php echo $id?>" class="vote" id="<?php echo $id;?>" name="up">
<?php echo $up; ?></a></div>




	
									<?php 
									}
									?>

                                    <div class="large-post-meta">
                                        <span class="avatar"><a href="user.php?id=<?php echo $rod['id']?>"><img src="upload/avatar_02.png" alt="" class="img-circle"> <?php echo $rod['nick'];?></a></span>
                                        <small>&#124;</small>
                                        <span><a href="category.html"><i class="fa fa-clock-o"></i> <?php echo $date;?></a></span>
                                        <small class="hidden-xs">&#124;</small>
                                        
                                        <small class="hidden-xs">&#124;</small>
                                       
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
                                        <img alt="" src="admin/news/<?php echo  $dff['path'];     ?>" class="img-responsive">
                                    </a>
                                </div>

                            </div><!-- end post -->

                            <div class="post-desc">
                              <?php
									echo $text;
											}
											}
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
                                    

                                    <div class="col-md-4 hidden-xs">
                                        <div class="post-share">
                                            <div class="customshare">
                                                 <span class="list">
                                                    <strong><i class="fa fa-share-alt"></i> 980
                                                    <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
											
				    </div>
			
                                                    </strong>
                                                </span>
                                            </div>
										
                                        </div><!-- end share -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end bottom -->
							
							<?php 
					
					$product_id = $_GET['id'];
				
				
				      $conta = 0;
					  $antes = 0;
					  
					  $conta = $product_id + 1;
					  $antes =  $product_id - 1;
					  
				
					
					
					
					
					?>
  <div class="widget hidden-xs">
                        <div class="widget-title">
                            <h4>Advertising</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="ads-widget m30">
                            <a href="#"><img src="http://dev.niggemann.com.br/mercado/wp-content/uploads/2015/07/logo-mercado-das-apostas.png" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->

                            <div class="post-pager clearfix hidden-xs">
                                <ul class="pager row">
                                    <li class="previous col-md-6 col-sm-12 text-left">
                                        <div class="post">
                                            <div class="mini-widget-thumb">
											<?php
												if($antes  > 0)
												{
													$selecionanates =  "select * from news where id='$antes'";
													$resantes = mysqli_query($link,$selecionanates);
													
													while($roda =  mysqli_fetch_array($resantes))
													{
														
													$imag = "Select * from photos where news_id='$antes'";
													$resultim = mysqli_query($link, $imag);
													
														
													while($ll = mysqli_fetch_array($resultim))
													{
														?>
												
												
                                                <a href="news.php?id=<?php echo $antes ?>">
                                                    <img alt="" src="admin/news/<?php echo $ll['path']; ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="mini-widget-title">
                                                <a href="news.php?id=<?php echo $antes ?>"> <?php echo $roda['title'];?> </a>
                                                <small>Previous Post</small>
												
                                            </div>
												<?php 
													}
												}
												}
												?>
                                        </div>     
                                    </li>
                                    <li class="next col-md-6 col-sm-12 text-right">
                                        <div class="post">
                                            <div class="mini-widget-thumb">
											<?php 
											$selecmax =  "Select MAX(ID) as max from news";
											$resolmax =  mysqli_query($link, $selecmax);
											
											while($mmax = mysqli_fetch_array($resolmax))
											{
				
											
											if($conta < $mmax['max'])
											{
													$seleciodepois =  "select * from news where id='$conta'";
													$resdepois = mysqli_query($link,$seleciodepois);
													while($nn =  mysqli_fetch_array($resdepois))
													{
												
													$im = "Select * from photos where news_id='$conta'";
													$resulti = mysqli_query($link, $im);
													
													while($dl = mysqli_fetch_array($resulti))
													{
												?>
                                                <a href="news.php?id=<?php echo $conta?>">
                                                    <img alt="" src="admin/news/<?php echo $dl['path'];?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="mini-widget-title">
                                                <a href="news.php?id=<?php echo $conta?>"> <?php echo $nn['title'];?></a>
                                                <small>Next Post</small>
                                            </div>

											<?php }
											
													}
											}
									}
											
											?>
											                                        </div>  
                                    </li>
                                </ul>   
                            </div><!-- end post-pager -->
					
                            

                      <div class="row m22 related-posts">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>You May Also Like <span><a href="#">View all</a></span></h4>
                                            <hr>
                                        </div>
					
                                        <div class="review-posts row m30">
                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">												
                                                    <img src="upload/news_01.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                                        </div><!-
                                                        <div class="hover-title">
                                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title">
                                                    <h3><a href="single.html">TechMag's all the details of the March 21 event at Apple!</a></h3>
                                                </div>
										
                                            </div>

                                          

                                           



                                        
                                  
								  
								  
								  
								  
								  
								  
								  

                            <div id="comments" class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Comenta</h4>
                                            <hr>
                                        </div><!-- end widget-title -->

                                        <div class="comments">
                                            <div class="well">
                                                <div class="media">
                                                    <div class="media-left">
													<!----- #####imagem user ######-
                                                        <a href="#">
                                                          <img class="media-object img-circle" src="upload/avatar_02.png" alt="Generic placeholder image">
                                                        </a>------------>
                                                    </div>
                                                    <div class="media-body">
													<?php 
													
														$product_id = $_GET['id'];
														
														$commentario  = "select * from comment where News_id ='$product_id'";
														$rescomment =  mysqli_query($link,$commentario);
														
														$number = mysqli_num_rows($rescomment);
														
														if($number == 0)
														{
															echo "Dont have any comment yet";
															?>
															
                                                        <h4 class="media-heading"></h4>
                                                        <div class="time-comment clearfix">
                                                            <small class="pull-left"></small>
                                                            <a class="pull-right btn btn-primary btn-xs"></a>
                                                        </div><!-- end time-comment -->
                                                        <p>
														
														</p>
														</div>
                                                </div><!-- end media -->
															
															<?php
														}
														else
														{
														
														while($aaf =  mysqli_fetch_array($rescomment))
														{
															$iduserc = $aaf['user_id'];
															$dates = $aaf['date'];
														
														 $usercomment = "Select * from user where id='$iduserc'";
														 $resuser = mysqli_query($link, $usercomment);
														 
														 while($ad =  mysqli_fetch_array($resuser))
														 {
														?>
													
                                                        <h4 class="media-heading"><?php echo $ad['nick'];?></h4>
                                                        <div class="time-comment clearfix">
                                                            <small class="pull-left"><?php echo $dates;?></small>
                                                            <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                        </div><!-- end time-comment -->
                                                        <p>
														<?php echo $aaf['text'];?>
														</p>
														</div>
                                                </div><!-- end media -->
												</div>
                                                
												<?php
												
														 }
												
														}
														
											}
										?>

                                                
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
                                                    <textarea class="form-control"  id="description" placeholder=""></textarea>
													<div id="emoticons">
    <a href="#" title=":)"><img alt=":)" border="0" src="http://markitup.jaysalvat.com/examples/markitup/sets/bbcode/images/emoticon-happy.png" /></a>
    <a href="#" title=":("><img alt=":(" border="0" src="http://markitup.jaysalvat.com/examples/markitup/sets/bbcode/images/emoticon-unhappy.png" /></a>
    <a href="#" title=":o"><img alt=":o" border="0" src="http://markitup.jaysalvat.com/examples/markitup/sets/bbcode/images/emoticon-surprised.png" /></a>
	 <a href="#" title="FC Porto"><img alt=":o" border="0" src="http://www.fcporto.pt/_layouts/STYLES/FCPorto.Internet.UI/images/faviconFCP.ico" /></a>
	  <a href="#" title="Benfica"><img alt=":o" border="0" src="http://www.slbenfica.pt/Portals/0/Favicon.ico" /></a>
 <a href="#" title="Sporting"><img alt=":o" border="0" src="http://www.forumscp.com/favicon.ico?v=3" /></a>
	  <div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email" class="form-control" placeholder="">
                                                </div>

                                                

                                                <div class="col-md-12 col-sm-12">
                                                    <input type="submit" value="Send Comment" class="btn btn-primary" />
                                                </div>
                                            </form>
                                        </div><!-- end newsletter -->
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->
							
							
                     
							
							
							<?php 
							
							
							
							
							if(isset($_POST['submit']))
							{
								
								$sesio = $_SESSION['admin_id'];
		
		
		
		
		$namef =  mysql_real_escape_string($_POST['description']);
						
				$product_id = $_GET['id'];
		
		
		
		$sqt="INSERT INTO comment (text, state, date, user_id, News_id) VALUES ('$namef','1',NOW(), '$sesio','$product_id')";
		$resl=mysqli_query($link, $sqt);
		
		if (!$resl) {
                                        die("Query error: 1 " . mysqli_error($link));
                                       
		 }
		 
		 if($resl)
		 {
			 ?>
			 <div class="alert alert-success">
  <strong>Comentário inserido com sucesso</strong> 
</div>


								
								
								
								
								
						<?php		
							}
							
							}else{
	##
	}
							
							?>

                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

              

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
	
	<?php
	
	}
	
	
	?>
    <!-- END SITE -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>



	
<script type="text/javascript">
$(function() {
    $('#emoticons a').click(function(){

    var smiley = $(this).attr('title');
    $('#description').val($('#description').val()+" "+smiley+" ");

    });
});

</script>

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
</body>

</html>

