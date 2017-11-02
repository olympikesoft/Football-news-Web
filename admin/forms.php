<?php
require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');

if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_code']))
{
    header("Location: login.php");
}

$id = $_SESSION['admin_id'];
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

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
				<h1 class="page-header">Forms</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							
							
							<form action="#" method="POST" name="myForm" id ="myForm"  enctype="multipart/form-data">
                        <fieldset>
                          <legend>Que tipo de operação quer fazer? </legend>
                          <br/>
                          <div class="form-group">
                            <div class="col-sm-9">
							<input type="radio" name="concept_type" value="Noticia" checked> 
							<label>Inserir noticia</label>
							</div>
							<div class="col-sm-9">
							<input type="radio" name="concept_type" value="Categoria" > 
							<label>Inserir Categoria</label>
							</div>
							<div class="col-sm-9">
							<input type="radio" name="concept_type" value="Equipa"> 
							<label>Inserir equipa</label>
							</div>
							<div class="col-sm-9">
							<input type="radio" name="concept_type" value="Jogador"> 
							<label>Inserir jogador</label>
                            </div>
							<div class="col-sm-9">
							<input type="radio" name="concept_type" value="Resultado"> 
							<label>Inserir resultado</label>
                            </div>
                          </div>
						 
						<input type="submit" name="exec" value="Executar operação">
							</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	
	<?php
	
		if(isset($_POST['exec'])){
			
					$tipooperaco = $_POST['concept_type']; // categoria
					//echo $tipooperaco;
					
					if($tipooperaco == "Noticia")
					{
						?>
								<form action="insernews.php" method="POST">
                        <fieldset>
                          <legend>Avançar para inserir noticia</legend>
                          <br/>
                          
						                  
						 <div class="form-group">
							<div class="form-group">
							  <div class="col-sm-9">
						<input type="submit" name="inserir_post" value="Avançar">
						</div>
						</div>
                          </div>
							</form>
						<?php
						###################inserir noticia##################
					}
					
					if($tipooperaco == "Categoria")
					{
						?>
								<form action="insercategoria.php" method="POST">
                        <fieldset>
                          <legend>Avançar para inserir categoria</legend>
                          <br/>
                          
						                  
						 <div class="form-group">
							<div class="form-group">
							  <div class="col-sm-9">
						<input type="submit" name="inserir_post" value="Avançar">
						</div>
						</div>
                          </div>
							</form>
						<?php
						###################inserir noticia##################
					}
					
						
					if($tipooperaco == "Equipa")
					{
						?>
						
						<form action="insert_equipa.php" method="POST">
                        <fieldset>
                          <legend>Avançar para inserir equipa</legend>
                          <br/>
                          
						                  
						 <div class="form-group">
							<div class="form-group">
							  <div class="col-sm-9">
						<input type="submit" name="inserir_post" value="Avançar">
						</div>
						</div>
                          </div>
							</form>
						
<?php 
					}
					
					
					if($tipooperaco == "Clube")
					{
						?>
						
						<form action="insert_club.php" method="POST">
                        <fieldset>
                          <legend>Avançar para inserir clube</legend>
                          <br/>
                          
						                  
						 <div class="form-group">
							<div class="form-group">
							  <div class="col-sm-9">
						<input type="submit" name="inserir_clube" value="Avançar">
						</div>
						</div>
                          </div>
							</form>
<?php 
					}
					
								
					if($tipooperaco == "Resultado")
					{
						?>
						
						<form action="insert_resultado.php" method="POST">
                        <fieldset>
                          <legend>Avançar para inserir resultado</legend>
                          <br/>
                          
						                  
						 <div class="form-group">
							<div class="form-group">
							  <div class="col-sm-9">
						<input type="submit" name="inserir_clube" value="Avançar">
						</div>
						</div>
                          </div>
							</form>
<?php 
					}
			
	
	
		}
	
	
	
		
	?>

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
