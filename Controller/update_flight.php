<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Update Flights </title>
<?php include '../View/UI.php';?>
		</head>

  <body> 
	
		<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> ABC Airline </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="add_flight.php"> Add Flight </a>
				<a href='../Model/show_flight.php' style="margin-left: 20px;"> Show Flight </a>
				<a href="search_admin.php" style="margin-left: 20px;"> Search Flight </a>
				<a href="delete_flight.php" style="margin-left: 20px;"> Delete Flight </a> <br>
				
				
				<a href='../Model/show_ticket.php'> Show Ticket </a> 
				<a href="delete_ticket.php" style="margin-left: 20px;"> Delete Ticket </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> 	<br><br><br>
			
				
			</div>
		</div>
	</section>
    
	
	<section id = "section1">
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Update Flights </div>
		
			
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/update_process.php' class="form_design" method="post">
			Flight ID: <input type="text" name="fid"> <br/>
			Date    : <input type="date" name="fdate"> <br/> 
			Passenger Limit: <input type="text" name="fpl"> <br/>
			Flight Status: <input type="text" name="fst"> <br/>
			Departure Location: <input type="text" name="del"> <br/>
			Destination: <input type="text" name="des"> <br/>
			Departure Time: <input type="time" name="dep"> <br/>
			
			
			<br/>
			
			<button type="submit" value="Update"> Update </button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include '../View/Footer.php';?>
  </body> 
</html>

