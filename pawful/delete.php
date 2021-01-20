<?php



session_start();
	$id = $_SESSION['email'];

	if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }



    $conn = mysqli_connect("localhost","root","","pawful");




$sql = "DELETE FROM events1 WHERE volunteer_id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Your name has been removed from the list of attendees. Feel free to add yourself again before the event starts.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?> 
