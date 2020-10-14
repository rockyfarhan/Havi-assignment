<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>

	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     <link rel="icon" href="images/ico.png">

  	 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
     <!-- link for sidebar -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <style type="text/css">
     	/*social media icons begins*/
  .fa 
  {
  padding: 5px 10px;
  font-size: 23px;
   text-align: center;
  text-decoration: none;
  margin: none;
  border-radius: 50%;
}

.fa:hover
 {
   color: black;
 }

.fa-facebook, .fa-google, .fa-linkedin, .fa-instagram
{
 
  color: white;
}

/*social media ends*/
     </style>

  <!-- Transition from external source -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- transition ends -->


</head>
<body style="background-color: black">

<!-- nav bar begins -->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Blood Donation System <img src="images/ico2.png" width="30" height="30"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    	<!-- space to make the logout button to the right of the webpage -->
    </ul>
    <div class="form-inline my-2 my-lg-0">
     <a href="LOGOUT.php"><button class="btn btn-outline-danger my-2 my-sm-0">Logout</button></a>
    </div>
  </div>
</nav>
<!-- nav bar ends -->

<!-- side bar begins -->
<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:250px">
	<div align="center">
		<span><u>Main </u></span>
	</div>

  <a href="dashboard.php" class="w3-bar-item w3-button"><i class="fa fa-home" style="font-size:25px;"><span> &nbsp;Dashboard</span></i></a> 

  <a href="search_donor.php" class="w3-bar-item w3-button"><i class="fa fa-search" style="font-size:25px;"><span> &nbsp; Search Donor</span></i></a> 

  <a href="add donor.php" class="w3-bar-item w3-button"><i class="fa fa-plus" style="font-size:25px;"><span> &nbsp; Add Donor</span></i></a> 

  <a href="queries.php" class="w3-bar-item w3-button"><i class="fa fa-globe" style="font-size:25px;"><span> &nbsp; Queries</span></i></a>
  
  <a href="password.php" class="w3-bar-item w3-button"><i class="fa fa-wrench" style="font-size:25px;"><span> &nbsp; Change Password</span></i></a> 

</div>

<div style="margin-left:250px">

<div class="w3-container">

</div>
     <h1> Overview  </h1>
     <br>

     <div class="card-deck container">

    <div class="card bg-primary"  data-aos="fade-right" data-aos-duration="1500">
      <div class="card-body text-center">
      	 <br>
         <br>

           <?php

           require('Db_connect.php');

         $query = "SELECT id FROM `donors`  where Status=1";
         $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
         $count = mysqli_num_rows($result);

         ?>

        <p class="card-text" style="font-size: 30px"><?php echo $count?></p>
        <p class="card-text" style="font-size: 20px;color: white">Number Of Donors</p>
         <p class="card-text"></p>
        
         <br>
         <br>
      </div>
    </div>

    <div class="card bg-success" data-aos="zoom-in" data-aos-duration="1500">
      <div class="card-body text-center">
      	<br>
         <br>

         
           <?php
         $query2 = "SELECT * FROM `contactus` where Status=1";
         $result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
         $count2 = mysqli_num_rows($result2);

         ?>
        <p class="card-text" style="font-size: 30px" ><?php echo $count2?></p>
        <p class="card-text" style="font-size: 20px;color: white">No Of Queires</p>
       <br>
         <br>
      </div>
    </div>

    <div class="card bg-warning"  data-aos="fade-left" data-aos-duration="1500">
      <div class="card-body text-center">
      	<br>
         <br>

         <?php
         $query3 = "SELECT DISTINCT Bloodgroup FROM donors  where Status=1";
         $result3 = mysqli_query($connection, $query3) or die(mysqli_error($connection));
         $count3 = mysqli_num_rows($result3);

         ?>
        <p class="card-text" style="font-size: 30px" ><?php echo $count3?></p>
        <p class="card-text" style="font-size: 20px;color: white">Regestered Blood Group</p>
        <br>
         <br>
       
      </div>
    </div>
</div>

<footer style=" position: absolute;
 bottom: 0;width: 80%">

  <div class="container">
    <hr>
    <div align="center">
       <a href="#" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-google"></a>
       <a href="#" class="fa fa-linkedin"></a>
       <a href="#" class="fa fa-instagram"></a>
       <br>
        <h6 align="center" style="padding: 10px;"> Copyright &copy; 2020 Dream Killers </h6>
    </div>
  </div>
</footer>
</div>

<script>
  AOS.init();
</script>


</body>
</html>



