<?php
require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');

if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_code']))
{
    header("Location: login.php");
}
 
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="forms.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Gerir Operações</a></li>
			<li><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Gerir Noticias</a></li>
			<li><a href="users.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Gerir Utilizadores</a></li>
			
		
					</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
								<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<?php 
						
						$id = $_SESSION['admin_id'];
						
						$numbernews = "Select count(id) as number from news";
						$resnumber = mysqli_query($link, $numbernews);
						
						while($row = mysqli_fetch_array($resnumber))
						{
						
						?>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $row['number'];?></div>
							<div class="text-muted">Notícias</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
							<?php 
						
						
						
						$numbercomments = "Select count(id) as count from comment";
						$rescomment = mysqli_query($link, $numbercomments);
						
						while($rows = mysqli_fetch_array($rescomment))
						{
						?>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $rows['count'];?></div>
							<div class="text-muted">Comentarios</div>
						</div>
						<?php 
						
						
						}
						
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<?php 
						
						
						
						$numberusers = "Select count(id) as count from user";
						$resuser = mysqli_query($link, $numberusers);
						
						while($rowd = mysqli_fetch_array($resuser))
						{
						?>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $rowd['count'];?></div>
							<div class="text-muted">Utilizadores</div>
						</div>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
						<?php $contaviews = "Select  sum(views) as counts from news";
							  $resviews = mysqli_query($link, $contaviews);
							  while($roa = mysqli_fetch_array($resviews))
							  {
								  ?>
							<div class="large"><?php echo $roa['counts'];?></div>
							<div class="text-muted">Page Views</div>
							<?php 
							  }
							  ?>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<?php 
						
						$selecionaonline = "SELECT count(distinct id) as conta FROM user WHERE 	login_time >= DATE_SUB(NOW(), INTERVAL 10 MINUTE)";
						$resulta =  mysqli_query($link, $selecionaonline);
						
						while($rov = mysqli_fetch_array($resulta))
						{						
						
						
						?>
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $rov['conta'];?></div>
							<div class="text-muted">Online users</div>
							
							<?php 
							
						}
							?>
						</div>
					</div>
				</div>
			</div>
			
			
		</div><!--/.row-->
		
		
		
		
								
	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

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
