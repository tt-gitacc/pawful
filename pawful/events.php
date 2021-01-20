<?php
session_start();
error_reporting(0);


	$id = $_SESSION['email'];
	if (isset($id)){
echo "Hello, $id!";
	}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawful | Events</title>
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

<div class="blog-home2 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Upcoming Events</h3>
        <h6 class="subtitle font-weight-normal">Volunteer for one of the events below</h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
	</div>
	</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="shelterimg-halloween.jpg" style="width:100%" alt="">
                <div class="events-date">
                    <div class="font-size28">30</div>
                    <div class="font-size14">Oct</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="#" class="text-theme-color">Halloween Volunteering Day</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 01:30 PM - 04:30 PM</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
				
				 <form action="event1.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-success" name="submit">Volunteer</button>
	</form>
	<form action="delete.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-danger" name="submit">Withdraw</button>
	</form>
	<br>
	

</div>
<br>
                <a class="butn small margin-10px-top md-no-margin-top" href="attendees.php">View Attendees <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>
	</div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="#" class="text-theme-color">Charity Event</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:00 AM - 02:30 PM</li>
                </ul>

				 <form action="event2.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-success" name="submit">Volunteer</button>
	</form>
	<form action="delete2.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-danger" name="submit">Withdraw</button>
	</form>
	<br>
	<br>
	
	
                <a class="butn small margin-10px-top md-no-margin-top" href="attendees2.php">View Attendees <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>

</div>
</div>


            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative">
                <img src="shelter-thx.jpg" style="width:100%" alt="">
                <div class="events-date">
                    <div class="font-size28">5</div>
                    <div class="font-size14">Nov</div>
                </div>
            </div>
        </div>
		
	
		
    </div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="shelter-chr.jpg" style="width:100%" alt="">
                <div class="events-date">
                    <div class="font-size28">23</div>
                    <div class="font-size14">Dec</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
		<br>
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="#" class="text-theme-color">Holiday Event</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 12:30 PM - 04:30 PM</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
				
				 <form action="event3.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-success" name="submit">Volunteer</button>
	</form>
	<form action="delete3.php" id="registerForm" method="post">
                 <div class="center">
				 <br>
	<button type="submit" class="btn btn-danger" name="submit">Withdraw</button>
	</form>
	<br>
	

</div>
<br>
                <a class="butn small margin-10px-top md-no-margin-top" href="attendees3.php">View Attendees <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
				<br>
				<br>
				<br>
            </div>
        </div>
    </div>
    <!-- end event block -->

   

</div>

</div>
</div>






 
</div>
		  
		  
<footer class="bg-light text-center text-lg-start">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Copyright &copy; 2020  Pawful Dog Shelter.
                        This site is for educational purposes only.
  </div>
  <!-- Copyright -->
</footer>
		



    </body>
    
</html>