<?php
	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
    $Address = $_POST['Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
    $Zip = $_POST['Zip'];
	$Nameoncard = $_POST['Nameoncard'];
    $Creditcard = $_POST['Creditcardno'];
	$Expmonth = $_POST['Expmonth'];
    $Expyear = $_POST['Expyear'];
    $Cvv = $_POST['Cvv'];


	// Database connection
	// Database connection
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'ankit';
	$conn = new mysqli( $server , $username , $password , $dbname);
	// $conn = new mysqli('localhost','root','','ankit');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into rest(Fullname , Email , Address , City , State , Zip ,Nameoncard , Creditcardno , Expmonth , Expyear ,Cvv) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?  )");
		$stmt->bind_param("sssssisisii" , $Fullname , $Email , $Address , $City , $State , $Zip , $Nameoncard , $Creditcardno , $Expmonth  , $Expyear , $Cvv);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Thanks For Your Valuable Response!...";
		$stmt->close();
		$conn->close();
	}
?>