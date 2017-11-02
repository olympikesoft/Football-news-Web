<?php 
require_once('database.php');



function categoria(){
	
	
		global $link;
		
		
		$get_items= "SELECT nome FROM categoria where id='2'";
		$run_items=mysqli_query($link, $get_items);
		
		if (!$run_items) {
                                        die("Query error 4: " . mysqli_error($link));
										echo "error";
                                       
		 }
		
		while($row_pro=mysqli_fetch_array($run_items))
	{
		$name = $row_pro['nome'];
		echo $name;
	}
	
}

function categoria2(){
	
	
		global $link;
		
		
		$get_items= "SELECT nome FROM categoria where id='3'";
		$run_items=mysqli_query($link, $get_items);
		
		if (!$run_items) {
                                        die("Query error 4: " . mysqli_error($link));
										echo "error";
                                       
		 }
		
		while($row_pro=mysqli_fetch_array($run_items))
	{
		$name = $row_pro['nome'];
		echo $name;
	}
	
}

function categoriad()
{
	
	global $link;
	
	$get_categori =  "SELECT nome from categoria";
	$runs_categori = mysqli_query($link, $get_categori);
	
	if(!$runs_categori)
	{
		die("Query error 4:" . myqli_error($link));
		
	}
	while($row_pro = mysqli_fetch_array($runs_categori))
	{
		$name = $row_pro['nome'];
		echo $name;
	}
}
		








?>