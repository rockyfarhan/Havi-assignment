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

       <!-- Transition from external source -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- transition ends -->


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

<div class="w3-container" data-aos="zoom-in-down" data-aos-duration="1500">
  <br>
  <br>

  <!-- php code to retrive the queries -->
   <?php

    require('Db_connect.php');

    $query = "SELECT * FROM `contactus` WHERE Status=1";

     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));


         if (($result) && $result->num_rows > 0)
           { 
              while($row = $result->fetch_assoc()) 
               { 
                  ?>
                   <br>
                    <div class="row card-deck" align="center">

                  <div class="card  text-white bg-dark col-md-12" data-aos="fade-right" data-aos-duration="1500"> 
                      <div class="card-header"> Name: <?php echo $row["Name"] ?> 
                           <div style="float: right">
                              <form action="Delete_query.php" method="POST">
                                  <button type="submit" class="btn btn-outline-success" >X</button> 
                                  <input type="hidden" name="id" value="<?php echo $row['Slno']; ?>"/>
                              </form>
                           </div>  
                      </div>

                        <div class="card-body">
                          <p> Message: <?php echo $row["Message"] ?>  </p>
                       </div> 

                       <div class="card-footer bg-transparent border-success">
                             Phone number: <?php echo $row["Phonenumber"] ?> <br> 
                            Email: <?php echo $row["Email"] ?> </div>
                      </div>             
                  </div>
              <?php
            }
          }

          else
          {
            ?>
          
          <div align="center" class="container">  
           <div class="card border-success mb-3" style="max-width: 58rem; background-color: black">
              <div class="card-header bg-transparent border-success"></div>
                  <div class="card-body text-success">
                      <h5 class="card-title">No New Queries Found..</h5>
                             
                    </div>
               <div class="card-footer bg-transparent border-success"></div>
           </div>
         </div>
            <?php
          }
          ?>  






</div>
 
</div>


<footer style=" flex-shrink: 0;width: 114%">

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

<script>
  AOS.init();
</script>

</body>
</html>



