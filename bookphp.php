<?php
	$Yourname = $_POST['Yourname'];
	$Youremail = $_POST['Youremail'];
	$Date = $_POST['Date'];
    $Time = $_POST['Time'];
    

	// Database connection
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'ankit';
	$conn = new mysqli($server,$username,$password,$dbname);
	
	// $conn = new mysqli('localhost','root','','ankit');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bookyourtable(Yourname , Youremail , Date , Time ) values(?, ?, ?, ? )");
		$stmt->bind_param("ssii", $Yourname, $Youremail, $Date, $Time );
		$execval = $stmt->execute();
		// echo $execval;
		echo "Thanks For Your Valuable Response!...";
		$stmt->close();
		$conn->close();
	}
?>