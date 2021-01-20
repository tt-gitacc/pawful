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


	$sql0 = "select * from events2 where volunteer_id = '".$id."'";
	$rs = mysqli_query($conn,$sql0);
	$numRows = mysqli_num_rows($rs);
	
	


if($numRows  != 1){
	echo "You haven't registered for this event yet.";
}
else{
$sql = "DELETE FROM events2 WHERE volunteer_id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Your name has been removed from the list of attendees. Feel free to add yourself again before the event starts.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}



$conn->close();
?> 
