<?php
require_once('/commom/database.php');
require_once('/commom/common.php');
require_once('/commom/functions.php');

if(isset($_GET['search_word']))
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