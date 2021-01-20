<?php
session_start();
error_reporting(0);

require_once("db.php");
if(isset($_POST['submit'])){

		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		$email = $_POST['email'];

		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		if ($_POST["password"] === $_POST["cpass"]) {
	
		$sql = "insert into users (first_name, last_name, email, password) value('".$first_name."', '".$last_name."', '".$email."','".$hashPassword."')";
		$result = mysqli_query($con, $sql);
		if($result){
			echo "Registration successful!";
		}
		
	}
	else{
			echo 'ERROR: Your passwords did not match!';
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawful | Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
  https://www.bootdey.com/snippets/view/General-Search-Results#html
  -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="styles2.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>





<nav class="navbar navbar-expand-sm bg-success navbar-dark justify-content-center">
	        <ul class="navbar-nav mr-auto">


	
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Pawful</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adopt.php">Adopt</a>
            </li>
        </ul>
	
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 justify-content-center">


			    <li class="nav-item">
  <form class="form-inline" action="search.php">

    <input class="form-control mr-sm-2" style="width: 330px" type="text" name="query" placeholder="Search">
	         <button type="submit" class="btn btn-base">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
             </button>
                                
  </form>
  


  
  </li>

        </ul>
		  </div>

		
        <ul class="nav navbar-nav ml-auto w-100 l-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="registration.php">Sign Up</a>
            </li>
			<?php
			if($email = $_SESSION['success']){
				?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
			<?php
			}
			else{
				?>
			            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
            </li>
			<?php
			}
			?>
        </ul>
    </div>
</nav>

<!---->


       <div class="blog-home2 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Register</h3>
		<br>
 <form action="<?php echo $_SERVER['PHP_SELF']?>" id="registerForm" method="post">

                    
                        <input type="text" id="email" name="email" placeholder="Username" required size="50%" >
                  	<br>
                  	<br>

                       <input  type="password" id="password" name="password" placeholder="Password (8 characters minimum)"  pattern=".{8,}" required size="50%">
            	<br>
            	<br>
				
						<input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required size="50%">
            	<br>
            	<br>

                      <input type="text" id="fname" name="first_name" placeholder="First Name" required size="50%">
                	<br>
                	<br>

                      <input  type="text" id="last_name" name="last_name" placeholder="Last Name" required size="50%">
                   
	<br>
	<br>

	<button type="submit" class="btn btn-success" name="submit">Register</button>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

</form>

      </div>

    </div>
	</div>

<!---->		  
<footer class="bg-light text-center text-lg-start">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Copyright &copy; 2020  Pawful Dog Shelter.
                        This site is for educational purposes only.
  </div>
</footer>
		




    </body>
    
</html>