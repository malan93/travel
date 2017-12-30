<!DOCTYPE html>

<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="gallery.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.easing-1.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	
	
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

	<style>
	.footer-left{
	
	background-color:#006400;
}
.footer-right{
	float:right;
	background-color:#006400;
	
	
}
		li {
			display: inline;	
			background-color:transparent;
			
			
	
			}
		li a{
			color:green;
			text-decoration:none;
			margin:0px;
			text-align:center;
			background-color:white;
			padding:20px;
		}

		li a:hover{
			color:white;
			background-color:green;
		}
		.footer-right{
		float:right;
		padding-top:10px;
		padding-bottom:10px;
	
}
		.footer-left{
			text-align:center;
				padding-top:10px;
		padding-bottom:10px;
		}
	</style>
</head>
<body>
	<div id="nav2">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="location.php">Locations</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Search</a></li>
		</ul>	
	</div>
	<form class="myform" action="gallery.php" method="POST" enctype="multipart/form-data" style="margin-top:40px;">
	<table>
		<tr>
			<td>Location Name</td>
			<td><input type="text" name="nam"></td>
			
			<td>Choose file</td>
			<td><input type="file" name="file"></td>
				
			<td></td>
			<td><input type="submit" name ="submit"></td>
		</tr>
		
	</table>

	</form>
	
	<?php
		include('upload.php');
	?>
	
	

	
	<script>
		
		$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
	</script>
	
</body>
</html>