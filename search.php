<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');



/*
if ($_SESSION['admin_id'])
{
    header("Location: dashboard.php");
}
*/



?>


<html class="google-js" lang="en">
<script type="text/javascript">window["_gaUserPrefs"] = { ioo : function() { return true; } }</script><head>

    <meta charset="utf-8">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">

    <title>Search</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&lang=en" rel="stylesheet">
    <link href="https://www.google.com/work/search/css/search.min.css" rel="stylesheet">
    <meta content="NOODP,NOYDIR" name="robots">
	
	
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
  </head>
  
  
  <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- end col -->
                    <div class="col-md-9 col-sm-12">
                      
                        <!-- end ads-widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
		
		  <div class="row hidden-xs">
                <div class="col-md-12">
                    <div class="news-ticker clearfix">
                        <div class="news-title">
                            <h3>Noticias em Destaque</h3>
                        </div>
                        <ul id="ticker">
							<?php 
							$selenew = "Select * from news ORDER BY RAND()
LIMIT 20";
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
                </div><!-- end col -->
            </div><!-- end row -->
  <body style="top:0px;margin:0px;padding:5px;">

    <div id="maia-main" role="main" style="top:0px;margin:0px;padding:5px;">
      <div class="maia-teleport" id="content" style="top:0px;margin:0px;padding:5px;" ></div>
      
      <br class="clearfix">
      <div class="centered max-width try-search scroll-section" data-section-label="" style="top:0px;margin:0px;padding:5px;">
        
        
        <div id="search_results">
        <div class="result">
		<?php 
	  
	  if(isset($_GET['send']))
{
$search_word=$_GET['search_word'];
$search_word_new=mysql_escape_string($search_word);
$search_word_fix=str_replace(" ","%",$search_word_new);
$sql=mysqli_query($link, "SELECT * FROM news WHERE title LIKE '%$search_word_fix%' ORDER BY id DESC LIMIT 1");

if (!$sql) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
		
$count=mysqli_num_rows($sql);
if($count > 0)
{
while($row=mysqli_fetch_array($sql))
{
$id = $row['id'];
$msg=$row['title'];
$bold_word='<b>'.$search_word.'</b>';
$final_msg = str_ireplace($search_word, $bold_word, $msg);
?>
		  <a href="news.php?id=<?php
													echo $id;
												
													?>" 


<li><?php echo $final_msg; ?></li>

<?php
}
}
else
{
echo "<li>No Results</li>";
}
}
?>
	  
		</p></div>

</div>
      </div>
      
      

  <!--  <script type="text/javascript">
      function startSearch(event) {
        if (event.target.results.length > 1) {
          var second = event.target.results[1].utterance;
          document.getElementById("second_best").value = second;
        }
        event.target.form.submit();
      }
    </script>

    <form action="http://www.google.com/search">
    <input type="search" name="q" speech required onspeechchange="startSearch">
    <input type="hidden" name="second_best" id="second_best">
    </form>-->

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


