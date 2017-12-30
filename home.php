<!DOCTYPE html>

<html>
<head>
	<title>HOME</title>
	<link href="home.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="location.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="js-image-slider.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  
	<script src="js-image-slider.js" type="text/javascript"></script>

	
	<style>
		
	
		.mySlides {
			display:none;
			margin-bottom:20px;
		}
		.box{
			display:inline;
			width:30%;
			margin:25px;
			float:left;
			
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
		.desc{
			width:100%;
			height:300px;
			margin-top:20px;
			text-align:center;
			
		}
		#home{
			width:100%;
			
		}
		table,tr{
			width:100%;
		}
		table tr td{
			width:40%;
			height:60%;
			padding:20px;			
			
		}
		
		table.fixed { 
			table-layout:fixed; 
		}
		table.fixed td { 
			overflow: hidden; 
		}
		.container {
			position: relative;
			text-align: center;
			color: white;
		}
		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div id="home">
		<div id="header">
			<div id="nav2">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="location.php">Locations</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Search</a></li>
				</ul>	
			</div>
			
			<div id="sliderFrame">
				<div id="slider" class="container">		
					
					<img src="http://www.globestravel.com/assets/uploads/packages/a1edb-malaysia.jpg" />				
					<img src="https://hotels.ng/travel/content/images/2016/11/srilanka.jpg" />
					<img src="http://www.greatnepalholidays.com/wp-content/uploads/2016/07/sri-lanka-Sri_Lanka_luxury_dream_hotels.jpg" />
					<img src="https://www.naturalworldsafaris.com/~/media/images/destinations/sri-lanka/nws-st-sri-lanka-colombo-temple.ashx" />
					<img src="https://i.ytimg.com/vi/QjqjziSkefU/maxresdefault.jpg" />
					<img src="https://i.ytimg.com/vi/EKLQ7PtgjzY/maxresdefault.jpg" />
					<div class="centered"><h1>TRAVEL LANKA</h1></div>
					
				</div>
				<div id="htmlcaption" style="display: none;">
					<em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
				</div>
			</div>
		</div>
		<center><h1 style="margin:20px;">TRAVEL SRILANKA</h1></center>
		<div style="margin-top:20px;">
			<p><h3  style="width:80%;margin:auto;margin-bottom:40px;text-align:center;">
				Wherever you go becomes a part of you somehow
				Travel is fatal to prejudice, bigotry, and narrow-mindedness, 
				and many of our people need it sorely on these accounts. Broad, wholesome, charitable 
				views of men and things cannot be acquired by vegetating in
				one little corner of the earth all one's lifetime.
										</h3></p>
		</div>
		<div id="content">
			<?php
				$db= mysqli_connect("localhost","root","","travel");
				$sql="SELECT * FROM location";
				$result = mysqli_query($db,$sql);
				
				while($row=mysqli_fetch_array($result))
				{
					echo "<div id='img_div'>";
						echo"<img src='locationimg/".$row['image']."'>";
						echo "<h3>"."<p>".$row['name']."</p>"."</h3>";
						echo"<p>".$row['des']."</p>";
					echo "</div>";
					
				}
			?>
		</div>
		
		
	</div>
	<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p>Travel lanka &copy; 2018</p>
			</div>

		</footer>
	<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
</body>

</html>