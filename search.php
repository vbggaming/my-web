<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="width-device">
	<title>search</title>
</head>
<body>

<h1>Results</h1>
<div class="article-container">
	<?php
	$server = "localhost";
	$usr = "root";
	$pass = "";
	$dbname = "tg";
	$con = mysqli_connect($server, $usr, $pass, $dbname);
	if (isset($_POST['search-submit'])) {
			$search = mysqli_real_escape_string($con, $_POST['search']);
			$sql = "SELECT * FROM phone WHERE names LIKE '%$search%'";
			$result = mysqli_query($con, $sql);
			$queryResult = mysqli_num_rows($result);

			echo "we have ".$queryResult." Phones!!";

			if ($queryResult !=0 ){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href=".$row['url']."><div class ='article-box'>
				 	         <h3>".$row['names']."</h3>
			              </div></a>";
				}
				
			}
			
	}
	
	?>
	
</div>
</body>
</html>