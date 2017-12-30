<?php
	include('dbconfig.php');
	if(isset($_POST['submit'])){
		
		$name = $_FILES['file']['name'];
		$tmpname=$_FILES['file']['tmp_name'];
		$location = 'uploads/';
		$target = 'uploads/'.$name;
		
		if(move_uploaded_file($tmpname,$location.$name))
		{
			
			$nam = $_POST['nam'];
			$query = mysqli_query($con,"INSERT INTO gallery(img,title)VALUES('".$target."','$nam')");
			
			header('Location: gallery.php');
			exit;
			
		}else{
			
			echo "file not uploaded";
		}
	}
	$res =mysqli_query($con,"SELECT * FROM gallery");
	while($row = mysqli_fetch_array($res)){
		echo "<a href='".$row['img']."' class='fancybox' title='".$row['title']."'>"."<img src='".$row['img']."' &nbsp; class='im'>"."</a>";
		
	}
	$_POST = array();
?>

