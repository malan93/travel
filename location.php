<?php
	
	if(isset($_POST['submit'])){
		$target = "locationimg/".basename($_FILES['image']['name']);
	
		$db = mysqli_connect("localhost","root","","travel");
		
		$image = $_FILES['image']['name'];
		$location = $_POST['location'];
		$descrption = $_POST['text'];
		
		$sql = "INSERT INTO location(name,des,image) VALUES('$location','$descrption','$image')";
		mysqli_query($db,$sql);
		
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target)){
			echo "uploaded successfully";
			header('Location: home.php');
			exit;
		}else{
			echo "not uploaded successfully";
			
		}
	}
	
?>



<!DOCTYPE html>
<html>
<head>
<title>Locations</title>
<link rel="stylesheet" type="text/css" href="location.css">
<style>
	body{
		background-image:url("http://www.walkerstours.com/wp-content/uploads/2015/04/Wildlife-Adventure-Tours-2.jpg");
		
		
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
			background-color:transparent;
			padding:20px;
		}

		li a:hover{
			color:white;
			background-color:green;
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
			<li style="float:right;"><a href="#"><input type="text" name="search" placeholder="search"><input type="button" name="search" value="search"></a></li>
		</ul>	
	</div>
<form method="post" action="location.php" enctype="multipart/form-data" style="margin-top:40px;">

	<table>
		<tr>
			<td>Choose image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="text" rows="4" cols="50" placeholder="say something about the location"></textarea></td>
		</tr>
		<tr>
			<td>Location Name</td>
			<td><input type="text" name="location" placeholder="Location"></td>
		</tr>
		<tr>
			<td>Author Name</td>
			<td><input type="text" name="name" placeholder="Author Name"></td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="contact" placeholder="Contact No"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="upload"></td>
		</tr>
	</table>
	
</form>

</body>
</html>