<?php 

require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');

if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_code']))
{
    header("Location: login.php");
}

function devolve_tabela($link)
{
	$control = '';
	$controla = 0;
	$selectnews = "SELECT * FROM user where state='1' ORDER by id DESC";
	$resq = mysqli_query($link, $selectnews);
	
	
		
	
	
	while($rr = mysqli_fetch_array($resq))
	{
		$id = $rr['id'];
		$title = $rr['nick'];
		$date = $rr['login_time'];
		$views = $rr['email'];
		
		$controla++;
	   $count=mysqli_num_rows($resq);
	   if($count > 0 && $controla > 0)
	   {
		  
		   ?>
				<tr>
				<?php
				 
					if($control){
					echo "<td  rowspan = ".$count . ">" . $id. "</td>"; /* Define rowspan com label*/
					
					$control = false;
            }
				?>
					
					
					<td><?php echo $id; ?></td>
					<td><?php echo $title;?></td>
					<td><?php echo $date;?></td>
					<td><?php echo $views;?></td>
				
				<td>
				<form action="" method="post">
				<fieldset>
						
				
						<input class="radio" type="radio" name="news_state" id="active" value="1" checked> <label class="label_radio" for="active">Ativo</label>
						
						<input class="radio" type="radio" name="news_state" id="inactive" value="0"> <label class="label_radio" for="inactive">Inativo</label>
						
						<input type="hidden" name="estado" value="<?php echo $id;?>">
						
					<input type="submit" class="button button-primary" name="send" value="Alterar estado" id="login"/>
					</fieldset>
					</form> 
				
				
				
				</td>
					</tr>
		<?php
	}else{
		echo "You don´t have any news inserted";
	}
	   }
	   
	   if(isset($_POST['send']))
	   {
		   
	   $get_state = $_POST['news_state'];
	   $get_id = $_POST['estado'];
	   
	    $queryss = " UPDATE user SET state ='$get_state' WHERE id = '$get_id' ";
	$updateviews = mysqli_query($link, $queryss);
	if($updateviews)
	{
		echo "Update views on page";
	}
	   

	   }


}


?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Charts</title>

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
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
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
				<h1 class="page-header">Charts</h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Line Chart</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
								


	<body> 
	<table style="width:100%">
	<tr>
		<td> # Id</td>
		<td> Título da notícia</td>
		<td> data </td>
		<td> email</td>
	</tr>

	

<?php

		devolve_tabela($link);
	

?>


	</table>
	</body> 

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
