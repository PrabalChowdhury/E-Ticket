<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Flight </title>
		<?php include '../View/UI.php';?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> ABC Airline </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
                <a href="search_user.php"> Serch Flight</a> 
				<a href="booking.php" style="margin-left: 20px;"> Book Now </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Flight </div>
		
		<form action='../View/showResultbyID_user.php' class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Flight ID: <input type="text" name="fid"> <br/>
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include '../View/Footer.php';?>
</body>
</html>