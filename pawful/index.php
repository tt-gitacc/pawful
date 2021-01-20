<?php
session_start();
//echo $_SESSION['email'];
//$email = $_SESSION['email'];
error_reporting(0);
//error_reporting(E_ALL ^ E_NOTICE);  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawful | Home</title>
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

<!--body-->

<br>

<h2 style="text-align:center"></h2>

<div class="container">

 <div class="row">
    <div class="column">
      <img class="demo cursor" src="shelterImg1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="shelterImg2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="shelterImg3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
   <div class="column">
      <img class="demo cursor" src="shelterImg5.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
	   <div class="column">
      <img class="demo cursor" src="shelterImg8.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
    </div>
	    <div class="column">
      <img class="demo cursor" src="shelterImg7.jpg" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
    </div>
  </div>

  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="shelterImg1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="shelterImg2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="shelterImg3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="shelterImg5.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="shelterImg8.jpg" style="width:100%">
  </div>
  
    <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="shelterImg7.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)"><</a>
  <a class="next" onclick="plusSlides(1)">></a>

  <div class="caption-container">
    <p id="captions"></p>
  </div>

 
</div>









        <div id="wrapper">
            <div id="content">
                <div id="work">
                    <div id="workButtons">
					<br>
                    <button id="pastButton">Past Work</button>
                    <button id="currentButton">Current Work</button>
                    <button id="futureButton">Future Work</button>
                </div>
				<br>
                    <div id="past">
                        <p> In the past, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida rutrum. Nisl purus in mollis nunc sed id semper risus in. Non tellus orci ac auctor augue. Purus in mollis nunc sed id. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Euismod nisi porta lorem mollis aliquam ut. Et netus et malesuada fames ac. Vulputate enim nulla aliquet porttitor. Massa tempor nec feugiat nisl pretium fusce id velit ut. Ipsum dolor sit amet consectetur adipiscing elit ut. Tincidunt arcu non sodales neque. Sit amet consectetur adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec et. Sodales ut etiam sit amet nisl purus in mollis nunc. Eu nisl nunc mi ipsum faucibus. Semper risus in hendrerit gravida rutrum.</p>
                    </div>
                    <div id="current">
                        <p> Currently, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida rutrum. Nisl purus in mollis nunc sed id semper risus in. Non tellus orci ac auctor augue. Purus in mollis nunc sed id. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Euismod nisi porta lorem mollis aliquam ut. Et netus et malesuada fames ac. Vulputate enim nulla aliquet porttitor. Massa tempor nec feugiat nisl pretium fusce id velit ut. Ipsum dolor sit amet consectetur adipiscing elit ut. Tincidunt arcu non sodales neque. Sit amet consectetur adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec et. Sodales ut etiam sit amet nisl purus in mollis nunc. Eu nisl nunc mi ipsum faucibus. Semper risus in hendrerit gravida rutrum.</p>
                    </div>
                    <div id="future">
                        <p> In the future, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida rutrum. Nisl purus in mollis nunc sed id semper risus in. Non tellus orci ac auctor augue. Purus in mollis nunc sed id. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Euismod nisi porta lorem mollis aliquam ut. Et netus et malesuada fames ac. Vulputate enim nulla aliquet porttitor. Massa tempor nec feugiat nisl pretium fusce id velit ut. Ipsum dolor sit amet consectetur adipiscing elit ut. Tincidunt arcu non sodales neque. Sit amet consectetur adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec et. Sodales ut etiam sit amet nisl purus in mollis nunc. Eu nisl nunc mi ipsum faucibus. Semper risus in hendrerit gravida rutrum.</p>
                    </div>
                </div>
				

          </div>
<!--events -->
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
    <div class="row mt-4">
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="events.php"><img class="card-img-top" src="shelterimg-halloween.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">30</span></div>
          <h5 class="font-weight-medium mt-3"><a href="events.php" class="text-decoration-none link">October 30: Halloween Volunteering Day</a></h5>
          <p class="mt-3"></p>
          <a href="events.php" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="events.php"><img class="card-img-top" src="shelter-thx.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Nov<span class="d-block">5</span></div>
          <h5 class="font-weight-medium mt-3"><a href="events.php" class="text-decoration-none link">November 5: Charity Event</a></h5>
          <p class="mt-3"></p>
          <a href="events.php" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="events.php"><img class="card-img-top" src="shelter-chr.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Dec<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3"><a href="events.php" class="text-decoration-none link">December 5: Holiday Event</a></h5>
          <p class="mt-3"></p>
          <a href="events.php" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
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
		
		

        <script type="text/javascript" src="slider.js"></script>
		        <script type="text/javascript" src="jquery.js"></script>



    </body>
    
</html>







</body>
</html>
