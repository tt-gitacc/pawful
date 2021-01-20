<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "pawful");
 
if (!empty($_POST)){

 //Connect sql server:
 if ( !connect() ){
   $errors[] = "Can't establish link to MySQL server";
 }
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($link, $_REQUEST['mname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$bday = mysqli_real_escape_string($link, $_REQUEST['bday']);
$organization = mysqli_real_escape_string($link, $_REQUEST['organization']);

 
 

 
// Attempt insert query execution
$sql = "INSERT INTO volunteers (username, password, fname, mname, lname, gender, email, address, city, state, zip, email, phone, country, bday, organization) 
VALUES ('$username', '$fname', '$password', '$mname', '$lname', '$gender', '$email','$address', '$city', '$state', '$zip', '$email', '$phone', '$country', '$bday', '$organization')";

}



// Close connection
mysqli_close($link);