<?php
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawful | Search Results</title>
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

<div class="blog-home2 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Results</h3>
        <h6 class="subtitle font-weight-normal"></h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
	</div>
	</div>
	
<?php
require_once("db.php");
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($con,$query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($con,"SELECT * FROM dogs1
			WHERE (`breed` LIKE '%".$query."%')") or die(mysqli_error());
			
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				//echo "<p><h3>".$results['name']."</h3></p>";
        echo
"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css' integrity='sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=' crossorigin='anonymous' />
<div class='container'>
    <!-- start event block -->
    <div class='row align-items-center event-block no-gutters margin-40px-bottom'>
        <div class='col-lg-5 col-sm-12'>
            <div class='position-relative'>
                <img src=".$results["picture"]." style='width:100%' alt=''>

            </div>
        </div>
        <div class='col-lg-7 col-sm-12'>
            <div class='padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all'>
                <h5 class='margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500'><a href='dog-info.html' class='text-theme-color'>". $results["name"]."</a></h5>
        
                Breed: ". $results["breed"]. "<br> Gender: ". $results["gender"]. "<br> Age: ". $results["age"]. "				

				
				 
	

</div>
<br>
            </div>
        </div>
    </div>
	</div>
    <!-- end event block -->

    
   

</div>

</div>
</div>






 
	</div>";				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>

<br>
<br>
<br>
<br>
<br>
<br>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Copyright &copy; 2020  Pawful Dog Shelter.
                        This site is for educational purposes only.
  </div>
  <!-- Copyright -->
</footer>
		



    </body>
    
</html>