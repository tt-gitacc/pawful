<?php
session_start();
	$id = $_SESSION['email'];
	$fname = $_SESSION['first_name'];
	$lname = $_SESSION['last_name'];


	if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }



//insert into events table
    $conn = mysqli_connect("localhost","root","","pawful");



	$sql0 = "select * from events1 where volunteer_id = '".$id."'";
	$rs = mysqli_query($conn,$sql0);
	$numRows = mysqli_num_rows($rs);
	
	


if($numRows  >= 1){
	echo 'You already registered for this event.';
}



else{
	

  



$sql = "INSERT INTO events1 (event_name, event_date, event_description, volunteer_id, first_name, last_name)
VALUES ('Charity Event', '1234', 'This event will take place on the 30th', '$id', '$fname', '$lname')";


if ($conn->query($sql) === TRUE) {
  echo "Thank you for volunteering, $id!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 }



$conn->close();


?> 
