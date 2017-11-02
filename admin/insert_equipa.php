<?php
require_once('../commom/database.php');
require_once('../commom/common.php');
require_once('../commom/functions.php');

$id = $_SESSION['admin_id'];

ini_set('default_charset', 'UTF-8');
 
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
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li class="active"><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
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
							
							
						
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

								<form action="#" method="POST" name="myForm" id ="myForm"  enctype="multipart/form-data">
                        <fieldset>
                          <legend>Inserir Equipa</legend>
                          <br/>
                          <div class="form-group">
							<div class="form-group">
                            <label class="col-sm-3 control-label" for="card-holder-name">Nome do clube</label>
                            <div class="col-sm-9">
                              <input  maxlength="100" type="text" name="name" required="required" class="form-control" placeholder="Insira nome do clube"  />
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-holder-name">Nome do estádio</label>
                            <div class="col-sm-9">
                              <input  maxlength="100" type="text" name="statio" required="required" class="form-control" placeholder="Insira nome do estadio"  />
                            </div>
                          </div>
						  
						   <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-number">Categoria da Equipa</label>
                            <div class="col-sm-9">
                             <select name="quantidades">
  <?php
  
  $query = "SELECT * FROM category ORDER BY ID";
$result = mysqli_query($link, $query) or die(mysql_error()."[".$query."]");
  
  
  while($row = mysqli_fetch_array($result))
  {
	  ?>
	  <?php
				echo "<option value='".$row['id']."'>".$row['name']."</option>";
				$value = $row['name'];
  }
  ?>
		
			</select>
                            </div>
                          </div>
						  
                          </div>					
						<input type="submit" name="insert_post" value="Send"/>
              </form>
						<?php
						###################inserir noticia##################
						
						/*
						
						
						
						*/
						
						
					
	
	if(isset($_POST['insert_post'])){
		

		
		$sesio = $_SESSION['admin_id'];
		
		
		$stadio = mysql_real_escape_string($_POST['statio']);
		$cat = $_POST['quantidades'];
		$name =  mysql_real_escape_string($_POST['name']);
		
		
		
		
		$sqt="INSERT INTO team (name,state, category_id, venue) VALUES ('$name','1', '$cat', '$stadio')";
		$resl=mysqli_query($link, $sqt);
		
		if (!$resl) {
                                        die("Query error: 1 " . mysqli_error($link));
                                       
		 }
		 
		 if($resl)
		 {
	
	?>
	
	
	
	
			  <form action="#" method="POST" name="myForma" id ="myForma"  enctype="multipart/form-data">
                        <fieldset>
                      
                          <legend>Enter Your App image Information</legend>
                          <br/>
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-holder-name">Icon of App</label>
                            <div class="col-sm-9">
                              <input type="file" required="required" class="form-control"  name="photoimgs"   id="photoimg"/>
                            </div>
							<input type="submit" name="insert_postas" value="Upload images"/>
							</form>
			 
			 
			 
			 <?php
		 }
	} 
			 $sesio = $_SESSION['admin_id'];
						  
						  $path = "teams/";

						  
						  
		  
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST['insert_postas'])){
{
$name = $_FILES['photoimgs']['name'];
$size = $_FILES['photoimgs']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*1024)) // Image size max 1 MB
{
$actual_image_name = time().$sesio.".".$ext;
$tmp = $_FILES['photoimgs']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
	
	 $querysa="SELECT MAX(id) as max FROM news WHERE user_id='$sesio'";
 $sqld = mysqli_query($link, $querysa);
 
		 if(!$sqld)
		 {
			  die("Query error 5: " . mysqli_error($link));
		 }
		 
		 while($row = mysqli_fetch_array($sqld))
		 {	
				$max = $row['max'];
		 }
$qa="UPDATE team SET image_path='$actual_image_name' WHERE id='$max'";
echo $qa;
$sqlas = mysqli_query($link, $qa);

		if(!$sqlas)
		{
			  die("Query error 6: " . mysqli_error($link));
		}
		 

if($sqlas){
		
?>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <div class="alert alert-success">
  <strong>Noticia inserida com sucesso</strong> 
</div>

<?php
		 }
		 
		 }
else
echo "failed";
}
else
echo "Image file size max 1 MB"; 
}
else
echo "Invalid file format.."; 
}
else
echo "Please select image..!";

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
