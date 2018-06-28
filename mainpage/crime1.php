<?php
	include "../includes/dbconnect.php";
	
	mysqli_query($connection, 'set names utf8');
	
	$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />	
		<meta charset="utf-8">
		<title>꾼</title>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Syncopate|Roboto" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/backstretch.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/prefixfree.min.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
		
		
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="font/font.css" />
		
		<script src="js/star.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
	</head>
	
	<body>
		<div class="bg"></div>
		
		<figure class="vid">
			<video loop autoplay>
				<source src="img/background.mp4" type="video/mp4"/>
			</video>
		</figure>
		
		<div class="maintitle">
			<p class="text1">
				<?php
					while($row=mysqli_fetch_array($result))
					echo $row['name'];
				?>
			</p>
		</div>
		<section class="poster">
			<img class="pos" src="img/crime.jpg">
		</section>
		<div class="info">
			<p class="text2">
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['nationality'];
				?><br>
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['director'];
				?> 감독<br>
				현빈, 유지태, 배성우, 박성웅, 나나<br>
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['genre'];
				?>       |       
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['runningtime'];
				?>분<br>
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['rating'];
				?><br>
				<?php
					$result=mysqli_query($connection, "SELECT * FROM MOVIE WHERE name='꾼'");
					while($row=mysqli_fetch_array($result))
					echo $row['date'];
				?> 개봉<br>
			</p>
		</div>
		
	</body>

</html>	