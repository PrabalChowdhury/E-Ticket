<?php

require_once('dbconnect.php');


if(isset($_POST['fname']) && isset($_POST['pass'])){
	
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM user_info WHERE uname = '$u' AND pass = '$p' AND role=''";
	$sql2 = "SELECT * FROM user_info WHERE '$u' = 'admin' AND '$p' ='admin' AND role='admin'";
	
	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	
    if(mysqli_num_rows($result2) !=0 ){
	
		header('Location: ../Controller/search_admin.php');
		
	}

    elseif(mysqli_num_rows($result) !=0 ){
	
		header('Location: ../Controller/search_user.php');
		
	}

	else{
		echo "Username or Password is wrong";
		
	}
	
}


?>
